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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="icon-lg mdi mdi-certificate icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">{{ $plan_category }}</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/plans">Plans</a></li>
                <li>{{ $plan_category }}
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
        <!-- Choose your Plan-->
        <section class="section-98 section-sm-110">
          <div class="shell-fluid">
            <h1>{{ $plan_category }}</h1>
            <hr class="divider bg-mantis">
            <p>Pick the best plan that meets your business needs. A free trial is available to help you with the decision-making.</p><a class="btn btn-primary btn-icon btn-icon-left offset-top-20" href="#"><span class="icon mdi mdi-download text-middle"></span>Download free Trial</a>
            <div class="range range-condensed range-md-center offset-top-66">
              <div class="cell-xs-8 cell-xs-preffix-2 cell-md-4 cell-md-preffix-0 cell-lg-3 cell-xl-2">
                        <!-- Planning Box type 2-->
                        <div class="box-planning box-planning-type-2">
                          <div class="box-planning-label">
                            <svg class="box-planning-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                              <path class="bg-picton-blue" d="M75.1,48.3L68,50.6l3.4,6.6L64,57.6l1.7,7.3l-7.3-1.4l-0.2,7.5l-6.7-3.2l-2,7.2l-5.7-4.8l-3.8,6.4l-4.3-6.1l-5.2,5.3            l-2.7-7l-6.4,3.8l-0.9-7.4l-7.1,2.1l1-7.4l-7.5,0.3l2.8-6.9l-7.3-1.6l4.4-6L0,42.4l5.8-4.7l-5.6-4.9l6.8-3.1l-4.2-6.1l7.3-1.3            l-2.6-7l7.4,0.5l-0.8-7.4l7.1,2.4l1.1-7.4l6.3,4l2.9-6.9l5.1,5.5L41.1,0l3.6,6.6l5.9-4.6l1.8,7.2l6.8-3l0,7.5l7.4-1.2l-1.9,7.2            l7.4,0.6l-3.6,6.5l7,2.5l-5.1,5.4l6.2,4.1l-6.3,4L75.1,48.3z"></path>
                            </svg><span class="text-bold">Most <br> Popular</span>
                          </div>
                          <h2>Starter</h2>
                          <p class="h1 plan-price text-picton-blue"><sup class="big">$</sup>19<sup class="text-dark"> /month</sup>
                          </p>
                          <hr class="divider bg-picton-blue">
                          <p class="text-light"><small>The plan is mainly intended for startups and small businesses.</small></p>
                          <ul class="list-separated list-unstyled">
                            <li><span class="text-bold">5GB</span><span class="text-dark">Space amount</span></li>
                            <li><span class="text-bold">20</span><span class="text-dark">Users</span></li>
                            <li><span class="text-bold">10GB</span><span class="text-dark">Bandwidth</span></li>
                            <li><span class="text-dark">No support</span></li>
                            <li><span class="text-bold">1</span><span class="text-dark">Database</span></li>
                          </ul><a class="btn btn-block btn-rect btn-picton-blue" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense">Buy now</a>
                        </div>
              </div>
              <div class="cell-xs-8 cell-xs-preffix-2 cell-md-4 cell-md-preffix-0 cell-lg-3 cell-xl-2 offset-top-50 offset-md-top-0">
                        <!-- Planning Box type 2-->
                        <div class="box-planning box-planning-type-2 active">
                          <div class="box-planning-label">
                            <svg class="box-planning-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                              <path class="bg-picton-blue" d="M75.1,48.3L68,50.6l3.4,6.6L64,57.6l1.7,7.3l-7.3-1.4l-0.2,7.5l-6.7-3.2l-2,7.2l-5.7-4.8l-3.8,6.4l-4.3-6.1l-5.2,5.3            l-2.7-7l-6.4,3.8l-0.9-7.4l-7.1,2.1l1-7.4l-7.5,0.3l2.8-6.9l-7.3-1.6l4.4-6L0,42.4l5.8-4.7l-5.6-4.9l6.8-3.1l-4.2-6.1l7.3-1.3            l-2.6-7l7.4,0.5l-0.8-7.4l7.1,2.4l1.1-7.4l6.3,4l2.9-6.9l5.1,5.5L41.1,0l3.6,6.6l5.9-4.6l1.8,7.2l6.8-3l0,7.5l7.4-1.2l-1.9,7.2            l7.4,0.6l-3.6,6.5l7,2.5l-5.1,5.4l6.2,4.1l-6.3,4L75.1,48.3z"></path>
                            </svg><span class="text-bold">Most <br> Popular</span>
                          </div>
                          <h2>Business</h2>
                          <p class="h1 plan-price text-picton-blue"><sup class="big">$</sup>59<sup class="text-dark"> /month</sup>
                          </p>
                          <hr class="divider bg-picton-blue">
                          <p class="text-light"><small>Perfect for Medium-to-large sized businesses.</small></p>
                          <ul class="list-separated list-unstyled">
                            <li><span class="text-bold">10GB</span><span class="text-dark">Space amount</span></li>
                            <li><span class="text-bold">Unlimited</span><span class="text-dark"> users</span></li>
                            <li><span class="text-bold">30GB</span><span class="text-dark">Bandwidth</span></li>
                            <li><span class="text-dark">Free support</span></li>
                            <li><span class="text-bold">20</span><span class="text-dark">Databases</span></li>
                          </ul><a class="btn btn-block btn-rect btn-picton-blue" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense">Buy now</a>
                        </div>
              </div>
              <div class="cell-xs-8 cell-xs-preffix-2 cell-md-4 cell-md-preffix-0 cell-lg-3 cell-xl-2 offset-top-50 offset-md-top-0">
                        <!-- Planning Box type 2-->
                        <div class="box-planning box-planning-type-2">
                          <div class="box-planning-label">
                            <svg class="box-planning-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                              <path class="bg-picton-blue" d="M75.1,48.3L68,50.6l3.4,6.6L64,57.6l1.7,7.3l-7.3-1.4l-0.2,7.5l-6.7-3.2l-2,7.2l-5.7-4.8l-3.8,6.4l-4.3-6.1l-5.2,5.3            l-2.7-7l-6.4,3.8l-0.9-7.4l-7.1,2.1l1-7.4l-7.5,0.3l2.8-6.9l-7.3-1.6l4.4-6L0,42.4l5.8-4.7l-5.6-4.9l6.8-3.1l-4.2-6.1l7.3-1.3            l-2.6-7l7.4,0.5l-0.8-7.4l7.1,2.4l1.1-7.4l6.3,4l2.9-6.9l5.1,5.5L41.1,0l3.6,6.6l5.9-4.6l1.8,7.2l6.8-3l0,7.5l7.4-1.2l-1.9,7.2            l7.4,0.6l-3.6,6.5l7,2.5l-5.1,5.4l6.2,4.1l-6.3,4L75.1,48.3z"></path>
                            </svg><span class="text-bold">Most <br> Popular</span>
                          </div>
                          <h2>Ultimate</h2>
                          <p class="h1 plan-price text-picton-blue"><sup class="big">$</sup>99<sup class="text-dark"> /month</sup>
                          </p>
                          <hr class="divider bg-picton-blue">
                          <p class="text-light"><small>The plan is best suited for large corporate websites.</small></p>
                          <ul class="list-separated list-unstyled">
                            <li><span class="text-bold">100GB</span><span class="text-dark">Space amount</span></li>
                            <li><span class="text-bold">Unlimited</span><span class="text-dark"> users</span></li>
                            <li><span class="text-bold">60GB</span><span class="text-dark">Bandwidth</span></li>
                            <li><span class="text-dark">Free support</span></li>
                            <li><span class="text-bold">Unlimited</span><span class="text-dark">Databases</span></li>
                          </ul><a class="btn btn-block btn-rect btn-picton-blue" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense">Buy now</a>
                        </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Questions & Answers-->
        <section>
                  <div class="parallax-container" data-parallax-img="{{ asset('/images/backgrounds/background-05-1920x960.jpg') }}">
                    <div class="parallax-content">
                      <div class="bg-overlay-white">
                        <div class="shell section-98">
                          <h1>Questions & Answers</h1>
                          <hr class="divider bg-mantis">
                          <div class="range range-xs-center text-sm-left offset-top-0">
                            <div class="cell-sm-9 cell-lg-12">
                              <div class="range range-xs-center">
                                <div class="cell-lg-5">
                                  <h6>How does the 14-day trial work?</h6>
                                  <p>Once you decide to opt for any of our plans, you can run a 14-day free trial first. Including all the basic features of each of the offered pricing plans, it will help you decide which features are of the greatest value to you. Once the 14 day period is over, you will be asked to make your choice.</p>
                                </div>
                                <div class="cell-lg-5">
                                  <h6>What happens at the end of my trial?</h6>
                                  <p>After the end of your trial, you will automatically pay for the Starter Plan (the cheapest of the offered ones). Just in case you do not want to continue or wish to opt for any other plan, be sure to cancel the subscription before the free trial ends. For more detailed information, contact the support team.</p>
                                </div>
                                <div class="range-spacer veil reveal-lg-inline-block offset-lg-top-50"></div>
                                <div class="cell-lg-5">
                                  <h6>My account has expired, can I recover it?</h6>
                                  <p>If you do not decide to purchase the same or upgrade to a new plan, your account will expire. You can recover it by buying any of the offered plans. All data from your personal account will remain intact for 6 months. If you do not upgrade till that moment, all data will vanish.</p>
                                </div>
                                <div class="cell-lg-5">
                                  <h6>Can I change/cancel plans anytime?</h6>
                                  <p>Yes, you can. Our plans are month-to-month or yearly. You are free to cancel the selected plan anytime you wish. Once you decide to cancel the current plan, we will not charge you for the next period. As soon as you decide what other plan to opt for, we will contact you for verification.</p>
                                </div>
                                <div class="range-spacer veil reveal-lg-inline-block offset-lg-top-50"></div>
                                <div class="cell-lg-5">
                                  <h6>Do you offer discounts for students?</h6>
                                  <p>We offer student and non-profit discounts. Just open a private discussion with us, verify your status and we will provide you with a 20% discount on any of the provided plans. We may ask you to confirm your status with documentation, so please get ready to verify that.</p>
                                </div>
                                <div class="cell-lg-5">
                                  <h6>How do I access my account?</h6>
                                  <p>If you are having problems with accessing your account, please follow several quick and easy troubleshooting steps that will help you fix the issue in no time. For example, you can reset your password via email or SMS, change the username, or whatsoever.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </section>
        <!-- Right Plan-->
        <section class="section-66 bg-gray-darkest context-dark">
          <div class="shell">
            <h2>Not Sure Which Plan is Right For You?</h2>
            <p>If you are in doubt of which plan to opt for, subscribe to our newsletter and we will try to help you make the right decision.</p><a class="btn btn-primary btn-icon btn-icon-left offset-top-20" href="contact-us.html"><span class="icon mdi mdi-email-outline"></span>Send us a letter</a>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')      