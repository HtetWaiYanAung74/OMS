<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    public function accountinfo()
    {
        return view('account.accountinfo');
         
    }
    public function edit()
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
       return view('account.accountinfoupdate',compact('user'));
    
    }
    public function update(Request $request)
    {
             $user = Auth::user();
            
            $user->fname = request()->input('fname');
            $user->lname = request()->input('lname');
            $user->username = request()->input('username');
            $user->email =  request()->input('email');
            $user->password = \Hash::make($request->input('password'));
            $user->save();
            
         return redirect('/accountinfo')->with('success','Update Successful.');

         
    }

}
