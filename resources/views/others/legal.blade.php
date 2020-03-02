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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="icon-lg mdi mdi-format-line-spacing icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Legal</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li>Legal
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
      <main class="page-content section-98 section-sm-110">
        <!-- Classic Tabs-->
        <section>
          <div class="shell">
            <h1>Classic Tabs</h1>
            <hr class="divider bg-mantis">
            <div class="offset-sm-top-66 text-left">
              <!-- Responsive-tabs-->
              <div id="parentHorizontalTab">
                <div class="responsive-tabs responsive-tabs-classic" data-type="horizontal">
                  <ul class="resp-tabs-list tabs-1 text-center tabs-group-default tab_identifier_parent" data-group="tabs-group-default">
                      <li>User License Agreement</li>
                      <li>Terms of Use</li>
                      <li>Privacy Policy</li>
                      <li>Warranty</li>
                  </ul>
                  <div class="resp-tabs-container text-left tabs-group-default tab_identifier_parent" data-group="tabs-group-default">
                    <div>
                      <p>  
                        <p class="big text-bold">Our professional services are the keys to your success</p>
                        <p>Nowadays, almost everyone has a website. Basically, this is a business card that you present every visitor or partner with. So, the better it is designed the more likely you can expect your further cooperation. The content on your website is important as well.</p>
                        <p>The information should be not only well-organized and easy to read, but it should be also presented in a visually pleasing manner, thus making the process of reading an enjoyable journey. Adorn posts with bold imagery, and users will get more interested and involved.</p>
                        <div id="ChildVerticalTab_1">
                          <div class="responsive-tabs responsive-tabs-classic responsive-tabs-classic-vertical" data-type="vertical">
                            <ul class="resp-tabs-list tab_identifier_child">
                              <li> あ</li>
                              <li> い </li>
                              <li> う </li>
                            </ul>
                            <div class="resp-tabs-container tab_identifier_child">
                              <div > <p>わー</p> </div>
                              <div> <p>え </p></div>
                            </div>
                          </div>
                        </div>
                      </p>
                    </div>

                    <div>
                        <p>The information should be not only well-organized and easy to read, but it should be also presented in a visually pleasing manner, thus making the process of reading an enjoyable journey. Adorn posts with bold imagery, and users will get more interested and involved.</p>
                        <div id="ChildTab">
                        <div class="responsive-tabs responsive-tabs-classic responsive-tabs-classic-vertical" data-type="vertical">
                        <ul class="resp-tabs-list tab_identifier_child">
                            <li> か </li>
                            <li> き </li>
                            <li> く </li>
                        </ul>
                        </div>  
                        <div class="resp-tabs-container tab_identifier_child">
                            <div> む </div>
                            <div> ろ </div>
                        </div>
                        </div>
                    </div>
                    <div>
                        <p>Nowadays, almost everyone has a website. Basically, this is a business card that you present every visitor or partner with. So, the better it is designed the more likely you can expect your further cooperation. The content on your website is important as well.</p>
                    </div>
                    <div>
                        <p>Nowadays, almost everyone has a website. Basically, this is a business card that you present every visitor or partner with. So, the better it is designed the more likely you can expect your further cooperation. The content on your website is important as well.</p>
                        <p></p>The information should be not only well-organized and easy to read, but it should be also presented in a visually pleasing manner, thus making the process of reading an enjoyable journey. Adorn posts with bold imagery, and users will get more interested and involved.
                    </div>
                    </div>
                </div>
              </div>  
            </div>
          </div>
        </section>
        <!-- Classic Vertical Tabs-->
        <section class="offset-top-98">
          <div class="shell">
            <h1>Classic Vertical Tabs</h1>
            <hr class="divider bg-mantis">
            <div class="offset-sm-top-66 text-left">
              <!-- Responsive-tabs-->
              <div class="responsive-tabs responsive-tabs-classic responsive-tabs-classic-vertical" data-type="vertical">
                <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                  <li>Toolkit Core</li>
                  <li>UI Kit</li>
                  <li>Plugins</li>
                  <li>Documentation</li>
                </ul>
                <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                  <div>
                    <p class="big text-bold">Our professional services are the keys to your success</p>
                    <p>Nowadays, almost everyone has a website. Basically, this is a business card that you present every visitor or partner with. So, the better it is designed the more likely you can expect your further cooperation. The content on your website is important as well.</p>
                    <p>The information should be not only well-organized and easy to read, but it should be also presented in a visually pleasing manner, thus making the process of reading an enjoyable journey. Adorn posts with bold imagery, and users will get more interested and involved.</p>
                  </div>
                  <div>
                    <p>The information should be not only well-organized and easy to read, but it should be also presented in a visually pleasing manner, thus making the process of reading an enjoyable journey. Adorn posts with bold imagery, and users will get more interested and involved.</p>
                  </div>
                  <div>
                    <p>Nowadays, almost everyone has a website. Basically, this is a business card that you present every visitor or partner with. So, the better it is designed the more likely you can expect your further cooperation. The content on your website is important as well.</p>
                  </div>
                  <div>
                    <p>Nowadays, almost everyone has a website. Basically, this is a business card that you present every visitor or partner with. So, the better it is designed the more likely you can expect your further cooperation. The content on your website is important as well.</p>
                    <p></p>The information should be not only well-organized and easy to read, but it should be also presented in a visually pleasing manner, thus making the process of reading an enjoyable journey. Adorn posts with bold imagery, and users will get more interested and involved.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')