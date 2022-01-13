<?php

namespace App\Http\Controllers\Leaves;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Leaves;

class LeaveController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function show(){
        $leaders=User::select('*')->where('role','Leader')->get();
        $senseis=User::select('*')->where('role','Sensei')->get();
        $today=date('Y-m-d');
        
        return view('leaveRequestForm',compact([
            'leaders','senseis','today'
        ]));
    }

    public function save(Request $request){
       $validator=validator(request()->all(),[
           'employeeId'=>'required',
        //   'date'=>'required|after:'.date('Y-m-d'),
           'date'=>'required|after:yesterday',
           'time'=>'required',
           'reason'=>'required',
           'comment'=>'required'
       ]);
       if($validator->fails()){
           return back()->withErrors($validator);
       }

        $leaders=request()->leader;
        $senseis=request()->sensei;

        if(count($leaders)>0){

            foreach($leaders as $leader){
                if(!is_null($leader) || $leader!=""){
                    $leave=new Leaves;
                    $leave->employeeId=request()->employeeId;
                    $leave->date=request()->date;
                    $leave->time=request()->time;
                    $leave->reason=request()->reason;
                    $leave->comment=request()->comment;
                    $leave->status="Pending";
                    $leave->leaderid=$leader;
                    $leave->save();
                }
                
            }
        }

        if(count($senseis)>0){
           foreach($senseis as $sensei){
               if(!is_null($sensei) || $sensei!=""){
                $leave=new Leaves;
                $leave->employeeId=request()->employeeId;
                $leave->date=request()->date;
                $leave->time=request()->time;
                $leave->reason=request()->reason;
                $leave->comment=request()->comment;
                $leave->status="Pending";
                   $leave->leaderid=$sensei;
                   $leave->save();
               }
           }
        }

       
        return view('successlogin');
    }

    public function list(){
        $today=date('Y-m-d');
        $leaveRecords=Leaves::where('date',$today)->where([
            ['date',$today],['employeeId',auth()->user()->employeeid]
            ])->get();

        return view('leaveRecords',compact([
            'today','leaveRecords'
        ]));
    }
    public function searchLeave(Request $request){
        $today=request()->date;
        $leaveRecords=Leaves::where('date',$today)->where([
        ['date',$today],['employeeId',auth()->user()->employeeid]
        ])->get();

        return view('leaveRecords',compact([
            'today','leaveRecords'
        ]));
    }

    public function editLeave($date){
        $leaveRecord=Leaves::where([
            ['date',$date],['employeeId',auth()->user()->employeeid]
            ])->first();

            return view('leaveEdit',compact(['leaveRecord']));
    }
    public function editLeavePost(Request $request){

        $validator=validator(request()->all(),[
            'employeeId'=>'required',
         //   'date'=>'required|after:'.date('Y-m-d'),
            'date'=>'required|after:yesterday',
            'time'=>'required',
            'reason'=>'required',
            'comment'=>'required'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $oldLeaveRecords=Leaves::where([
            ['date',request()->get('oldDate')],['employeeId',auth()->user()->employeeid]
            ])->get();
            $today=request()->get('date');
            foreach($oldLeaveRecords as $leaveRecord){
                $leaveRecord->date=request()->get('date');
                $leaveRecord->time=request()->get('time');
                $leaveRecord->reason=request()->get('reason');
                $leaveRecord->comment=request()->get('comment');
                $leaveRecord->save();
            }
            $leaveRecords=Leaves::where([
                ['date',request()->get('date')],['employeeId',auth()->user()->employeeid]
                ])->get();
            return view('leaveRecords',compact([
                'leaveRecords','today'
            ]));
    }

    public function destroy($id){
        $leave= Leaves::find($id);
         $leave->delete();
         return redirect('/leaveRecord')->with('info','Successfully deleted');
     }
}
