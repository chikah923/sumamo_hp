<!DOCTYPE html>
<html class="wide wow-animation scrollTo smoothscroll" lang="en">
  <head>
  @yield('head')
  </head>
  <body>
    <!-- bodyタグの始まりからnavbarまで-->
    @yield('body_till_navbar')
      @yield('navbar_light')
      <!-- navbarの終わりからmainタグの前まで-->
      @yield('top')
      </header>
      <!-- Page Contents headerタグの終わりからmainタグの終わりまで-->
      @yield('main')
      <!-- Home Intro footer-->
      @yield('footer')
    <!-- JavaScript-->
    <script src="{{ asset('/website/js/core.min.js') }}"></script>
    <!-- <script src="{{ asset('/website/js/easyResponsiveTabs.js') }}"></script> -->
    <script src="{{ asset('/website/js/script.js') }}"></script>
  </body>
</html>
