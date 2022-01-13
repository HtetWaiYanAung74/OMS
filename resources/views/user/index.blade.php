@extends('layouts.app')

@section('content')
<header class="masthead" style="background-image: url({{url('css/index/img/homepage.jpg')}})">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">Modernize Your Office Today!</span>
                </div>
            </div>
        </div>
    </div>
</header>
 <!-- Main Content-->
 <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            @foreach($announcement as $value)
            <div class="post-preview">
                <a href="">
                    <h3 class="post-title">{{$value->title}}</h3>
                    <h4 class="post-subtitle">{{$value->content}}</h4>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#">Start Bootstrap</a>
                    {{ $value->created_at->diffForHumans() }} 
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            @endforeach
            {{ $announcement->links('pagination::bootstrap-4') }}
            <!-- Pager-->
            {{-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div> --}}
        </div>
    </div>
</div>
@endsection   
   