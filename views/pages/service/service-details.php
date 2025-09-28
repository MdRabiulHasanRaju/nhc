<?php ob_start();
session_start();

if ($_GET['service_title'] || $_GET['category_name']) {
    $category_name = str_replace("-", " ", $_GET['category_name']);
    $service_title = str_replace("-", " ", $_GET['service_title']);
    
    require_once $_SERVER['DOCUMENT_ROOT'] . "/nhc/lib/Database.php";
    
    $notFound = false;
    $service_sql = "select * from services where title='$service_title'";
    $service_stmt = mysqli_query($connection, $service_sql);
    if (mysqli_num_rows($service_stmt) == 1) {
        $service_result = mysqli_fetch_assoc($service_stmt);
    }else{
        $notFound = true;
    }

    $title = "$service_title | NHC Cleaning";
    
    $meta_description = isset($service_result['meta_description'])?$service_result['meta_description']:'deep cleaning services in dubai';
    
    $meta_keywords = isset($service_result['meta_keyword'])?$service_result['meta_keyword']:$title;
    
    $meta_title=isset($service_result['meta_title'])?$service_result['meta_title']:$title;


include "../../partials/header.php";
    if($notFound == true) {
        header("location:" . LINK . "404");
        die();
    }
} else {
    header("location:" . LINK . "404");
    die();
}
$header_active = "Services";
?>



