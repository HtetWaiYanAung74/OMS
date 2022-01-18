@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card mb-5">
            <div class="card-body">
                <h4 class="card-title mt-3" style="font-size: 17px;">{{$detail->title}}</h4>
                <h6>{{$detail->created_at}}</h6>
                <div class="card-subtitle mb-2 text-muted">
                    by <b>{{Auth::user()->username}}</b><br>
                   <p> {{ $detail->created_at->diffForHumans() }}</p>
                </div>
                <p class="card-text mt-3" style="font-size: 16px;">{{$detail->content}}</p>
                <a class="btn btn-primary mt-3" href="{{ url("/articles/update/$detail->id")}}">
                    Update</a>&nbsp;
                <a class="btn btn-warning mt-3" href="{{ url("/articles/delete/$detail->id")}}" onclick="click();">
                    Delete</a>
                
            </div>
        </div>
    </div>
@endsection