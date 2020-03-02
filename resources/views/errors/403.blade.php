@extends('layout.authentication')
@section('title', '404')
@section('content')
<div class="row">
    <div class="col-lg-4 col-sm-12">
        <form class="card auth_form">
            <div class="header">
                <img class="logo" src="{{asset('assets/images/logo.svg')}}" alt="">
                <h5>Not Authorized</h5>
                <span>Access Forbidden</span>
            </div>
            <div class="body">

                <a href="{{route('dashboard.index')}}" class="btn btn-primary btn-block waves-effect waves-light">GO BACK !</a>
                <div class="signin_with mt-3">
                    <a href="javascript:void(0);" class="link">Need Help?</a>
                </div>
            </div>
        </form>
        <div class="copyright text-center">
            &copy;
            <script>document.write(new Date().getFullYear())</script>,
            <span>Designed by <a href="https://thememakker.com/" target="_blank">ThemeMakker</a></span>
        </div>
    </div>
    <div class="col-lg-8 col-sm-12">
        <div class="card">
            <img src="{{asset('assets/images/403.svg')}}" alt="403" />
        </div>
    </div>
</div>
@stop
