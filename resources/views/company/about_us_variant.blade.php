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
              <h2><span class="big">About Us</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/company">Company</a></li>
                <li>About Us
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
      <main class="page-content">
        <!-- About Us-->
        <section class="section-98 section-sm-110">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-xs-10 cell-lg-6 cell-lg-push-2"><img class="img-responsive reveal-inline-block offset-top-10" src="{{ asset('/images/pages/careers-01-960x540.jpg') }}" width="960" height="540" alt=""></div>
              <div class="cell-xs-10 cell-lg-6 text-md-left inset-md-right-80 cell-lg-push-1 offset-top-50 offset-lg-top-0">
                <h1>About Us</h1>
                <hr class="divider hr-lg-left-0 bg-mantis">
                <div class="offset-top-30 offset-md-top-50">
                  <p>Intense is an independent web design studio with a rich history. It started as a small family-owned business in Oakville, and has grown enough to successfully occupy two large buildings in two different cities.</p>
                  <p>Today Intense offers a full range of web design, app development and content marketing services, including building full-featured ecommerce websites and web startups with custom functionality.</p>
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
        <!-- Our Team-->
        <section class="section-98 section-sm-110">
          <div class="shell">
            <h1>Our Team</h1>
            <hr class="divider bg-mantis">
            <div class="range range-xs-center text-center text-md-left offset-top-66">
              <div class="cell-sm-5 cell-md-3"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-alex-merphy-270x270.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">Alex Merphy</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:1-800-7650-986">1-800-7650-986</a>
                    </li>
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:alex@demolink.org">alex@demolink.org</a>
                    </li>
                  </ul>
                </address>
              </div>
              <div class="cell-sm-5 cell-md-3 offset-top-50 offset-sm-top-0"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-amanda-smith-270x270.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">Amanda Smith</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:1-800-7650-986">1-800-7650-986</a>
                    </li>
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:amanda@demolink.org">amanda@demolink.org</a>
                    </li>
                  </ul>
                </address>
              </div>
              <div class="cell-sm-5 cell-md-3 offset-top-50 offset-md-top-0"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-bernard-show-270x270.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">Bernard Show</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:1-800-7650-986">1-800-7650-986</a>
                    </li>
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:bernard@demolink.org">bernard@demolink.org</a>
                    </li>
                  </ul>
                </address>
              </div>
              <div class="cell-sm-5 cell-md-3 offset-top-50 offset-md-top-0"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-diana-russo-270x270.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">Diana Russo</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:1-800-7650-986">1-800-7650-986</a>
                    </li>
                    <li><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:diana@demolink.org">diana@demolink.org</a>
                    </li>
                  </ul>
                </address>
              </div>
              <div class="cell-sm-5 cell-md-3 offset-top-50"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-eugene-newman-270x270.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">Eugene Newman</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:1-800-7650-986">1-800-7650-986</a>
                    </li>
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:eugene@demolink.org">eugene@demolink.org</a>
                    </li>
                  </ul>
                </address>
              </div>
              <div class="cell-sm-5 cell-md-3 offset-top-50"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-john-doe-270x270.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">John Doe</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:1-800-7650-986">1-800-7650-986</a>
                    </li>
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:john@demolink.org">john@demolink.org</a>
                    </li>
                  </ul>
                </address>
              </div>
              <div class="cell-sm-5 cell-md-3 offset-top-50"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-sam-cole.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">Sam Cole</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:1-800-7650-986">1-800-7650-986</a>
                    </li>
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:sam@demolink.org">sam@demolink.org</a>
                    </li>
                  </ul>
                </address>
              </div>
              <div class="cell-sm-5 cell-md-3 offset-top-50"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-july-mao-270x270.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">July Mao</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:1-800-7650-986">1-800-7650-986</a>
                    </li>
                    <li><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:july@demolink.org">july@demolink.org</a>
                    </li>
                  </ul>
                </address>
              </div>
            </div>
          </div>
        </section>
        <!-- Your Career Starts Here-->
        <section class="section-66 section-top-50 bg-blue-gray section-triangle section-triangle-bottom context-dark">
          <div class="shell">
            <h2><span class="big"> Your Career Starts Here</span></h2>
            <p>Can't find the job you want? Send your resume to <a href="mailto:#">info@demolink.com</a> , and we'll contact you when a new position opens.</p>
          </div>
          <svg class="svg-triangle-bottom" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
              <lineargradient id="grad3" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:rgb(109,146,204);stop-opacity:1;"></stop>
                <stop offset="100%" style="stop-color:rgb(109,146,204);stop-opacity:1;"></stop>
              </lineargradient>
            </defs>
            <polyline points="0,0 60,0 29,29" fill="url(#grad3)"></polyline>
          </svg>
        </section>
        <section class="section-98 section-md-110">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-6">
                        <!-- Vacation--><a class="post-vacation text-left" href="#">
                          <div>
                            <h3>Senior PHP Developer </h3>
                          </div>
                          <div class="post-meta offset-top-10">
                            <ul class="list-inline list-inline-sm p">
                              <li><span class="text-middle icon-xxs mdi mdi-map-marker text-picton-blue"></span> <span class="text-middle small text-dark">New York</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-clock text-picton-blue"></span> <span class="text-middle small text-dark">Full Time</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-calendar text-picton-blue"></span> 
                                <time class="text-middle small text-dark" datetime="2016-01-01">March 12, 2016</time>
                              </li>
                            </ul>
                          </div></a>
              </div>
              <div class="cell-sm-6 offset-top-30 offset-sm-top-0">
                        <!-- Vacation--><a class="post-vacation text-left" href="#">
                          <div>
                            <h3>Middle JS Developer</h3>
                          </div>
                          <div class="post-meta offset-top-10">
                            <ul class="list-inline list-inline-sm p">
                              <li><span class="text-middle icon-xxs mdi mdi-map-marker text-picton-blue"></span> <span class="text-middle small text-dark">New York</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-clock text-picton-blue"></span> <span class="text-middle small text-dark">Full Time</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-calendar text-picton-blue"></span> 
                                <time class="text-middle small text-dark" datetime="2016-01-01">March 10, 2016</time>
                              </li>
                            </ul>
                          </div></a>
              </div>
              <div class="cell-sm-6 offset-top-30">
                        <!-- Vacation--><a class="post-vacation text-left" href="#">
                          <div>
                            <h3>Middle Wordpress CMS Developer</h3>
                          </div>
                          <div class="post-meta offset-top-10">
                            <ul class="list-inline list-inline-sm p">
                              <li><span class="text-middle icon-xxs mdi mdi-map-marker text-picton-blue"></span> <span class="text-middle small text-dark">New York</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-clock text-picton-blue"></span> <span class="text-middle small text-dark">Full Time</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-calendar text-picton-blue"></span> 
                                <time class="text-middle small text-dark" datetime="2016-01-01">March 12, 2016</time>
                              </li>
                            </ul>
                          </div></a>
              </div>
              <div class="cell-sm-6 offset-top-30">
                        <!-- Vacation--><a class="post-vacation text-left" href="#">
                          <div>
                            <h3>Junior HTML Coder</h3>
                          </div>
                          <div class="post-meta offset-top-10">
                            <ul class="list-inline list-inline-sm p">
                              <li><span class="text-middle icon-xxs mdi mdi-map-marker text-picton-blue"></span> <span class="text-middle small text-dark">New York</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-clock text-picton-blue"></span> <span class="text-middle small text-dark">Full Time</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-calendar text-picton-blue"></span> 
                                <time class="text-middle small text-dark" datetime="2016-01-01">March 17, 2016</time>
                              </li>
                            </ul>
                          </div></a>
              </div>
              <div class="cell-sm-6 offset-top-30">
                        <!-- Vacation--><a class="post-vacation text-left" href="#">
                          <div>
                            <h3>Senior Ruby on Rails Developer</h3>
                          </div>
                          <div class="post-meta offset-top-10">
                            <ul class="list-inline list-inline-sm p">
                              <li><span class="text-middle icon-xxs mdi mdi-map-marker text-picton-blue"></span> <span class="text-middle small text-dark">New York</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-clock text-picton-blue"></span> <span class="text-middle small text-dark">Full Time</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-calendar text-picton-blue"></span> 
                                <time class="text-middle small text-dark" datetime="2016-01-01">March 15, 2016</time>
                              </li>
                            </ul>
                          </div></a>
              </div>
              <div class="cell-sm-6 offset-top-30">
                        <!-- Vacation--><a class="post-vacation text-left" href="#">
                          <div>
                            <h3>Middle Magento CMS Developer</h3>
                          </div>
                          <div class="post-meta offset-top-10">
                            <ul class="list-inline list-inline-sm p">
                              <li><span class="text-middle icon-xxs mdi mdi-map-marker text-picton-blue"></span> <span class="text-middle small text-dark">New York</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-clock text-picton-blue"></span> <span class="text-middle small text-dark">Full Time</span>
                              </li>
                              <li><span class="text-middle icon-xxs mdi mdi-calendar text-picton-blue"></span> 
                                <time class="text-middle small text-dark" datetime="2016-01-01">March 21, 2016</time>
                              </li>
                            </ul>
                          </div></a>
              </div>
            </div>
          </div>
        </section>
        <!-- Join Our Team-->
        <section class="context-dark"> 
                  <div class="parallax-container" data-parallax-img="{{ asset('/images/backgrounds/background-04-1920x657.jpg') }}">
                    <div class="parallax-content">
                      <div class="bg-overlay-gray-darkest">
                        <div class="shell section-66 context-dark">
                          <h1>Join Our Team</h1>
                          <hr class="divider bg-white">
                          <div class="range range-xs-center">
                            <div class="cell-xs-10 cell-xs-8">
                              <div>
                                <p>Take a job opportunity of a lifetime – join the team of Intense. We cherish active tech savvies willing to work on projects of any type and complexity. If you are enthusiastic about tech innovations and ready to make impactful decisions, feel free to send us your CV. We are interested in hiring professionals for a long term and also provide an opportunity of remote work.</p>
                              </div>
                              <div class="offset-top-30"><a class="btn btn-icon btn-icon-left btn-default" href="/contact_us"><span class="icon mdi-email-outline mdi"></span><span>Send us a letter</span></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </section>
        <!-- RD Google Map-->
        <!-- RD Google Map-->
        <div class="rd-google-map">
          <div class="rd-google-map__model" id="rd-google-map" data-zoom="14" data-x="-73.9874068" data-y="40.643180" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]"></div>
          <ul class="rd-google-map__locations">
            <li data-x="-73.9874068" data-y="40.643180">
              <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45</p>
            </li>
          </ul>
        </div>
      </main>
@endsection      
@include('layout.footer')