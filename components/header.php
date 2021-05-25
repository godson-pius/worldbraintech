<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?>
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description"
        content="World Brain Technology is a tech company which offers more to the world, and whose goal and vision is to take technology to every part of the world, most especially to places that lacks it.. We build websites and teach any programming language.">
    <meta name=" keywords"
        content="World Brain Technology, World, Brain, Technology, Your Solution, Our Piority, Tech, Tech Company, Compnay, Solutions, Digital, Digital Solutions, Web design, Web, Design, Web Development, Development, Mobile, Mobile Development, Digital Marketing, Graphics, Graphics Designs, Laptops, Github">
    <meta name="author" content="World Brain Technology">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo/wbtlogo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo/wbtlogo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo/wbtlogo.png">
    <!--    <link rel="manifest" href="site.webmanifest">-->
    <link rel="mask-icon" color="#343b43" href="img/logo/wbtlogo.png">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">


    <!-- Open Graph -->
    <meta property="og:title" content="<?= $title; ?> - Best IT Company">
    <meta property="og:type" content="website">
    <meta property="og:url" content="index">
    <meta property="og:site_name" content="World Brain Technology">
    <meta property="og:image" content="img/logo/wbtlogo.png">
    <meta property="og:description"
        content="Most trusted and reliable tech company around the globe. Leading to change the world with the power of tech.">


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
    <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu"><span
            class="offcanvas-close"><i class="fe-icon-x"></i></span>
        <div class="px-4 pb-4">
            <h6>Menu</h6>
            <div class="d-flex justify-content-between pt-2">
                <div class="btn-group w-100 mr-2"><a class="btn btn-secondary btn-sm btn-block dropdown-toggle" href="#"
                        data-toggle="dropdown"><img src="img/flags/en.png" alt="English" />English</a>
                    <div class="dropdown-menu" style="min-width: 150px;"><a class="dropdown-item" href="#"><img
                                src="img/flags/fr.png" alt="Français" />Français</a><a class="dropdown-item"
                            href="#"><img src="img/flags/de.png" alt="Deutsch" />Deutsch</a><a class="dropdown-item"
                            href="#"><img src="img/flags/it.png" alt="Italiano" />Italiano</a></div>
                </div>
                <!--                <a class="btn btn-primary btn-sm btn-block" href="account-login.html"><i class="fe-icon-user"></i>&nbsp;Login</a>-->
            </div>
        </div>
        <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
            <!-- Mobile Menu-->
            <div class="accordion mobile-menu" id="accordion-menu">
                <!-- Home-->
                <div class="card">
                    <div class="card-header"><a
                            class="mobile-menu-link <?php if ($title == "World Brain Technology") : echo "active"; endif; ?>"
                            href="index">Home</a></div>
                </div>

                <!-- About-->
                <div class="card">
                    <div class="card-header"><a
                            class="mobile-menu-link <?php if ($title == "About | World Brain Technology") : echo "active"; endif; ?>"
                            href="about">About</a></div>
                </div>

                <!-- Our Services-->
                <div class="card">
                    <div class="card-header"><a
                            class="mobile-menu-link <?php if ($title == "Services | World Brain Technology") : echo "active"; endif; ?>"
                            href="services">Services</a></div>
                </div>

                <!-- Our Works-->
                <div class="card">
                    <div class="card-header"><a
                            class="mobile-menu-link <?php if ($title == "Portfolio | World Brain Technology") : echo "active"; endif; ?>"
                            href="portfolio">Portfolio</a></div>
                </div>

                <!-- User Contact -->
                <div class="card">
                    <div class="card-header"><a
                            class="mobile-menu-link <?php if ($title == "Contact | World Brain Technology") : echo "active"; endif; ?>"
                            href="contact-us">Contact Us</a></div>
                </div>

            </div>
        </div>
        <div class="offcanvas-footer px-4 pt-3 pb-2 text-center"><a class="social-btn sb-style-3 sb-twitter" href="#"><i
                    class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-facebook" href="#"><i
                    class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-pinterest" href="#"><i
                    class="socicon-pinterest"></i></a><a class="social-btn sb-style-3 sb-instagram" href="#"><i
                    class="socicon-instagram"></i></a></div>
    </div>
    <!-- Navbar: Floating-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar-wrapper navbar-floating navbar-floating navbar-sticky">
        <div class="container">
            <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="index"><img
                        src="img/logo/b_logo.png" alt="World Brain Tech" /></a></div>
            <div class="d-table-cell align-middle w-100 pl-md-3">
                <div class="navbar justify-content-end justify-content-lg-between">
                    <!-- Search-->
                    <form class="search-box" method="get">
                        <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span
                            class="search-close"><i class="fe-icon-x"></i></span>
                    </form>
                    <!-- Main Menu-->
                    <ul class="navbar-nav d-none d-lg-block">
                        <!-- Home-->
                        <li class="nav-item <?php if ($title == "World Brain Technology") : echo "active"; endif; ?>"><a
                                class="nav-link" href="./">Home</a>
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
                        <li
                            class="nav-item <?php if ($title == "About | World Brain Technology") : echo "active"; endif; ?>">
                            <a class="nav-link" href="about">About Us</a>
                        </li>

                        <!-- Our Services-->
                        <li
                            class="nav-item <?php if ($title == "Services | World Brain Technology") : echo "active"; endif; ?>">
                            <a class="nav-link" href="services">Services</a>
                        </li>

                        <!-- Our Works-->
                        <li
                            class="nav-item <?php if ($title == "Portfolio | World Brain Technology") : echo "active"; endif; ?>">
                            <a class="nav-link" href="portfolio">Portfolio</a>
                        </li>

                        <!-- User Contact-->
                        <li
                            class="nav-item <?php if ($title == "Contact | World Brain Technology") : echo "active"; endif; ?>">
                            <a class="nav-link" href="contact-us">Contact Us</a>
                        </li>
                    </ul>
                    <div>
                        <ul class="navbar-buttons d-inline-block align-middle">
                            <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i
                                        class="fe-icon-menu"></i></a></li>
                            <li><a href="#" data-toggle="search"><i class="fe-icon-search"></i></a></li>
                        </ul>
                        <!-- <a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="https://themes.getbootstrap.com/product/createx-multipurpose-template-ui-kit/" target="_blank">Buy Now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </header>