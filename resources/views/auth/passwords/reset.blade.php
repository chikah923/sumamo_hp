@extends('layout.authentication')
@section('title', 'Reset Password')
@section('content')


<div class="row">
    <div class="col-lg-4 col-sm-12">
        <form class="card auth_form" method="POST" action="{{ route('password.email') }}">
        @csrf
            <div class="header">
                <img class="logo" src="{{asset('assets/images/logo.svg')}}" alt="">
                <h5>Reset your password</h5>
            </div>

            <div class="body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="E-mail" name="email" id="email" required>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
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

                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">RESET PASSWORD</button>

                <div class="signin_with mt-3">
                    <p class="mb-0">or Login using</p>
                    <span class="btn btn-primary btn-icon btn-icon-mini btn-round facebook"><a class="text-white" href="{{route('social.login', 'facebook')}}"><i class="zmdi zmdi-facebook"></i></a></span>
                    <span class="btn btn-primary btn-icon btn-icon-mini btn-round twitter"><a class="text-white" href="{{route('social.login', 'twitter')}}"><i class="zmdi zmdi-twitter"></i></a></span>
                    <span class="btn btn-primary btn-icon btn-icon-mini btn-round google"><a class="text-white" href="{{route('social.login', 'google')}}"><i class="zmdi zmdi-google-plus"></i></a></span>
                    <span class="btn btn-primary btn-icon btn-icon-mini btn-round linkedin"><a class="text-white" href="{{route('social.login', 'linkedin')}}"><i class="zmdi zmdi-linkedin"></i></a></span>
                </div>
            </div>
        </form>
        <div class="copyright text-center">
            &copy;
            <script>document.write(new Date().getFullYear())</script>,
        </div>
    </div>
    <div class="col-lg-8 col-sm-12">
        <div class="card">
            <img src="{{asset('assets/images/signin.svg')}}" alt="Sign In"/>
        </div>
    </div>
</div>

@stop

@section('contentss')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-sm-12">
            <div class="card">
                <img src="{{asset('assets/images/signin.svg')}}" alt="Sign In"/>
            </div>
        </div>
    </div>
</div>
@endsection
