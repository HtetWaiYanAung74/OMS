<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
//Login
    public function index()
    {
        return view('adminlogin');
       
   }

   function checklogin(Request $request)
   {
       $this->validate($request,[
           'employeeid'=>'required',
           'password'=>'required|alphaNum|min:3'      
       ]);

       $user_data= array(
           'employeeid' => $request->get('employeeid'),
           'password'=> $request->get('password')
       );

       if(Auth::attempt($user_data))
       {
           return redirect('/adminlogin/successlogin');
       }else
       {
            return back()->with('error','Wrong Login');
       }
   }

   function successlogin()
   {
     return view('successlogin');
   }

   function logout()
   {
       Auth::logout();
       return redirect('adminlogin');
   }




//forgotpwd
   public function forgotpwd()
    {
        return view('forgotpwd');
       
   }


   function checkemail(Request $request)
   {
       $this->validate($request,[
           'email'=>'required'  
       ]);

       $user_data= [
           'email' => $request->get('email')
       ];

       if(Auth::attempt($user_data))
       {

        $details = [
            'title'=> 'One Time Password from Office Management System',
            'body'=>'If you forgot your password to login,Please use this OTP,and then set new password.
                    Your One Time Password : 123456'
                ];
    
        Mail::to($user_data) ->send(new ForgotpwdEmail($details));   
        return redirect('forgotpwd/otp');

       }else
       {
            return back()->with('error','Wrong Email');
       }
    }


    function otp()
   {
     return view('otp');
   }


}
