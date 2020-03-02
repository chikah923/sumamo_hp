@extends('layout.authentication')
@section('title', 'Register')
@section('content')
<div class="row">
    <div class="col-lg-4 col-sm-12">
        <form class="card auth_form" method="POST" action="{{ route('register') }}">
        @csrf
            <div class="header">
                <img class="logo" src="{{asset('assets/images/logo.svg')}}" alt="">
                <h5>Sign Up</h5>
            </div>
            <div class="signin_with">
                <a class="link" href="{{route('login')}}">You already have a membership?</a>
            </div>
            <div class="body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                    </div>
                </div>
                @error('name')
                <div class="input-group mb-3">
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                </div>
                @enderror
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                    </div>
                </div>
                @error('email')
                <div class="input-group mb-3">
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                </div>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                    </div>
                </div>
                @error('password')
                <div class="input-group mb-3">
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                </div>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                    </div>
                </div>
                <div class="checkbox">
                    <input id="remember_me" type="checkbox">
                    <label for="remember_me">I read and agree to the <a href="javascript:void(0);">terms of usage</a></label>
                </div>
                <button href="{{route('dashboard.index')}}" class="btn btn-primary btn-block waves-effect waves-light">SIGN UP</button>

                <div class="signin_with mt-3">
                    <p class="mb-0">or Sign Up using</p>
                    <span class="btn btn-primary btn-icon btn-icon-mini btn-round facebook"><a class="text-white" href="{{route('social.login', 'facebook')}}"><i class="zmdi zmdi-facebook"></i></a></span>
                    <span class="btn btn-primary btn-icon btn-icon-mini btn-round twitter"><a class="text-white" href="{{route('social.login', 'twitter')}}"><i class="zmdi zmdi-twitter"></i></a></span>
                    <span class="btn btn-primary btn-icon btn-icon-mini btn-round google"><a class="text-white" href="{{route('social.login', 'google')}}"><i class="zmdi zmdi-google-plus"></i></a></span>
                    <span class="btn btn-primary btn-icon btn-icon-mini btn-round linkedin"><a class="text-white" href="{{route('social.login', 'linkedin')}}"><i class="zmdi zmdi-linkedin"></i></a></span>
                </div>

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
