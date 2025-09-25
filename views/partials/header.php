<?php
//chaching for 7 days
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 604800)); // 7 days
header("Cache-Control: max-age=604800, public, immutable"); // Cache for 7 days
header_remove('X-Powered-By');


if (!isset($connection)) {
  include $_SERVER['DOCUMENT_ROOT'] . "/nhc/lib/Database.php";
}
if (!isset($baseurl)) {
  include $_SERVER['DOCUMENT_ROOT'] . "/nhc/utility/Baseurl.php";
  $baseurl = new Baseurl;
  define("LINK", "{$baseurl->url()}/nhc/");
}

include $_SERVER['DOCUMENT_ROOT'] . "/nhc/utility/Format.php";
$format = new Format;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="creator" content="@Md Rabiul Hasan">
  <meta name="robots" content="index, follow">

  <meta name="description" content="<?= $meta_description?$meta_description:'Are you trying to find a cleaning service in Dubai? Deep cleaning for home and business spaces is what we do best in Dubai. Call now +971 56 459 8416'; ?>">

  <meta name="keywords" content="<?= $meta_keywords?$meta_keywords:'deep cleaning services in dubai'; ?>">
  <meta name="title" content="<?= isset($meta_title)?$meta_title:$title; ?>">
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="creator" content="@Md Rabiul Hasan">

  <meta property="og:site_name" content="NHC Cleaning and Technical | Dubai's Finest Deep Cleaning Services Provider">
  <meta property="og:title" content="<?= isset($meta_title)?$meta_title:$title; ?>" />
  <meta property="og:image" content="<?=LINK;?>public/images/favicon/apple-touch-icon.png" />
  <meta data-n-head="ssr" data-hid="og:image:type" property="og:image:type" content="image/png">
  <meta property="og:image:alt" content="deep-cleaning-services">
  <meta property="og:type" content="Website" />
  <meta property="og:description" content="<?= $meta_description?$meta_description:'Are you trying to find a cleaning service in Dubai? Deep cleaning for home and business spaces is what we do best in Dubai. Call now +971 56 459 8416'; ?>" />
  <meta property="og:url" content="https://nhccleaningandtechnical.com" />

  <link rel="canonical" href="<?php echo "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" >


  <meta name="dc.title" content="<?= isset($meta_title)?$meta_title:$title; ?>">
  <meta name="dc.description" content="<?= $meta_description?$meta_description:'Are you trying to find a cleaning service in Dubai? Deep cleaning for home and business spaces is what we do best in Dubai. Call now +971 56 459 8416'; ?>">
  <meta name="dc.relation" content="https://nhccleaningandtechnical.com/">
  <meta name="dc.source" content="https://nhccleaningandtechnical.com/">
  <meta name="dc.language" content="en_US">

   <title>NHC Cleaning & Technical Services</title>


    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/custom-animate.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome-all.css" />
    <link rel="stylesheet" href="assets/css/jarallax.css" />
    <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/twentytwenty.css" />


    <link rel="stylesheet" href="assets/css/module-css/banner.css" />
    <link rel="stylesheet" href="assets/css/module-css/slider.css" />
    <link rel="stylesheet" href="assets/css/module-css/footer.css" />
    <link rel="stylesheet" href="assets/css/module-css/sliding-text.css" />
    <link rel="stylesheet" href="assets/css/module-css/about.css" />
    <link rel="stylesheet" href="assets/css/module-css/services.css" />
    <link rel="stylesheet" href="assets/css/module-css/counter.css" />
    <!-- <link rel="stylesheet" href="assets/css/module-css/before-and-after.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/module-css/office-location.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/module-css/pricing.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/module-css/blog.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/module-css/newsletter.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/module-css/why-choose.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/module-css/process.css" /> -->
    <link rel="stylesheet" href="assets/css/module-css/project.css" />
    <!-- <link rel="stylesheet" href="assets/css/module-css/brand.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/module-css/contact.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/module-css/team.css" /> -->
    <link rel="stylesheet" href="assets/css/module-css/testimonial.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body class="custom-cursor">

    <!-- <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div> -->

    <!--Start Preloader-->
    <!-- <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div> -->
    <!--End Preloader-->

    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-menu__top">
                <div class="container">
                    <div class="main-menu__top-inner">
                        <ul class="list-unstyled main-menu__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="icon-mail"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:info@nhccleaningandtechnical.com">info@nhccleaningandtechnical.com</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-phone-call"></i>
                                </div>
                                <div class="text">
                                    <p><a href="tel:+971526503468">+971 52 650 3468</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-pin-1"></i>
                                </div>
                                <div class="text">
                                    <p>Level 4, One JLT Tower 1 ,Jumeirah Lake Towers - Dubai</p>
                                </div>
                            </li>
                        </ul>
                        <div class="main-menu__top-social-box">
                            <h4 class="main-menu__top-social-title">Follow Us</h4>
                            <div class="main-menu__top-social">
                                <a href="#"><span class="icon-facebook-app-symbol"></span></a>
                                <!-- <a href="#"><span class="icon-pinterest"></span></a> -->
                                <!-- <a href="#"><span class="icon-linkedin-big-logo"></span></a> -->
                                <a href="#"><span class="icon-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="<?=LINK;?>"><img src="assets/images/resources/logo-1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown megamenu">
                                        <a href="<?=LINK;?>">Home </a>
                                    </li>
                                    <!-- <li>
                                        <a href="about.html">About</a>
                                    </li> -->
                                    <li class="dropdown">
                                        <a href="#">Deep Cleaning</a>
                                        <ul class="shadow-box">
                                            <li><a href="#">Deep Cleaning Services</a></li>
                                            <li><a href="#">Villa Deep Cleaning</a></li>
                                            <li><a href="#">Move In And Out Deep Cleaning</a></li>
                                            <li><a href="#">Floor Deep Cleaning</a></li>
                                            <li><a href="#">Office Deep Cleaning</a></li>
                                            <li><a href="#">Sofa Shampoo Cleaning</a></li>
                                            <li><a href="#">Kitchen Deep Cleaning</a></li>
                                            <li><a href="#">Restaurant Deep Cleaning</a></li>
                                            <li><a href="#">Restaurant Deep Cleaning</a></li>
                                            <li><a href="#">Garage Deep Cleaning</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Cleaning Services</a>
                                        <ul class="shadow-box">
                                            <li><a href="#">Ac Duct Cleaning</a></li>
                                            <li><a href="#">Residential Cleaning</a></li>
                                            <li><a href="#">Commercial Cleaning</a></li>
                                            <li><a href="#">Office Cleaning</a></li>
                                            <li><a href="#">Sanitizing & Mopping</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Painting Services</a>
                                        <ul class="shadow-box">
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Residential Cleaning</a></li>
                                            <li><a href="#">Commercial Cleaning</a></li>
                                            <li><a href="#">Deep Cleaning</a></li>
                                            <li><a href="#">Office Cleaning</a></li>
                                            <li><a href="#">Sanitizing & Mopping</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__search-cart-box">
                                    <div class="main-menu__search-box">
                                        <a href="#" class="main-menu__search searcher-toggler-box icon-search"></a>
                                    </div>
                                    <!-- <div class="main-menu__cart">
                                        <a href="cart.html"><span class="fas fa-shopping-cart"></span></a>
                                    </div> -->
                                </div>
                                <div class="main-menu__btn-box">
                                    <div class="main-menu__btn">
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=971526503468"> <span class="icon-customer-support"></span> Book
                                            Schedule</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->