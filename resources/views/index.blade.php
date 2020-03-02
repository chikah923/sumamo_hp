@extends('layout.common')

@include('layout.head')

@section('body_till_navbar')
<div class="page text-center">
      <div class="page-loader page-loader-variant-1">
        <div><img class='img-responsive' style='margin-top: -20px;margin-left: -18px;' width='330' height='67' src='images/intense/logo-big.png' alt=''/>
          <div class="offset-top-41 text-center">
            <div class="spinner"></div>
          </div>
        </div>
      </div>
      <!-- Page Head-->
      <header class="page-head slider-menu-position">
@endsection
@include('layout.navbar_light')

@section('top')
        <!--Swiper-->
        <div class="swiper-container swiper-slider" data-loop="true" data-autoplay="true" data-height="100vh" data-dragable="false" data-min-height="480px">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide" id="page-loader" data-slide-bg="website/images/intros/intro-04-1920x955.jpg" data-preview-bg="images/intros/intro-04-1920x955.jpg">
              <div class="swiper-caption swiper-parallax">
                <div class="swiper-slide-caption">
                  <div class="shell">
                    <div class="range range-lg-center">
                      <div class="cell-lg-12">
                        <h1><span class="big text-uppercase" data-caption-animate="fadeIn" data-caption-delay="700">Welcome to SUMAMO</span></h1>
                      </div>
                      <div class="cell-lg-10 offset-top-30">
                        <h4 class="hidden reveal-sm-block text-light" data-caption-animate="fadeIn" data-caption-delay="900">
                          The smartest and most flexible bootstrap template by TemplateMonster you've ever seen.
                          Create exactly what you need with our powerful bootstrap toolkit.
                        </h4>
                        <div class="group group-xl offset-top-20 offset-xs-top-50"><a class="btn btn-primary btn-lg btn-anis-effect" href="//ld-wp2.template-help.com/novi-builder/intense-builder/" data-caption-animate="fadeIn" data-caption-delay="1200"><span class="btn-text">Try builder now</span></a><a class="btn btn-default btn-lg btn-anis-effect" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense" data-caption-animate="fadeIn" data-caption-delay="1200"><span class="btn-text">Buy intense now</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-preview-bg="website/video/intro-video/intro-video-lg.jpg">
                      <div class="bg-vide" data-vide-bg="video/intro-video/intro-video-lg" data-vide-options="posterType: jpg">
                        <div class="swiper-caption swiper-parallax">
                          <div class="swiper-slide-caption">
                            <div class="shell">
                              <div class="range range-lg-center">
                                <div class="cell-lg-12">
                                  <h1><span class="big text-uppercase" data-caption-animate="fadeIn" data-caption-delay="700">Built as a framework</span></h1>
                                </div>
                                <div class="cell-lg-10 offset-top-30">
                                  <h4 class="hidden reveal-sm-block text-light" data-caption-animate="fadeIn" data-caption-delay="900">
                                    Intense was designed as extended version of bootstrap, built as a complex
                                    and flexible solution with a dozen of completely new
                                    utilities, components and plugins.
                                  </h4>
                                  <div class="group group-xl offset-top-20 offset-xs-top-50"><a class="btn btn-icon btn-icon-left btn-default btn-lg btn-anis-effect" href="ui-kit.html" data-caption-animate="fadeIn" data-caption-delay="1200"><span class="btn-text">See it in action</span></a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
            </div>
            <div class="swiper-slide" data-slide-bg="website/images/intros/intro-06-1920x955.jpg" data-preview-bg="images/intros/intro-06-1920x955.jpg">
              <div class="swiper-caption swiper-parallax">
                <div class="swiper-slide-caption">
                  <div class="shell">
                    <div class="range range-lg-center">
                      <div class="cell-lg-12">
                        <h1><span class="big text-uppercase" data-caption-animate="fadeIn" data-caption-delay="700">ULTRA sharp & RESPONSIVE</span></h1>
                      </div>
                      <div class="cell-lg-10 offset-top-30">
                        <h4 class="hidden reveal-sm-block text-light offset-bottom-0" data-caption-animate="fadeIn" data-caption-delay="900">
                          Beautiful and clean designs are optimized for all screen sizes
                          and types. Taste a new meaning of Retina Ready.
                        </h4>
                        <div class="group group-xl offset-top-20 offset-xs-top-50"><a class="btn btn-icon btn-icon-left btn-primary btn-lg btn-anis-effect" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense" data-caption-animate="fadeIn" data-caption-delay="1200"><span class="icon mdi mdi-cart-outline"></span><span class="btn-text">Buy intense now</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button swiper-button-prev swiper-parallax">
            <div class="preview">
              <div class="preview__img preview__img-3"></div>
              <div class="preview__img preview__img-2"></div>
              <div class="preview__img preview__img-1"></div>
            </div>
          </div>
          <div class="swiper-button swiper-button-next swiper-parallax">
            <div class="preview">
              <div class="preview__img preview__img-1"></div>
              <div class="preview__img preview__img-2"></div>
              <div class="preview__img preview__img-3"></div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
