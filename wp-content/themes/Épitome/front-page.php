<?php get_header(); ?>


<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slideshow owl-carousel">
        <?php
        $custom = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'carousel',
        ));
        while ($custom->have_posts()) {
            $custom->the_post();
            ?>
            <!-- Single Slide -->
            <div class="single-slide">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img" style="background-image: url(<?php echo get_field('background_img'); ?>);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text" data-animation="fadeInUp" data-delay="300ms">
                                <?php the_content(); ?>
                                <?php if (get_field('page_url') AND get_field('url_text') != '') { ?>
                                    <a href="<?php echo get_field('page_url'); ?>" class="btn pixel-btn mt-50" data-animation="fadeInUp" data-delay="400ms"><?php echo get_field('url_text'); ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }wp_reset_postdata(); ?>

    </div>
</section>
<!-- ##### Hero Area End ##### -->


<!-- ##### Top Catagory Area Start ##### -->
<div class="top-catagory-area d-flex flex-wrap">
    <!-- Single Catagory -->
    <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(<?php echo get_theme_file_uri('img/bg-img/3.jpg'); ?>);">
        <a href="<?php echo site_url('a-propos'); ?>">L'Agence</a>
    </div>
    <!-- Single Catagory -->
    <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(<?php echo get_theme_file_uri('img/bg-img/4.jpg'); ?>);">
        <a href="<?php echo site_url('service'); ?>">Nos Offres ?</a>
    </div>
</div>
<!-- ##### Top Catagory Area End ##### -->


<!-- ##### Newsletter Area Start ###### -->
<section class="nl-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-md-9">
                <div class="nl-form mb-100">
                    <h4>Newsletter</h4>
                    <form action="<?php echo esc_url(site_url('/?na=s')) ?>" method="post" id="newsletter">
                        <input type="email" name="ne" id="nlEmail" placeholder="Votre email...">
                    </form>
                </div>
            </div>
            <div class=" col-12 col-md-3">
                <div class="view-projects-btn text-center mb-100">
                    <button type="submit" form="newsletter" class="btn pixel-btn">Abonnez vous</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Newsletter Area End ###### -->

<!-- ########### ABOUT US AREA ######## -->
<section class="uza-about-us-area">
    <div class="container">
        <div class="row align-items-center">

            <!-- About Thumbnail -->
            <div class="col-12 col-md-6">
                <div class="about-us-thumbnail mb-80">
                    <img src="<?php echo get_theme_file_uri('img/2.jpg'); ?>" alt="La meilleure agence de creation de sites web au cameroun, Yaounode et Douala">
                    <!-- Video Area -->
                    <div class="uza-video-area hi-icon-effect-8">
                        <a href="https://www.youtube.com/watch?v=pS_v8kclFGU" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <!-- About Us Content -->
            <div class="col-12 col-md-6">
                <div class="about-us-content mb-80">
                    <h1 class="bold headlines">Nous sommes KAIZER <span class="highlight">WEB</span> DESIGN</h1>
                    <div style="text-align: justify;">
                        <?php
                        while (have_posts()) {
                            the_post();
                            the_content();
                        }
                        ?>
                        <a href="<?php echo site_url('/service'); ?>" class="btn uza-btn btn-2">Demarrer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Background Pattern -->
    <div class="about-bg-pattern">
    </div>
</section>
<!-- ########### ABOUT US AREA END ######## -->

<!-- ########## Services Area ##### -->
<section style="width: 100%; overflow: hidden;" class="service-section">
    <!-- Services -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">
                        <h1 class="headlines" style="font-size: 48px; font-weight: 600;">Nos <span class="highlight">Services</span></h1>
                        <span>Explorer nos services</span>
                    </div>
                    <span class="instructions">Glisser a gauche ou a droite</span>
                </div>
            </div>
        </div>

        <div class="h_slider_container services_slider_container">
            <div class="service_slider_outer">
                <!-- Services Slider -->
                
                <div class="owl-carousel owl-theme services_slider">

                    <?php
                    $custom = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'services',
                    ));
                    while ($custom->have_posts()) {
                        $custom->the_post();
                        ?>

                        <!-- Services Slider Item-->
                        <div class="owl-item services_item">
                            <div class="services_item_inner">
                                <div class="service_item_content">
                                    <div class="service_item_title">
                                        <div class="service_item_icon">
                                            <div data-icon="<?php echo get_field('icon_code'); ?>" class="icon"></div>
                                        </div>
                                        <h2><?php the_title(); ?></h2>
                                    </div>
                                    <p><?php echo get_field('service_desc'); ?></p>
                                    <div class="button service_item_button trans_200">
                                        <a href="#" class="trans_200">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } wp_reset_postdata(); ?>

                </div>

                <div class="services_slider_nav services_slider_nav_left"><i class="fa fa-chevron-left trans_200"></i></div>
                <div class="services_slider_nav services_slider_nav_right"><i class="fa fa-chevron-right trans_200"></i></div>

            </div>
        </div>
    </div>
