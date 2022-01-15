<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
       return view('account.accountinfoupdate',compact('user'));;
       
    }
    public function update(Request $request,$id)
    { 
            User::findOrFail($id)->update([
    
                'fname'=>request()->fname,
                'lname'=>request()->lname,
                'username' =>request()->username,
                'email' =>request()->email,
                'password' =>request()->password,
                
            ]);
        
         return back()->with('info',' Update successful.');
         
    }

}
