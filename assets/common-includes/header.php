<?php
$page = basename($_SERVER['PHP_SELF']);
?>

<div id="preloader"></div>
<header>
    <!-- Start top bar -->
<!--    <div class="topbar-area fix hidden-xs">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-sm-6">
                    <div class="topbar-left">
                        <a class="log-in" href="#">Login</a>
                        <a class="log-in" href="#">Register</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="top-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- End top bar -->
    <!-- header-area start -->
    <div class="header-middle-area hidden-xs">
        <div class="container">
            <div class="row">
                <!-- logo start -->
                <div class="col-md-4 col-sm-4">
                    <div class="logo">
                        <!-- Brand -->
                        <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                            <h2>Dr. Habibur <span>Rahman</span></h2>
                        </a>
                    </div>
                </div>
                <!-- logo end -->
                <div class="col-md-8 col-sm-8">
                    <div class="header-middle-link">
                        <div class="header-info">
                            <div class="header-icon">
                                <i class="icon icon-phone-handset"></i>
                            </div>
                            <div class="header-info-text">
                                <span class="info-first">Phone</span>

                                <span class="info-simple">9432211889 / 9875681382 / 9331077599</span>
                            </div>
                        </div>
                        <div class="header-info">
                            <div class="header-icon">
                                <i class="icon icon-envelope"></i>
                            </div>
                            <div class="header-info-text">
                                <span class="info-first">Email</span>
                                <a href="mailto:drrahman7@gmail.com"><span class="info-simple">drrahman7@gmail.com</span></a>
                            </div>
                        </div>
                        <div class="header-info">
                            <div class="header-icon">
                                <i class="icon icon-map-marker"></i>
                            </div>
                            <div class="header-info-text">
                                <span class="info-first">Location</span>
                                <span class="info-simple">3A Natore Park,2nd Road Kolkata 700039 India.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End middle bar -->
    <!-- header-area start -->
    <div id="sticker" class="header-area hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="header-right-link">
                        <!-- search option start -->
                       <!-- <form action="#">
                            <div class="search-option">
                                <input type="text" placeholder="Search...">
                                <button class="button" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>-->
                        <!-- search option end -->
                    </div>
                    <!-- mainmenu start -->
                    <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse" id="navbar-example">
                            <div class="main-menu">
                                <ul class="nav navbar-nav navbar-right">
                                    <li <?php if($page == 'index.php') echo 'class="active"'; ?>><a href="index.php">Home</a></li>
                                    <li <?php if($page == 'about.php') echo 'class="active"'; ?>><a class="pagess" href="#">About us</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.php">About Homeopathy</a></li>
                                            <li><a href="about.php#about">About Doctor</a></li>
                                         <!--   <li><a href="review.html">Review</a></li>
                                            <li><a href="product.html">Products</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="error.html">Error</a></li>-->
                                        </ul>
                                    </li>
                                    <li <?php if($page == 'services.php') echo 'class="active"'; ?>><a class="pagess" href="services.php">Services</a>
                                        <!--<ul class="sub-menu">
                                            <li><a href="services.html">Services 01</a></li>
                                            <li><a href="services-2.html">Services 02</a></li>
                                            <li><a href="single-service.html">Services Details</a></li>
                                        </ul>-->
                                    </li>
                                    <li <?php if($page == 'gallery.php') echo 'class="active"'; ?>><a class="pagess" href="gallery.php">Gallery</a>
                                       <!-- <ul class="sub-menu">
                                            <li><a href="gallery-1.php">Gallery column 2</a></li>
                                            <li><a href="gallery-3.php">Gallery column 3</a></li>
                                        </ul>-->
                                    </li>
                                 <!--   <li><a class="pagess" href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>-->
                                    <li <?php if($page == 'contact.php') echo 'class="active"'; ?>><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- mainmenu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <h4>Dr. Habibur Rahman</h4>
                        </div>
                        <nav id="dropdown">

                            <ul class="">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a class="pagess" href="#">About us</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.php">About Homeopathy</a></li>
                                        <li><a href="about.php#about">About Doctor</a></li>
                                        <!--   <li><a href="review.html">Review</a></li>
                                           <li><a href="product.html">Products</a></li>
                                           <li><a href="faq.html">FAQ</a></li>
                                           <li><a href="error.html">Error</a></li>-->
                                    </ul>
                                </li>
                                <li><a class="pagess" href="services.php">Services</a>
                                    <!--<ul class="sub-menu">
                                        <li><a href="services.html">Services 01</a></li>
                                        <li><a href="services-2.html">Services 02</a></li>
                                        <li><a href="single-service.html">Services Details</a></li>
                                    </ul>-->
                                </li>
                                <li><a class="pagess" href="gallery.php">Gallery</a>
                                    <!-- <ul class="sub-menu">
                                         <li><a href="gallery-1.php">Gallery column 2</a></li>
                                         <li><a href="gallery-3.php">Gallery column 3</a></li>
                                     </ul>-->
                                </li>
                                <!--   <li><a class="pagess" href="#">Blog</a>
                                       <ul class="sub-menu">
                                           <li><a href="blog.html">Blog</a></li>
                                           <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                           <li><a href="blog-details.html">Blog Details</a></li>
                                       </ul>
                                   </li>-->
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>