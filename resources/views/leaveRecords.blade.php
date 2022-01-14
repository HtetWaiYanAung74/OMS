@extends('layouts.master')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<div class="row mb-3">
    <h2 class="text-center">Leave Records</h2>
    @if(session('info'))
    <div class ="alert alert-success">
        {{session('info')}}
    </div>
    @endif
</div>
<div class="row">
    
    <div class="col-md-4">
   
            <form action="{{url("/leaveRecord/searchLeave")}}" class="form-inline" method="post" >
            @csrf
                
                <div class="mr-3">
                <input type="date" name="date" id="date" class="form-control" value="{{$today}}">
                </div>
                <div class="">
                <input type="submit" value="Search" class="btn btn-primary">
                </div>
                
            </form>
    </div>
    <div class="col-md-5"></div>
    <div class="col-md-3">
        @if(count($leaveRecords)!=0)
        <a href="{{url("/leaveRecord/edit/$today")}}" type="button" class="btn btn-primary mr-2">Edit Leave</a>
        <a href="{{url("/leaveRequestForm/newLeave=true/$today")}}" type="button" class="btn btn-primary mr-2">AddNew</a>
        
        @endif
    </div>
</div>
<hr>

<div class="row mt-3">
<table id="leaveRecord" class="table table-striped" style="width:100%">
<thead>
    <tr>
    <th>Id</th>
    <th>Date</th>
    <th>Time</th>
    <th>Reason</th>
    <th>Comment</th>
    <th>Incharge</th>
    <th>Status</th>
    <th>Action</th>
    </tr>
</thead>
<tbody>
    
@foreach($leaveRecords as $leaveRecord)
<tr>
   
    <td>{{auth()->user()->employeeid}}</td>
    <td>{{$leaveRecord->date}}</td>
    <td>{{$leaveRecord->time}}</td>
    <td>{{$leaveRecord->reason}}</td>
    <td>{{$leaveRecord->comment}}</td>
    <td>{{$leaveRecord->user->fname}} {{$leaveRecord->user->lname}} </td>
    
    <td><span @if($leaveRecord->status==="Pending")
       
        style="background-color:yellow;"
        
        @else
        style="background-color:lightgreen;"
        @endif   >{{$leaveRecord->status}}</span> 
     
    </td>
    <td><a href="{{url("/leaveRecord/delete/$leaveRecord->id")}}" type="button" class="btn btn-danger">Delete</a></td>
</tr>
@endforeach
</tbody>
   


</table>
   

</div>
 

@endsection

@section('script')

<script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" crossorigin="anonymous"></script>
<script>
        $(document).ready(function() {
            $('#leaveRecord').DataTable();
        } );
</script>
@endsection