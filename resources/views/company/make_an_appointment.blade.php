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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-calendar-clock icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Visit Us</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/company">Company</a></li>
                <li>Visit Us
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
        <!-- Make an Appointment-->
        <section class="section-98 section-sm-110">
          <div class="shell">
            <h1>Make an Appointment</h1>
            <hr class="divider bg-mantis">
            <div class="range range-xs-center">
              <div class="cell-sm-8 cell-md-7 cell-lg-8">
                <!-- RD Mailform-->
                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="range">
                    <div class="cell-lg-6">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="make-appointment-name">Name:</label>
                        <input class="form-control" id="make-appointment-name" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-lg-6 offset-top-20 offset-lg-top-0">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="make-appointment-email">Email:</label>
                        <input class="form-control" id="make-appointment-email" type="text" name="email" data-constraints="@Required @Email">
                      </div>
                    </div>
                    <div class="cell-lg-6 offset-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="make-appointment-date">Date:</label>
                        <input class="form-control" id="make-appointment-date" type="text" name="date" data-constraints="@Required" data-time-picker="date">
                      </div>
                    </div>
                    <div class="cell-lg-6 offset-top-20">
                      <div class="range offset-top-0">
                        <div class="cell-xs-6">
                          <div class="form-group"> 
                            <label class="form-label form-label-outside" for="make-appointment-time-start">Required Time Interval Start:</label>
                            <input class="form-control" id="make-appointment-time-start" type="text" name="time-start" data-constraints="@Required" data-time-picker="time">
                          </div>
                        </div>
                        <div class="cell-xs-6">
                          <div class="form-group">
                            <label class="form-label form-label-outside" for="make-appointment-time-end">Required Time Interval End:</label>
                            <input class="form-control" id="make-appointment-time-end" type="text" name="tim-end" data-constraints="@Required" data-time-picker="time">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="cell-lg-12 offset-top-20">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="make-appointment-message">Message:</label>
                        <textarea class="form-control" id="make-appointment-message" name="message" data-constraints="@Required" style="height: 150px;"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="text-center text-lg-left offset-top-30">
                    <button class="btn btn-primary" type="submit">Make an appointment</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')