@endsection
@section('main')
      <!-- Page Contents-->
      <main class="page-content">
        <!-- Skills-->
        <section class="section-98" id="section-skills">
          <div class="shell-wide">
            <div class="range range-xs-center">
              <div class="cell-sm-10 cell-lg-12">
                <div class="range range-xs-center">
                  <div class="cell-md-3 cell-sm-5">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon linearicons-file-code text-mantis"></span>
                              <div class="offset-top-10"><span class="h1 text-bold counter" data-speed="1200" data-from="0" data-to="500"></span><span class="h1 text-bold">+</span></div>
                              <div class="h6 text-uppercase text-spacing-60 text-bold offset-top-14">html Templates</div>
                            </div>
                  </div>
                  <div class="cell-md-3 cell-sm-5 offset-top-66 offset-sm-top-0">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon linearicons-star text-malibu"></span>
                              <div class="offset-top-10"><span class="h1 text-bold counter" data-speed="1600" data-from="0" data-to="25"></span><span class="h1 text-bold">+</span></div>
                              <div class="h6 text-uppercase text-spacing-60 text-bold offset-top-14">niche templates</div>
                            </div>
                  </div>
                  <div class="cell-md-3 cell-sm-5 offset-top-66 offset-md-top-0">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon linearicons-palette text-carrot"></span>
                              <div class="offset-top-10">
                                <div class="h1 text-bold counter" data-speed="2000" data-from="0" data-to="10"></div>
                              </div>
                              <div class="h6 text-uppercase text-spacing-60 text-bold offset-top-14">different skins</div>
                            </div>
                  </div>
                  <div class="cell-md-3 cell-sm-5 offset-top-66 offset-md-top-0">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon linearicons-file-image text-red"></span>
                              <div class="offset-top-10"><span class="h1 text-bold counter" data-speed="2400" data-from="0" data-to="500"></span><span class="h1 text-bold">+</span></div>
                              <div class="h6 text-uppercase text-spacing-60 text-bold offset-top-14">psd files</div>
                            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-98 section-md-124 bg-lighter">
          <div class="shell">
            <div>
              <h2><span class="big">Control Your Home With One App</span></h2>
            </div>
            <h2 class="offset-top-10">with Busch ControlTouch</h2>
            <div class="offset-top-30 offset-md-top-66 text-md-left">
              <div class="range range-md-center range-xl-justify grid-group-md">
                <div class="cell-md-6 cell-lg-5">
                  <div class="unit unit-md-horizontal unit-md-middle">
                    <div class="unit-left"><img src="images/landing/landing-96-420x316.png" alt></div>
                    <div class="unit-body">
                      <h3 class="text-regular">How convinient it would be if you could...</h3>
                    </div>
                  </div>
                  <br>
                  <li>Turn on/off all home lights from outside of your home?</li>
                  <li>Turn on/off the air conditioner and the heater from outside of your home?</li>
                  <li>Response to the doorbell outside of your home?</li>
                  <li>Turn your home into a theatre mode with a single button press?</li>
                  <p class="offset-top-20">All of these with one single app!</p>
                  <div class="offset-top-41"><a class="btn btn-primary btn-md btn-anis-effect" href="//ld-wp2.template-help.com/novi-builder/intense-builder/"><span class="btn-text">Try App Demo</span></a></div>
                </div>
                <div class="cell-md-6">
                  <div class="embed-responsive embed-responsive-16by9">
                    <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e_TCFkRDmls" frameborder="0" allowfullscreen></iframe> -->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/f0XY_77muJo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Extremely Responsive and Retina-->
        <section class="section-66 bg-lighter">
          <div class="shell-wide">
            <div class="range range-xs-center grid-group-md">
              <!-- <div class="cell-sm-10 cell-md-6 cell-xl-7 reveal-sm-block"><img class="img-responsive wow fadeInLeft reveal-sm-inline-block" src="images/landing/landing-97-780x462.png" width="780" height="462" alt data-wow-delay="0.3s"></div> -->
              <div class="cell-sm-10 cell-md-6 cell-xl-7 reveal-sm-block"><iframe width="560" height="315" src="https://www.youtube.com/embed/EeBnG8aWH7Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
              <div class="cell-sm-8 cell-md-6 cell-xl-4 text-md-left offset-md-top-41">
                <h1>Control your Home <br class="veil reveal-lg-block">with your Voice</h1>
                <p>You can control all of the electronic elements <br class="veil reveal-lg-block">with your voice command, using Siri, Amazon Alexa and Google Home</p>
              </div>
            </div>
          </div>
        </section>
        <!-- Highcharts-->
        <section class="section-98 section-sm-top-110 section-sm-bottom-124 bg-lighter section-graph-demonstration">
          <div class="container">
            <h1>Highcharts</h1>
            <hr class="divider bg-mantis">
            <div class="offset-top-66">
              <div class="isotope-wrap">
                <div class="row">
                  <!-- Isotope Filters-->
                  <div class="col-lg-3">
                    <div class="isotope-filters isotope-filters-vertical isotope-filter-collapse-lg">
                      <h4 class="text-uppercase text-bold isotope-filters-title offset-top-34"> </h4>
                      <!-- <ul class="list-inline list-inline-sm"> -->
                        <!-- <li class="section-relative"> -->
                          <!-- <button class="isotope-filters-toggle btn btn-sm btn-default" data-custom-toggle="isotope-higcharts" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button> -->
                          <!-- <ul class="list-sm-inline isotope-filters-list" id="isotope-higcharts"> -->
                            <!-- <li><a class="text-bold active" data-isotope-filter="Basic Column Chart" data-isotope-group="gallery" href="#">Basic Column Chart</a></li>
                            <li><a class="text-bold" data-isotope-filter="Line Chart with Submenu" data-isotope-group="gallery" href="#">Line Chart with Submenu</a></li>
                            <li><a class="text-bold" data-isotope-filter="Column Chart with Filter" data-isotope-group="gallery" href="#">Column Chart with Filter</a></li>
                            <li><a class="text-bold" data-isotope-filter="Pie Chart" data-isotope-group="gallery" href="#">Pie Chart</a></li>
                            <li><a class="text-bold" data-isotope-filter="Column Graph with alt Filter" data-isotope-group="gallery" href="#">Column Graph with alt Filter</a></li> -->
                            <li><a class="text-bold" data-isotope-filter="Area Graph with Filter" data-isotope-group="gallery" href="#">Comments</a></li>
                            <!-- <li><a class="text-bold" data-isotope-filter="Bar Chart with Filter" data-isotope-group="gallery" href="#">Bar Chart with Filter</a></li>
                            <li><a class="text-bold" data-isotope-filter="Area Chart with Filter" data-isotope-group="gallery" href="#">Area Chart with Filter</a></li> -->
                          <!-- </ul> -->
                        <!-- </li> -->
                      <!-- </ul> -->
                    </div>
                  </div>
                  <!-- Isotope Content-->
                  <div class="col-lg-9 offset-lg-top-0 offset-top-34">
                    <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery">
                      <div class="row">
                        <!--Isotope item-->
                        <div class="col-xs-12 isotope-item" data-filter="Area Graph with Filter">
                          <!-- Filterable Area Graph with Filter-->
                          <div class="bg-white shadow-drop-sm section-34 inset-left-10 inset-right-10 inset-md-left-30 inset-md-right-30 section-graph-demonstration">
                            <div>
                              <h3 class="text-left text-darker">Smart Home Market of the World and Japan</h3>
                            </div>
                            <div class="offset-top-41">
                              <div class="chart-legend" data-chart-id="#high-line3">
                                <div class="group-sm text-md-left"><a class="legend-item btn btn-sm btn-deluge" href="#" data-chart-id="0">Data 1</a><a class="legend-item btn btn-info btn-sm" href="#" data-chart-id="1">Data 2</a></div>
                              </div>
                              <div class="offset-top-14 graph-content">
                                <div class="higchart" id="high-line3" data-graph-object="{&quot;credits&quot;:false,&quot;colors&quot;:[&quot;#695999&quot;,&quot;#64aae1&quot;],&quot;chart&quot;:{&quot;backgroundColor&quot;:&quot;transparent&quot;,&quot;className&quot;:&quot;br-r&quot;,&quot;type&quot;:&quot;line&quot;,&quot;zoomType&quot;:&quot;x&quot;,&quot;panning&quot;:true,&quot;panKey&quot;:&quot;shift&quot;,&quot;marginTop&quot;:25,&quot;marginRight&quot;:1},&quot;title&quot;:{&quot;text&quot;:null},&quot;xAxis&quot;:{&quot;gridLineColor&quot;:&quot;#EEE&quot;,&quot;lineColor&quot;:&quot;#EEE&quot;,&quot;tickColor&quot;:&quot;#EEE&quot;,&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#9b9b9b&quot;,&quot;fontSize&quot;:&quot;12px&quot;,&quot;fontWeight&quot;:&quot;400&quot;,&quot;fontFamily&quot;:&quot;Lato&quot;}},&quot;categories&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;,&quot;Sep&quot;,&quot;Oct&quot;,&quot;Nov&quot;,&quot;Dec&quot;]},&quot;yAxis&quot;:{&quot;min&quot;:0,&quot;tickInterval&quot;:5,&quot;gridLineColor&quot;:&quot;#EEE&quot;,&quot;title&quot;:{&quot;text&quot;:null},&quot;labels&quot;:{&quot;style&quot;:{&quot;color&quot;:&quot;#9b9b9b&quot;,&quot;fontSize&quot;:&quot;12px&quot;,&quot;fontWeight&quot;:&quot;400&quot;,&quot;fontFamily&quot;:&quot;Lato&quot;}}},&quot;plotOptions&quot;:{&quot;spline&quot;:{&quot;lineWidth&quot;:3},&quot;area&quot;:{&quot;fillOpacity&quot;:0.2}},&quot;legend&quot;:{&quot;enabled&quot;:false},&quot;series&quot;:[{&quot;name&quot;:&quot;世界&quot;,&quot;data&quot;:[3,6,8,10,11,13.16,18.20,21.22,23,25,26,27.28]},{&quot;name&quot;:&quot;日本&quot;,&quot;data&quot;:[0.0,0.1,2,2,3,6,8,12,13,14.5,16,17]}]}" style="width: 100%; height: 360px; margin: 0 auto;"></div>
                              </div>
                            </div>
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
      </main>
@endsection
@include('layout.footer')
