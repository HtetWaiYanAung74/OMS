@extends('layouts.master')

@section('content')

    <h3 class="mb-3">Latest Announcement</h3>
    @foreach($announcement as $value)
	<div class="card mb-2">
		<div class="card-body">
			<h4 class="card-title" style="font-size: 16px;">{{$value->title}}</h4>
            <h6>{{$value->created_at}}</h6>
			<div class="card-subtitle mb-2 text-muted">
				{{ $value->created_at->diffForHumans() }}
			</div>
			<p class="card-text" style="font-size: 15spx;">{{$value->content}}</p>
			<a class="card-link" href="{{ url("/announcement/detail/$value->id")}}">
				View Detail &raquo;
			</a>
		</div>
	</div>
    @endforeach
    <div class="mt-3">
        {{ $announcement->links('pagination::bootstrap-4') }}
    </div>
  
@endsection  
   

