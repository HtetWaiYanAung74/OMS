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
         //     return view('successlogin');
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


}
