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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="icon-lg mdi mdi-account-multiple icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Company</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/company">Company</a></li>
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
      <main class="page-content">
        <!-- Who we are?-->
        <section class="section-98 section-sm-124">
          <div class="shell">
            <div class="range">
              <div class="cell-lg-5 text-lg-left">
                <h1>Who we are?</h1>
                <hr class="divider bg-mantis hr-lg-left-0">
              </div>
            </div>
            <div class="range range-xs-center range-sm-middle offset-top-10 text-md-left">
              <div class="cell-sm-10 cell-lg-7 cell-lg-push-6">
                        <!-- Linear progress bar-->
                        <div class="progress-linear" data-to="70">
                          <div class="progress-header clearfix"><span class="small text-ubold pull-left">HTML/CSS</span><span class="small text-ubold pull-right progress-value">70</span></div>
                          <div class="progress-bar-linear-wrap">
                            <div class="progress-bar-linear bg-success"></div>
                          </div>
                        </div>
                <div class="offset-top-50">
                          <!-- Linear progress bar-->
                          <div class="progress-linear" data-to="54">
                            <div class="progress-header clearfix"><span class="small text-ubold pull-left">Java Script</span><span class="small text-ubold pull-right progress-value">54</span></div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear bg-info"></div>
                            </div>
                          </div>
                </div>
                <div class="offset-top-50">
                          <!-- Linear progress bar-->
                          <div class="progress-linear" data-to="87">
                            <div class="progress-header clearfix"><span class="small text-ubold pull-left">PHP</span><span class="small text-ubold pull-right progress-value">87</span></div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear bg-warning"></div>
                            </div>
                          </div>
                </div>
                <div class="offset-top-50">
                          <!-- Linear progress bar-->
                          <div class="progress-linear" data-to="65">
                            <div class="progress-header clearfix"><span class="small text-ubold pull-left">UI/UX Design</span><span class="small text-ubold pull-right progress-value">65</span></div>
                            <div class="progress-bar-linear-wrap">
                              <div class="progress-bar-linear bg-danger"></div>
                            </div>
                          </div>
                </div>
              </div>
              <div class="cell-sm-10 cell-lg-5 cell-lg-pull-6 offset-top-50 offset-lg-top-0">
                <p>Intense is an independent web design studio with a rich history. It started as a small family-owned business in Oakville, and has grown enough to successfully occupy two large buildings in two different cities.</p>
                <p>Today Intense offers a full range of web design, app development and content marketing services, including building full-featured ecommerce websites and web startups with custom functionality.</p>
              </div>
            </div>
            <div class="range range-xs-center offset-sm-top-66">
              <div class="cell-sm-10 cell-lg-12">
                <div class="range">
                  <div class="cell-sm-6 cell-lg-3 offset-top-66 offset-xs-top-0">
                            <!-- Box Member-->
                            <div class="box-member"><img class="img-responsive" src="{{ asset('/images/users/user-john-doe-270x270.jpg') }}" alt="">
                              <h5 class="text-bold offset-top-20"><a>John Doe</a> <small class="team-member.html">Founder</small>
                              </h5>
                              <div class="box-member-wrap">
                                <div class="box-member-caption">
                                  <div class="box-member-caption-inner">
                                            <ul class="list-inline list-inline-xs">
                                              <li><a class="icon fa fa-facebook icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                              <li><a class="icon fa fa-twitter icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                              <li><a class="icon fa fa-google-plus icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                            </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                  </div>
                  <div class="cell-sm-6 cell-lg-3 offset-top-66 offset-sm-top-0 offset-lg-top-0">
                            <!-- Box Member-->
                            <div class="box-member"><img class="img-responsive" src="{{ asset('/images/users/user-july-mao-270x270.jpg') }}" alt="">
                              <h5 class="text-bold offset-top-20"><a>July Mao</a> <small class="team-member.html">Web Designer</small>
                              </h5>
                              <div class="box-member-wrap">
                                <div class="box-member-caption">
                                  <div class="box-member-caption-inner">
                                            <ul class="list-inline list-inline-xs">
                                              <li><a class="icon fa fa-facebook icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                              <li><a class="icon fa fa-twitter icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                              <li><a class="icon fa fa-google-plus icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                            </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                  </div>
                  <div class="cell-sm-6 cell-lg-3 offset-top-66 offset-sm-top-30 offset-lg-top-0">
                            <!-- Box Member-->
                            <div class="box-member"><img class="img-responsive" src="images/users/user-bernard-show-270x270.jpg') }}" alt="">
                              <h5 class="text-bold offset-top-20"><a>Bernard Show</a> <small class="team-member.html">Co-Founder</small>
                              </h5>
                              <div class="box-member-wrap">
                                <div class="box-member-caption">
                                  <div class="box-member-caption-inner">
                                            <ul class="list-inline list-inline-xs">
                                              <li><a class="icon fa fa-facebook icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                              <li><a class="icon fa fa-twitter icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                              <li><a class="icon fa fa-google-plus icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                            </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                  </div>
                  <div class="cell-sm-6 cell-lg-3 offset-top-66 offset-sm-top-30 offset-lg-top-0">
                            <!-- Box Member-->
                            <div class="box-member"><img class="img-responsive" src="{{ asset('/images/users/user-ronald-oswald-270x270.jpg') }}" alt="">
                              <h5 class="text-bold offset-top-20"><a>Ronald Oswald</a> <small class="team-member.html">Developer</small>
                              </h5>
                              <div class="box-member-wrap">
                                <div class="box-member-caption">
                                  <div class="box-member-caption-inner">
                                            <ul class="list-inline list-inline-xs">
                                              <li><a class="icon fa fa-facebook icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                              <li><a class="icon fa fa-twitter icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                              <li><a class="icon fa fa-google-plus icon-xs icon-circle icon-darker-filled" href="#"></a></li>
                                            </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Who we are?-->
        <section class="section-98 section-sm-110 bg-gray-darkest context-dark">
          <div class="shell-fluid">
            <div class="range range-sm-center">
              <div class="cell-sm-8 cell-md-12">
                <div class="range">
                  <div class="cell-md-3 cell-sm-6">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon mdi mdi-vector-arrange-below text-mantis"></span>
                              <div class="offset-top-10">
                                <div class="h1 text-bold counter" data-speed="3000" data-from="0" data-to="58249"></div>
                              </div>
                              <div></div>
                            </div>
                  </div>
                  <div class="cell-md-3 cell-sm-6 offset-top-66 offset-sm-top-0">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon mdi mdi-account-multiple-outline text-malibu"></span>
                              <div class="offset-top-10"><span class="h1 text-bold counter" data-speed="2500" data-from="0" data-to="246"></span><span class="h1 text-bold">K</span></div>
                              <div></div>
                            </div>
                  </div>
                  <div class="cell-md-3 cell-sm-6 offset-top-66 offset-md-top-0">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon mdi mdi-clock text-neon-carrot"></span>
                              <div class="offset-top-10">
                                <div class="h1 text-bold counter" data-speed="1500" data-from="0" data-to="1200"></div>
                              </div>
                              <div></div>
                            </div>
                  </div>
                  <div class="cell-md-3 cell-sm-6 offset-top-66 offset-md-top-0">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon mdi mdi-code-brackets text-ku-crimson"></span>
                              <div class="offset-top-10"><span class="h1 text-bold counter" data-speed="1300" data-from="0" data-to="834"></span><span class="h1 text-bold">K</span></div>
                              <div></div>
                            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Why Choose Us-->
        <section class="section-top-98 section-sm-top-110 section-sm-bottom-110 section-lg-top-66 section-bottom-98 section-lg-bottom-0 bg-lightest">
          <div class="shell">
            <div class="range range-sm-center range-md-middle">
              <div class="cell-lg-5 veil reveal-lg-inline-block"><img class="img-responsive center-block" width="470" height="770" src="{{ asset('/images/pages/about-us-01-470x770.png') }}" alt=""></div>
              <div class="cell-sm-10 cell-lg-5 section-lg-bottom-50">
                <h1 class="offset-none">Why Choose Us</h1>
                <hr class="divider bg-mantis">
                <div class="offset-top-66 offset-lg-top-50">
                          <!-- Icon Box Type 2-->
                          <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                            <div class="unit-left"><span class="icon text-gray mdi mdi-monitor"></span></div>
                            <div class="unit-body">
                              <h4 class="text-bold text-malibu offset-sm-top-14">We use cutting-edge technologies</h4>
                              <p>Our team of professional analysts is constantly roaming the web in search of promising techniques, which will make your business better.</p>
                            </div>
                          </div>
                  <div class="offset-top-66 offset-lg-top-34">
                            <!-- Icon Box Type 2-->
                            <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                              <div class="unit-left"><span class="icon text-gray mdi mdi-newspaper"></span></div>
                              <div class="unit-body">
                                <h4 class="text-bold text-malibu offset-sm-top-14">We value your time</h4>
                                <p>We know how important it is for you to maintain your schedule, that’s why we do everything to fit it. Our team works on your project in multiple threads.</p>
                              </div>
                            </div>
                  </div>
                  <div class="offset-top-66 offset-lg-top-34">
                            <!-- Icon Box Type 2-->
                            <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                              <div class="unit-left"><span class="icon text-gray mdi mdi-headset"></span></div>
                              <div class="unit-body">
                                <h4 class="text-bold text-malibu offset-sm-top-14">We provide qualified support</h4>
                                <p>Our support team is online 24/7, and is ready to help you with any design - related issue.</p>
                              </div>
                            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- What clients Say?-->
        <section class="section-98 section-sm-110">
          <div class="shell">
            <h1>What clients Say?</h1>
            <hr class="divider divider-md bg-mantis">
            <div class="range range-xs-center offset-top-66">
              <div class="cell-sm-8 cell-lg-4">
                        <!-- Boxed Testimonials-->
                        <blockquote class="quote quote-classic quote-classic-boxed">
                          <div class="quote-body">
                            <p>
                              <q>Great service and reasonable prices. The one thing I am sure about right now is that my next web startup will be developed by Intense.</q>
                            </p>
                            <div class="quote-meta"><img class="img-circle quote-img" width="80" height="80" src="{{ asset('/images/users/user-alex-merphy-80x80.jpg') }}" alt=""></div>
                          </div>
                          <h6 class="quote-author text-uppercase">
                            <cite class="text-normal">Alex Merphy</cite>
                          </h6>
                          <p class="quote-desc">FREELANCE DEVELOPER</p>
                        </blockquote>
              </div>
              <div class="offset-top-41 cell-sm-8 cell-lg-4 offset-lg-top-0">
                        <!-- Boxed Testimonials-->
                        <blockquote class="quote quote-classic quote-classic-boxed">
                          <div class="quote-body">
                            <p>
                              <q>They’ve developed a large multipage website with lots of additional functions in just two weeks.</q>
                            </p>
                            <div class="quote-meta"><img class="img-circle quote-img" width="80" height="80" src="{{ asset('/images/users/user-amanda-smith-80x80.jpg') }}" alt=""></div>
                          </div>
                          <h6 class="quote-author text-uppercase">
                            <cite class="text-normal">Amanda Smith</cite>
                          </h6>
                          <p class="quote-desc">SALES, AT THEMES.COM</p>
                        </blockquote>
              </div>
              <div class="offset-top-41 cell-sm-8 cell-lg-4 offset-lg-top-0">
                        <!-- Boxed Testimonials-->
                        <blockquote class="quote quote-classic quote-classic-boxed">
                          <div class="quote-body">
                            <p>
                              <q>I’m extremely satisfied with their work. My new website looks great and runs smoothly. The support is excellent too.</q>
                            </p>
                            <div class="quote-meta"><img class="img-circle quote-img" width="80" height="80" src="{{ asset('/images/users/user-sam-cole-80x80.jpg') }}" alt="alisa milano"></div>
                          </div>
                          <h6 class="quote-author text-uppercase">
                            <cite class="text-normal">Sam Cole</cite>
                          </h6>
                          <p class="quote-desc">FOUNDER, AT YOURTAX.COM</p>
                        </blockquote>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection

@include('layout.footer')