@extends('layout.common')

@include('layout.head')

@section('body_till_navbar')
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
@endsection
@include('layout.navbar_light')        

@section('main')
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-map-marker-circle icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Contact Us</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/company">Company</a></li>
                <li>Contact Us
                </li>
              </ul>
            </div>
          </div>
        </div>
        <svg class="svg-triangle-bottom" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
            <lineargradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:rgb(110,192,161);stop-opacity:1;"></stop>
              <stop offset="100%" style="stop-color:rgb(111,193,156);stop-opacity:1;"></stop>
            </lineargradient>
          </defs>
          <polyline points="0,0 60,0 29,29" fill="url(#grad1)"></polyline>
        </svg>
      </section>
      <!-- Page Content-->
      <main class="page-content section-top-98 section-sm-top-110">
        <!-- Get In Touch-->
        <section>
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-9 cell-md-8 cell-lg-12">
                <div class="range">
                  <div class="cell-lg-8">
                    <h1 class="text-between">Contact Us</h1>
                    <hr class="divider bg-mantis">
                    <div class="text-center offset-top-30">
                      <p>ありがとうございます。お問い合わせを受け付けました。</p>
                    </div>
                  </div>
                  <div class="cell-lg-4 text-left offset-top-66 offset-lg-top-0">
                    <div>
                      <p class="text-darker text-uppercase text-bold">follow us</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <ul class="list-inline list-inline-sm list-inline-white offset-top-30 text-darker">
                      <li class="h6 offset-top-0"><span class="big"><a class="text-dark fa fa-facebook" href="#"></a></span></li>
                      <li class="h6 offset-top-0"><span class="big"><a class="text-dark fa fa-twitter" href="#"></a></span></li>
                      <li class="h6 offset-top-0"><span class="big"><a class="text-dark fa fa-google-plus" href="#"></a></span></li>
                      <li class="h6 offset-top-0"><span class="big"><a class="text-dark fa fa-pinterest" href="#"></a></span></li>
                      <li class="h6 offset-top-0"><span class="big"><a class="text-dark fa fa-vimeo" href="#"></a></span></li>
                      <li class="h6 offset-top-0"><span class="big"><a class="text-dark fa fa-youtube" href="#"></a></span></li>
                      <li class="h6 offset-top-0"><span class="big"><a class="text-dark fa fa-linkedin" href="#"></a></span></li>
                    </ul>
                    <div class="offset-top-41">
                      <p class="text-darker text-uppercase text-bold">Phone</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div>
                      <p class="offset-top-20"><a href="callto:#">1-800-1324-567</a></p>
                    </div>
                    <div>
                      <p><a href="callto:#">1-800-9875-321</a></p>
                    </div>
                    <div class="offset-top-50">
                      <p class="text-darker text-uppercase text-bold">e-mail</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div class="offset-top-20">
                      <p><a class="text-primary" href="mailto:#">info@demolink.org</a></p>
                    </div>
                    <div class="offset-top-50">
                      <p class="text-darker text-uppercase text-bold">shop address</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div class="offset-top-20">
                      <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45.</p>
                    </div>
                    <div class="offset-top-50">
                      <p class="text-darker text-uppercase text-bold">Open hours</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div class="offset-top-20">
                      <p>9:00–19:00 Mon–Sat</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="offset-top-124">
            <!-- RD Google Map-->
            <div class="rd-google-map">
              <div class="rd-google-map__model" id="rd-google-map" data-zoom="14" data-x="-73.9874068" data-y="40.643180" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]"></div>
              <ul class="rd-google-map__locations">
                <li data-x="-73.9874068" data-y="40.643180">
                  <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45</p>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')