@extends('layouts.master')
@section('style')
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
-->
@endsection
@section('content')




    <div class="centered p-3">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" class="background:white;">
            <h1 class="text-center mt-5 mb-5">Leave Edit Form</h1>
            @if($errors->any())
                  <div class="alert alert-warning">
                      
                          @foreach($errors->all() as $value)
                          <span>{{$value}}</span><br>
                          @endforeach
                    

                  </div>
                  @endif
                  
                  <form id="newform" action="{{url("/leaveRecord/edit")}}" method="post">
                   @csrf
                   <input type="hidden" name="oldDate" value="{{$leaveRecord->date}}">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">EmployeeId*</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="employeeId" name="employeeId" value="{{auth()->user()->employeeid}}" readonly>
                      </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Date*</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="date" name="date" value="{{$leaveRecord->date}}">
                        </div>
                      </div>
                      <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Time*</label>
                        <div class="col-sm-10">
                         <select class="form-control" id="time" name="time">
                           <option value="" disabled selected>Choose Time</option>
                                <option value="full" 
                                @if($leaveRecord->time=="full")
                                selected
                                @endif
                                >Full Day</option>
                                <option value="morning"
                                @if($leaveRecord->time=="morning")
                                selected
                                @endif
                                >Morning</option>
                                <option value="evening"
                                @if($leaveRecord->time=="evening")
                                selected
                                @endif
                                >Evening</option>
                         </select>
                        </div>
                      </div>
                    

                      
                      
                     

                      <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Reason*</label>
                        <div class="col-sm-10">
                         <textarea id="reason" cols="30" rows="10" class="form-control" name="reason">{{$leaveRecord->reason}}</textarea>
                        </div>
                      </div>


                      <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-10">
                         <textarea id="comment" cols="30" rows="10" class="form-control" name="comment">{{$leaveRecord->comment}}</textarea>
                         <div class="mt-5">
                            <input type="submit" class="btn btn-success">
                            <button class="btn btn-danger ml-5" id="clear">
                              clear</button>
                        </div>
                        </div>
                      </div>       
                  </form>
                  
               
            </div>
            <div class="col-md-2"></div>
        </div>


      
    </div>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   
  
   
@endsection

@section('script')

@endsection