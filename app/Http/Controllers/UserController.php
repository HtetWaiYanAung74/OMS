<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Datatables;

class UserController extends Controller
{

    function show()
    {
        $data = User::all();
        return view('users.usertable',['users'=>$data]);
       
    }

    public function update($id)
    {
        $edit=User::find($id);
        
        return view('users.updateuser',compact('edit'));
    }

    public function edit(Request $request, $id){
    	User::findOrFail($id)->update([
    	'fname'=>request()->fname,
    	'lname'=>request()->lname,
        'email'=>request()->email,
        'password'=>request()->password,
        'employee_id'=>request()->employee_id,
        'role'=>request()->role,
        ]);
    	return redirect('users/usertable')->with('success','User has beend successfully updated');
    }

    public function destroy($id)
    {
        $delete=User::find($id);
        $delete->delete();

        return back();
    }

}
