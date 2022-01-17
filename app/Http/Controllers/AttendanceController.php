<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dailyattendance;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Rule;


class AttendanceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['store','create']);
    }

    public function create(){
        return view('attendance.attendanceForm');
       
    }

    public function store(Request $request){

        $validator=validator(request()->all(),[
           
            'attendanceDate'=>'required',
            'checkIn'=>'required',
            'checkOut'=>'required',
            'lunchTime'=>'required',
    
        ]);
    
        if($validator->fails()) {
            return back()->withErrors($validator);
    
        }
    
        $dailyattendance=new Dailyattendance;
        $dailyattendance->userid=request()->employeeID;
        $dailyattendance->date=request()->attendanceDate;
        $dailyattendance->checkin=request()->checkIn;
        $dailyattendance->checkout=request()->checkOut;
        $dailyattendance->lunchtime=request()->lunchTime;
        $dailyattendance->workinghour=request()->workHour;
        $dailyattendance->halfdayleaf=request()->halfDayLeave;
        $dailyattendance->leaveday=request()->leaveDay;
        $dailyattendance->workfromhome=request()->wfh;
        $dailyattendance->ottime=request()->ottime;
    
       
        $dailyattendance->save();
    
        return redirect('/');
        }
}
