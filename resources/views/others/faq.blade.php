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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="icon-lg mdi mdi-help-circle icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">FAQ</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li>FAQ
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
        <!-- Faq variant 3-->
        <section class="section-md-top-110 section-md-bottom-0 section-98">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-lg-6"><img class="img-responsive veil reveal-lg-inline-block offset-lg-top-10" src="images/pages/call-to-action-01-566x548.png" width="566" height="548" alt=""></div>
              <div class="cell-sm-9 cell-md-6 text-left offset-top-0">
                <div class="text-center">
                  <h1>General Questions</h1>
                  <hr class="divider bg-mantis">
                </div>
                <div class="section-top-0 section-sm-top-50 section-sm-bottom-50 offset-top-30 offset-lg-top-0">
                  <!-- Classic Accordion-->
                  <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                    <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                      <li>What is a smart system?</li>
                      <li>What is building automation/integration?</li>
                      <li>What makes Intense special for web designers?</li>
                      <li>Does Intense have a design for my specific niche?</li>
                    </ul>
                    <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                      <div>Intense is a universal solution for professional developers, designers and end users. This powerful HTML template can be used to build sites of any type, be it a blogger’s resource or professional portfolio. Intense meets all the modern quality standards, which will give you a solid basis to compete with rivals on the web.</div>
                      <div>Intense is a flexible instrument for professional developers. It comes packed with 250+ pre-designed pages, 20 premium plugins, 50+ scalable shortcodes, and an extended Bootstrap toolkit. Moreover, Intense is based on a CSS Flex grid system and provides full Sass support.</div>
                      <div>Intense offers a huge UI kit for web designers. It includes 150 PSD files, 2000+ font icons, unlimited skins and colors, parallax and hover effects, canvas animations, and much more. All these features can streamline the workflow and turn any project into an eye candy.</div>
                      <div>The package of Intense has child templates intended for a variety of niches. Whether you run a model agency, restaurant or consulting firm, you can choose a ready-made solution for your own business. The number of child themes is constantly growing to embrace a wider range of niches.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br>
        <!-- Classic  Accordion-->
        <section>
          <div class="shell">
            <h1>Installation</h1>
            <hr class="divider bg-mantis">
            <div class="range range-sm-center text-left">
              <div class="cell-sm-8 cell-md-6">
                <!-- Classic Accordion-->
                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                  <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                    <li>How does the 14-day trial work?</li>
                    <li>What happens at the end of my trial?</li>
                    <li>My account has expired, can I recover it?</li>
                  </ul>
                  <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                    <div>Once you decide to opt for any of our plans, you can run a 14-day free trial first. Including all the basic features of each of the offered pricing plans, it will help you decide which features are of the greatest value to you. Once the 14 day period is over, you will be asked to make your choice.</div>
                    <div>After the end of your trial, you will automatically pay for the Starter Plan (the cheapest of the offered ones). Just in case you do not want to continue or wish to opt for any other plan, be sure to cancel the subscription before the free trial ends. For more detailed information, contact the support team.</div>
                    <div>If you do not decide to purchase the same or upgrade to a new plan, your account will expire. You can recover it by buying any of the offered plans. All data from your personal account will remain intact for 6 months. If you do not upgrade till that moment, all data will vanish.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br>
        <section>
          <div class="shell">
            <h1>Cost</h1>
            <hr class="divider bg-mantis">
            <div class="range range-sm-center text-left">
              <div class="cell-sm-8 cell-md-6">
                <!-- Classic Accordion-->
                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                  <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                    <li>How does the 14-day trial work?</li>
                    <li>What happens at the end of my trial?</li>
                    <li>My account has expired, can I recover it?</li>
                  </ul>
                  <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                    <div>Once you decide to opt for any of our plans, you can run a 14-day free trial first. Including all the basic features of each of the offered pricing plans, it will help you decide which features are of the greatest value to you. Once the 14 day period is over, you will be asked to make your choice.</div>
                    <div>After the end of your trial, you will automatically pay for the Starter Plan (the cheapest of the offered ones). Just in case you do not want to continue or wish to opt for any other plan, be sure to cancel the subscription before the free trial ends. For more detailed information, contact the support team.</div>
                    <div>If you do not decide to purchase the same or upgrade to a new plan, your account will expire. You can recover it by buying any of the offered plans. All data from your personal account will remain intact for 6 months. If you do not upgrade till that moment, all data will vanish.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br>
        <section>
          <div class="shell">
            <h1>Products</h1>
            <hr class="divider bg-mantis">
            <div class="range range-sm-center text-left">
              <div class="cell-sm-8 cell-md-6">
                <!-- Classic Accordion-->
                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                  <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                    <li>How does the 14-day trial work?</li>
                    <li>What happens at the end of my trial?</li>
                    <li>My account has expired, can I recover it?</li>
                  </ul>
                  <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                    <div>Once you decide to opt for any of our plans, you can run a 14-day free trial first. Including all the basic features of each of the offered pricing plans, it will help you decide which features are of the greatest value to you. Once the 14 day period is over, you will be asked to make your choice.</div>
                    <div>After the end of your trial, you will automatically pay for the Starter Plan (the cheapest of the offered ones). Just in case you do not want to continue or wish to opt for any other plan, be sure to cancel the subscription before the free trial ends. For more detailed information, contact the support team.</div>
                    <div>If you do not decide to purchase the same or upgrade to a new plan, your account will expire. You can recover it by buying any of the offered plans. All data from your personal account will remain intact for 6 months. If you do not upgrade till that moment, all data will vanish.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br>
        <section>
          <div class="shell">
            <h1>Technical</h1>
            <hr class="divider bg-mantis">
            <div class="range range-sm-center text-left">
              <div class="cell-sm-8 cell-md-6">
                <!-- Classic Accordion-->
                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                  <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                    <li>How does the 14-day trial work?</li>
                    <li>What happens at the end of my trial?</li>
                    <li>My account has expired, can I recover it?</li>
                  </ul>
                  <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                    <div>Once you decide to opt for any of our plans, you can run a 14-day free trial first. Including all the basic features of each of the offered pricing plans, it will help you decide which features are of the greatest value to you. Once the 14 day period is over, you will be asked to make your choice.</div>
                    <div>After the end of your trial, you will automatically pay for the Starter Plan (the cheapest of the offered ones). Just in case you do not want to continue or wish to opt for any other plan, be sure to cancel the subscription before the free trial ends. For more detailed information, contact the support team.</div>
                    <div>If you do not decide to purchase the same or upgrade to a new plan, your account will expire. You can recover it by buying any of the offered plans. All data from your personal account will remain intact for 6 months. If you do not upgrade till that moment, all data will vanish.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br>
        <section>
          <div class="shell">
            <h1>System</h1>
            <hr class="divider bg-mantis">
            <div class="range range-sm-center text-left">
              <div class="cell-sm-8 cell-md-6">
                <!-- Classic Accordion-->
                <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                  <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                    <li>How does the 14-day trial work?</li>
                    <li>What happens at the end of my trial?</li>
                    <li>My account has expired, can I recover it?</li>
                  </ul>
                  <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                    <div>Once you decide to opt for any of our plans, you can run a 14-day free trial first. Including all the basic features of each of the offered pricing plans, it will help you decide which features are of the greatest value to you. Once the 14 day period is over, you will be asked to make your choice.</div>
                    <div>After the end of your trial, you will automatically pay for the Starter Plan (the cheapest of the offered ones). Just in case you do not want to continue or wish to opt for any other plan, be sure to cancel the subscription before the free trial ends. For more detailed information, contact the support team.</div>
                    <div>If you do not decide to purchase the same or upgrade to a new plan, your account will expire. You can recover it by buying any of the offered plans. All data from your personal account will remain intact for 6 months. If you do not upgrade till that moment, all data will vanish.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br>
        <br>
        <!-- First Lesson - Free-->
        <section class="context-dark">
                      <div class="parallax-container" data-parallax-img="images/backgrounds/background-15-1920x1172.jpg">
                        <div class="parallax-content">
                          <div class="shell section-98 section-sm-110">
                            <h1>If you have a question please contact us</h1>
                            <hr class="divider bg-mantis">
                            <div class="range range-sm-center offset-top-0">
                              <div class="cell-sm-8">
                                <!-- RD Mailform-->
                                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                  <div class="range">
                                    <div class="cell-lg-6">
                                      <div class="form-group">
                                        <label class="form-label form-label-outside" for="contact-me-name">Name:</label>
                                        <input class="form-control" id="contact-me-name" type="text" name="name" data-constraints="@Required">
                                      </div>
                                    </div>
                                    <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                                      <div class="form-group">
                                        <label class="form-label form-label-outside" for="contact-me-email">E-Mail:</label>
                                        <input class="form-control" id="contact-me-email" type="email" name="email" data-constraints="@Required @Email">
                                      </div>
                                    </div>
                                    <div class="cell-lg-12 offset-top-20">
                                      <div class="form-group">
                                        <label class="form-label form-label-outside" for="contact-me-message">Message:</label>
                                        <textarea class="form-control" id="contact-me-message" name="message" data-constraints="@Required"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="group-sm text-center text-lg-left offset-top-30">
                                    <button class="btn btn-primary" type="submit">Send</button>
                                    <!-- <button class="btn btn-default" type="reset">Reset</button> -->
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
          </section>
      </main>
@endsection
@include('layout.footer')