<?php ob_start();
session_start();

    $title = "Contact | NHC Cleaning";
    
    $meta_description = 'deep cleaning services in dubai';
    
    $meta_keywords = '';
    
    $meta_title='Contact | NHC Cleaning';


include "../../partials/header.php";


$header_active = "Contact";
?>

<style>
    .main-header {
        position: relative;
    }
</style>

<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/contact-us.jpg);">
            </div>
            <div class="page-header__social">
                <a href="#">WhatsApp</a>
                <a href="#">Call Us</a>
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <div class="page-header__img-1">
                        <img src="assets/images/resources/page-header-img-1.jpg" alt="Contact Us">
                    </div>
                    <h1>Contact Us</h1>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="<?=LINK;?>">Home</a></li>
                            <li><span class="icon-arrow-right"></span></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Four Start-->
        <section class="contact-four">
            <div class="contact-four__shape-1 img-bounce">
                <img src="assets/images/shapes/contact-four-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-four__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-box">
                                        <div class="section-title__tagline-shape"></div>
                                        <div class="section-title__tagline-shape-2"></div>
                                    </div>
                                    <span class="section-title__tagline">Get In touch</span>
                                </div>
                                <h2 class="section-title__title title-animation">Reach Out to <span>Us for </span> <br>
                                    <span>Assistance or Inquiries</span></h2>
                            </div>
                            <p class="contact-four__left-text">We're Here to Help—Contact Us Today!</p>
                            <ul class="contact-four__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Our Address</h5>
                                        <p><?=$contact_result['address']?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-four__contact-list-shape-1">
                                        <img src="assets/images/shapes/contact-four-contact-list-shape-1.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="far fa-clock"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Contact Info</h5>
                                        <p><span>Phone:</span> 
                                            <a href="tel:+<?=$wp_api_number?>">
                                                <?=$contact_result['number']?>
                                            </a>
                                        </p>
                                        <p><span>Email:</span> 
                                            <a href="mailto: <?=$contact_result['email']?>">
                                                 <?=$contact_result['email']?>
                                            </a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-four__contact-list-shape-1">
                                        <img src="assets/images/shapes/contact-four-contact-list-shape-1.png" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Working Time</h5>
                                        <p><span>Time:</span> 8:00 AM - 10:00 PM</p>
                                        <p><span>Days:</span> ALL Days</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-four__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-box">
                                        <div class="section-title__tagline-shape"></div>
                                        <div class="section-title__tagline-shape-2"></div>
                                    </div>
                                    <span class="section-title__tagline">Contact US</span>
                                </div>
                                <h2 class="section-title__title title-animation">Send Message</h2>
                            </div>
                            <form class="contact-form-validated contact-four__form" action=""
                                method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-four__input-title">Full Name *</h4>
                                        <div class="contact-four__input-box">
                                            <input type="text" name="name" placeholder="Jordan Walk" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="contact-four__input-title">Your Email *</h4>
                                        <div class="contact-four__input-box">
                                            <input type="email" name="email" placeholder="jordan@domain.com"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <h4 class="contact-four__input-title">Subjects *</h4>
                                        <div class="contact-four__input-box">
                                            <input type="text" name="Phone" placeholder="write your subject"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <h4 class="contact-four__input-title">Write message *</h4>
                                        <div class="contact-four__input-box text-message-box">
                                            <textarea name="message"
                                                placeholder="Write a Message to Inquire"></textarea>
                                        </div>
                                        <div class="contact-four__btn-box">
                                            <button type="submit" class="thm-btn">Send
                                                Message<span><i class="icon-diagonal-arrow"></i></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Four End-->

<?php 
    include "../../partials/footer.php";
    ob_end_flush();
?>