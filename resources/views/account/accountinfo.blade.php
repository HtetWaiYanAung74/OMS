@extends('layouts.master')

@section("content")

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header justify-content-center" style="font-size:20px;">{{ __('Account Information') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="row mb-3">
                            <label for="employeeId" class="col-md-4 col-4 col-form-label text-md-end " style="font-weight:bold;">{{ __('Employee ID :') }}</label>
                            <label class="col-md-6 col-6 col-form-label">{{ Auth::user()->employeeid}}</label>
                            
                        </div>
							
                        <div class="row mb-3 ">
						 <label for="firstname" class="col-md-4 col-4 col-form-label text-md-end" style="font-weight:bold;">{{ __('FirstName :') }}</label>

                            <label class="col-md-6 col-6 col-form-label ">
                            {{ Auth::user()->fname}}
                            </label>
                        </div>


                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-4 col-form-label text-md-end" style="font-weight:bold;">{{ __('LastName :') }}</label>

                            <label class="col-md-6 col-6 col-form-label">
                            {{ Auth::user()->lname }}
                            </label>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-4 col-form-label text-md-end" style="font-weight:bold;">{{ __('Username :') }}</label>

                            <label class="col-md-6 col-6 col-form-label">
                            {{ Auth::user()->username }}
                            </label>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-4 col-form-label text-md-end" style="font-weight:bold;">{{ __('E-Mail :') }}</label>

                            <label class="col-md-6 col-6 col-form-label ">
                            {{ Auth::user()->email}}
                            </label>
                        </div>

                       

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-4 col-form-label text-md-end" style="font-weight:bold;">{{ __('Password :') }}</label>

                            <label class="col-md-6 col-6 col-form-label">
                            {{ Auth::user()->password}}
                            </label>
                        </div>

                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-4 col-form-label text-md-end" style="font-weight:bold;">{{ __('Role :') }}</label>

                            <label class="col-md-6 col-6 col-form-label">
                            {{ Auth::user()->role}}
                            </label>
                        </div>

                   		 <hr>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 justify-content-center">
                                
                                <a class="btn btn-primary" href="{{url("/accountinfo/update")}}">{{ __('Edit') }}</a>
				 				&nbsp;&nbsp;
					            <a class="btn btn-danger" href="{{url("/adminlogin/successlogin")}}"> {{ __('Cancel') }}</a>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  

@endsection