</section>
<!-- ########## Services Area END ##### -->

<!-- ######## DIVIDER ##################### -->
<div class="text_line">
    <div class="container">
        <div class="row">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <div class="col-lg-5 text-lg-right text-center">
                    <div class="text_line_image">
                        <img src="<?php echo get_field('package_img'); ?>" alt="Kaizer web design La meilleure agence de creation de sites web au cameroun, Yaounode et Douala">
                    </div>
                </div>
            <?php } ?>
            <div class="col-lg-5 offset-lg-2">
                <div class="text_line_content">
                    <h1 class="headlines" style="font-size: 48px;">Decouvrez Nos <span class="highlight">Packages</span> </h1>
                    <p>
                        <?php
                        while (have_posts()) {
                            the_post();
                            echo get_field('package_desc');
                        }
                        ?>
                    </p>
                    <div class=" text_line_button trans_200">
                        <a style="text-transform: uppercase;" href="<?php echo site_url('service'); ?>" class="trans_200 btn pixel-btn more-link">en savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ######## DIVIDER ##################### -->

<!-- ########## CTA SECTION ##### -->
<section class="cta-section">
    <div class="cta-background" style="background-image: url(<?php echo get_theme_file_uri('img/heads.jpg'); ?>);"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-7 pl-lg-0 offset-lg-5 cta-content">
                <h2  class="headlines sp-title"> Osez rêver d'un site internet <span class="highlight">Design</span></h2>
                <div style="text-align: justify">
                    <?php
                    while (have_posts()) {
                        the_post();
                        echo get_field('cta_description');
                    }
                    ?>
                </div>
                <div class="cta-icons">
                    <div class="cta-img-icon">
                        <span><i class="fa fa-pencil-square-o decor-icon" aria-hidden="true"></i></span>
                    </div>
                    <div class="cta-img-icon">
                        <span><i class="fa fa-camera-retro decor-icon" aria-hidden="true"></i></span>
                    </div>
                    <div class="cta-img-icon">
                        <span><i class="fa fa-video-camera decor-icon" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ########## CTA SECTION END ##### -->



