
<!doctype html>
<html class="no-js" lang="zxx" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UniAlumuni</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link rel="stylesheet" href="css/responsive.css">-->

</head>

<body>

    <header>
        <div class="header-area ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="header-contact">
                                <a href="#"><!-- <i class="fa fa-phone"></i> --> <b>Email:</b>info@construct.com</a>
                                <a href="#"><!-- <i class="fa fa-envelope"></i> --> <b>Hotline:</b>880 454 5477</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="header-top-menu">
                                <nav>
                                    <ul>
                                        <li>
                                            <div class="d-none d-lg-block">
                                            <a class="boxed-btn" href="#">Login</a>
                                            </div>
                                        </li>
                                        <li><div class="get-quote d-none d-lg-block">
                                            <a class="boxed-btn-sign" href="#">Signup</a>
                                            </div>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo2.png" alt="" style=" height:100px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 header-pad">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a  href="about.html">About</a></li>
                                        <li><a href="service.html">Services</a></li>
                                        <li><a class="active" href="project.html">Projects</a></li>
                                        <li><a href="#">blog <!-- <i class="ti-angle-down"></i> --></a></li>
                                            <!-- <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul> -->

                                        <li><a href="#">pages <!-- <i class="ti-angle-down"></i> --></a></li>
                                            <!-- <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                                <li><a href="service-details.html">service-details</a></li>
                                                <li><a href="project-details.html">project-details</a></li>
                                            </ul> -->

                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-lg-3">
                            <div class="quote-area">
                                <div class="search-bar">
                                    <a id="search_1" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                                </div>
                                  <div class="get-quote d-none d-lg-block">
                                    <a class="boxed-btn" href="#">Get a quote</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="search_input" id="search_input_box">
                        <div class="container ">
                            <form class="d-flex justify-content-between search-inner">
                                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                                <button type="submit" class="btn"></button>
                                <span class="fa fa-close" id="close_search" title="Close Search"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- breadcrumb-start -->
    <section class="breadcrumb breadcrumb_bg banner-bg-1 overlay2 ptb200">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Membership Form</h2>
                            <p> Alumuni Needs enables you to harness the power of your alumuni network. Whatever may be the need</p>

                            <button class="btn btn-primary">Lets See</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about start -->
    <div class="about-area section-padding">

        <div class="container">
            @yield('main')
        </div>
</div>
    <!-- about end -->

    <!-- footer -->
    <footer class="footer-area ">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-3 col-xl-4">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/logo2.png" alt="" class="footer-logo" > </a>
                        <p style="color: white;">Waters make fish every without firmament saw had. Morning air subdue very one. Whales grass
                            is fish whales winged.</p>
                        <p style="color: #fff;">Phone: +8745445444  Fax: +8874156362<br>Email: Demo@demogmail.com</p>


                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget">
                        <h4>Get In Touch</h4>
<!--                        <ul>-->
<!--                            <li><a href="#">About</a></li>-->
<!--                            <li><a href="#">Media</a></li>-->
<!--                            <li><a href="#">Carrier</a></li>-->
<!--                            <li><a href="#">Testimonials</a></li>-->
<!--                            <li><a href="#">Stability</a></li>-->
<!--                        </ul>-->
                        <p>We are Legend Lorem ipsum dolor simet, nsecete ipising,eit,sed </p>
                        <div style="position:  relative">
                        <input type="text" class=" email-form" placeholder="Enter your email" style="border: 1px solid #265cce;">
                        <button class="btn-email"><i class="fa fa-telegram" style="font-size: 28px;"></i></button>
                        </div>
                        <div class="social-links social">
                            <ul>
                                <li><a href="#"> <i class="faa fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="faa fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="faa fa fa-linkedin"></i> </a></li>
                                <li><a href="#"> <i class="faa fa fa-vimeo"></i> </a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-3 col-xl-2">
                    <div class="single-footer-widget">
                        <h4>Useful Links</h4>
                        <ul style="position: absolute">
                            <li><i class="fa fa-angle-right link-url" aria-hidden="true"  ></i><a href="#">Pricing Plan</a></li>
                            <li><i class="fa fa-angle-right link-url" aria-hidden="true"  ></i><a href="#">Categories</a></li>
                            <li><i class="fa fa-angle-right link-url" aria-hidden="true"  ></i><a href="#">Popular Deal </a></li>
                            <li><i class="fa fa-angle-right link-url" aria-hidden="true"  ></i><a href="#">FAQ </a></li>
                            <li><i class="fa fa-angle-right link-url" aria-hidden="true"  ></i><a href="#">Support </a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xl-2">
                    <div class="single-footer-widget">
                        <h4>University</h4>
                        <ul style="position: absolute">
                            <li><i class="fa fa-angle-right link-url" aria-hidden="true"  ></i><a href="#">Pricing Plan</a></li>
                            <li><i class="fa fa-angle-right link-url" aria-hidden="true"  ></i><a href="#">  Categories</a></li>
                            <li><i class="fa fa-angle-right link-url" aria-hidden="true"  ></i><a href="#">Popular Deal </a></li>
                            <li><i class="fa fa-angle-right link-url" aria-hidden="true"  ></i><a href="#">FAQ </a></li>
                            <li><i class="fa fa-angle-right link-url" aria-hidden="true"  ></i><a href="#">Support </a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> VSPL All rights reserved .<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Privacy Policy</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end-->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
