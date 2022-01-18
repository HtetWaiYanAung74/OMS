<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function accountinfo($id)
    {  
        $user = User::find($id);
        return view('account.accountinfo',compact('user'));
    }
    public function edit($id)
    { 
 
        $user = User::find($id);
       return view('account.accountinfoupdate',compact('user'));
       
    }
    public function update(Request $request,$id)
    { 
        $validator=validator(request()->all(),[
            'fname'=>'required',
            'lname'=>'required',
            'username'=>'required',
            'email'=>'required|email|max:255',
             
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
         User::findOrFail($id)->update([
    
                'fname'=>request()->fname,
                'lname'=>request()->lname,
                'username' =>request()->username,
                'email' =>request()->email,
                'password' =>Hash::make(request()->password),
                
            ]);
        
         return back()->with('info',' Update successful.');
         
    }
    public function changepassword($id){

        $user = User::find($id);
        return view('account.changepassword',compact('user'));
    }

}
