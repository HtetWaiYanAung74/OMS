{{-- @extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Start -->
    @auth
    <h1>Success Login</h1>
    @endauth
    @if(isset(Auth::user()->employeeid))
    <div class="alert alert-danger success-block">
        <strong> Welcome {{ Auth::user()->username }} </strong>
        <br>
        <a href="{{ url('/adminlogin/logout') }}">logout</a>
    </div>
    <!-- else
    
        <script>window.location="/adminlogin";</script> -->
      
    @endif
    @endsection

</body>
</html> --}}

@extends('layouts.master')

@section('content')

    <h3 class="mb-3">Latest Announcement</h3>
    @foreach($announcement as $value)
	<div class="card mb-2">
		<div class="card-body">
			<h4 class="card-title">{{$value->title}}</h4>
			<div class="card-subtitle mb-2 text-muted small">
				{{ $value->created_at->diffForHumans() }}
			</div>
			<p class="card-text">{{$value->content}}</p>
			<a class="card-link" href="{{ url("/articles/detail/$value->id")}}">
				View Detail &raquo;
			</a>
		</div>
	</div>
    @endforeach
    <div class="mt-3">
        {{ $announcement->links('pagination::bootstrap-4') }}
    </div>
  
@endsection  
   

