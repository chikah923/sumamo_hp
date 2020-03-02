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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="icon-lg mdi mdi-coin icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Plans</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/plans">Plans</a></li>
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
      <main class="page-content section-98 section-lg-110">
        <!-- Section Plans Type 1-->
        <div class="shell shell-wide">
          <h1>Plans Type 1</h1>
          <div class="divider bg-mantis"></div>
          <div class="range range-condensed range-md-center">
            <div class="cell-xs-8 cell-xs-preffix-2 cell-md-3 cell-md-preffix-0 cell-xl-2">
              <!-- Planning Box type 1-->
              <div class="box-planning box-planning-type-1">
                <div class="box-planning-label">
                  <svg class="box-planning-svg" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4-11.4l76.5,76.5L76.4,76.5L0,0.1L11.4-11.4z"></path>
                  </svg><span>Popular</span>
                </div>
                <h2>Personal</h2>
                <p class="h1">$19</p>
                <p class="small text-uppercase">per month</p>
                <hr class="hr-gradient"/>
                <ul class="list list-unstyled">
                  <li><span class="text-bold">1</span><span class="text-dark">Hosting</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">E-Mail Marketing</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Databases</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">Design packs</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Website layouts</span></li>
                </ul><a class="btn btn-block btn-default" href="register.html">Sign up</a>
              </div>
            </div>
            <div class="cell-xs-8 cell-xs-preffix-2 cell-md-3 cell-md-preffix-0 cell-xl-2 offset-top-50 offset-md-top-0">
              <!-- Planning Box type 1-->
              <div class="box-planning box-planning-type-1 active">
                <div class="box-planning-label">
                  <svg class="box-planning-svg" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4-11.4l76.5,76.5L76.4,76.5L0,0.1L11.4-11.4z"></path>
                  </svg><span>Popular</span>
                </div>
                <h2>Team</h2>
                <p class="h1">$59</p>
                <p class="small text-uppercase">per month</p>
                <hr class="hr-gradient"/>
                <ul class="list list-unstyled">
                  <li><span class="text-bold">1</span><span class="text-dark">Hosting</span></li>
                  <li><span class="text-bold">2</span><span class="text-dark">E-Mail Marketing</span></li>
                  <li><span class="text-bold">5</span><span class="text-dark">Databases</span></li>
                  <li><span class="text-bold">2</span><span class="text-dark">Design packs</span></li>
                  <li><span class="text-bold">3</span><span class="text-dark">Website layouts</span></li>
                </ul><a class="btn btn-block btn-primary" href="register.html">Sign up</a>
              </div>
            </div>
            <div class="cell-xs-8 cell-xs-preffix-2 cell-md-3 cell-md-preffix-0 cell-xl-2 offset-top-50 offset-md-top-0">
              <!-- Planning Box type 1-->
              <div class="box-planning box-planning-type-1">
                <div class="box-planning-label">
                  <svg class="box-planning-svg" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4-11.4l76.5,76.5L76.4,76.5L0,0.1L11.4-11.4z"></path>
                  </svg><span>Popular</span>
                </div>
                <h2>Studio</h2>
                <p class="h1">$89</p>
                <p class="small text-uppercase">per month</p>
                <hr class="hr-gradient"/>
                <ul class="list list-unstyled">
                  <li><span class="text-bold">1</span><span class="text-dark">Hosting</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">E-Mail Marketing</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Databases</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">Design packs</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Website layouts</span></li>
                </ul><a class="btn btn-block btn-default" href="register.html">Sign up</a>
              </div>
            </div>
            <div class="cell-xs-8 cell-xs-preffix-2 cell-md-3 cell-md-preffix-0 cell-xl-2 offset-top-50 offset-md-top-0">
              <!-- Planning Box type 1-->
              <div class="box-planning box-planning-type-1">
                <div class="box-planning-label">
                  <svg class="box-planning-svg" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4-11.4l76.5,76.5L76.4,76.5L0,0.1L11.4-11.4z"></path>
                  </svg><span>Popular</span>
                </div>
                <h2>Business</h2>
                <p class="h1">$129</p>
                <p class="small text-uppercase">per month</p>
                <hr class="hr-gradient"/>
                <ul class="list list-unstyled">
                  <li><span class="text-bold">1</span><span class="text-dark">Hosting</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">E-Mail Marketing</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Databases</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">Design packs</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Website layouts</span></li>
                </ul><a class="btn btn-block btn-default" href="register.html">Sign up</a>
              </div>
            </div>
          </div>
        </div>
        <div class="shell offset-top-66 code-box-planning-1 text-left"></div>
        <!-- Section Plans Type 2-->
        <div class="shell-fluid offset-top-98 offset-lg-top-110">
          <h1>Plans Type 2</h1>
          <div class="divider bg-mantis"></div>
          <div class="range range-condensed range-md-center">
            <div class="cell-xs-8 cell-xs-preffix-2 cell-md-4 cell-md-preffix-0 cell-lg-3 cell-xl-2">
              <!-- Planning Box type 2-->
              <div class="box-planning box-planning-type-2">
                <div class="box-planning-label">
                  <svg class="box-planning-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                    <path class="bg-deluge" d="M75.1,48.3L68,50.6l3.4,6.6L64,57.6l1.7,7.3l-7.3-1.4l-0.2,7.5l-6.7-3.2l-2,7.2l-5.7-4.8l-3.8,6.4l-4.3-6.1l-5.2,5.3            l-2.7-7l-6.4,3.8l-0.9-7.4l-7.1,2.1l1-7.4l-7.5,0.3l2.8-6.9l-7.3-1.6l4.4-6L0,42.4l5.8-4.7l-5.6-4.9l6.8-3.1l-4.2-6.1l7.3-1.3            l-2.6-7l7.4,0.5l-0.8-7.4l7.1,2.4l1.1-7.4l6.3,4l2.9-6.9l5.1,5.5L41.1,0l3.6,6.6l5.9-4.6l1.8,7.2l6.8-3l0,7.5l7.4-1.2l-1.9,7.2            l7.4,0.6l-3.6,6.5l7,2.5l-5.1,5.4l6.2,4.1l-6.3,4L75.1,48.3z"></path>
                  </svg><span class="text-bold">Most <br> Popular</span>
                </div>
                <h2>Starter</h2>
                <p class="h1 plan-price"><sup class="big">$</sup>19<sup class="text-dark"> /month</sup>
                </p>
                <hr class="divider"/>
                <p class="text-light"><small>The plan is mainly intended for startups and small businesses.</small></p>
                <ul class="list-separated list-unstyled">
                  <li><span class="text-bold">5GB</span><span class="text-dark">Space amount</span></li>
                  <li><span class="text-bold">20</span><span class="text-dark">Users</span></li>
                  <li><span class="text-bold">10GB</span><span class="text-dark">Bandwidth</span></li>
                  <li><span class="text-dark">No support</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Database</span></li>
                </ul><a class="btn btn-block btn-rect btn-deluge" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense">Sign up</a>
              </div>
            </div>
            <div class="cell-xs-8 cell-xs-preffix-2 cell-md-4 cell-md-preffix-0 cell-lg-3 cell-xl-2 offset-top-50 offset-md-top-0">
              <!-- Planning Box type 2-->
              <div class="box-planning box-planning-type-2 active">
                <div class="box-planning-label">
                  <svg class="box-planning-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                    <path class="bg-deluge" d="M75.1,48.3L68,50.6l3.4,6.6L64,57.6l1.7,7.3l-7.3-1.4l-0.2,7.5l-6.7-3.2l-2,7.2l-5.7-4.8l-3.8,6.4l-4.3-6.1l-5.2,5.3            l-2.7-7l-6.4,3.8l-0.9-7.4l-7.1,2.1l1-7.4l-7.5,0.3l2.8-6.9l-7.3-1.6l4.4-6L0,42.4l5.8-4.7l-5.6-4.9l6.8-3.1l-4.2-6.1l7.3-1.3            l-2.6-7l7.4,0.5l-0.8-7.4l7.1,2.4l1.1-7.4l6.3,4l2.9-6.9l5.1,5.5L41.1,0l3.6,6.6l5.9-4.6l1.8,7.2l6.8-3l0,7.5l7.4-1.2l-1.9,7.2            l7.4,0.6l-3.6,6.5l7,2.5l-5.1,5.4l6.2,4.1l-6.3,4L75.1,48.3z"></path>
                  </svg><span class="text-bold">Most <br> Popular</span>
                </div>
                <h2>Business</h2>
                <p class="h1 plan-price text-deluge"><sup class="big">$</sup>59<sup class="text-dark"> /month</sup>
                </p>
                <hr class="divider bg-deluge"/>
                <p class="text-light"><small>Perfect for Medium-to-large sized businesses.</small></p>
                <ul class="list-separated list-unstyled">
                  <li><span class="text-bold">10GB</span><span class="text-dark">Space amount</span></li>
                  <li><span class="text-bold">Unlimited</span><span class="text-dark"> users</span></li>
                  <li><span class="text-bold">30GB</span><span class="text-dark">Bandwidth</span></li>
                  <li><span class="text-dark">Free support</span></li>
                  <li><span class="text-bold">20</span><span class="text-dark">Databases</span></li>
                </ul><a class="btn btn-block btn-rect btn-deluge" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense">Sign up</a>
              </div>
            </div>
            <div class="cell-xs-8 cell-xs-preffix-2 cell-md-4 cell-md-preffix-0 cell-lg-3 cell-xl-2 offset-top-50 offset-md-top-0">
              <!-- Planning Box type 2-->
              <div class="box-planning box-planning-type-2">
                <div class="box-planning-label">
                  <svg class="box-planning-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                    <path class="bg-deluge" d="M75.1,48.3L68,50.6l3.4,6.6L64,57.6l1.7,7.3l-7.3-1.4l-0.2,7.5l-6.7-3.2l-2,7.2l-5.7-4.8l-3.8,6.4l-4.3-6.1l-5.2,5.3            l-2.7-7l-6.4,3.8l-0.9-7.4l-7.1,2.1l1-7.4l-7.5,0.3l2.8-6.9l-7.3-1.6l4.4-6L0,42.4l5.8-4.7l-5.6-4.9l6.8-3.1l-4.2-6.1l7.3-1.3            l-2.6-7l7.4,0.5l-0.8-7.4l7.1,2.4l1.1-7.4l6.3,4l2.9-6.9l5.1,5.5L41.1,0l3.6,6.6l5.9-4.6l1.8,7.2l6.8-3l0,7.5l7.4-1.2l-1.9,7.2            l7.4,0.6l-3.6,6.5l7,2.5l-5.1,5.4l6.2,4.1l-6.3,4L75.1,48.3z"></path>
                  </svg><span class="text-bold">Most <br> Popular</span>
                </div>
                <h2>Ultimate</h2>
                <p class="h1 plan-price"><sup class="big">$</sup>99<sup class="text-dark"> /month</sup>
                </p>
                <hr class="divider"/>
                <p class="text-light"><small>The plan is best suited for large corporate websites.</small></p>
                <ul class="list-separated list-unstyled">
                  <li><span class="text-bold">100GB</span><span class="text-dark">Space amount</span></li>
                  <li><span class="text-bold">Unlimited</span><span class="text-dark"> users</span></li>
                  <li><span class="text-bold">60GB</span><span class="text-dark">Bandwidth</span></li>
                  <li><span class="text-dark">Free support</span></li>
                  <li><span class="text-bold">Unlimited</span><span class="text-dark">Databases</span></li>
                </ul><a class="btn btn-block btn-rect btn-deluge" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense">Sign up</a>
              </div>
            </div>
          </div>
        </div>
        <div class="shell offset-top-66 code-box-planning-2 text-left"></div>
        <!-- Section Plans Type 3-->
        <div class="shell shell-wide offset-top-98 offset-lg-top-110">
          <h1>Plans Type 3</h1>
          <div class="divider bg-mantis"></div>
          <div class="range range-condensed range-lg-center range-xs-bottom">
            <div class="cell-xs-0 cell-lg-2 text-right veil reveal-lg-block">
              <div class="inset-right-30 section-lg-bottom-110">
                <h4 class="text-picton-blue text-bold">Available <br> Options</h4>
                <ul class="list-separated list-unstyled">
                  <li>Space amount</li>
                  <li>Users Count</li>
                  <li>Bandwidth Amount</li>
                  <li>Support included</li>
                  <li>Database Count</li>
                </ul>
              </div>
            </div>
            <div class="cell-md-4 cell-lg-3 cell-xl-2 offset-top-50 offset-lg-top-0">
              <!-- Planning Box type 3-->
              <div class="box-planning box-planning-type-3">
                <div class="box-planning-header bg-gray-darker context-dark">
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
                    <li><span class="text-middle icon icon-xxs mdi mdi-close icon-text-ku-crimson"></span></li>
                    <li><span class="text-bold">1</span><span class="text-dark">Databases</span></li>
                  </ul><a class="btn btn-block btn-default btn-rect" href="register.html">Sign up</a>
                </div>
              </div>
            </div>
            <div class="cell-md-4 cell-lg-3 cell-xl-2 offset-top-50 offset-lg-top-0">
              <!-- Planning Box type 3-->
              <div class="box-planning box-planning-type-3 active">
                <div class="box-planning-header bg-malibu context-dark">
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
                    <li><span class="text-middle icon icon-xxs mdi mdi-check text-dollar-bill"></span></li>
                    <li><span class="text-bold">20</span><span class="text-dark">Databases</span></li>
                  </ul><a class="btn btn-block btn-default btn-rect" href="register.html">Sign up</a>
                </div>
              </div>
            </div>
            <div class="cell-md-4 cell-lg-3 cell-xl-2 offset-top-50 offset-lg-top-0">
              <!-- Planning Box type 3-->
              <div class="box-planning box-planning-type-3">
                <div class="box-planning-header bg-gray-darker context-dark">
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
                    <li><span class="text-bold">60GB</span><span class="text-dark">Bandwidth</span></li>
                    <li><span class="text-middle icon icon-xxs mdi mdi-check text-dollar-bill"></span></li>
                    <li><span class="text-bold">Unlimited</span><span class="text-dark">Databases</span></li>
                  </ul><a class="btn btn-block btn-default btn-rect" href="register.html">Sign up</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="shell offset-top-66 code-box-planning-3 text-left"></div>
        <!-- Section Plans Type 4-->
        <div class="shell offset-top-98 offset-lg-top-110">
          <h1>Plans Type 4</h1>
          <div class="divider bg-mantis"></div>
          <div class="range range-xs-bottom range-sm-center">
            <div class="cell-md-3">
              <!--.source-code(data-output="code-box-planning-4")-->
              <!-- Planning Box type 4-->
              <div class="box-planning box-planning-type-4">
                <div class="box-planning-header bg-mantis context-dark">
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
            <div class="cell-md-3 offset-top-50 offset-md-top-0">
              <!-- Planning Box type 4-->
              <div class="box-planning box-planning-type-4">
                <div class="box-planning-header bg-malibu context-dark">
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
            <div class="cell-md-3 offset-top-50 offset-md-top-0">
              <!-- Planning Box type 4-->
              <div class="box-planning box-planning-type-4 active">
                <div class="box-planning-header bg-saffron context-dark">
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
            <div class="cell-md-3 offset-top-50 offset-md-top-0">
              <!-- Planning Box type 4-->
              <div class="box-planning box-planning-type-4">
                <div class="box-planning-header bg-red context-dark">
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
        <div class="shell offset-top-66 code-box-planning-4 text-left"></div>
        <!-- Section Pricing Type 1-->
        <div class="shell offset-top-98 offset-lg-top-110">
          <h1>Pricing Type 1</h1>
          <div class="divider bg-mantis"></div>
          <div class="range range-xs-center range-xs-bottom offset-top-66">
            <div class="cell-md-6 text-left">
              <!-- Pricing Box type 1-->
              <ul class="box-pricing box-pricing-type-1 list-unstyled">
                <li class="box-pricing-item">
                  <div class="box-pricing-title text-uppercase text-spacing-120">
                    <div class="box-pricing-name text-bold">OLD TIMER'S BREAKFAST</div>
                    <div class="box-pricing-dots"></div>
                    <div class="box-pricing-price h5 text-bold">$22.00</div>
                  </div>
                  <div class="box-pricing-desc text-dark offset-top-10">( ( Two eggs cooked to order with grits, sawmill gravy, homemade buttermilk biscuits &amp; real butter ) )
                  </div>
                </li>
                <li class="box-pricing-item">
                  <div class="box-pricing-title text-uppercase text-spacing-120">
                    <div class="box-pricing-name text-bold">FRESH START SAMPLER</div>
                    <div class="box-pricing-dots"></div>
                    <div class="box-pricing-price h5 text-bold">$37.00</div>
                  </div>
                  <div class="box-pricing-desc text-dark offset-top-10">( ( Start your day with a mix of low fat vanilla yogurt, fresh seasonal fruit topped with our honey mix ) )
                  </div>
                </li>
                <li class="box-pricing-item">
                  <div class="box-pricing-title text-uppercase text-spacing-120">
                    <div class="box-pricing-name text-bold">DOUBLE MEAT BREAKFAST</div>
                    <div class="box-pricing-dots"></div>
                    <div class="box-pricing-price h5 text-bold">$42.00</div>
                  </div>
                  <div class="box-pricing-desc text-dark offset-top-10">( ( Three eggs cooked to order with a full order of bacon and sausage patties ) )
                  </div>
                </li>
                <li class="box-pricing-item">
                  <div class="box-pricing-title text-uppercase text-spacing-120">
                    <div class="box-pricing-name text-bold">CRAB &amp; AVOCADO BRUSCHETTA</div>
                    <div class="box-pricing-dots"></div>
                    <div class="box-pricing-price h5 text-bold">$19.00</div>
                  </div>
                  <div class="box-pricing-desc text-dark offset-top-10">( ( Fresh white&amp;brown crab, crunchy fennel, smashed avocado, yoghurt &amp; chilli ) )
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="shell offset-top-66 code-box-pricing text-left"></div>
      </main>
@endsection
@include('layout.footer')