<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dailyattendance;

class AttendanceController extends Controller
{
    //

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
        $dailyattendance->userid=request()->employeeId;
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
