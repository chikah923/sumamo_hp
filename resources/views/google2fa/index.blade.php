@extends('layout.authentication')
@section('title', 'OTP Verification')
@section('content')
<div class="row">
    <div class="col-lg-4 col-sm-12">
    <form class="card auth_form" method="POST" action="{{ route('2fa') }}">
        @csrf
            <div class="header">
                <img class="logo" src="{{asset('assets/images/logo.svg')}}" alt="">
                <h5>Enter OTP</h5>
            </div>
            <div class="body">
                <div class="input-group mb-3">
                    <input id="one_time_password" type="number" class="form-control" name="one_time_password" placeholder="OTP.." required autofocus>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                    </div>
                </div>

                <button class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</button>
            </div>
        </form>
        <div class="copyright text-center">
            &copy;
            <script>document.write(new Date().getFullYear())</script>
        </div>
    </div>
    <div class="col-lg-8 col-sm-12">
        <div class="card">
            <img src="{{asset('assets/images/signup.svg')}}" alt="Sign Up" />
        </div>
    </div>
</div>
@stop
