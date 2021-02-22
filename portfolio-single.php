<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Single Project
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="CreateX - Multipurpose Bootstrap Theme">
    <meta name="keywords" content="multipurpose, portfolio, blog, shop, e-commerce, modern, flat style, responsive,  business, corporate, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#343b43" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="css/vendor.min.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
    <!-- Modernizr-->
    <script src="js/modernizr.min.js"></script>
  </head>
  <!-- Body-->
  <body>
    <!-- Off-Canvas Menu-->
    <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
      <div class="px-4 pb-4">
        <h6>Menu</h6>
        <div class="d-flex justify-content-between pt-2">
          <div class="btn-group w-100 mr-2"><a class="btn btn-secondary btn-sm btn-block dropdown-toggle" href="#" data-toggle="dropdown"><img src="img/flags/en.png" alt="English"/>English</a>
            <div class="dropdown-menu" style="min-width: 150px;"><a class="dropdown-item" href="#"><img src="img/flags/fr.png" alt="Français"/>Français</a><a class="dropdown-item" href="#"><img src="img/flags/de.png" alt="Deutsch"/>Deutsch</a><a class="dropdown-item" href="#"><img src="img/flags/it.png" alt="Italiano"/>Italiano</a></div>
          </div><a class="btn btn-primary btn-sm btn-block" href="account-login.html"><i class="fe-icon-user"></i>&nbsp;Login</a>
        </div>
      </div>
      <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
        <!-- Mobile Menu-->
        <div class="accordion mobile-menu" id="accordion-menu">
          <!-- Home-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="index.html">Home</a><a class="collapsed" href="#home-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="home-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-header"><i class="fe-icon-briefcase"></i>&nbsp;&nbsp;Portfolio</li>
                  <li class="dropdown-item"><a href="home-digital-agency.html">Digital Agency</a></li>
                  <li class="dropdown-item"><a class="disabled-link" href="#">Architectural Agency<span class="badge badge-secondary">Soon</span></a></li>
                  <li class="dropdown-item"><a href="home-freelancer-portfolio.html">Freelancer's Portfolio</a></li>
                  <li class="dropdown-item"><a href="home-photographer-portfolio.html">Photographer's Portfolio</a></li>
                  <li class="dropdown-header"><i class="fe-icon-shopping-bag"></i>&nbsp;&nbsp;E-Commerce</li>
                  <li class="dropdown-item"><a href="home-shop-v1.html">Online Shop v.1</a></li>
                  <li class="dropdown-item"><a href="home-shop-v2.html">Online Shop v.2</a></li>
                  <li class="dropdown-header"><i class="fe-icon-edit"></i>&nbsp;&nbsp;Blog</li>
                  <li class="dropdown-item"><a href="home-corporate-blog.html">Corporate Blog</a></li>
                  <li class="dropdown-item"><a href="home-personal-blog.html">Personal Blog</a></li>
                  <li class="dropdown-header"><i class="fe-icon-home"></i>&nbsp;&nbsp;Landing Pages</li>
                  <li class="dropdown-item"><a href="home-mobile-app-showcase.html">Mobile App Showcase</a></li>
                  <li class="dropdown-item"><a href="home-web-app-showcase.html">Web App Showcase (SAAS)</a></li>
                  <li class="dropdown-item"><a class="disabled-link" href="#">Product Promo Page<span class="badge badge-secondary">Soon</span></a></li>
                  <li class="dropdown-item"><a href="home-conference-landing.html">Conference Landing</a></li>
                  <li class="dropdown-header"><i class="fe-icon-dollar-sign"></i>&nbsp;&nbsp;Business</li>
                  <li class="dropdown-item"><a class="disabled-link" href="#">Corporate Website<span class="badge badge-secondary">Soon</span></a></li>
                  <li class="dropdown-item"><a href="home-marketing-seo.html">Digital Marketing &amp; SEO</a></li>
                  <li class="dropdown-item"><a href="home-capital-investments.html">Venture Capital Investments</a></li>
                  <li class="dropdown-item"><a class="disabled-link" href="#">Startup Homepage<span class="badge badge-secondary">Soon</span></a></li>
                  <li class="dropdown-header"><i class="fe-icon-menu"></i>&nbsp;&nbsp;Directory &amp; Listings</li>
                  <li class="dropdown-item"><a class="disabled-link" href="#">Real Estate Listing<span class="badge badge-secondary">Soon</span></a></li>
                  <li class="dropdown-item"><a class="disabled-link" href="#">Jobs Board<span class="badge badge-secondary">Soon</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Portfolio-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link active" href="portfolio-style1-boxed.html">Portfolio</a><a class="collapsed" href="#portfolio-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="portfolio-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-item"><a href="portfolio-style1-boxed.html">Style 1 Grid</a>
                    <ul class="mobile-sublevel">
                      <li class="dropdown-item"><a href="portfolio-style1-boxed.html">Style 1 Boxed Layout</a></li>
                      <li class="dropdown-item"><a href="portfolio-style1-fw.html">Style 1 Full Width Layout</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-item"><a href="portfolio-style2-boxed.html">Style 2 Grid</a>
                    <ul class="mobile-sublevel">
                      <li class="dropdown-item"><a href="portfolio-style2-boxed.html">Style 2 Boxed Layout</a></li>
                      <li class="dropdown-item"><a href="portfolio-style2-fw.html">Style 2 Full Width Layout</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-item active"><a href="portfolio-single-side-gallery-grid.html">Single Project</a>
                    <ul class="mobile-sublevel">
                      <li class="dropdown-item"><a href="portfolio-single-side-gallery-grid.html">Side Gallery Grid</a></li>
                      <li class="dropdown-item active"><a href="portfolio-single-side-gallery-list.html">Side Gallery List</a></li>
                      <li class="dropdown-item"><a href="portfolio-single-wide-slider.html">Wide Slider</a></li>
                      <li class="dropdown-item"><a href="portfolio-single-wide-gallery.html">Wide Gallery</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Blog-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="blog-grid-rs.html">Blog</a><a class="collapsed" href="#blog-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="blog-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-header">Blog Layouts</li>
                  <li class="dropdown-item"><a href="blog-grid-rs.html">Grid Right Sidebar</a></li>
                  <li class="dropdown-item"><a href="blog-grid-ls.html">Grid Left Sidebar</a></li>
                  <li class="dropdown-item"><a href="blog-grid-ns.html">Grid No Sidebar</a></li>
                  <li class="dropdown-header">Single Post Formats</li>
                  <li class="dropdown-item"><a href="blog-single-gallery.html">Post Gallery</a></li>
                  <li class="dropdown-item"><a href="blog-single-carousel.html">Post Image Carousel</a></li>
                  <li class="dropdown-item"><a href="blog-single-video.html">Post Video</a></li>
                  <li class="dropdown-item"><a href="blog-single-audio.html">Post Audio</a></li>
                  <li class="dropdown-item"><a href="blog-single-quotation.html">Post Quotation</a></li>
                  <li class="dropdown-item"><a href="blog-single-link.html">Post Link</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Shop-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="shop-boxed-ls.html">Shop</a><a class="collapsed" href="#shop-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="shop-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-header">Shop Layouts</li>
                  <li class="dropdown-item"><a href="shop-boxed-ls.html">Boxed Left Sidebar</a></li>
                  <li class="dropdown-item"><a href="shop-boxed-rs.html">Boxed Right Sidebar</a></li>
                  <li class="dropdown-item"><a href="shop-boxed-ft.html">Boxed Filters Top</a></li>
                  <li class="dropdown-item"><a href="shop-boxed-ns.html">Boxed No Sidebar</a></li>
                  <li class="dropdown-item"><a href="shop-fw-ls.html">Full Width Left Sidebar</a></li>
                  <li class="dropdown-item"><a href="shop-fw-rs.html">Full Width Right Sidebar</a></li>
                  <li class="dropdown-item"><a href="shop-fw-ft.html">Full Width Filters Top</a></li>
                  <li class="dropdown-item"><a href="shop-fw-ns.html">Full Width No Sidebar</a></li>
                  <li class="dropdown-header">Shop Pages</li>
                  <li class="dropdown-item"><a href="shop-categories.html">Shop Categories</a></li>
                  <li class="dropdown-item"><a href="shop-single.html">Product Page</a></li>
                  <li class="dropdown-item"><a href="cart.html">Cart</a></li>
                  <li class="dropdown-item"><a href="checkout-address.html">Checkout - Address</a></li>
                  <li class="dropdown-item"><a href="checkout-shipping.html">Checkout - Shipping</a></li>
                  <li class="dropdown-item"><a href="checkout-payment.html">Checkout - Payment</a></li>
                  <li class="dropdown-item"><a href="checkout-review.html">Checkout - Review</a></li>
                  <li class="dropdown-item"><a href="checkout-complete.html">Checkout - Complete</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Account-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="account-orders.html">Account</a><a class="collapsed" href="#account-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="account-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-item"><a href="account-login.html">Login / Register</a></li>
                  <li class="dropdown-item"><a href="account-password-recovery.html">Password Recovery</a></li>
                  <li class="dropdown-item"><a href="account-orders.html">Orders List</a></li>
                  <li class="dropdown-item"><a href="account-profile.html">Profile Settings</a></li>
                  <li class="dropdown-item"><a href="account-address.html">Contact / Shipping Address</a></li>
                  <li class="dropdown-item"><a href="account-wishlist.html">Wishlist</a></li>
                  <li class="dropdown-item"><a href="account-tickets.html">My Tickets</a></li>
                  <li class="dropdown-item"><a href="account-single-ticket.html">Single Ticket</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Pages-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="#">Pages</a><a class="collapsed" href="#pages-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="pages-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-item"><a href="about-us-v1.html">About Us</a>
                    <ul class="mobile-sublevel">
                      <li class="dropdown-item"><a href="about-us-v1.html">About Us v.1</a></li>
                      <li class="dropdown-item"><a href="about-us-v2.html">About Us v.2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-item"><a href="contacts-v1.html">Contacts</a>
                    <ul class="mobile-sublevel">
                      <li class="dropdown-item"><a href="contacts-v1.html">Contacts v.1</a></li>
                      <li class="dropdown-item"><a href="contacts-v2.html">Contacts v.2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-item"><a href="help-topics.html">Help Center</a>
                    <ul class="mobile-sublevel">
                      <li class="dropdown-item"><a href="help-topics.html">Help Topics</a></li>
                      <li class="dropdown-item"><a href="help-single-topic.html">Single Topic</a></li>
                      <li class="dropdown-item"><a href="help-submit-request.html">Submit a Request</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-item"><a href="services.html">Services</a>
                    <ul class="mobile-sublevel">
                      <li class="dropdown-item"><a href="services.html">Services Landing</a></li>
                      <li class="dropdown-item"><a href="services-single.html">Single Service Page</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-item"><a href="pricing.html">Pricing</a></li>
                  <li class="dropdown-item"><a href="product-comparison.html">Product Comparison</a></li>
                  <li class="dropdown-item"><a href="order-tracking.html">Order Tracking</a></li>
                  <li class="dropdown-item"><a href="search-results.html">Search Results</a></li>
                  <li class="dropdown-item"><a href="coming-soon-light.html">Coming Soon</a>
                    <ul class="mobile-sublevel">
                      <li class="dropdown-item"><a href="coming-soon-light.html">Coming Soon Light</a></li>
                      <li class="dropdown-item"><a href="coming-soon-dark.html">Coming Soon Dark</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-item"><a href="404.html">404 Not Found</a></li>
                  <li class="dropdown-item"><a class="text-accent" href="docs/dev-setup.html"><i class="d-inline-block fe-icon-file-text align-middle mr-1"></i>Documentation</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Components-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="components.html">Components</a></div>
          </div>
        </div>
      </div>
      <div class="offcanvas-footer px-4 pt-3 pb-2 text-center"><a class="social-btn sb-style-3 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a><a class="social-btn sb-style-3 sb-instagram" href="#"><i class="socicon-instagram"></i></a></div>
    </div>
    <!-- Off-Canvas Shopping Cart-->
    <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="shopping-cart"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
      <div class="px-4">
        <h6>Your Cart</h6>
        <div class="widget widget-cart pt-2"><a class="featured-product" href="shop-single.html">
            <div class="featured-product-thumb"><img src="img/widgets/cart/01.jpg" alt="Product Image"/>
            </div>
            <div class="featured-product-info">
              <h5 class="featured-product-title">Samsung Galaxy S9 Plus</h5><span class="featured-product-price">1x $839.99</span>
            </div><span class="remove-product"><i class="fe-icon-x"></i></span></a><a class="featured-product" href="shop-single.html">
            <div class="featured-product-thumb"><img src="img/widgets/cart/02.jpg" alt="Product Image"/>
            </div>
            <div class="featured-product-info">
              <h5 class="featured-product-title">Samsung Gear 360 Camera</h5><span class="featured-product-price">1 x $68.00</span>
            </div><span class="remove-product"><i class="fe-icon-x"></i></span></a><a class="featured-product" href="shop-single.html">
            <div class="featured-product-thumb"><img src="img/widgets/cart/03.jpg" alt="Product Image"/>
            </div>
            <div class="featured-product-info">
              <h5 class="featured-product-title">Edifier W855BT Bluetooth</h5><span class="featured-product-price">1 x $99.85</span>
            </div><span class="remove-product"><i class="fe-icon-x"></i></span></a>
          <hr class="mt-3 mb-3"><span class="text-sm text-muted">Subtotal:&nbsp;</span><strong>$1,007.84</strong>
          <div class="d-flex justify-content-between pt-3"><a class="btn btn-primary btn-block btn-sm mr-2" href="cart.html">View Cart</a><a class="btn btn-accent btn-block mt-0 btn-sm" href="checkout-address.html">Checkout</a></div>
        </div>
      </div>
    </div>
    <!-- Navbar: Default-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar-wrapper navbar-sticky">
      <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="index.html"><img src="img/logo/logo-dark.png" alt="CreateX"/></a></div>
      <div class="d-table-cell w-100 align-middle pl-md-3">
        <div class="navbar-top d-none d-lg-flex justify-content-between align-items-center">
          <div><a class="navbar-link mr-3" href="tel:+1212477690000"><i class="fe-icon-phone"></i>+1 (212) 477 690 000</a><a class="navbar-link mr-3" href="mailto:support@example.com"><i class="fe-icon-mail"></i>support@example.com</a><a class="social-btn sb-style-3 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a><a class="social-btn sb-style-3 sb-instagram" href="#"><i class="socicon-instagram"></i></a></div>
          <div>
            <ul class="list-inline mb-0">
              <li class="dropdown-toggle mr-2"><a class="navbar-link" href="account-login.html"><i class="fe-icon-user"></i>Login or Create account</a>
                <div class="dropdown-menu right-aligned p-3 text-center" style="min-width: 200px;">
                  <p class="text-sm opacity-70">Sign in to your account or register new one to have full control over your orders, receive bonuses and more.</p><a class="btn btn-primary btn-sm btn-block" href="account-login.html">Sign In</a>
                  <p class="text-sm text-muted mt-3 mb-0">New customer? <a href='account-login.html'>Register</a></p>
                </div>
              </li>
              <li class="dropdown-toggle"><a class="navbar-link" href="#"><img src="img/flags/en.png" alt="English"/>Eng / Usd</a>
                <div class="dropdown-menu lang-dropdown right-aligned">
                  <div class="p-3">
                    <select class="form-control">
                      <option value="usd">$ USD</option>
                      <option value="eur">€ EUR</option>
                      <option value="ukp">£ UKP</option>
                      <option value="jpy">¥ JPY</option>
                    </select>
                  </div><a class="dropdown-item" href="#"><img src="img/flags/fr.png" alt="Français"/>Français</a><a class="dropdown-item" href="#"><img src="img/flags/de.png" alt="Deutsch"/>Deutsch</a><a class="dropdown-item" href="#"><img src="img/flags/it.png" alt="Italiano"/>Italiano</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="navbar justify-content-end justify-content-lg-between">
          <!-- Search-->
          <form class="search-box" method="get">
            <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
          </form>
          <!-- Main Menu-->
          <ul class="navbar-nav d-none d-lg-block">
            <!-- Home-->
            <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="index.html">Home</a>
              <div class="dropdown-menu mega-dropdown">
                <div class="d-flex">
                  <div class="column">
                    <div class="widget widget-custom-menu">
                      <ul>
                        <li class="dropdown-header font-weight-medium text-warning border-warning text-uppercase pl-0"><i class="fe-icon-briefcase"></i>&nbsp;&nbsp;Portfolio</li>
                        <li><a href="home-digital-agency.html">Digital Agency</a></li>
                        <li><a class="disabled-link" href="#">Architectural Agency<span class="badge badge-secondary">Soon</span></a></li>
                        <li><a href="home-freelancer-portfolio.html">Freelancer's Portfolio</a></li>
                        <li><a href="home-photographer-portfolio.html">Photographer's Portfolio</a></li>
                        <li class="dropdown-header font-weight-medium text-success border-top-0 border-success text-uppercase pt-4 pl-0"><i class="fe-icon-shopping-bag"></i>&nbsp;&nbsp;E-Commerce</li>
                        <li><a href="home-shop-v1.html">Online Shop v.1</a></li>
                        <li><a href="home-shop-v2.html">Online Shop v.2</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="column">
                    <div class="widget widget-custom-menu">
                      <ul>
                        <li class="dropdown-header font-weight-medium text-info border-info text-uppercase pl-0"><i class="fe-icon-edit"></i>&nbsp;&nbsp;Blog</li>
                        <li><a href="home-corporate-blog.html">Corporate Blog</a></li>
                        <li><a href="home-personal-blog.html">Personal Blog</a></li>
                        <li class="dropdown-header font-weight-medium text-accent border-top-0 border-accent text-uppercase pt-4 pl-0"><i class="fe-icon-home"></i>&nbsp;&nbsp;Landing Pages</li>
                        <li><a href="home-mobile-app-showcase.html">Mobile App Showcase</a></li>
                        <li><a href="home-web-app-showcase.html">Web App Showcase (SAAS)</a></li>
                        <li><a class="disabled-link" href="#">Product Promo Page<span class="badge badge-secondary">Soon</span></a></li>
                        <li><a href="home-conference-landing.html">Conference Landing</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="column">
                    <div class="widget widget-custom-menu">
                      <ul>
                        <li class="dropdown-header font-weight-medium text-danger border-danger text-uppercase pl-0"><i class="fe-icon-dollar-sign"></i>&nbsp;&nbsp;Business</li>
                        <li><a href="home-corporate-website.html">Corporate Website<span class="badge badge-danger"><span class="text-white">New</span></span></a></li>
                        <li><a href="home-marketing-seo.html">Digital Marketing &amp; SEO</a></li>
                        <li><a href="home-capital-investments.html">Venture Capital Investments</a></li>
                        <li><a class="disabled-link" href="#">Startup Homepage<span class="badge badge-secondary">Soon</span></a></li>
                        <li class="dropdown-header font-weight-medium border-top-0 text-uppercase pt-4 pl-0" style="color: #8a5ed5; border-color: #8a5ed5;"><i class="fe-icon-menu"></i>&nbsp;&nbsp;Directory &amp; Listings</li>
                        <li><a class="disabled-link" href="#">Real Estate Listing<span class="badge badge-secondary">Soon</span></a></li>
                        <li><a class="disabled-link" href="#">Jobs Board<span class="badge badge-secondary">Soon</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Portfolio-->
            <li class="nav-item dropdown-toggle active"><a class="nav-link" href="portfolio-style1-boxed.html">Portfolio</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item has-children"><a href="portfolio-style1-boxed.html">Style 1 Grid</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="portfolio-style1-boxed.html">Style 1 Boxed Layout</a></li>
                    <li class="dropdown-item"><a href="portfolio-style1-fw.html">Style 1 Full Width Layout</a></li>
                  </ul>
                </li>
                <li class="dropdown-item has-children"><a href="portfolio-style2-boxed.html">Style 2 Grid</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="portfolio-style2-boxed.html">Style 2 Boxed Layout</a></li>
                    <li class="dropdown-item"><a href="portfolio-style2-fw.html">Style 2 Full Width Layout</a></li>
                  </ul>
                </li>
                <li class="dropdown-item"><a href="portfolio-list.html">List View</a></li>
                <li class="dropdown-item has-children active"><a href="portfolio-single-side-gallery-grid.html">Single Project</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="portfolio-single-side-gallery-grid.html">Side Gallery Grid</a></li>
                    <li class="dropdown-item active"><a href="portfolio-single-side-gallery-list.html">Side Gallery List</a></li>
                    <li class="dropdown-item"><a href="portfolio-single-wide-slider.html">Wide Slider</a></li>
                    <li class="dropdown-item"><a href="portfolio-single-wide-gallery.html">Wide Gallery</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <!-- Blog-->
            <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="blog-grid-rs.html">Blog</a>
              <div class="dropdown-menu mega-dropdown">
                <div class="d-flex">
                  <div class="column">
                    <div class="widget widget-custom-menu">
                      <h4 class="widget-title">Blog Layouts</h4>
                      <ul>
                        <li><a href="blog-grid-rs.html">Grid Right Sidebar</a></li>
                        <li><a href="blog-grid-ls.html">Grid Left Sidebar</a></li>
                        <li><a href="blog-grid-ns.html">Grid No Sidebar</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="column">
                    <div class="widget widget-custom-menu">
                      <h4 class="widget-title">Single Post Formats</h4>
                      <ul>
                        <li><a href="blog-single-gallery.html">Post Gallery</a></li>
                        <li><a href="blog-single-carousel.html">Post Image Carousel</a></li>
                        <li><a href="blog-single-video.html">Post Video</a></li>
                        <li><a href="blog-single-audio.html">Post Audio</a></li>
                        <li><a href="blog-single-quotation.html">Post Quotation</a></li>
                        <li><a href="blog-single-link.html">Post Link</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="column" style="width: 280px;">
                    <div class="widget widget-featured-posts">
                      <h4 class="widget-title"> Recent posts</h4><a class="featured-post" href="blog-single-gallery.html">
                        <div class="featured-post-thumb"><img src="img/widgets/blog/01.jpg" alt="Post Thumbnail"/>
                        </div>
                        <div class="featured-post-info">
                          <div class="featured-post-meta"><span class="text-primary opacity-70"><i class="fe-icon-clock"></i>22/04/2018</span><span class="ml-3"><i class="fe-icon-message-square"></i>21</span></div>
                          <div class="featured-post-title">Getting to another level of design and functionality.</div>
                        </div></a><a class="featured-post" href="blog-single-carousel.html">
                        <div class="featured-post-thumb"><img src="img/widgets/blog/02.jpg" alt="Post Thumbnail"/>
                        </div>
                        <div class="featured-post-info">
                          <div class="featured-post-meta"><span class="text-primary opacity-70"><i class="fe-icon-clock"></i>30/05/2018</span><span class="ml-3"><i class="fe-icon-message-square"></i>17</span></div>
                          <div class="featured-post-title">Cherry 5 WordPress Framework Sneaky Peaks.</div>
                        </div></a><a class="featured-post" href="blog-single-video.html">
                        <div class="featured-post-thumb"><img src="img/widgets/blog/03.jpg" alt="Post Thumbnail"/>
                        </div>
                        <div class="featured-post-info">
                          <div class="featured-post-meta"><span class="text-primary opacity-70"><i class="fe-icon-clock"></i>11/06/2018</span><span class="ml-3"><i class="fe-icon-message-square"></i>8</span></div>
                          <div class="featured-post-title">Multiple skins &amp; easy demo data import.</div>
                        </div></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Shop-->
            <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="shop-boxed-ls.html">Shop</a>
              <div class="dropdown-menu mega-dropdown">
                <div class="d-flex">
                  <div class="column">
                    <div class="widget widget-custom-menu">
                      <h4 class="widget-title">Shop Layouts</h4>
                      <ul>
                        <li><a href="shop-boxed-ls.html">Boxed Left Sidebar</a></li>
                        <li><a href="shop-boxed-rs.html">Boxed Right Sidebar</a></li>
                        <li><a href="shop-boxed-ft.html">Boxed Filters Top</a></li>
                        <li><a href="shop-boxed-ns.html">Boxed No Sidebar</a></li>
                        <li><a href="shop-fw-ls.html">Full Width Left Sidebar</a></li>
                        <li><a href="shop-fw-rs.html">Full Width Right Sidebar</a></li>
                        <li><a href="shop-fw-ft.html">Full Width Filters Top</a></li>
                        <li><a href="shop-fw-ns.html">Full Width No Sidebar</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="column">
                    <div class="widget widget-custom-menu">
                      <h4 class="widget-title">Shop Pages</h4>
                      <ul>
                        <li><a href="shop-categories.html">Shop Categories</a></li>
                        <li><a href="shop-single.html">Product Page</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout-address.html">Checkout - Address</a></li>
                        <li><a href="checkout-shipping.html">Checkout - Shipping</a></li>
                        <li><a href="checkout-payment.html">Checkout - Payment</a></li>
                        <li><a href="checkout-review.html">Checkout - Review</a></li>
                        <li><a href="checkout-complete.html">Checkout - Complete</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="column p-0 mr-0 ml-3" style="width: 320px;"><a class="d-block" href="shop-single.html"><img src="img/shop/mega-menu.jpg" alt="Samsung Galaxy S9"/></a></div>
                </div>
              </div>
            </li>
            <!-- Account-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="account-orders.html">Account</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="account-login.html">Login / Register</a></li>
                <li class="dropdown-item"><a href="account-password-recovery.html">Password Recovery</a></li>
                <li class="dropdown-item"><a href="account-orders.html">Orders List</a></li>
                <li class="dropdown-item"><a href="account-profile.html">Profile Settings</a></li>
                <li class="dropdown-item"><a href="account-address.html">Contact / Shipping Address</a></li>
                <li class="dropdown-item"><a href="account-wishlist.html">Wishlist</a></li>
                <li class="dropdown-item"><a href="account-tickets.html">My Tickets</a></li>
                <li class="dropdown-item"><a href="account-single-ticket.html">Single Ticket</a></li>
              </ul>
            </li>
            <!-- Pages-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">Pages</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item has-children"><a href="about-us-v1.html">About Us</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="about-us-v1.html">About Us v.1</a></li>
                    <li class="dropdown-item"><a href="about-us-v2.html">About Us v.2</a></li>
                  </ul>
                </li>
                <li class="dropdown-item has-children"><a href="contacts-v1.html">Contacts</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="contacts-v1.html">Contacts v.1</a></li>
                    <li class="dropdown-item"><a href="contacts-v2.html">Contacts v.2</a></li>
                  </ul>
                </li>
                <li class="dropdown-item has-children"><a href="help-topics.html">Help Center</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="help-topics.html">Help Topics</a></li>
                    <li class="dropdown-item"><a href="help-single-topic.html">Single Topic</a></li>
                    <li class="dropdown-item"><a href="help-submit-request.html">Submit a Request</a></li>
                  </ul>
                </li>
                <li class="dropdown-item has-children"><a href="services.html">Services</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="services.html">Services Landing</a></li>
                    <li class="dropdown-item"><a href="services-single.html">Single Service Page</a></li>
                  </ul>
                </li>
                <li class="dropdown-item"><a href="pricing.html">Pricing</a></li>
                <li class="dropdown-item"><a href="product-comparison.html">Product Comparison</a></li>
                <li class="dropdown-item"><a href="order-tracking.html">Order Tracking</a></li>
                <li class="dropdown-item"><a href="search-results.html">Search Results</a></li>
                <li class="dropdown-item has-children"><a href="coming-soon-light.html">Coming Soon</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="coming-soon-light.html">Coming Soon Light</a></li>
                    <li class="dropdown-item"><a href="coming-soon-dark.html">Coming Soon Dark</a></li>
                  </ul>
                </li>
                <li class="dropdown-item"><a href="404.html">404 Not Found</a></li>
                <li class="dropdown-item"><a class="text-accent" href="docs/dev-setup.html"><i class="d-inline-block fe-icon-file-text align-middle mr-1"></i>Documentation</a></li>
              </ul>
            </li>
            <!-- Components-->
            <li class="nav-item"><a class="nav-link" href="components.html">Components</a></li>
          </ul>
          <div>
            <ul class="navbar-buttons d-inline-block align-middle mr-lg-2">
              <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
              <li><a href="#" data-toggle="search"><i class="fe-icon-search"></i></a></li>
              <li><a href="#shopping-cart" data-toggle="offcanvas"><i class="fe-icon-shopping-cart"></i></a><span class="badge badge-danger">3</span></li>
            </ul><a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="https://themes.getbootstrap.com/product/createx-multipurpose-template-ui-kit/" target="_blank">Buy Now</a>
          </div>
        </div>
      </div>
    </header>
    <!-- Page Title-->
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url(img/page-title/portfolio-pattern.png);">
      <div class="container text-left align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="portfolio-style1-boxed.html">Portfolio</a>
            </li>
          </ol>
        </nav>
        <h1 class="page-title-heading">Single Project</h1>
        <div class="page-title-subheading">Page Layout: <strong>Side Gallery List</strong></div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5">
      <div class="row">
        <!-- Project Gallery-->
        <div class="col-lg-8 mb-3">
          <div class="post-meta pb-3"><span class="text-sm ml-0"><i class="fe-icon-clock"></i>Sep 16, 2018</span><a class="text-sm" href="#"><i class="fe-icon-bookmark"></i>Mobile Apps</a></div><a class="gallery-item mb-30" href="img/portfolio/single/01.jpg" data-fancybox="sideGallery" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/portfolio/single/th01.jpg" alt="Gallery Image"/></a><a class="gallery-item mb-30" href="img/portfolio/single/02.jpg" data-fancybox="sideGallery" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/portfolio/single/th02.jpg" alt="Gallery Image"/></a><a class="gallery-item type-video mb-30" href="https://www.youtube.com/watch?v=n5Q3txBg828&amp;amp;autoplay=1&amp;amp;rel=0&amp;amp;controls=0&amp;amp;showinfo=0" data-fancybox="sideGallery" data-width="1000" data-height="563"><img src="img/portfolio/single/th03.jpg" alt="Gallery Image"/></a><a class="gallery-item mb-30" href="img/portfolio/single/03.jpg" data-fancybox="sideGallery" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/portfolio/single/th04.jpg" alt="Gallery Image"/></a><a class="gallery-item mb-30" href="img/portfolio/single/04.jpg" data-fancybox="sideGallery" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/portfolio/single/th05.jpg" alt="Gallery Image"/></a>
        </div>
        <!-- Project Details-->
        <div class="col-lg-4">
          <div class="widget">
            <h2 class="widget-title">Client</h2>
            <ul class="list-unstyled mb-0">
              <li><span class="text-muted">Name:</span><span class="font-weight-medium">&nbsp; International Company Ltd.</span></li>
              <li><span class="text-muted">Services:</span><span class="font-weight-medium">&nbsp; Mobile UX/UI Design, App Development</span></li>
              <li><span class="text-muted">Website:</span><a class="navi-link font-weight-medium" href="#">&nbsp; www.example.com</a></li>
            </ul>
          </div>
          <div class="widget">
            <h2 class="widget-title">Objective</h2>
            <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
          </div>
          <div class="widget">
            <h2 class="widget-title">Tools &amp; Technologies</h2>
            <p class="text-muted">Sketch App, Proto.io, React Native, Redux</p>
          </div>
          <div class="widget">
            <h2 class="widget-title">Challenge</h2>
            <p class="text-muted mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
          </div>
          <div class="widget mb-4">
            <h2 class="widget-title">Download</h2><a class="market-btn apple-btn mr-3 mb-3" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-btn google-btn mr-3 mb-3" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a>
          </div>
        </div>
      </div>
      <!-- Project Share-->
      <div class="d-sm-flex justify-content-between align-items-center border-top border-bottom mb-4 py-2">
        <div class="py-2"><span class="dinline-block align-middle py-2 mr-2"><strong>Share:</strong></span><a class="social-btn sb-style-3 sb-facebook mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-twitter mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-pinterest mb-0" href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="socicon-pinterest"></i></a></div>
        <div class="py-2"></div>
        <div class="post-meta"><a class="text-md" href="#"><i class="fe-icon-heart text-accent"></i>&nbsp;40</a></div>
      </div>
      <!-- Entry Nanigation-->
      <nav class="entry-navigation">
        <div class="prev-btn"><a class="label" href="#"><i class="fe-icon-arrow-left"></i>Prev <span class='d-none d-sm-inline'>project</span></a>
          <div class="post-preview">
            <div class="post-preview-thumb"><img src="img/portfolio/navigation/01.jpg" alt="Project thumbnail"/>
            </div>
            <div class="post-preview-details"><span class="post-preview-title">Web App Front-End</span><span class="post-preview-meta"><i class="fe-icon-user"></i>Benjamin Miller</span></div>
          </div>
        </div><a class="back-btn" href="portfolio-style1-boxed.html"><i class="fe-icon-grid"></i></a>
        <div class="next-btn"><a class="label" href="#">Next <span class='d-none d-sm-inline'>project</span><i class="fe-icon-arrow-right"></i></a>
          <div class="post-preview">
            <div class="post-preview-details"><span class="post-preview-title">iOS App Development</span><span class="post-preview-meta"><i class="fe-icon-user"></i>Michael Brown</span></div>
            <div class="post-preview-thumb"><img src="img/portfolio/navigation/02.jpg" alt="Project thumbnail"/>
            </div>
          </div>
        </div>
      </nav>
      <!-- Related Projects Carousel-->
      <h3 class="h4 text-center pt-5 mt-3 pb-4">You May Also Like</h3>
      <div class="owl-carousel carousel-flush" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true,&quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
        <!-- Product-->
        <div class="mb-30 pb-3">
          <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-side-gallery-list.html"><img src="img/portfolio/02.jpg" alt="Portfolio Thumbnail"/></a>
            <div class="card-body">
              <div class="portfolio-meta"><span><i class="fe-icon-user"></i>Benjamin Miller</span></div>
              <h5 class="portfolio-title"><a href="portfolio-single-side-gallery-list.html">Web App Front-End</a></h5>
            </div>
            <div class="card-footer">
              <div><a class="tag-link" href="#">Web Design</a></div>
              <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>8</a></div>
            </div>
          </div>
        </div>
        <!-- Product-->
        <div class="mb-30 pb-3">
          <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-wide-slider.html"><img src="img/portfolio/03.jpg" alt="Portfolio Thumbnail"/></a>
            <div class="card-body">
              <div class="portfolio-meta"><span><i class="fe-icon-user"></i>Olivia Davis</span></div>
              <h5 class="portfolio-title"><a href="portfolio-single-wide-slider.html">Brand Design</a></h5>
            </div>
            <div class="card-footer">
              <div><a class="tag-link" href="#">Branding</a></div>
              <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>25</a></div>
            </div>
          </div>
        </div>
        <!-- Product-->
        <div class="mb-30 pb-3">
          <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-wide-gallery.html"><img src="img/portfolio/12.jpg" alt="Portfolio Thumbnail"/></a>
            <div class="card-body">
              <div class="portfolio-meta"><span><i class="fe-icon-user"></i>Michael Brown</span></div>
              <h5 class="portfolio-title"><a href="portfolio-single-wide-gallery.html">Photo App UX</a></h5>
            </div>
            <div class="card-footer">
              <div><a class="tag-link" href="#">Mobile Apps</a></div>
              <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>183</a></div>
            </div>
          </div>
        </div>
        <!-- Product-->
        <div class="mb-30 pb-3">
          <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-wide-slider.html"><img src="img/portfolio/11.jpg" alt="Portfolio Thumbnail"/></a>
            <div class="card-body">
              <div class="portfolio-meta"><span><i class="fe-icon-user"></i>Emma Johnson</span></div>
              <h5 class="portfolio-title"><a href="portfolio-single-wide-slider.html">Furniture Design</a></h5>
            </div>
            <div class="card-footer">
              <div><a class="tag-link" href="#">Interior Design</a></div>
              <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>120</a></div>
            </div>
          </div>
        </div>
        <!-- Product-->
        <div class="mb-30 pb-3">
          <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-side-gallery-list.html"><img src="img/portfolio/07.jpg" alt="Portfolio Thumbnail"/></a>
            <div class="card-body">
              <div class="portfolio-meta"><span><i class="fe-icon-user"></i>Emma Johnson</span></div>
              <h5 class="portfolio-title"><a href="portfolio-single-side-gallery-list.html">Package Design</a></h5>
            </div>
            <div class="card-footer">
              <div><a class="tag-link" href="#">Package Design</a></div>
              <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>116</a></div>
            </div>
          </div>
        </div>
        <!-- Product-->
        <div class="mb-30 pb-3">
          <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-side-gallery-grid.html"><img src="img/portfolio/09.jpg" alt="Portfolio Thumbnail"/></a>
            <div class="card-body">
              <div class="portfolio-meta"><span><i class="fe-icon-user"></i>Benjamin Miller</span></div>
              <h5 class="portfolio-title"><a href="portfolio-single-side-gallery-grid.html">Watch UI Design</a></h5>
            </div>
            <div class="card-footer">
              <div><a class="tag-link" href="#">Mobile Apps</a></div>
              <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>156</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <footer class="d-lg-flex align-items-center bg-dark">
      <div class="w-100 py-5 px-4">
        <div class="mx-auto text-center" style="max-width: 340px;">
          <h6 class="text-sm font-weight-medium text-white text-uppercase text-center">Want to hire us?</h6>
          <ul class="list-unstyled text-white">
            <li><span class='opacity-60'>Call:</span> +1 (212) 477 690 000</li>
            <li><span class='opacity-60'>Email:</span> info@example.com</li>
          </ul>
          <div class="widget pt-3 mb-4"><a class="social-btn sb-style-6 sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-6 sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-6 sb-dribbble sb-light-skin" href="#"><i class="socicon-dribbble"></i></a><a class="social-btn sb-style-6 sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-btn sb-style-6 sb-behance sb-light-skin" href="#"><i class="socicon-behance"></i></a></div>
          <p class="m-0 text-sm text-white"><span class='opacity-60'>© All rights reserved. Made with</span> <i class='d-inline-block align-middle fe-icon-heart text-danger'></i> <a href='http://createx.studio/' class='d-inline-block nav-link text-white opacity-60 p-0' target='_blank'>by Createx Studio</a></p>
        </div>
      </div>
      <div class="w-100 py-5 px-4" style="background-color: #30363d;">
        <div class="widget widget-gallery mb-0 mx-auto" style="max-width: 250px;">
          <div class="d-flex justify-content-between"><a class="gallery-item mb-2 mr-2" href="../img/components/gallery/01.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th01.jpg" alt="Gallery Image"/></a><a class="gallery-item mb-2 mr-2" href="../img/components/gallery/02.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th02.jpg" alt="Gallery Image"/></a><a class="gallery-item type-video mb-2" href="https://www.youtube.com/watch?v=VE30ntVVfvAk&amp;amp;autoplay=1&amp;amp;rel=0&amp;amp;controls=0&amp;amp;showinfo=0" data-fancybox="gallery1" data-width="1000" data-height="563"><img src="img/widgets/gallery/th03.jpg" alt="Gallery Image"/></a></div>
          <div class="d-flex justify-content-between"><a class="gallery-item mb-2 mr-2" href="../img/components/gallery/04.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th04.jpg" alt="Gallery Image"/></a><a class="gallery-item type-video mb-2 mr-2" href="https://vimeo.com/25141497?color=ac32e4" data-fancybox="gallery1" data-width="1000" data-height="563"><img src="img/widgets/gallery/th05.jpg" alt="Gallery Image"/></a><a class="gallery-item mb-2" href="../img/components/gallery/06.jpg" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;Gallery Image Caption&quot;}"><img src="img/widgets/gallery/th06.jpg" alt="Gallery Image"/></a></div>
          <div class="pt-1"><a class="btn btn-gradient btn-block" href="#"><i class="fe-icon-instagram"></i>&nbsp;View our Instagram</a></div>
        </div>
      </div>
      <div class="w-100 py-5 px-4">
        <div class="mx-auto" style="max-width: 340px;">
          <h6 class="text-sm font-weight-medium text-white text-uppercase text-center">Subscription</h6>
          <p class="text-sm text-white opacity-60 text-center pb-1">To receive latest works and inspiration from our portfolio.</p>
          <form action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" target="_blank" novalidate>
            <div class="input-group">
              <input class="form-control form-control-light-skin" type="email" name="EMAIL" placeholder="Email address">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Sign Up</button>
              </div>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
              <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
            </div>
          </form>
        </div>
      </div>
    </footer>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/theme.min.js"></script>
  </body>
</html>