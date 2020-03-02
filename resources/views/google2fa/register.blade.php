@extends('layout.authentication')
@section('title', 'Register')
@section('content')
<div class="row">
    <div class="col-lg-4 col-sm-12">
        <form class="card auth_form" method="POST" action="{{route('register.complete')}}">
        @csrf
            <div class="header">
                <img class="logo" src="{{asset('assets/images/logo.svg')}}" alt="">
                <h5>2FA Authentication Setup</h5>
                <small>Set up your two factor authentication by scanning the barcode below. Alternatively, you can use the code {{ $secret }}</small>

            </div>
            <div class="signin_with">
                <img src="{{ $QR_Image }}">
            </div>
            <div class="signin_with m-2">
                <a href="{{ route('dashboard.profile') }}">Click here to Go Back</a>
            </div>
            @if (!@$reauthenticating) {{-- add this line --}}
            <div class="body">
                <button class="btn btn-primary btn-block waves-effect waves-light">Complete Registeration</button>
            </div>
            @endif

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
