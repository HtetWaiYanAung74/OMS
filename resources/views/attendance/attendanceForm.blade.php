@extends('layouts.master')

@section('content')


<link href="{{ asset('/attendance/attendanceform.css') }}" rel="stylesheet">

<div class="container pt-80 mb-100 text-center ">
    <div class="col-12 pt-4 mb-5">
        <h3 class="sub-title">Employee Attendance Form</h3>
    </div>
    <div class="row">
        
        <div class="col-sm-12">
        @if($errors->any())
            <div class="alert alert-warning">
                <ol>
                    @foreach($errors->all() as $value)
                    <li> {{$value}} </li>
                    @endforeach
                </ol>
            </div>
        @endif
        
        <form method="post" action="" class="container">
            @csrf
            <div class="form-group row">
                <label for="employeeId" class="col-sm-4 col-form-label">Employee ID</label>
                <div class="col-sm-8">
                
                <input type="text" class="form-control" id="employeeID" name="employeeID" value>
                </div>
            </div>

            <div class="form-group row">
                <label for="attendanceDate" class="col-sm-4 col-form-label">Attendance Date</label>
                <div class="col-8">
                <div class="md-form">
                    <input type="date" id="inputMDEx" class="form-control" name="attendanceDate">
 
                </div>
             </div>
            </div>
          

            <div class="form-group row">
                <label for="checkIn" class="col-sm-4 col-form-label" >Check in</label>
                <div class="col-8" id="timepicker1">
                    <input type="time" id="input1" class="form-control" name="checkIn" >
                </div>
            </div>

            <div class="form-group row">
                <label for="checkOut" class="col-sm-4 col-form-label" >Check Out</label>
                <div class="col-8" id="timepicker2">
                    <input type="time" id="input2" class="form-control" name="checkOut" >
                </div>
            </div>

            <div class="form-group row">

                <label for="lunchTime" class="col-sm-4 col-form-label">Lunch Time</label>
                
                <div class="col-8">
                   
                <select class="browser-default custom-select  form-control" name="lunchTime">
                    
                    <option selected>1:00:00</option>
                    <option value="1">00:55:00</option>
                    <option value="2">00:50:00</option>
                    <option value="3">00:45:00</option>
                    <option value="4">00:40:00</option>
                    <option value="5">00:35:00</option>
                    <option value="6">00:30:00</option>
                    <option value="7">00:25:00</option>
                    <option value="8">00:20:00</option>
                    <option value="9">00:15:00</option>
                    <option value="10">00:10:00</option>
                    <option value="11">00:05:00</option>
                </select>
                   

                </div>
                
            </div>

            <div class="form-group row">
                <label for="workingHour" class="col-sm-4 col-form-label" >OT Time</label>
                
                
                    <!-- <input type="time" id="input3" class="form-control" name="checkOut" > -->
                <div class="col-sm-8">
                <input type="text" class="form-control" id="ottime" name="ottime" placeholder="00:00:00">
                </div>
               
                
            </div>

            <div class="form-group row">
                <label for="workingHour" class="col-sm-4 col-form-label" >Working Hour</label>
                
                
                    <!-- <input type="time" id="input3" class="form-control" name="checkOut" > -->
                    <div class="col-sm-8">
                <input type="text" class="form-control" id="workHour" name="workHour" >
                </div>
               
                
            </div>
        

            <div class="form-group row">
                    <label for="radio" class="col-form-label col-sm-4 pt-0">Leave Day</label>
                    <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="leaveDay" id="inlineRadio1" value="Yes" checked/>  
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="leaveDay" id="inlineRadio2" value="No" checked/>
                        <label class="form-check-label" for="inlineRadio1">No</label>
                    </div>  
                    </div> 
            </div>

            

            <div class="form-group row">
                    <label for="radio" class="col-form-label col-sm-4 pt-0">Half Day Leave</label>
                    <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="halfDayLeave" id="inlineRadio1" value="Yes" checked/>  
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="halfDayLeave" id="inlineRadio2" value="No" checked/>
                        <label class="form-check-label" for="inlineRadio1">No</label>
                    </div>  
                    </div> 
            </div>
            <!-- <div class="form-group row">
                    <label for="radio" class="col-form-label col-sm-4 pt-0">OT Time</label>
                    
                    <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ottime" id="inlineRadio1" value="Yes" checked/>  
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ottime" id="inlineRadio2" value="No" checked/>
                        <label class="form-check-label" for="inlineRadio1">No</label>
                    </div>  
                    </div> 
            </div> -->

            <div class="form-group row">
                    <label for="radio" class="col-form-label col-sm-4 pt-0">Work From Home</label>
                    <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="wfh" id="inlineRadio1" value="Yes" checked/>  
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="wfh" id="inlineRadio2" value="No" checked/>
                        <label class="form-check-label" for="inlineRadio1">No</label>
                    </div>   
                    </div>   
            </div>

            

            
            <div class="form-group row">
            <div class="col-sm-4"></div>
                <div class="col-sm-8">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-danger">Cancle</button>
                </div>
            </div>

           
        </form>
</div>
</div>
</div>


@endsection