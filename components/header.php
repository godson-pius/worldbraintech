<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?>
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="CreateX - Multipurpose Bootstrap Theme">
    <meta name="keywords" content="World Brain Technology, World, Brain, Technology, Your Solution, Our Piority, Tech, Tech Company, Compnay, Solutions, Digital, Digital Solutions, Web design, Web, Design, Web Development, Development, Mobile, Mobile Development, Digital Marketing, Graphics, Graphics Designs, Laptops, Github">
    <meta name="author" content="World Brain Technology">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo/wbtlogo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo/wbtlogo.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#343b43" href="img/logo/wbtlogo.png">
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
                <div class="btn-group w-100 mr-2"><a class="btn btn-secondary btn-sm btn-block dropdown-toggle" href="#" data-toggle="dropdown"><img src="img/flags/en.png" alt="English" />English</a>
                    <div class="dropdown-menu" style="min-width: 150px;"><a class="dropdown-item" href="#"><img src="img/flags/fr.png" alt="Français" />Français</a><a class="dropdown-item" href="#"><img src="img/flags/de.png" alt="Deutsch" />Deutsch</a><a class="dropdown-item" href="#"><img src="img/flags/it.png" alt="Italiano" />Italiano</a></div>
                </div><a class="btn btn-primary btn-sm btn-block" href="account-login.html"><i class="fe-icon-user"></i>&nbsp;Login</a>
            </div>
        </div>
        <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
            <!-- Mobile Menu-->
            <div class="accordion mobile-menu" id="accordion-menu">
                <!-- Home-->
                <div class="card">
                    <div class="card-header"><a class="mobile-menu-link active" href="index.html">Home</a><a class="collapsed" href="#home-submenu" data-toggle="collapse"></a></div>
                    
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
            <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="index.html"><img src="img/logo/b_logo.png" alt="World Brain Tech" /></a></div>
            <div class="d-table-cell align-middle w-100 pl-md-3">
                <div class="navbar justify-content-end justify-content-lg-between">
                    <!-- Search-->
                    <form class="search-box" method="get">
                        <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
                    </form>
                    <!-- Main Menu-->
                    <ul class="navbar-nav d-none d-lg-block">
                        <!-- Home-->
                        <li class="nav-item <?php if ($title == "World Brain Technology") : echo "active"; endif; ?>"><a class="nav-link" href="./">Home</a>
                        </li>
                      
                      
                        <!-- Account-->
                        <!-- <li class="nav-item dropdown-toggle"><a class="nav-link" href="account-orders.html">Account</a>
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
                        </li> -->
                       
                        <!-- About Us-->
                        <li class="nav-item <?php if ($title == "About | World Brain Technology") : echo "active"; endif; ?>"><a class="nav-link" href="about">About Us</a></li>
                        
                        <!-- Our Services-->
                        <li class="nav-item <?php if ($title == "Services | World Brain Technology") : echo "active"; endif; ?>"><a class="nav-link" href="services">Services</a></li>
                        
                        <!-- Our Works-->
                        <li class="nav-item <?php if ($title == "Portfolio | World Brain Technology") : echo "active"; endif; ?>"><a class="nav-link" href="portfolio">Portfolio</a></li>
                        
                    </ul>
                    <div>
                        <ul class="navbar-buttons d-inline-block align-middle">
                            <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
                            <li><a href="#" data-toggle="search"><i class="fe-icon-search"></i></a></li>
                        </ul>
                        <!-- <a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="https://themes.getbootstrap.com/product/createx-multipurpose-template-ui-kit/" target="_blank">Buy Now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </header>