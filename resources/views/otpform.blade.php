@extends('layouts.loginprocess')
@section('title')
One Time Password Form
@endsection
@section('content')
    <h1 align="center">Office Management System</h1>
    <div class ="container box">
        <h3 align ="center">One Time Password Form</h3></br>

        <!-- @if(isset(Auth::user()->employeeid))
            <script>window.location="/adminlogin/successlogin";</script>
        @endif -->

        <!-- @if($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif


        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
        <form method="post" action="{{ url('/forgotpwd/checkemail')}}">
        @csrf
            <input type="hidden" name="email" value="email">
            <div class="form-group">
                <label>OTP Password</label>
                <input type="password" name="password" class="form-control"/>
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="newPassword" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Comfirm Password</label>
                <input type="password" name="comfirmPassword" class="form-control"/>
            </div>

            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Confirm"/>
                <input type="reset" name="cancel" class="btn btn-danger" value="Cancel"/>
            </div>


            <!-- <div class="form-group">
                <a href ="{{ url('/forgotpwd')}}">Forgot your password?</a>
            </div> -->
        </form>
    </div>
@endsection