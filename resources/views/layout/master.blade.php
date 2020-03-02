<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"> <!-- Favicon-->
        <title>{{ config('app.name') }} - @yield('title')</title>
        <meta name="description" content="@yield('meta_description', config('app.name'))">
        <meta name="author" content="@yield('meta_author', config('app.name'))">
        @yield('meta')
        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
        <link href="{{ asset('assets/plugins/toastr/css/toastr.min.css') }}" rel="stylesheet">
        @if (trim($__env->yieldContent('page-style')))
            @yield('page-style')
        @endif
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
        @stack('after-styles')
    </head>
    <?php
        $setting = !empty($_GET['theme']) ? $_GET['theme'] : '';
        $theme = "theme-blush";
        $menu = "";
        if ($setting == 'p') {
            $theme = "theme-purple";
        } else if ($setting == 'b') {
            $theme = "theme-blue";
        } else if ($setting == 'g') {
            $theme = "theme-green";
        } else if ($setting == 'o') {
            $theme = "theme-orange";
        } else if ($setting == 'bl') {
            $theme = "theme-cyan";
        } else {
            $theme = "theme-blush";
        }

        if (Request::segment(2) === 'rtl' ){
            $theme .= " rtl";
        }
    ?>
    <body class="<?= $theme ?>">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets/images/logo.svg') }}" width="48" height="48" alt="Aero"></div>
                <p>Loading, Please wait...</p>
            </div>
        </div>
        <!-- Overlay For Sidebars -->
        <section id="app">
            <div class="overlay"></div>
            @include('layout.navbarright')
            @include('layout.sidebar')
            @include('layout.rightsidebar')
            <section class="content">
                <messagebus></messagebus>
                @auth
                    @foreach ($errors->all() as $error)
                        <firenotification type="error" message="{{ $error }}"></firenotification>
                    @endforeach

                    @if(session()->has('success'))
                        <firenotification type="success" message="{{ session()->get('success') }}"></firenotification>
                    @endif

                    @if(session()->has('error'))
                        <firenotification type="error" message="{{ session()->get('error') }}"></firenotification>
                    @endif

                    @if(session()->has('info'))
                    <firenotification type="info" message="{{ session()->get('info') }}"></firenotification>
                    @endif

                    @if(session()->has('swal'))
                        <firenotification type="swal" message="{{ session()->get('swal') }}"></firenotification>
                    @endif
                @endauth

                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <h2>@yield('title')</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}"><i class="zmdi zmdi-home"></i> A-Dash</a></li>
                                @if (trim($__env->yieldContent('parentPageTitle')))
                                    <li class="breadcrumb-item">@yield('parentPageTitle')</li>
                                @endif
                                @if (trim($__env->yieldContent('title')))
                                    <li class="breadcrumb-item active">@yield('title')</li>
                                @endif
                            </ul>
                            <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </section>
            @yield('modal')

            <script src="{{ asset('js/app.js') }}"></script>

            <!-- <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> -->
            @stack('before-scripts')




            <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
            <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>


            @stack('after-scripts')
            @if (trim($__env->yieldContent('page-script')))
                @yield('page-script')
            @endif

    </body>
</html>
