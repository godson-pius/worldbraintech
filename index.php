<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CreateX | Multipurpose Bootstrap Theme
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
            <div class="card-header"><a class="mobile-menu-link active" href="index.html">Home</a><a class="collapsed" href="#home-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="home-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-header"><i class="fe-icon-briefcase"></i>&nbsp;&nbsp;Portfolio</li>
                  <li class="dropdown-item active"><a href="home-digital-agency.html">Digital Agency</a></li>
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
            <div class="card-header"><a class="mobile-menu-link" href="portfolio-style1-boxed.html">Portfolio</a><a class="collapsed" href="#portfolio-submenu" data-toggle="collapse"></a></div>
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
                  <li class="dropdown-item"><a href="portfolio-single-side-gallery-grid.html">Single Project</a>
                    <ul class="mobile-sublevel">
                      <li class="dropdown-item"><a href="portfolio-single-side-gallery-grid.html">Side Gallery Grid</a></li>
                      <li class="dropdown-item"><a href="portfolio-single-side-gallery-list.html">Side Gallery List</a></li>
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
    <!-- Navbar: Floating-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar-wrapper navbar-floating navbar-floating navbar-sticky">
      <div class="container">
        <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="index.html"><img src="img/logo/logo-dark.png" alt="CreateX"/></a></div>
        <div class="d-table-cell align-middle w-100 pl-md-3">
          <div class="navbar justify-content-end justify-content-lg-between">
            <!-- Search-->
            <form class="search-box" method="get">
              <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
            </form>
            <!-- Main Menu-->
            <ul class="navbar-nav d-none d-lg-block">
              <!-- Home-->
              <li class="nav-item mega-dropdown-toggle active"><a class="nav-link" href="index.html">Home</a>
                <div class="dropdown-menu mega-dropdown">
                  <div class="d-flex">
                    <div class="column">
                      <div class="widget widget-custom-menu">
                        <ul>
                          <li class="dropdown-header font-weight-medium text-warning border-warning text-uppercase pl-0"><i class="fe-icon-briefcase"></i>&nbsp;&nbsp;Portfolio</li>
                          <li class="active"><a href="home-digital-agency.html">Digital Agency</a></li>
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
              <li class="nav-item dropdown-toggle"><a class="nav-link" href="portfolio-style1-boxed.html">Portfolio</a>
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
                  <li class="dropdown-item has-children"><a href="portfolio-single-side-gallery-grid.html">Single Project</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="portfolio-single-side-gallery-grid.html">Side Gallery Grid</a></li>
                      <li class="dropdown-item"><a href="portfolio-single-side-gallery-list.html">Side Gallery List</a></li>
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
              <ul class="navbar-buttons d-inline-block align-middle">
                <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
                <li><a href="#" data-toggle="search"><i class="fe-icon-search"></i></a></li>
              </ul><a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="https://themes.getbootstrap.com/product/createx-multipurpose-template-ui-kit/" target="_blank">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Page Content-->
    <!-- Hero-->
    <section class="bg-center bg-no-repeat py-5 mt-lg-5" style="background-image: url(img/homepages/digital-agency/hero-bg.png);">
      <div class="row no-gutters pt-lg-5 mt-lg-5">
        <div class="col-xl-7 col-lg-8"><img class="d-block" src="img/homepages/digital-agency/hero-img.jpg" alt="Hero Image"></div>
        <div class="col-lg-4 pt-xl-5">
          <div class="px-3 px-lg-0 text-center text-lg-left">
            <h1 class="pt-md-5 pb-md-4 pt-3 pb-3 pt-md-0 pb-md-5">We do all the hard work for you</h1><a class="scroll-to btn btn-style-4 btn-gradient btn-icon-right btn-lg" href="#services">Learn How<i class="fe-icon-arrow-down"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Statistics-->
    <section class="bg-white container-fluid border-top">
      <div class="row">
        <div class="col-md-3 col-sm-6 border-right py-5 border-bottom">
          <div class="animated-digits mx-auto text-center" data-number="350">
            <h5 class="animated-digits-digit"><span>0</span>+</h5>
            <p class="animated-digits-text">Totally satisfied clients</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 py-5 border-right border-bottom">
          <div class="animated-digits mx-auto text-center" data-number="92">
            <h5 class="animated-digits-digit"><span>0</span>%</h5>
            <p class="animated-digits-text">Positive feedback</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 py-5 border-right border-bottom">
          <div class="animated-digits mx-auto text-center" data-number="1446">
            <h5 class="animated-digits-digit"><span>0</span></h5>
            <p class="animated-digits-text">Completed projects</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 py-5 border-bottom">
          <div class="animated-digits mx-auto text-center" data-number="28">
            <h5 class="animated-digits-digit">$<span>0</span></h5>
            <p class="animated-digits-text">Average cost per hour</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Services-->
    <section class="bg-dark py-5" id="services">
      <div class="container pt-4">
        <h2 class="h3 block-title text-white text-center px-3">We develop digital strategies, products, services and some other cool things</h2>
        <div class="row pt-4">
          <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none" href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/01.jpg" alt="Branding &amp; identity">
              <div class="p-4">
                <h3 class="text-xl font-weight-bold mb-0">Branding &amp; identity</h3>
              </div></a></div>
          <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none" href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/02.jpg" alt="UI / UX design">
              <div class="p-4">
                <h3 class="text-xl font-weight-bold mb-0">UI / UX design</h3>
              </div></a></div>
          <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none" href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/03.jpg" alt="Front-end development">
              <div class="p-4">
                <h3 class="text-xl font-weight-bold mb-0">Front-end development</h3>
              </div></a></div>
          <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none" href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/04.jpg" alt="Digital strategy">
              <div class="p-4">
                <h3 class="text-xl font-weight-bold mb-0">Digital strategy</h3>
              </div></a></div>
          <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none" href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/05.jpg" alt="Back-end development">
              <div class="p-4">
                <h3 class="text-xl font-weight-bold mb-0">Back-end development</h3>
              </div></a></div>
          <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-white box-shadow text-decoration-none" href="#"><img class="d-block w-100" src="img/homepages/digital-agency/services/06.jpg" alt="Mobile development">
              <div class="p-4">
                <h3 class="text-xl font-weight-bold mb-0">Mobile development</h3>
              </div></a></div>
        </div>
      </div>
    </section>
    <!-- Team-->
    <section class="container py-5 mt-3">
      <h2 class="h3 block-title text-center mb-4">Meet our team<small>People behind your great experience</small></h2>
      <div class="row">
        <!-- Team member-->
        <div class="col-lg-3 col-sm-6">
          <div class="team-card-style-1 mx-auto">
            <div class="team-card-inner">
              <div class="team-thumb"><img src="img/team/style-1/05.jpg" alt="Team Member Picture"/>
              </div>
              <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-4 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-skype" href="#"><i class="socicon-skype"></i></a><a class="social-btn sb-style-4 sb-linkedin" href="#"><i class="socicon-linkedin"></i></a></div><a class="team-contact-link" href="tel:+72056557984"><i class="fe-icon-phone"></i>&nbsp;+7 (205) 655 79 84</a><a class="team-contact-link" href="mailto:info@example.com"><i class="fe-icon-mail"></i>&nbsp;info@example.com</a>
            </div><span class="team-position">CEO, Co-Founder</span>
            <h4 class="team-name">James McCorvinus</h4>
          </div>
        </div>
        <!-- Team member-->
        <div class="col-lg-3 col-sm-6">
          <div class="team-card-style-1 mx-auto">
            <div class="team-card-inner">
              <div class="team-thumb"><img src="img/team/style-1/06.jpg" alt="Team Member Picture"/>
              </div>
              <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-4 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-google-plus" href="#"><i class="socicon-googleplus"></i></a><a class="social-btn sb-style-4 sb-linkedin" href="#"><i class="socicon-linkedin"></i></a></div><a class="team-contact-link" href="tel:+57872336590"><i class="fe-icon-phone"></i>&nbsp;+5 (787) 233 65 90</a><a class="team-contact-link" href="mailto:info@example.com"><i class="fe-icon-mail"></i>&nbsp;info@example.com</a>
            </div><span class="team-position">Marketing Manager</span>
            <h4 class="team-name">Sara Palson</h4>
          </div>
        </div>
        <!-- Team member-->
        <div class="col-lg-3 col-sm-6">
          <div class="team-card-style-1 mx-auto">
            <div class="team-card-inner">
              <div class="team-thumb"><img src="img/team/style-1/07.jpg" alt="Team Member Picture"/>
              </div>
              <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-github" href="#"><i class="socicon-github"></i></a><a class="social-btn sb-style-4 sb-stackoverflow" href="#"><i class="socicon-stackoverflow"></i></a><a class="social-btn sb-style-4 sb-skype" href="#"><i class="socicon-skype"></i></a></div><a class="team-contact-link" href="tel:+19871625346"><i class="fe-icon-phone"></i>&nbsp;+1 (987) 162 53 46</a><a class="team-contact-link" href="mailto:info@example.com"><i class="fe-icon-mail"></i>&nbsp;info@example.com</a>
            </div><span class="team-position">Lead Programmer</span>
            <h4 class="team-name">Brandon Nash</h4>
          </div>
        </div>
        <!-- Team member-->
        <div class="col-lg-3 col-sm-6">
          <div class="team-card-style-1 mx-auto">
            <div class="team-card-inner">
              <div class="team-thumb"><img src="img/team/style-1/03.jpg" alt="Team Member Picture"/>
              </div>
              <div class="team-social-bar text-center"><a class="social-btn sb-style-4 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-4 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a><a class="social-btn sb-style-4 sb-behance" href="#"><i class="socicon-behance"></i></a><a class="social-btn sb-style-4 sb-dribbble" href="#"><i class="socicon-dribbble"></i></a></div><a class="team-contact-link" href="tel:+13907765843"><i class="fe-icon-phone"></i>&nbsp;+1 (390) 776 58 43</a><a class="team-contact-link" href="mailto:info@example.com"><i class="fe-icon-mail"></i>&nbsp;info@example.com</a>
            </div><span class="team-position">Graphic Designer</span>
            <h4 class="team-name">Emma Johnson</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- Steps-->
    <section class="bg-center-top bg-no-repeat bg-cover py-5" style="background-image: url(img/homepages/digital-agency/steps-bg.jpg);">
      <div class="container-fluid pt-4">
        <div class="row pt-1">
          <div class="col-xl-8 offset-xl-1">
            <h2 class="h3 mb-4 ml-lg-3 text-center text-lg-left">And that’s how we do it!</h2>
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <!-- Step-->
                <div class="step step-with-icon">
                  <div class="step-number">1</div>
                  <div class="step-icon"><img src="img/icons/user-data.svg" alt="Gathering User Data"></div>
                  <h3 class="step-title">Gathering User Data</h3>
                  <p class="step-text text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cupiditate non provident.</p><a class="step-link" href="#">Learn more<i class="fe-icon-arrow-right"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <!-- Step-->
                <div class="step step-with-icon">
                  <div class="step-number">2</div>
                  <div class="step-icon"><img src="img/icons/prototyping.svg" alt="Prototyping (Wireframes)"></div>
                  <h3 class="step-title">Prototyping (Wireframes)</h3>
                  <p class="step-text text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cupiditate non provident.</p><a class="step-link" href="#">Learn more<i class="fe-icon-arrow-right"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <!-- Step-->
                <div class="step step-with-icon">
                  <div class="step-number">3</div>
                  <div class="step-icon"><img src="img/icons/ui-design.svg" alt="Pixel-perfect UI Design"></div>
                  <h3 class="step-title">Pixel-perfect UI Design</h3>
                  <p class="step-text text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cupiditate non provident.</p><a class="step-link" href="#">Learn more<i class="fe-icon-arrow-right"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <!-- Step-->
                <div class="step step-with-icon">
                  <div class="step-number">4</div>
                  <div class="step-icon"><img src="img/icons/coding.svg" alt="Development (Coding)"></div>
                  <h3 class="step-title">Development (Coding)</h3>
                  <p class="step-text text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore cupiditate non provident.</p><a class="step-link" href="#">Learn more<i class="fe-icon-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio-->
    <section class="container py-5 mb-3">
      <h2 class="h3 block-title text-center mt-3">Latest works<small>Hand-picked collection of my most prominent works</small></h2>
      <div class="row pt-4">
        <!-- Portfolio Item-->
        <div class="col-md-4 col-sm-6 mb-30 pb-2">
          <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-side-gallery-grid.html"><img src="img/portfolio/01.jpg" alt="Portfolio Thumbnail"/></a>
            <div class="card-body">
              <div class="portfolio-meta"><span><i class="fe-icon-user"></i>William Smith</span></div>
              <h5 class="portfolio-title"><a href="portfolio-single-side-gallery-grid.html">iOS App UI Design</a></h5>
            </div>
            <div class="card-footer">
              <div><a class="tag-link" href="#">Mobile Apps</a></div>
              <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>12</a></div>
            </div>
          </div>
        </div>
        <!-- Portfolio Item-->
        <div class="col-md-4 col-sm-6 mb-30 pb-2">
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
        <!-- Portfolio Item-->
        <div class="col-md-4 col-sm-6 mb-30 pb-2">
          <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-wide-slider.html"><img src="img/portfolio/03.jpg" alt="Portfolio Thumbnail"/></a>
            <div class="card-body">
              <div class="portfolio-meta"><span><i class="fe-icon-user"></i>Olivia Davis</span></div>
              <h5 class="portfolio-title"><a href="portfolio-single-wide-slider.html">Company Brand Design</a></h5>
            </div>
            <div class="card-footer">
              <div><a class="tag-link" href="#">Branding</a></div>
              <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>25</a></div>
            </div>
          </div>
        </div>
        <!-- Portfolio Item-->
        <div class="col-md-4 col-sm-6 mb-30 pb-2">
          <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-wide-gallery.html"><img src="img/portfolio/04.jpg" alt="Portfolio Thumbnail"/></a>
            <div class="card-body">
              <div class="portfolio-meta"><span><i class="fe-icon-user"></i>Michael Brown</span></div>
              <h5 class="portfolio-title"><a href="portfolio-single-wide-gallery.html">iOS App Development</a></h5>
            </div>
            <div class="card-footer">
              <div><a class="tag-link" href="#">Mobile Apps</a></div>
              <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>43</a></div>
            </div>
          </div>
        </div>
        <!-- Portfolio Item-->
        <div class="col-md-4 col-sm-6 mb-30 pb-2">
          <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-side-gallery-grid.html"><img src="img/portfolio/05.jpg" alt="Portfolio Thumbnail"/></a>
            <div class="card-body">
              <div class="portfolio-meta"><span><i class="fe-icon-user"></i>Emilia Green</span></div>
              <h5 class="portfolio-title"><a href="portfolio-single-side-gallery-grid.html">Working Space Design</a></h5>
            </div>
            <div class="card-footer">
              <div><a class="tag-link" href="#">Interior Design</a></div>
              <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>27</a></div>
            </div>
          </div>
        </div>
        <!-- Portfolio Item-->
        <div class="col-md-4 col-sm-6 mb-30 pb-2">
          <div class="card portfolio-card"><a class="portfolio-thumb" href="portfolio-single-side-gallery-list.html"><img src="img/portfolio/09.jpg" alt="Portfolio Thumbnail"/></a>
            <div class="card-body">
              <div class="portfolio-meta"><span><i class="fe-icon-user"></i>Emilia Green</span></div>
              <h5 class="portfolio-title"><a href="portfolio-single-side-gallery-list.html">Watch Interaface Design</a></h5>
            </div>
            <div class="card-footer">
              <div><a class="tag-link" href="#">Mobile Apps</a></div>
              <div class="portfolio-meta"><a href="#"><i class="fe-icon-heart text-accent"></i>116</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center pt-2"><a class="btn btn-style-4 btn-primary btn-icon-right" href="portfolio-style2-boxed.html"><i class="fe-icon-arrow-right text-md bg-white text-primary"></i>View all works</a></div>
    </section>
    <!-- Contact Form-->
    <section class="bg-secondary pt-5 pb-3">
      <div class="container py-2">
        <h2 class="h3 block-title text-center">Contact us<small>We'll be glad to answer all your questions. We normally respond within 2 - 3 business days.</small></h2>
        <form class="needs-validation pt-4 pb-5" novalidate>
          <div class="row">
            <div class="col-md-4 col-sm-6 form-group">
              <label for="cont-name">Your Name <span class='text-danger font-weight-medium'>*</span></label>
              <input class="form-control" type="text" id="cont-name" placeholder="John Doe" required>
              <div class="invalid-feedback">Please fill in your name!</div>
            </div>
            <div class="col-md-4 col-sm-6 form-group">
              <label for="cont-email">Email Address <span class='text-danger font-weight-medium'>*</span></label>
              <input class="form-control" type="email" id="cont-email" placeholder="johndoe@example.com" required>
              <div class="invalid-feedback">Please provide valid email address!</div>
            </div>
            <div class="col-md-4 form-group">
              <label for="cont-subject">Subject</label>
              <input class="form-control" type="email" id="cont-subject" placeholder="Title of your message">
            </div>
          </div>
          <div class="form-group">
            <label for="cont-message">Message <span class='text-danger font-weight-medium'>*</span></label>
            <textarea class="form-control" id="cont-message" rows="8" placeholder="Type your message..." required></textarea>
            <div class="invalid-feedback">Please type your message!</div>
          </div>
          <div class="text-center">
            <button class="btn btn-style-4 btn-icon-left btn-primary" type="submit"><i class="fe-icon-mail text-md bg-white text-primary"></i>Send Message</button>
          </div>
        </form>
      </div>
    </section>
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