<?php get_header(); ?>


<!-- ##### Breadcrumb Area Start ##### -->
<?php
while (have_posts()) {
    the_post();
    ?>
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?php echo get_field('page_banner'); ?>);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- ##### Breadcrumb Area End ##### -->


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


<!-- ##### Prices Area Start ##### -->
<section>
    <div style="margin-bottom: 40px; margin-top: 40px;" class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title">
                    <h1 class="headlines" style="font-size: 48px; font-weight: 600;">Nos <span class="highlight">Packages</span></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="pixel-prices-area d-flex flex-wrap section-padding-100">

        <?php
        $custom = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'package',
        ));
        while ($custom->have_posts()) {
            $custom->the_post();
            ?>
            <!-- Single Price Table Area -->
            <div class="single-price-table-area <?php echo get_field('active'); ?> mb-100">
                <div class="price-value">
                    <h2><span><?php echo number_format(get_field('package_price')); ?></span><span></span></h2>
                </div>
                <h2 style="text-transform: capitalize;"><?php the_title(); ?></h2>
                <p><?php echo get_field('package_description'); ?></p>
                <ul class="price-desc">
                    <li><img src="<?php echo get_theme_file_uri('img/core-img/correct.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala"><?php echo get_field('element_1'); ?></li>
                    <li><img src="<?php echo get_theme_file_uri('img/core-img/correct.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala"><?php echo get_field('element_2'); ?></li>
                    <li><img src="<?php echo get_theme_file_uri('img/core-img/correct.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala"><?php echo get_field('element_3'); ?></li>
                    <li><img src="<?php echo get_theme_file_uri('img/core-img/correct.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala"><?php echo get_field('element_4'); ?></li>
                    <li><img src="<?php echo get_theme_file_uri('img/core-img/correct.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala"><?php echo get_field('element_5'); ?></li>
                </ul>
            </div>
        <?php } wp_reset_postdata(); ?>
    </div>
</section>
<!-- ##### Prices Area End ##### -->



<!-- ##### Cool Facts Area Start ##### -->
<section class="pixel-cool-facts-area bg-gray section-padding-100-0">
    <div class="container-fluid">
        <div class="row">
            <?php
            $frontpage_id = get_option('page_on_front');
            $custom = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'page',
                'p' => $frontpage_id
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100">
                        <div class="scf-icon">
                            <img src="<?php echo get_theme_file_uri('img/core-img/m1.png'); ?>" alt="Kaizer web design La meilleure agence web de sites web au cameroun, Yaounode et Douala">
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
            <?php }wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!-- ##### Cool Facts Area End ##### -->


<?php get_footer(); ?>