<!-- ###### MODERN FEATURES ##### -->
<section class="features-section">
    <div class="features">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">

                    <div class="section_title">
                        <h1 style="font-size: 48px; margin-bottom: 20px;" class="bold headlines">Pourquoi nous <span class="highlight">choisir ?</span> </h1>
                        <img src="<?php echo get_theme_file_uri('img/core-img/x.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala">
                    </div>

                </div>

            </div>

            <div class="row features_row">

                <div style="padding-left: 100px;" class="feat1 col-lg-4 text-lg-right features_col order-lg-1 order-2">
                    <?php
                    while (have_posts()) {
                        the_post();
                        ?>
                        <!-- Features Item-->
                        <div class="features_item">
                            <h2><?php echo get_field('qual1'); ?></h2>
                            <p><?php echo get_field('desc1'); ?></p>
                        </div>

                        <!-- Features Item-->
                        <div class="features_item">
                            <h2><?php echo get_field('qual2'); ?></h2>
                            <p><?php echo get_field('desc2'); ?></p>
                        </div>

                    </div>

                    <div class="col-lg-4 d-flex flex-column align-items-center order-lg-2 order-1 feat-img">
                        <div class="features_image why-logo">
                            <img src="<?php echo get_field('centre_img'); ?>" alt="Kaizer web design La meilleure entreprise de creation de sites web au cameroun, Yaounode et Douala">
                        </div>
                        <div style="margin-top: 10px;" class=" features_button_2 trans_200">
                            <a href="<?php echo site_url('a-propos'); ?>" class="trans_200 btn pixel-btn more-link" >En Savoir plus</a>
                        </div>
                    </div>

                    <div style="padding-right: 100px;" class="feat2 col-lg-4 features_col order-lg-3 order-3">

                        <!-- Features Item-->
                        <div class="features_item">
                            <h2><?php echo get_field('qual3'); ?></h2>
                            <p><?php echo get_field('desc3'); ?></p>
                        </div>

                        <!-- Features Item-->
                        <div class="features_item">
                            <h2><?php echo get_field('qual4'); ?></h2>
                            <p><?php echo get_field('desc4'); ?></p>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ###### MODERN FEATURES END ##### -->

<!-- ##### Portfolio Area Start ###### -->
<div class="pixel-portfolio-area ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                    <h2 style="font-size: 48px;" class="bold headlines">Made by <span class="highlight"> KWD</span></h2>
                    <img src="<?php echo get_theme_file_uri('img/core-img/x.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala">
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Menu -->
    <div class="pixel-projects-menu wow fadeInUp" data-wow-delay="200ms">
        <div class="text-center portfolio-menu">
            <button class="btn active" data-filter="*">All Projects</button>
            <button class="btn" data-filter=".visual">Visuel</button>
            <button class="btn" data-filter=".pub">Publicitaire</button>
            <button class="btn" data-filter=".design">Design</button>
        </div>
    </div>

    <div class="pixel-portfolio">
        <?php
        $custom = new WP_Query(array(
            'posts_per_page' => 6,
            'post_type' => 'projets',
        ));
        while ($custom->have_posts()) {
            $custom->the_post();
            ?>
            <!-- Single gallery Item -->
            <div class="single_gallery_item <?php echo get_field('project_type'); ?> wow fadeInUp" data-wow-delay="0.2s">
                <img src="<?php echo get_field('project_img'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <?php
                        if (get_field('project_url') == '') {
                            ?>
                            <a href="<?php echo get_field('project_img'); ?>" class="zoom-img">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo get_field('project_url'); ?>" class="video-play-btn zoom-img">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </a>
                        <?php } ?>

                        <h4><?php the_title(); ?></h4>
                    </div>
                </div>
            </div>
        <?php } wp_reset_postdata(); ?>
    </div>
</div>
<!-- ##### Portfolio Area End ###### -->



<!-- ##### Cool Facts Area Start ##### -->
<section class="pixel-cool-facts-area bg-gray section-padding-100-0">
    <div class="container-fluid">
        <div class="row">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="<?php echo get_theme_file_uri('img/core-img/m1.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter"><?php echo get_field('fact1'); ?></span></h2>
                            <h6><?php echo get_field('facti1'); ?></h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="<?php echo get_theme_file_uri('img/core-img/m2.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter"><?php echo get_field('fact2'); ?></span></h2>
                            <h6><?php echo get_field('facti2'); ?></h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="<?php echo get_theme_file_uri('img/core-img/m3.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter"><?php echo get_field('fact3'); ?></span></h2>
                            <h6><?php echo get_field('facti3'); ?></h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="<?php echo get_theme_file_uri('img/core-img/m4.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala">
                        </div>
                        <div class="scf-text">
                            <h2><span class="counter"><?php echo get_field('fact4'); ?></span></h2>
                            <h6><?php echo get_field('facti4'); ?></h6>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- ##### Cool Facts Area End ##### -->


<?php get_footer(); ?>