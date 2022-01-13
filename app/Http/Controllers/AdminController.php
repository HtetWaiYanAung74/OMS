<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\Announcement;

class AdminController extends Controller
{

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
        $announcement = Announcement::latest()->paginate(4);
        return view('successlogin',compact('announcement'));
    }

   function logout(){

       Auth::logout();
       return redirect('adminlogin');
   }
}
