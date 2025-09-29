
        <!--Project One Start-->
        <section class="project-one">
            <div class="project-one__bg-shape"
                style="background-image: url(assets/images/shapes/project-one-bg-shape.png);"></div>
            <div class="project-one__bg-shape-2"
                style="background-image: url(assets/images/shapes/project-one-bg-shape-2.png);"></div>
            <div class="project-one__shape-1"></div>
            <div class="project-one__shape-2"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-box">
                            <div class="section-title__tagline-shape"></div>
                            <div class="section-title__tagline-shape-2"></div>
                        </div>
                        <span class="section-title__tagline">Our Services</span>
                    </div>
                    <h2 class="section-title__title title-animation">From Deep Cleaning to Technical Care – <span> We’ve Got You Covered</span>
                    </h2>
                </div>
                <div class="project-one__inner">
                    <ul class="project-one__filter style1 post-filter list-unstyled clearfix">
                        <li data-filter=".filter-item" class="active">
                            <p><span class="icon-catagory"></span>All</p>
                        </li>
                        <li data-filter=".deep-cleaning">
                            <p><span class="icon-pen-ruler"></span>Deep Cleaning</p>
                        </li>
                        <li data-filter=".cleaning-services">
                            <p><span class="icon-computer"></span>Cleaning Services</p>
                        </li>
                        <li data-filter=".painting-services">
                            <p><span class="icon-bullhorn"></span>Painting Services</p>
                        </li>
                    </ul>
                    <div class="row filter-layout">





                    <!--Project One Single Start-->
                    <?php
                        $feature_services_sql = "select category_id,title,sub_title,featured_image from services where featured='1' order by position asc";
                        $feature_services_stmt = mysqli_query($connection, $feature_services_sql);
                        $i=1;
                        while ($featured_result = mysqli_fetch_assoc($feature_services_stmt)) {

                            $category_id = $featured_result['category_id'];
                            $cat_sql = "select name from category where id='$category_id'";
                            $cat_stmt = mysqli_query($connection, $cat_sql);
                            $cat_result = mysqli_fetch_assoc($cat_stmt);
                            $cat_name = $cat_result['name'];

                            $category_name_link = $format->createServiceLink($cat_name);
                            $services_link = $format->createServiceLink($featured_result['title']);

                    ?>
                        
                        <div class="col-xl-4 col-lg-4 col-md-6 filter-item <?=strtolower($category_name_link);?>">
                            <div class="project-one__single">
                                <div class="project-one__img-box">
                                    <div class="project-one__img">
                                        <img src="assets/images/services/<?= $featured_result['featured_image']; ?>" alt="<?= $featured_result['featured_image']; ?>">
                                    </div>
                                    <div class="project-one__view-box">
                                        <a href="<?=LINK;?><?=strtolower($category_name_link);?>/<?=strtolower($services_link);?>" class="project-one__view">
                                            <i class="icon-diagonal-arrow"></i>
                                            <span>View More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="project-one__content">
                                    <p class="project-one__tag"><?=$cat_name;?><span
                                            class="icon-right-arrow"></span></p>
                                    <h3 class="project-one__title">
                                        <a href="<?=LINK;?><?=strtolower($category_name_link);?>/<?=strtolower($services_link);?>">
                                            <?=$featured_result['title'];?>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <?php $i++; } ?>
                        <!--Project One Single End-->

                        
                    </div>
                </div>
            </div>
        </section>
        <!--Project One End-->