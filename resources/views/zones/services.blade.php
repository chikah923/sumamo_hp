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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-folder-outline icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Services</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/zones">Zones</a></li>
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
        <!-- What we do-->
        <section class="section-98 section-sm-110">
          <div class="shell">
            <h1>What we do</h1>
            <hr class="divider bg-mantis">
            <p class="inset-left-11p inset-right-11p">We will take care of your web design project regardless of its level of complexity. We are not afraid of difficult tasks – hundreds of our satisfied clients can prove that.</p>
            <div class="range offset-top-66">
              <div class="cell-sm-8 cell-sm-preffix-2 cell-md-4 cell-md-preffix-0">
                        <!-- Icon Box Type 4--><span class="icon icon-circle icon-bordered icon-lg icon-default icon-filled mdi mdi-cellphone-link"></span>
                        <div>
                          <h4 class="text-bold offset-top-20">Residential</h4>
                          <p>
                            Intense looks perfect on any modern device, be it a laptop, a smartphone, or a tablet.<a href="/zones/residential">>>もっと読む</a>
                            
                          </p>
                        </div>
              </div>
              <div class="cell-sm-8 cell-sm-preffix-2 cell-md-4 cell-md-preffix-0 offset-top-66 offset-md-top-0">
                        <!-- Icon Box Type 4--><span class="icon icon-circle icon-bordered icon-lg icon-default icon-filled mdi mdi-chart-line"></span>
                        <div>
                          <h4 class="text-bold offset-top-20">Corporate</h4>
                          <p>
                            Intense is integrated with such popular social networks as Facebook, Twitter, Instagram and Flickr.<a href="/zones/corporate">>>もっと読む</a>
                            
                          </p>
                        </div>
              </div>
              <div class="cell-sm-8 cell-sm-preffix-2 cell-md-4 cell-md-preffix-0 offset-top-66 offset-md-top-0">
                        <!-- Icon Box Type 4--><span class="icon icon-circle icon-bordered icon-lg icon-default icon-filled mdi mdi-pen"></span>
                        <div>
                          <h4 class="text-bold offset-top-20">Hospitality</h4>
                          <p>
                            Intense is a paradise for developers. Its initial release version comes shipped with 150+ responsive pages for any taste.<a href="/zones/hospitality">>>もっと読む</a>
                            
                          </p>
                        </div>
              </div>
              <div class="range-spacer veil reveal-md-inline-block offset-top-41 offset-md-top-66"></div>
              <div class="cell-sm-8 cell-sm-preffix-2 cell-md-4 cell-md-preffix-0 offset-top-66 offset-md-top-0">
                        <!-- Icon Box Type 4--><span class="icon icon-circle icon-bordered icon-lg icon-default icon-filled mdi mdi-timetable"></span>
                        <div>
                          <h4 class="text-bold offset-top-20">Commercial</h4>
                          <p>
                            New child themes, skins and predesigned pages are being released 2-3 times per month. Intense owners get them for free.<a href="/zones/commercial">>>もっと読む</a>
                            
                          </p>
                        </div>
              </div>
              <div class="cell-sm-8 cell-sm-preffix-2 cell-md-4 cell-md-preffix-0 offset-top-66 offset-md-top-0">
                        <!-- Icon Box Type 4--><span class="icon icon-circle icon-bordered icon-lg icon-default icon-filled mdi mdi-verified"></span>
                        <div>
                          <h4 class="text-bold offset-top-20">Education</h4>
                          <p>
                            A variety of niche-specific designs, which expand the possibilities of this template.<a href="/zones/education">>>もっと読む</a>
                            
                          </p>
                        </div>
              </div>
            </div>
            <hr class="bg-lightest offset-top-66">
            <div class="range range-xs-middle text-md-left">
              <div class="cell-md-6"><img class="img-responsive center-block" src="{{ asset('/images/moqups/moqup-home-both.jpg') }}" width="570" height="368" alt=""></div>
              <div class="cell-md-6">
                <h1>Why choose us?</h1>
                <hr class="divider bg-mantis hr-md-left-0">
                <p>We're dedicated to giving you the best service possible by keeping our solutions friendly, simple and effective. If you don’t trust our word for it, just ask the people who have successfully launched their websites designed by us.</p>
                <p>Our core principle is absolute transparency in everything. Come any time to check how your project is doing – our specialists will inform you about the progress.</p><a class="btn btn-primary offset-top-14" href="about-us.html">Read More</a>
              </div>
            </div>
          </div>
        </section>
        <section class="shadow-drop-ambient">
          <div class="bg-overlay-white">
            <div class="shell section-66">
              <div class="range">
                <div class="cell-lg-4 text-lg-left">
                  <h3>Our Clients</h3>
                </div>
              </div>
              <div class="range range-xs-middle range-xs-center offset-top-20">
                <div class="cell-lg-4 text-lg-left">
                  <p>Among our clients there are many world-renowned industry leaders. Their websites are modern looking and reliable – thanks to us.</p>
                  <!-- Custom Pagination-->
                  <div class="owl-custom-navigation owl-customer-navigation offset-top-14">
                    <div class="owl-nav">
                      <div class="owl-prev mdi mdi-chevron-left" data-owl-prev></div>
                      <div class="owl-next mdi mdi-chevron-right" data-owl-next></div>
                    </div>
                  </div>
                </div>
                <div class="cell-lg-8 offset-top-41 offset-lg-top-0">
                          <!-- Customer Slider-->
                          <div class="owl-carousel owl-carousel-testimonials-2" data-mouse-drag="false" data-items="1" data-xs-items="2" data-sm-items="3" data-md-items="4" data-nav-custom=".owl-custom-navigation" data-dots="false" data-nav="false"><a href="clients.html"><img class="img-semi-transparent" src="{{ asset('/images/clients/client-01-169x68.png') }}" width="169" height="68" alt=""></a><a href="clients.html"><img class="img-semi-transparent" src="{{ asset('/images/clients/client-02-126x68.png') }}" width="126" height="68" alt=""></a><a href="clients.html"><img class="img-semi-transparent" src="{{ asset('/images/clients/client-03-126x100.png') }}" width="126" height="100" alt=""></a><a href="clients.html"><img class="img-semi-transparent" src="{{ asset('/images/clients/client-04-95x101.png') }}" width="95" height="101" alt=""></a><a href="clients.html"><img class="img-semi-transparent" src="{{ asset('/images/clients/client-05-149x102.png') }}" width="149" height="102" alt=""></a><a href="clients.html"><img class="img-semi-transparent" src="{{ asset('/images/clients/client-06-141x88.png') }}" width="141" height="88" alt=""></a>
                          </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Choose Your Plan-->
        <section class="section-98 section-sm-110">
          <div class="shell">
            <h1>Choose Your Plan</h1>
            <div class="divider bg-mantis"></div>
            <div class="range range-xs-bottom offset-top-41 range-sm-center">
              <div class="cell-md-3">
                        <!-- Planning Box type 4-->
                        <div class="box-planning box-planning-type-4">
                          <div class="box-planning-header context-dark bg-mantis">
                            <div class="box-planning-label">
                              <p class="big text-bold">Most Popular</p>
                            </div>
                            <h3>Free</h3>
                            <p class="h2 plan-price"><sup class="big">$</sup>59<sub class="text-white">/month</sub>
                            </p>
                          </div>
                          <div class="box-planning-body">
                            <ul class="list-separated list-unstyled">
                              <li><span class="text-bold">1GB</span><span class="text-dark">Space amount</span></li>
                              <li><span class="text-bold">5</span><span class="text-dark">users</span></li>
                              <li><span class="text-bold">5GB</span><span class="text-dark">Bandwidth</span></li>
                              <li><span class="text-dark">No Support</span></li>
                              <li><span class="text-bold">1</span><span class="text-dark">Databases</span></li>
                            </ul><a class="btn btn-block btn-default btn-rect" href="register.html">Sign up</a>
                          </div>
                        </div>
              </div>
              <div class="cell-md-3">
                        <!-- Planning Box type 4-->
                        <div class="box-planning box-planning-type-4">
                          <div class="box-planning-header context-dark bg-malibu">
                            <div class="box-planning-label">
                              <p class="big text-bold">Most Popular</p>
                            </div>
                            <h3>Starter</h3>
                            <p class="h2 plan-price"><sup class="big">$</sup>59<sub class="text-white">/month</sub>
                            </p>
                          </div>
                          <div class="box-planning-body">
                            <ul class="list-separated list-unstyled">
                              <li><span class="text-bold">5GB</span><span class="text-dark">Space amount</span></li>
                              <li><span class="text-bold">20</span><span class="text-dark">users</span></li>
                              <li><span class="text-bold">10GB</span><span class="text-dark">Bandwidth</span></li>
                              <li><span class="text-dark">No Support</span></li>
                              <li><span class="text-bold">1</span><span class="text-dark">Databases</span></li>
                            </ul><a class="btn btn-block btn-default btn-rect" href="register.html">Sign up</a>
                          </div>
                        </div>
              </div>
              <div class="cell-md-3">
                        <!-- Planning Box type 4-->
                        <div class="box-planning box-planning-type-4 active">
                          <div class="box-planning-header context-dark bg-saffron">
                            <div class="box-planning-label">
                              <p class="big text-bold">Most Popular</p>
                            </div>
                            <h3>Business</h3>
                            <p class="h2 plan-price"><sup class="big">$</sup>59<sub class="text-white">/month</sub>
                            </p>
                          </div>
                          <div class="box-planning-body">
                            <ul class="list-separated list-unstyled">
                              <li><span class="text-bold">10GB</span><span class="text-dark">Space amount</span></li>
                              <li><span class="text-bold">Unlimited</span><span class="text-dark">users</span></li>
                              <li><span class="text-bold">30GB</span><span class="text-dark">Bandwidth</span></li>
                              <li><span class="text-dark">Free Support</span></li>
                              <li><span class="text-bold">20</span><span class="text-dark">Databases</span></li>
                            </ul><a class="btn btn-block btn-default btn-rect" href="register.html">Sign up</a>
                          </div>
                        </div>
              </div>
              <div class="cell-md-3">
                        <!-- Planning Box type 4-->
                        <div class="box-planning box-planning-type-4">
                          <div class="box-planning-header context-dark bg-red">
                            <div class="box-planning-label">
                              <p class="big text-bold">Most Popular</p>
                            </div>
                            <h3>Ultimate</h3>
                            <p class="h2 plan-price"><sup class="big">$</sup>59<sub class="text-white">/month</sub>
                            </p>
                          </div>
                          <div class="box-planning-body">
                            <ul class="list-separated list-unstyled">
                              <li><span class="text-bold">100GB</span><span class="text-dark">Space amount</span></li>
                              <li><span class="text-bold">Unlimited</span><span class="text-dark">users</span></li>
                              <li><span class="text-bold">60GB</span><span class="text-dark">Bandwidth</span></li>
                              <li><span class="text-dark">Free support</span></li>
                              <li><span class="text-bold">Unlimited</span><span class="text-dark">Databases</span></li>
                            </ul><a class="btn btn-block btn-default btn-rect" href="register.html">Sign up</a>
                          </div>
                        </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Buy Now-->
        <section>
                  <!-- Call to action type 2-->
                  <section class="section-66 bg-blue-gray context-dark">
                    <div class="shell">
                      <div class="range range-xs-middle range-condensed">
                        <div class="cell-md-8 cell-lg-9 text-center text-md-left">
                          <h2><span class="big">Intense - exactly what you need</span></h2>
                        </div>
                        <div class="cell-md-4 cell-lg-3 offset-top-41 offset-md-top-0"><a class="btn btn-icon btn-lg btn-default btn-anis-effect btn-icon-left" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense"><span class="icon mdi mdi-cart-outline"></span>Buy intense now</a>
                        </div>
                      </div>
                    </div>
                  </section>
        </section>
      </main>
@endsection
@include('layout.footer')