<style>
:root, [data-bs-theme=light]{--bs-primary-bg-subtle: #f0f0f0;}
    .main-header {
        position: relative;
    }

    .services-details__left h2 {
        color: #54595F;
        font-weight: bold;
    }

    .services-details__left p {
        color: #888;
        opacity: 0.9;
        padding: 10px 0 !important;
    }

    .services-details__left ul {
        color: #888;
        opacity: 0.9;
        padding: 20px 0 !important;
    }

    .services-details__left ul li {
        color: #54595F;
        padding-bottom: 10px !important;
        list-style: inside;
    }
    .services-details__left ol li {
        list-style: auto;
    }
    .services-image-div {
        padding: 20px 0 !important;
    }
    .services-details__left img{
        width:100%;
        height:auto;
    }
    
    /*for ckeditor*/
    figure.table {
        display: flex;
        justify-content: center;
    }
    figure.table td p {
        color:black;
        padding:0!important;
    }
    td {
        padding: 0px 30px;
        border: 1px solid black;
    }
    tr{
        border-bottom:none;
    }
    .text-small {
        font-size: 14px;
    }
    .text-tiny {
        font-size: 11px;
    }
    .raw-html-embed{
        display:flex;
        justify-content:center;
    }
    .faq-one {
     padding: 30px 0 40px;
    }
    @media screen and (max-width:600px) {
        html, body {
          overflow-x: hidden;
        }
        .service-details-row{
            flex-direction: column-reverse;
        }
        figure.table {
            display: block;
            overflow-x: scroll;
        }
        .text-small {
            font-size: 12px;
        }
        .text-tiny {
            font-size: 10px;
        }
        .services-details {
            padding: 30px 0 0;
        }
        .page-header__inner h1 {
            font-size: 30px;
            line-height: 40px;
        }
    }
</style>
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('<?=LINK;?>assets/images/services/<?= $service_result['banner_image']; ?>');">
            </div>
            <div class="page-header__social">
                <a href="https://api.whatsapp.com/send?phone=<?=$wp_api_number;?>">Whatsapp</a>
                <a href="tel:+<?=$wp_api_number;?>">Call Now</a>
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h1><?= $service_result['title']; ?></h1>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="<?=LINK;?>">Home</a></li>
                            <li><span class="icon-arrow-right"></span></li>
                            <li><?= $category_name; ?></li>
                        </ul>
                    </div>
                    <br><br>
                    <div class="banner-one__btn-box">
                                <a href="https://api.whatsapp.com/send?phone=<?=$wp_api_number;?>" class="thm-btn">Book Now<span><i
                                            class="icon-diagonal-arrow"></i></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Service details Start-->
        <section class="services-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="services-details__left">
                            <!-- <h3 class="services-details__title-1">Service Overview</h3> -->
                            <?=$service_result['description'];?>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="services-details__right">
                            <div class="services-details__service-list-box">
                                <h3 class="services-details__service-list-title">More Services</h3>
                                <ul class="services-details__service-list list-unstyled">
                                    <?php
                                    $cat_sql = "select id,name from category where name='$category_name'";
                                    $cat_stmt = mysqli_query($connection, $cat_sql);
                                    $cat_result = mysqli_fetch_assoc($cat_stmt);
                                    $cat_id = $cat_result['id'];
                                    $cat_name = $cat_result['name'];

                                    $service_cat_sql = "select title from services where category_id='$cat_id'";
                                    $service_cat_stmt = mysqli_query($connection, $service_cat_sql);
                                    while ($service_cat_result = mysqli_fetch_assoc($service_cat_stmt)) {

                                        $category_name_link = $format->createServiceLink($cat_name);
                                        $services_link = $format->createServiceLink($service_cat_result['title']);
                                    ?>
                                    <li class="<?= (strtolower($service_title) == strtolower($service_cat_result['title']) ? 'active' : '') ?>">
                                        
                                        <a href="<?=LINK;?><?=strtolower($category_name_link);?>/<?=strtolower($services_link);?>"><span
                                                class="icon-diagonal-arrow"></span>
                                            <?= $service_cat_result['title']; ?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                            <div class="project-details__get-touch">
                                <h3 class="project-details__get-touch-title">Feel free to reach out to us anytime.</h3>
                                <div class="project-details__get-touch-btn-box">
                                    <a href="tel:+<?=$wp_api_number;?>" class="thm-btn">Contact Us<span><i
                                                class="icon-diagonal-arrow"></i></span></a>
                                </div>
                                <div class="project-details__call-box">
                                    <div class="project-details__call-icon">
                                        <span class="icon-support"></span>
                                    </div>
                                    <div class="project-details__call-content">
                                        <p>Call Us To Take this services</p>
                                        <a href="tel:+<?=$wp_api_number;?>"><?=$contact_result['number']?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Details End-->

        <!--Faq One Start -->
        <?php
            $service_id = $service_result['id'];
            $items = "SELECT * FROM accordion_items WHERE service_id = $service_id";
            $result = mysqli_query($connection, $items);
            if(mysqli_num_rows($result)!=0){
        ?>   
        <section class="faq-one">
            <div class="faq-one__shape-1 float-bob-y">
                <img src="<?=LINK;?>assets/images/shapes/faq-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="faq-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-box">
                                        <div class="section-title__tagline-shape"></div>
                                        <div class="section-title__tagline-shape-2"></div>
                                    </div>
                                    <span class="section-title__tagline">FAQs</span>
                                </div>
                                <h2 class="section-title__title title-animation">Your Questions Answered <br>
                                    <span>Explore Our FAQs</span></h2>
                            </div>
                            <p class="faq-one__text">Everything you need to know. Detailed <br> overview of our
                                frequently asked questions</p>
                            <ul class="list-unstyled faq-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-star-1"></span>
                                    </div>
                                    <div class="text">
                                        <p>Find the Information You’re Looking For</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="faq-one__contact-box">
                                <div class="faq-one__contact-big-text">Get In Touch</div>
                                <h3 class="faq-one__contact-title">If you have any other <br> questions, please contact
                                    <br> us here</h3>
                                <div class="faq-one__btn-box">
                                    <a href="tel:+<?=$wp_api_number;?>" class="thm-btn">Contact Us<span><i
                                                class="icon-diagonal-arrow"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="faq-one__right">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <?php $index=0; while ($row = mysqli_fetch_assoc($result)) { ?>
                                <div class="accrodion <?= $index == 0 ? 'active' : '' ?>">
                                    <div class="accrodion-title">
                                        <h4><?= htmlspecialchars($row['title']) ?></h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p><?= nl2br(htmlspecialchars($row['content'])) ?>
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            <?php $index++; } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php } ?>
        <!--Faq One End -->


<?php 
    include "../../partials/footer.php";
    ob_end_flush();
?>