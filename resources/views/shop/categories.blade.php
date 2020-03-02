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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-filter-variant icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Shop</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
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
        <!--Section Themes Filter-->
        <section class="section-top-66 section-bottom-34">
          <div class="shell">
            <form class="text-left">
              <h5 class="text-bold">Your filters</h5>
              <div class="range range-xs-center offset-top-0">
                <div class="cell-sm-6 cell-md-4">
                  <div class="form-group">
                    <label class="form-label form-label-outside" for="form-filter-location">Types:</label>
                    <select class="form-control" id="form-filter-location" name="location" data-minimum-results-for-search="Infinity">
                      <option value="1">any</option>
                      <option value="2">HTML5 Website Templates</option>
                      <option value="3">WordPress Themes</option>
                      <option value="4">Joomla Templates</option>
                    </select>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-20 offset-sm-top-0">
                  <div class="form-group">
                    <label class="form-label form-label-outside" for="form-filter-property-status">Category:</label>
                    <select class="form-control" id="form-filter-property-status" name="property-status" data-minimum-results-for-search="Infinity">
                      <option value="1">any</option>
                      <option value="2">Business & Services</option>
                      <option value="3">Fashion & Beauty</option>
                      <option value="4">Real Estate</option>
                      <option value="5">Creative</option>
                      <option value="6">Corporate</option>
                      <option value="7">Specialty Pages</option>
                      <option value="8">Retail</option>
                      <option value="9">Entertainment</option>
                      <option value="10">Personal</option>
                    </select>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-20 offset-md-top-0">
                  <div class="form-group">
                    <label class="form-label form-label-outside" for="form-filter-property-type">Sort By:</label>
                    <select class="form-control" id="form-filter-property-type" name="property-type" data-minimum-results-for-search="Infinity">
                      <option value="1">Newest items</option>
                      <option value="2">Trending items</option>
                      <option value="3">Best sellers</option>
                      <option value="4">Best rated</option>
                      <option value="5">Price: low to high</option>
                      <option value="6">Price: high to low</option>
                    </select>
                  </div>
                </div>
                <div class="range-spacer offset-top-20 veil reveal-md-flex"></div>
                <div class="cell-sm-6 cell-md-6 offset-top-20 offset-md-top-0">
                  <div class="range">
                    <div class="cell-sm-6">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="form-filter-sorting">Date Range</label>
                        <select class="form-control" id="form-filter-sorting" name="sorting" data-minimum-results-for-search="Infinity">
                          <option value="1">Today (5)</option>
                          <option value="2">Yesterday (4)</option>
                          <option value="2">This Week (4)</option>
                          <option value="2">Last Week (20)</option>
                          <option value="2">This Month (4)</option>
                          <option value="2">Last Month (103)</option>
                          <option value="2">Last 6 Months (709)</option>
                          <option value="2">Last Year (3224)</option>
                        </select>
                      </div>
                    </div>
                    <div class="cell-sm-6 offset-top-20 offset-sm-top-0">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="form-filter-min-bath">Rating:</label>
                        <select class="form-control" id="form-filter-min-bath" name="min-bath" data-minimum-results-for-search="Infinity">
                          <option value="1">Show all</option>
                          <option value="2">1 star and higher</option>
                          <option value="3">2 star and higher</option>
                          <option value="4">3 star and higher</option>
                          <option value="5">4 star and higher</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-3 offset-top-20 offset-md-top-0">
                  <div class="form-group-multiple">
                    <div class="form-group">
                      <label class="form-label form-label-outside" for="form-filter-price-from"><span class="veil reveal-sm-block">Price (USD):</span><span class="veil-sm">Price from (USD):</span></label>
                      <input class="form-control" id="form-filter-price-from" type="text" name="form-filter-price-from" data-constraints="@Required @IsNumeric">
                    </div>
                    <div class="form-group">
                      <label class="form-label form-label-outside" for="form-filter-price-to"> &nbsp;<span class="veil-sm">Price to (USD):</span></label>
                      <input class="form-control" id="form-filter-price-to" type="text" name="form-filter-price-to" data-constraints="@Required @IsNumeric">
                    </div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-3 offset-top-20 offset-md-top-0">
                  <div class="range range-xs-bottom">
                    <div class="cell-sm-6">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="form-filter-min-beds">Sales:</label>
                        <select class="form-control" id="form-filter-min-beds" name="min-beds" data-minimum-results-for-search="Infinity">
                          <option value="1">No sales</option>
                          <option value="2">Low</option>
                          <option value="3">Medium</option>
                          <option value="4">High</option>
                          <option value="5">Top sellers</option>
                        </select>
                      </div>
                    </div>
                    <div class="cell-sm-6">
                      <button class="btn btn-primary btn-block" type="button">search</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </section>
        <!--Section Themes catalog-->
        <section class="section-bottom-66 section-sm-bottom-110 section-top-34 section-md-top-66">
          <div class="shell">
            <div class="range">
              <div class="cell-sm-6 cell-md-4"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/products/product-bakery-370x230.jpg') }}" width="370" height="230" alt="">
                <div class="text-sm-left offset-top-24">
                  <div>
                    <h5 class="text-bold text-primary"><a href="//www.templatemonster.com/website-templates/bakery-multipurpose-website-template-58900.html?utm_source=livedemo&amp;utm_medium=themecategorylink&amp;utm_campaign=intense">Bakery Multipurpose Website Template</a></h5>
                  </div>
                  <h6 class="offset-top-10"> Single site license - $75</h6>
                  <ul class="list-inline list-inline-dashed text-dark">
                    <li>Food & Restaurant</li>
                    <li>Food & Drink Templates</li>
                    <li>Bakery Templates</li>
                  </ul>
                  <div>
                    <p>Bakery is a multipurpose Baking Website Template designed with a hint of vintage to better match its topic. This template comes with a full spectrum of page types: landings, specific-purpose pages such as 404 and About Us, blog and eCommerce layouts, and many more.</p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-66 offset-sm-top-0"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/products/products-tartup-370x230.jpg') }}" width="370" height="230" alt="">
                <div class="text-sm-left offset-top-24">
                  <div>
                    <h5 class="text-bold text-primary"><a href="//www.templatemonster.com/website-templates/responsive-website-template-58730.html?utm_source=livedemo&amp;utm_medium=themecategorylink&amp;utm_campaign=intense">Startup - Multipurpose Website Template</a></h5>
                  </div>
                  <h6 class="offset-top-10"> Single site license - $75</h6>
                  <ul class="list-inline list-inline-dashed text-dark">
                    <li>Sports, Outdoors & Travel</li>
                    <li>Sport Templates</li>
                  </ul>
                  <div>
                    <p>This is an HTML Multipurpose Theme, which means that you can build absolutely everything on its basis. The theme has a fixed position menu that sticks to the top of the page when you begin to scroll down.</p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-66 offset-sm-top-50 offset-md-top-0"><img class="img-responsive reveal-inline-block" src="images/products/products-modicate-370x230.jpg" width="370" height="230" alt="">
                <div class="text-sm-left offset-top-24">
                  <div>
                    <h5 class="text-bold text-primary"><a href="//www.templatemonster.com/website-templates/58434.html?utm_source=livedemo&amp;utm_medium=themecategorylink&amp;utm_campaign=intense">Modicate Multipurpose Website Template</a></h5>
                  </div>
                  <h6 class="offset-top-10"> Single site license - $75</h6>
                  <ul class="list-inline list-inline-dashed text-dark">
                    <li>Website Templates </li>
                    <li>Business & Services</li>
                  </ul>
                  <div>
                    <p>Modicate is a modern, multipurpose HTML theme built with Twitter Bootstrap 3.x framework. The template comes with 58 ready made unique pages, various headers, footers and content block allowing to create eye catching and truly flexible websites for any purpose and project.</p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-66 offset-sm-top-50"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/products/product-construction-370x230.jpg') }}" width="370" height="230" alt="">
                <div class="text-sm-left offset-top-24">
                  <div>
                    <h5 class="text-bold text-primary"><a href="//www.templatemonster.com/website-templates/58533.html?utm_source=livedemo&amp;utm_medium=themecategorylink&amp;utm_campaign=intense">Construction Multipurpose Website Template</a></h5>
                  </div>
                  <h6 class="offset-top-10"> Single site license - $75</h6>
                  <ul class="list-inline list-inline-dashed text-dark">
                    <li>Design</li>
                    <li>Architecture</li>
                    <li>Construction Company Templates</li>
                  </ul>
                  <div>
                    <p>If you are looking for features rich industrial bootstrap theme we highly recommend to take a closer look at Construction. The theme is built with Twitter Bootstrap 3 framework that guarantees great performance at any device with any screen resolution.</p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-66 offset-sm-top-50"><img class="img-responsive reveal-inline-block" src="images/products/product-grand-vector-370x230.jpg" width="370" height="230" alt="">
                <div class="text-sm-left offset-top-24">
                  <div>
                    <h5 class="text-bold text-primary"><a href="//www.templatemonster.com/website-templates/vector-grand-website-template-58530.html?utm_source=livedemo&amp;utm_medium=themecategorylink&amp;utm_campaign=intense">Grand Vector - Design Studio Multipurpose Website Template</a></h5>
                  </div>
                  <h6 class="offset-top-10"> Single site license - $75</h6>
                  <ul class="list-inline list-inline-dashed text-dark">
                    <li>Website Templates</li>
                    <li>Business & Services</li>
                  </ul>
                  <div>
                    <p>This Manager Website Template offers you literally endless possibilities for building a unique website with cutting-edge design, clean professional code and lots of pre-designed pages for all kinds of businesses.</p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-66 offset-sm-top-50"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/products/product-organic-370x230.jpg') }}" width="370" height="230" alt="">
                <div class="text-sm-left offset-top-24">
                  <div>
                    <h5 class="text-bold text-primary"><a href="//www.templatemonster.com/website-templates/organic-agriculture-farm-multipurpose-website-template-58580.html?utm_source=livedemo&amp;utm_medium=themecategorylink&amp;utm_campaign=intense">Organic - Agriculture Farm Multipurpose Website Template</a></h5>
                  </div>
                  <h6 class="offset-top-10"> Single site license - $75</h6>
                  <ul class="list-inline list-inline-dashed text-dark">
                    <li>Business & Services</li>
                    <li>Agriculture Templates</li>
                  </ul>
                  <div>
                    <p>Organic Agricultural Farm is a fully responsive multipurpose website template that can be used for farming, industrial, business or any other web project. Designed as per the latest web trends, the template features a full-width header video, which captivates the users' attention once they land on your site.</p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-66 offset-sm-top-50"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/products/product-transporation-370x230.jpg') }}" width="370" height="230" alt="">
                <div class="text-sm-left offset-top-24">
                  <div>
                    <h5 class="text-bold text-primary"><a href="//www.templatemonster.com/website-templates/cargo-multipurpose-transportation-website-template-58899.html?utm_source=livedemo&amp;utm_medium=themecategorylink&amp;utm_campaign=intense">Cargo - Multipurpose Transportation Website Template</a></h5>
                  </div>
                  <h6 class="offset-top-10"> Single site license - $75</h6>
                  <ul class="list-inline list-inline-dashed text-dark">
                    <li>Business & Services</li>
                    <li>Transportation Templates</li>
                  </ul>
                  <div>
                    <p>Want to stand out among your peers? An outstanding website design is what you need. Try out this responsive Transportation Website Template and see for yourself that modern web technologies are beneficial for any industry.</p>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-66 offset-sm-top-50"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/products/products-king-news-370x230.jpg') }}" width="370" height="230" alt="">
                <div class="text-sm-left offset-top-24">
                  <div>
                    <h5 class="text-bold text-primary"><a href="http://www.templatemonster.com/website-templates/king-news-multipurpose-website-template-58731.html?utm_source=livedemo&amp;utm_medium=themecategorylink&amp;utm_campaign=intense">King News - Multipurpose Website Template</a></h5>
                  </div>
                  <h6 class="offset-top-10"> Single site license - $75</h6>
                  <ul class="list-inline list-inline-dashed text-dark">
                    <li>Business & Services</li>
                    <li>Media Templates</li>
                    <li>News Portal Templates</li>
                  </ul>
                  <div>
                    <p>KingNews is a multipurpose HTML template for blogs and magazines. Its fully responsive layout was built with Bootstrap 3.3, ensuring that your website will adapt flawlessly to any screen size and resolution.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offset-top-66 text-center">
                      <!-- Classic Pagination-->
                      <nav>
                        <ul class="pagination-classic">
                          <li><a href="#">Prev</a></li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                      </nav>
            </div>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')