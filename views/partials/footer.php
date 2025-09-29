 <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__shape-bg float-bob-y"
                style="background-image: url(<?=LINK;?>assets/images/shapes/site-footer-shpae-bg.png);"></div>
            <div class="site-footer__shape-2 img-bounce">
                <img src="<?=LINK;?>assets/images/shapes/site-footer-shape-2.png" alt="logo">
            </div>
            <div class="container">
                <div class="site-footer__inner">
                    <div class="site-footer__top">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="site-footer__top-left">
                                    <div class="site-footer__logo-box">
                                        <div class="site-footer__logo">
                                            <a href="index.html"><img
                                                    src="<?=LINK;?>assets/images/resources/site-footer-logo-1.png" alt="logo"></a>
                                        </div>
                                        <p class="site-footer__text-1">We are passionate about delivering exceptional cleaning services to create spotless, comfortable spaces for homes and
                                            businesses.</p>
                                    </div>
                                    <div class="site-footer__contact-info-box">
                                        <ul class="list-unstyled site-footer__contact-info">
                                            <li>
                                                <div class="site-footer__contact-info-icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="site-footer__contact-info-content">
                                                    <p>Address:</p>
                                                    <h5><?=$contact_result['address']?></h5>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul
                                            class="list-unstyled site-footer__contact-info site-footer__contact-info--two">
                                            <li>
                                                <div class="site-footer__contact-info-icon">
                                                    <span class="icon-envelope"></span>
                                                </div>
                                                <div class="site-footer__contact-info-content">
                                                    <p>Email Address:</p>
                                                    <h5><a href="mailto:<?=$contact_result['email']?>"><?=$contact_result['email']?></a></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="site-footer__contact-info-icon">
                                                    <span class="icon-phone-call"></span>
                                                </div>
                                                <div class="site-footer__contact-info-content">
                                                    <p>Phone Number:</p>
                                                    <h5><a href="tel:+<?=$wp_api_number?>"><?=$contact_result['number']?></a></h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="site-footer__social-box">
                                        <h4 class="site-footer__social-title">Follow Us</h4>
                                        <div class="site-footer__social">
                                            <a href="#"><span class="icon-facebook-app-symbol"></span></a>
                                            <!-- <a href="#"><span class="icon-pinterest"></span></a> -->
                                            <!-- <a href="#"><span class="icon-linkedin-big-logo"></span></a> -->
                                            <a href="#"><span class="icon-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="site-footer__top-right">
                                    <div class="site-footer__top-right-heading-box">
                                        <div class="site-footer__shape-1 float-bob-x">
                                            <img src="<?=LINK;?>assets/images/shapes/site-footer-shape-1.png" alt="">
                                        </div>
                                        <h3 class="site-footer__top-right-heading-title">Collaborating with you to deliver cleaning excellence.</h3>
                                        <div class="site-footer__top-right-heading-img">
                                            <img src="<?=LINK;?>assets/images/resources/site-footer-top-right-heading-img.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="site-footer__widget-box">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4">
                                                <div class="footer-widget__quick-links">
                                                    <h4 class="footer-widget__title">Quick Links</h4>
                                                    <ul class="footer-widget__quick-links-list list-unstyled">
                                                        <li><a href="#"> <span class="icon-next"></span>Home</a>
                                                        </li>
                                                        <li><a href="#"> <span class="icon-next"></span> About Us</a></li>
                                                        <li><a href="#"> <span class="icon-next"></span>Contact</a></li>
                                                        <li><a href="#"> <span class="icon-next"></span> FAQs Page</a>
                                                        </li>
                                                        <li><a href="#"> <span class="icon-next"></span>Our Blogs</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4">
                                                <div class="footer-widget__essential-links">
                                                    <h4 class="footer-widget__title">Essential</h4>
                                                    <ul class="footer-widget__quick-links-list list-unstyled">
                                                        <li><a href="#"> <span class="icon-next"></span> Terms
                                                                & Condition</a></li>
                                                        <li><a href="#"> <span class="icon-next"></span>
                                                                Privacy Policy</a></li>
                                                        <li><a href="#"> <span class="icon-next"></span>
                                                                Contact
                                                                Us</a>
                                                        </li>
                                                        <li><a href="#"> <span class="icon-next"></span>
                                                                About US</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4">
                                                <div class="footer-widget__services-links">
                                                    <h4 class="footer-widget__title">Our Services</h4>
                                                    <ul class="footer-widget__quick-links-list list-unstyled">
                                                        <li><a href="#"> <span
                                                                    class="icon-next"></span>
                                                                Deep Cleaning</a>
                                                        </li>
                                                        <li><a href="#"> <span
                                                                    class="icon-next"></span> Villa Deep Cleaning</a></li>
                                                        <li><a href="#"> <span
                                                                    class="icon-next"></span>
                                                                Painting Services</a></li>
                                                        <li><a href="#"> <span
                                                                    class="icon-next"></span>
                                                                AC Duct Cleaning</a>
                                                        </li>
                                                        <li><a href="#"> <span
                                                                    class="icon-next"></span>
                                                                Window Cleaning</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="site-footer__tearms-and-condition">
                                        <ul class="list-unstyled site-footer__tearms-and-condition-list">
                                            <!-- <li>
                                                <div class="icon">
                                                    <span class="icon-file"></span>
                                                </div>
                                                <div class="content">
                                                    <h4><a href="#">Here review our terms and <br>
                                                            conditions document</a></h4>
                                                    <p>Download Now</p>
                                                </div>
                                            </li> -->
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-medal"></span>
                                                </div>
                                                <div class="content">
                                                    <h4><a href="#">We are lisenced certified <br>
                                                            deep cleaning company. you can trust</a></h4>
                                                    <div class="site-footer__tearms-and-condition-star">
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <span class="icon-star"></span>
                                                        <!-- <span class="icon-favorite"></span> -->
                                                        <!-- <span class="icon-favorite"></span> -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="site-footer__subscribe-form-box">
                                    <form class="site-footer__subscribe-form">
                                        <div class="site-footer__subscribe-input">
                                            <input type="email" placeholder="Email Address">
                                        </div>
                                        <button type="submit" class="site-footer__subscribe-btn"> <span
                                                class="icon-send"></span>
                                            Subscribe</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="site-footer__bottom-text-box">
                                    <p class="site-footer__bottom-text">Copyright © 2025 by <a
                                            href="#">NHC Cleaning and Technical.</a> All
                                        rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->




    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?=LINK;?>" aria-label="logo image"><img src="<?=LINK;?>assets/images/resources/logo-2.png" width="150"
                        alt="logo-nhc" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?=$contact_result['email']?>"><?=$contact_result['email']?></a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:+<?=$wp_api_number;?>"><?=$contact_result['number']?></a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <!-- <a href="#" class="fab fa-twitter"></a> -->
                    <a href="#" class="fab fa-facebook-square"></a>
                    <!-- <a href="#" class="fab fa-pinterest-p"></a> -->
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="far fa-times fa-fw"></span></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Search Popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Go Back Top</span>
    </a>

    <style>
  .floating-left, .floating-right {
    position: fixed;
    bottom: 20px;
    z-index: 9999;
  }
  .floating-left { left: 20px; }
  .floating-right { right: 20px; }

