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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-bulletin-board icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">SUMAMO Gallery</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.html">Home</a></li>
                <li>Gallery
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
        <!-- Portfolio Masonry-->
        <section class="section-98 section-sm-110">
          <div class="shell">
                    <div class="isotope-wrap">
                      <div class="row">
                        <!-- Isotope Filters-->
                        <div class="col-lg-12">
                          <div class="isotope-filters isotope-filters-horizontal">
                            <ul class="list-inline list-inline-sm">
                              <li class="veil-md">
                                <p>Choose your category:</p>
                              </li>
                              <li class="section-relative">
                                <button class="isotope-filters-toggle btn btn-sm btn-default" data-custom-toggle="isotope-1" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
                                <ul class="list-sm-inline isotope-filters-list" id="isotope-1">
                                  <li><a class="text-bold active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All</a></li>
                                  <li><a class="text-bold" data-isotope-filter="Clients" data-isotope-group="gallery" href="#">Clients</a></li>
                                  <li><a class="text-bold" data-isotope-filter="Business" data-isotope-group="gallery" href="#">Business</a></li>
                                  <li><a class="text-bold" data-isotope-filter="Marketing" data-isotope-group="gallery" href="#">Marketing</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <!-- Isotope Content-->
                        <div class="col-lg-12 offset-top-34">
                          <div class="isotope" data-isotope-layout="masonry" data-isotope-group="gallery">
                            <div class="row" data-photo-swipe-gallery="gallery">
                              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Clients"><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="images/portfolio/portfolio-15-1170x600.jpg">
                                          <figure><img width="270" height="420" src="images/portfolio/portfolio-15-270x420.jpg" alt="">
                                          </figure></a>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 isotope-item" data-filter="Business"><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="images/portfolio/portfolio-18-1170x600.jpg">
                                          <figure><img width="570" height="420" src="images/portfolio/portfolio-18-570x420.jpg" alt="">
                                          </figure></a>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Marketing"><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="images/portfolio/portfolio-14-1170x600.jpg">
                                          <figure><img width="270" height="270" src="images/portfolio/portfolio-14-270x270.jpg" alt="">
                                          </figure></a>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Business"><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="images/portfolio/portfolio-20-1170x600.jpg">
                                          <figure><img width="270" height="270" src="images/portfolio/portfolio-20-270x270.jpg" alt="">
                                          </figure></a>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 isotope-item" data-filter="Clients"><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="images/portfolio/portfolio-17-1170x600.jpg">
                                          <figure><img width="570" height="270" src="images/portfolio/portfolio-17-570x270.jpg" alt="">
                                          </figure></a>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Marketing"><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="images/portfolio/portfolio-16-1170x600.jpg">
                                          <figure><img width="270" height="270" src="images/portfolio/portfolio-16-270x270.jpg" alt="">
                                          </figure></a>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Marketing"><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="images/portfolio/portfolio-10-1170x600.jpg">
                                          <figure><img width="270" height="420" src="images/portfolio/portfolio-10-270x420.jpg" alt="">
                                          </figure></a>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Business"><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="images/portfolio/portfolio-04-1170x600.jpg">
                                          <figure><img width="270" height="270" src="images/portfolio/portfolio-04-270x270.jpg" alt="">
                                          </figure></a>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 isotope-item" data-filter="Clients"><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="images/portfolio/portfolio-19-1170x600.jpg">
                                          <figure><img width="570" height="270" src="images/portfolio/portfolio-19-570x270.jpg" alt="">
                                          </figure></a>
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