@section('navbar_light')
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default rd-navbar-light" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a href="/"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src="{{ asset('/website/images/intense/logo-dark.png') }}" alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="/"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src="{{ asset('/website/images/intense/logo-dark.png') }}" alt=''/></a></div>
                    <div class="form-search-wrap">
                      <!-- RD Search Form-->
                      <form class="form-search rd-search" action="search-results.html" method="GET">
                        <div class="form-group">
                          <label class="form-label form-search-label form-label-sm" for="rd-navbar-form-search-widget">Search</label>
                          <input class="form-search-input input-sm form-control form-control-gray-lightest input-sm" id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="off"/>
                        </div>
                        <button class="form-search-submit" type="submit"><span class="mdi mdi-magnify"></span></button>
                      </form>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li><a href="/"><span>HOME</span></a>
                      </li>
                      <li><a href="/company"><span>COMPANY</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="/company/about_us"><span class="text-middle">About Us</span></a>
                          </li>
                          <li><a href="/company/why_us"><span class="text-middle">Why Us</span></a>
                          </li>
                          <li><a href="/company/contact_us"><span class="text-middle">Contact Us</span></a>
                          </li>
                          <li><a href="/company/visit_us"><span class="text-middle">Visit Us</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="/zones"><span>ZONES</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="/zones/residential"><span class="text-middle">Residential</span></a>
                          </li>
                          <li><a href="/zones/corporate"><span class="text-middle">Corperate</span></a>
                          </li>
                          <li><a href="/zones/hospitality"><span class="text-middle">Hospitality</span></a>
                          </li>
                          <li><a href="/zones/commercial"><span class="text-middle">Commercial</span></a>
                          </li>
                          <li><a href="/zones/education"><span class="text-middle">Education</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="/solutions"><span>Solutions</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="/solutions/automation"><span class="text-middle">Automation</span></a>
                          </li>
                          <li><a href="/solutions/entertainment"><span class="text-middle">Entertainment</span></a>
                          </li>
                          <li><a href="/solutions/lightning"><span class="text-middle">Lightning</span></a>
                          </li>
                          <li><a href="/solutions/security"><span class="text-middle">Security</span></a>
                          </li>
                          <li><a href="/solutions/sensors"><span class="text-middle">Sensors</span></a>
                          </li>
                          <li><a href="/solutions/electronics"><span class="text-middle">Electronics</span></a>
                          </li>
                          <li><a href="/solutions/networking"><span class="text-middle">Networking</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="/plans"><span>PLANS</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="/plans/basic"><span class="text-middle">Basic</span></a>
                          </li>
                          <li><a href="/plans/lite"><span class="text-middle">Lite</span></a>
                          </li>
                          <li><a href="/plans/standard"><span class="text-middle">Standard</span></a>
                          </li>
                          <li><a href="/plans/advanced"><span class="text-middle">Advanced</span></a>
                          </li>
                          <li><a href="/plans/elite"><span class="text-middle">Elite</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="/services"><span>SERVICES</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="/services/consultancy"><span class="text-middle">Consultancy</span></a>
                          </li>
                          <li><a href="/services/designing"><span class="text-middle">Designing</span></a>
                          </li>
                          <li><a href="/services/training_and_skills"><span class="text-middle">Training&Skills</span></a>
                          </li>
                          <li><a href="/services/maintainance"><span class="text-middle">Maintainance</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="/shop"><span>SHOP</span></a>
                      </li>
                      <li><a href="/blog"><span>BLOG</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-inner,.rd-navbar-search" href="#"><span></span></a>
                  <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" method="GET">
                    <div class="form-group">
                      <label class="form-label" for="rd-navbar-search-form-input">Type and hit enter...</label>
                      <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                    </div>
                    <!--button(type="submit").rd-navbar-search-form-submit.mdi.mdi-magnify-->
                  </form>
                  <!--div.rd-navbar-live-search-results-->
                  <!--button(data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-inner, .rd-navbar-live-search-results").rd-navbar-search-toggle-->
                  <!--  span-->
                </div>
                <!--RD Navbar shop-->
                <div class="rd-navbar-cart-wrap"><a class="rd-navbar-cart mdi" href="#" data-rd-navbar-toggle=".rd-navbar-cart-dropdown"><span></span></a>
                  <div class="rd-navbar-cart-dropdown">
                    <ul class="rd-navbar-list-products">
                      <li>
                        <div class="rd-navbar-product-image"><img src="{{ asset('/website/images/shop/product-01-60x60.png') }}" alt=""/></div>
                        <div class="rd-navbar-product-caption">
                          <h6 class="rd-navbar-product-title"><a href="shop-single-product-left-sidebar.html">Fashion model new</a></h6>
                          <p class="rd-navbar-product-price">$129.99</p>
                        </div><a class="mdi mdi-window-close rd-navbar-product-remove" href="#"></a>
                      </li>
                      <li>
                        <div class="rd-navbar-product-image"><img src="{{ asset('/website/images/shop/product-01-60x60-3.png') }}" alt=""/></div>
                        <div class="rd-navbar-product-caption">
                          <h6 class="rd-navbar-product-title"><a href="shop-single-product-left-sidebar.html">Fashion model new 2</a></h6>
                          <p class="rd-navbar-product-price">$69.99</p>
                        </div><a class="mdi mdi-window-close rd-navbar-product-remove" href="#"></a>
                      </li>
                    </ul>
                    <div class="rd-navbar-cart-total">
                      <h6 class="rd-navbar-cart-total-title">Cart subtotal</h6><span class="rd-navbar-cart-total-price">$199.98</span>
                    </div>
                    <div class="text-center"><a class="btn btn-rect btn-sm btn-primary btn-icon btn-icon-left" href="shop-cart.html"><span class="icon mdi mdi-lock"></span>Go to checkout</a></div>
                  </div>
                </div>
                <div class="rd-navbar-btn-wrap"><a class="btn btn-primary btn-anis-effect" href="/login"><span class="btn-text">LOGIN</span></a></div>
              </div>
            </div>
          </nav>
        </div>
@endsection
