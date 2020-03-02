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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-cube-outline icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">{{ $zone_category }}</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/zones">Zones</a></li>
                <li>{{ $zone_category }}
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
        <!-- Carousel content box-->
        <section>
          <div class="shell">
            <h1>Carousel content box</h1>
            <hr class="divider bg-mantis">
            <div class="range range-sm-center offset-top-66">
              <!-- Simple quote Slider-->
              <div class="cell-sm-8 cell-md-8 inset-md-right-80">
                <div class="owl-carousel owl-carousel-classic owl-carousel-class-light shadow-drop-md" data-items="1" data-nav="false" data-dots="false" data-nav-custom=".owl-custom-navigation">
                  <div>
                    <!-- Media Elements-->
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/-AhmuMqZB0s?wmode=transparent"></iframe>
                    </div>
                  </div>
                  <div><img class="img-responsive element-fullwidth" src="{{ asset('/images/portfolio/portfolio-single-01-716x404.jpg') }}" width="716" height="404" alt=""></div>
                  <div><img class="img-responsive element-fullwidth" src="{{ asset('/images/portfolio/portfolio-single-02-716x404.jpg') }}" width="716" height="404" alt=""></div>
                </div>
              </div>
              <div class="cell-sm-8 cell-md-4 text-sm-left offset-top-34 offset-md-top-0">
                <h3>{{ $zone_category }}</h3>
                <p>A website is a medium that connects a person with the world of digital data. With its help users can access information, make purchases, communicate with each other, and do loads of other things.</p>
                <div class="offset-top-20">
                  <p>Due to the clever marketing strategy and professional web designing, corporations can grow their client base with ease. On the modern market the competition is very tough, so in order to be a success, businesses experiment with multiple strategies with the goal of coming up with the perfect one.</p>
                </div>
                <div class="owl-custom-navigation owl-customer-navigation offset-top-24">
                  <div class="owl-nav">
                    <div class="owl-prev mdi mdi-chevron-left" data-owl-prev></div>
                    <div class="owl-next mdi mdi-chevron-right" data-owl-next></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="offset-top-98">
          <div class="shell">
            <hr class="hr hr-gradient">
          </div>
        </section>
        <!-- Fullwidth content box-->
        <section class="offset-top-98 offset-sm-top-66">
          <div class="shell">
            <h1>Fullwidth content box</h1>
            <hr class="divider bg-mantis">
            <div class="range range-xs-center range-sm-right offset-top-66">
              <div class="cell-xs-10 cell-sm-6 section-image-aside section-image-aside-left text-left">
                <div class="section-image-aside-img veil reveal-sm-block" style="background-image: url({{ asset('/images/pages/careers-02-960x540.jpg') }});"></div>
                <div class="section-image-aside-body offset-top-41 offset-sm-top-0 section-sm-66 inset-sm-left-50">
                  <div>
                    <h3 class="text-picton-blue">02</h3>
                  </div>
                  <div class="offset-top-10">
                    <h2> Diversity of Learning Opportunities at Intense</h2>
                  </div>
                  <div class="offset-top-20">
                    <p>When you join our team, you’ll dive into a knowledge-sharing environment. We encourage our employees to attend multiple conferences and workshops held both inside the company and on the outside. Keep in mind that you can take part in conferences as both a listener and speaker.</p>
                    <p>As a part of our benefits package, we also offer multiple courses for you to master new subjects. Our working environment is full of learning opportunities, which can’t help motivating for a steady professional growth.</p>
                    <p>Offices of Intense are located in different corners of the globe, so be ready to travel around the world. To save your budget, we cover all the travel costs including transportation, accommodation, food, and even some leisure activities. Our company gives you a perfect chance to explore the world and immerse in different cultures.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="offset-top-98">
          <div class="shell">
            <hr class="hr hr-gradient">
          </div>
        </section>
        <!-- Icon box aside right-->
        <section class="offset-top-98 offset-sm-top-66">
          <div class="shell">
            <h1>Icon box aside right</h1>
            <hr class="divider bg-mantis">
            <div class="range range-xs-center range-xs-middle range-xl-justify offset-top-66">
              <div class="cell-sm-9 cell-lg-6 cell-xl-7"><img class="img-responsive veil reveal-sm-inline-block shadow-drop-lg" src="{{ asset('/images/features/rd-mailform-01-670x467.png') }}" width="670" height="467" alt=""></div>
              <div class="cell-sm-9 cell-lg-6 cell-xl-4 offset-sm-top-66 offset-lg-top-0">
                <div class="inset-lg-left-50 inset-xl-left-0">
                  <!-- Icon Box Type 2-->
                  <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                    <div class="unit-left"><span class="icon icon-lg icon-circle mdi mdi-emoticon material-icons-tag_faces text-picton-blue offset-sm-top-14"></span></div>
                    <div class="unit-body">
                      <h4 class="text-bold text-uppercase offset-sm-top-24">User-Friendly Customization</h4>
                      <p>The script comes with ready-made presets, which will let you customize the form with comfort. The script also provides full customization of an email template.</p>
                    </div>
                  </div>
                  <div class="offset-top-50">
                    <!-- Icon Box Type 2-->
                    <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                      <div class="unit-left"><span class="icon icon-lg icon-circle mdi mdi-web text-picton-blue offset-sm-top-14"></span></div>
                      <div class="unit-body">
                        <h4 class="text-bold text-uppercase offset-sm-top-24">CSS Stylization</h4>
                        <p>Stylize practically all the form pattern attributes with ease. The script features a fully fledged CSS API built specifically for this purpose.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Dark parallax content box-->
        <section class="offset-top-98 offset-sm-top-110">
          <div class="parallax-container" data-parallax-img="{{ asset('/images/backgrounds/background-04-1920x657.jpg') }}">
            <div class="parallax-content">
              <div class="bg-overlay-gray-darkest context-dark">
                <div class="shell section-98 section-sm-bottom-0 section-lg-top-110 section-lg-bottom-0">
                  <h1>Dark parallax content box</h1>
                  <div class="offset-top-20">
                    <hr class="divider bg-mantis">
                  </div>
                  <div class="range range-xs-center range-lg-bottom">
                    <div class="cell-sm-9 cell-lg-4 text-lg-left section-lg-85">
                      <h3 class="text-bold">Cross-Browser Support</h3>
                      <p>RD Mailform is compatible with all the modern-day browsers. In such a way, all visitors can use your forms regardless of their browser preferences.</p>
                      <div class="range range-xs-center range-lg-left text-center text-lg-left offset-top-41">
                        <div class="cell-xs-6 cell-md-5 cell-lg-9"><a class="btn btn-block btn-default" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense">buy intense now</a></div>
                      </div>
                    </div>
                    <div class="cell-sm-9 cell-lg-8 offset-sm-top-66 offset-lg-top-0 text-lg-right">
                      <div class="mock-up-wrapper veil reveal-sm-block">
                        <div class="mock-up-desktop-wrapper"><img class="mock-up-desktop img-responsive center-block hr-xl-right-0" src="{{ asset('/images/features/rd-mailform-02-619x439.png') }}" width="619" height="439" alt=""></div><span class="veil"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Full image content box-->
        <section class="section-top-98 section-sm-top-110 section-sm-bottom-110 section-bottom-98 section-lg-bottom-0 bg-lightest">
          <div class="shell">
            <h1>Image aside content box</h1>
            <hr class="divider bg-mantis">
            <div class="range range-sm-center range-md-middle">
              <div class="cell-lg-5 veil reveal-lg-inline-block"><img class="img-responsive center-block" width="470" height="770" src="{{ asset('/images/pages/about-us-01-470x770.png') }}" alt=""></div>
              <div class="cell-sm-10 cell-lg-5 section-lg-bottom-50">
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
                  <div class="offset-top-66 offset-lg-top-34">
                    <!-- Icon Box Type 2-->
                    <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                      <div class="unit-left"><span class="icon text-gray mdi mdi-image-filter-none"></span></div>
                      <div class="unit-body">
                        <h4 class="text-bold text-malibu offset-sm-top-14">What does Intense offer for your marketing needs?</h4>
                        <p>Intense has effective instruments for your marketing campaigns. Its package contains a number of landing and newsletter templates designed with proven marketing tactics in mind.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Light parallax content box-->
        <section>
          <div class="parallax-container" data-parallax-img="{{ asset('/images/backgrounds/background-05-1920x960.jpg') }}">
            <div class="parallax-content">
              <div class="bg-overlay-white">
                <div class="shell section-98">
                  <h1>Light parallax content box</h1>
                  <hr class="divider bg-mantis">
                  <div class="range range-xs-center text-sm-left">
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
      </main>
@endsection
@include('layout.footer')