.floating-btn a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #25D366;
    box-shadow: 0 8px 20px rgb(16 24 40 / 38%);
    text-decoration: none;
    transition: transform .18s ease, box-shadow .18s ease;
}
  .floating-btn a:active { transform: translateY(1px); }

  .btn-call { background: #059669; }       /* Call button color */
  .btn-ws   { background: #25D366; }       /* WhatsApp button color */

  .floating-btn svg {
    width: 28px;
    height: 28px;
    fill: #fff;  /* White icons */
  }
</style>

<!-- LEFT: Call button -->
<div class="floating-right floating-btn">
  <a class="btn-call" href="tel:+8801234567890" title="Call Us">
    <!-- Phone Icon -->
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.72 19.72 0 0 1 3 5.18 
               2 2 0 0 1 5 3h3a1 1 0 0 1 1 .75c.12.7.36 1.37.7 2
               a1 1 0 0 1-.24 1l-1.2 1.2a16 16 0 0 0 6.9 6.9
               l1.2-1.2a1 1 0 0 1 1-.24c.63.34 1.3.58 2 .7
               A1 1 0 0 1 21 16v.92z"/>
    </svg>
  </a>
</div>

<!-- RIGHT: WhatsApp button -->
<div class="floating-left floating-btn">
  <a class="btn-ws" href="https://wa.me/8801234567890?text=Hello%20I%20need%20cleaning%20services"
     target="_blank" rel="noopener" title="Chat on WhatsApp">
    <!-- WhatsApp Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
      <path d="M16.027 3c-7.167 0-13 5.833-13 13 0 2.295.627 4.523 1.815 6.48L3 29l6.657-1.804A12.9 12.9 0 0 0 16.027 29c7.167 0 13-5.833 13-13s-5.833-13-13-13zm0 23.667a10.6 10.6 0 0 1-5.405-1.48l-.387-.23-3.953 1.072 1.057-3.906-.253-.401a10.6 10.6 0 0 1-1.64-5.722c0-5.873 4.753-10.627 10.627-10.627 2.84 0 5.509 1.107 7.516 3.115a10.59 10.59 0 0 1 3.111 7.512c0 5.873-4.753 10.667-10.673 10.667zm5.92-7.973c-.32-.16-1.893-.933-2.187-1.04-.293-.107-.507-.16-.72.16-.213.32-.827 1.04-1.013 1.253-.187.213-.373.24-.693.08-.32-.16-1.347-.497-2.566-1.573-.947-.84-1.587-1.88-1.773-2.2-.187-.32-.02-.493.14-.653.147-.147.32-.373.48-.56.16-.187.213-.32.32-.533.107-.213.053-.4-.027-.56-.08-.16-.72-1.76-.987-2.413-.26-.627-.52-.547-.72-.56-.187-.013-.4-.013-.613-.013a1.18 1.18 0 0 0-.853.4c-.293.32-1.12 1.093-1.12 2.667s1.147 3.093 1.307 3.307c.16.213 2.253 3.44 5.467 4.813.76.327 1.36.52 1.827.667.767.243 1.467.207 2.013.127.613-.093 1.893-.773 2.16-1.52.267-.747.267-1.387.187-1.52-.08-.133-.293-.213-.613-.373z" fill="#fff"/>
    </svg>
  </a>

</div>


    <script src="<?=LINK;?>assets/js/jquery-latest.js"></script>
    <script src="<?=LINK;?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=LINK;?>assets/js/jarallax.min.js"></script>
    <script src="<?=LINK;?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?=LINK;?>assets/js/jquery.appear.min.js"></script>
    <script src="<?=LINK;?>assets/js/swiper.min.js"></script>
    <script src="<?=LINK;?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=LINK;?>assets/js/jquery.validate.min.js"></script>
    <script src="<?=LINK;?>assets/js/odometer.min.js"></script>
    <script src="<?=LINK;?>assets/js/wNumb.min.js"></script>
    <script src="<?=LINK;?>assets/js/wow.js"></script>
    <script src="<?=LINK;?>assets/js/isotope.js"></script>
    <script src="<?=LINK;?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=LINK;?>assets/js/jquery-ui.js"></script>
    <script src="<?=LINK;?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?=LINK;?>assets/js/twentytwenty.js"></script>
    <script src="<?=LINK;?>assets/js/jquery.event.move.js"></script>
    <script src="<?=LINK;?>assets/js/marquee.min.js"></script>
    <script src="<?=LINK;?>assets/js/jquery.circleType.js"></script>
    <script src="<?=LINK;?>assets/js/jquery.fittext.js"></script>
    <script src="<?=LINK;?>assets/js/jquery.lettering.min.js"></script>
    <script src="<?=LINK;?>assets/js/typed-2.0.11.js"></script>
    <script src="<?=LINK;?>assets/js/jquery-sidebar-content.js"></script>
    <script src="<?=LINK;?>assets/js/countdown.min.js"></script>
    <script src="<?=LINK;?>assets/js/aos.js"></script>




    <script src="<?=LINK;?>assets/js/gsap/gsap.js"></script>
    <script src="<?=LINK;?>assets/js/gsap/ScrollTrigger.js"></script>
    <script src="<?=LINK;?>assets/js/gsap/SplitText.js"></script>




    <!-- template js -->
    <script src="<?=LINK;?>assets/js/script.js"></script>
</body>

</html>