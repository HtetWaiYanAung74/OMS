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
            <h1 class="text-center mt-5 mb-5">Leave Request Form</h1>
            @if($errors->any())
                  <div class="alert alert-warning">
                      
                          @foreach($errors->all() as $value)
                          <span>{{$value}}</span><br>
                          @endforeach
                    

                  </div>
                  @endif
                  
                  @if($newLeave)
                  <form id="newform" action="" method="post">
                   @csrf
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
                        <label class="col-sm-2 col-form-label">Incharge</label>
                        <div class="col-sm-10">
                            <label class="mt-2">Leader*</label>
                           
                                <div id="selectinput">
                                      <select class="form-control" id="leader" name="leader[]">
                                      <option value="" disabled selected>Choose Leader</option>
                                        @foreach($leaders as $leader)
                                        <option value="{{$leader->id}}" >{{$leader->fname}} {{$leader->lname}}</option>
                                        @endforeach
                                    </select>                         
                                </div>
                              
                             <button class="btn btn-secondary mt-3 " style="padding:7px;" id="add">+Add</button>
                        
                          
                        </div>
                  
                      </div>
                      <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label" id="sensei"></label>
                        <div class="col-sm-10">
                            <label class="mt-2">Sensei*</label>
                           
                                <div id="selectinput1">
                                    
                                    <select class="form-control" id="sensei" name="sensei[]">
                                    <option value="" disabled selected>Choose Sensei</option>
                                        @foreach($senseis as $sensei)
                                        <option value="{{$sensei->id}}">{{$sensei->fname}} {{$sensei->lname}}</option>
                                        @endforeach
                                    </select>
                                
                                </div>
                              
                             <button class="btn btn-secondary mt-3 "style="padding:7px;" id="add1">+Add</button>
                           
                        
                          
                      
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
                            <input type="submit" class="btn btn-primary">
                            <button class="btn btn-danger ml-5" id="clear">
                              clear</button>
                        </div>
                        </div>
                      </div>       
                  </form>
                  @else
                  <form id="newform" action="" method="post">
                   @csrf
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">EmployeeId*</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="employeeId" name="employeeId" value="{{auth()->user()->employeeid}}" readonly>
                      </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Date*</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="date" name="date" value="{{$today}}">
                        </div>
                      </div>
                      <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Time*</label>
                        <div class="col-sm-10">
                         <select class="form-control" id="time" name="time">
                           <option value="" disabled selected>Choose Time</option>
                                <option value="full">Full Day</option>
                                <option value="morning">Morning</option>
                                <option value="evening">Evening</option>
                         </select>
                        </div>
                      </div>

                      
                      <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Incharge</label>
                        <div class="col-sm-10">
                            <label class="mt-2">Leader*</label>
                           
                                <div id="selectinput">
                                      <select class="form-control" id="leader" name="leader[]">
                                      <option value="" disabled selected>Choose Leader</option>
                                        @foreach($leaders as $leader)
                                        <option value="{{$leader->id}}">{{$leader->fname}} {{$leader->lname}}</option>
                                        @endforeach
                                    </select>                         
                                </div>
                              
                             <button class="btn btn-secondary mt-3 " style="padding:7px;" id="add">+Add</button>
                        
                          
                        </div>
                  
                      </div>
                      <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label" id="sensei"></label>
                        <div class="col-sm-10">
                            <label class="mt-2">Sensei*</label>
                           
                                <div id="selectinput1">
                                    
                                    <select class="form-control" id="sensei" name="sensei[]">
                                    <option value="" disabled selected>Choose Sensei</option>
                                        @foreach($senseis as $sensei)
                                        <option value="{{$sensei->id}}">{{$sensei->fname}} {{$sensei->lname}}</option>
                                        @endforeach
                                    </select>
                                
                                </div>
                              
                             <button class="btn btn-secondary mt-3 "style="padding:7px;" id="add1">+Add</button>
                           
                        
                          
                      
                        </div>

                  
                      </div>

                      <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Reason*</label>
                        <div class="col-sm-10">
                         <textarea id="reason" cols="30" rows="10" class="form-control" name="reason">

                         </textarea>
                        </div>
                      </div>


                      <div class="form-group row mt-3">
                        <label class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-10">
                         <textarea id="comment" cols="30" rows="10" class="form-control" name="comment">

                         </textarea>
                         <div class="mt-5">
                            <input type="submit" class="btn btn-primary">
                            <button class="btn btn-danger ml-5" id="clear">
                              clear</button>
                        </div>
                        </div>
                      </div>       
                  </form>
                  @endif
                  
               
            </div>
            <div class="col-md-2"></div>
        </div>


      
    </div>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   
  
   
@endsection

@section('script')
<script>
  
document.addEventListener("DOMContentLoaded",function(){
let addbutton = document.querySelector("#add");
let result = document.querySelector("#selectinput");
let addbutton1 = document.querySelector("#add1");
let result1 = document.querySelector("#selectinput1");
addbutton.onclick = function(){
let newdiv = document.createElement('div')
newdiv.innerHTML = `
<select  class="form-control mt-2 " name="leader[]">
<option value="" disabled selected>Choose another</option>
@foreach($leaders as $leader)

     <option value="{{$leader->id}}">{{$leader->fname}} {{$leader->lname}}</option>
@endforeach
     </select>
`
result.append(newdiv) 
return false;
}
addbutton1.onclick = function(){
 let newdiv1 = document.createElement('div')
 newdiv1.innerHTML = `
 <select  class="form-control mt-2  " name="sensei[]">
 <option value="" disabled selected>Choose another</option>
 @foreach($senseis as $sensei)
     <option value="{{$sensei->id}}">{{$sensei->fname}} {{$sensei->lname}}</option>
 @endforeach
         </select>
       
          
 `   
 result1.append(newdiv1) 
 return false;
}

let clear = document.querySelector("#clear");
clear.onclick = function(){

document.getElementById('newform').reset();

}

}) 

</script>
@endsection