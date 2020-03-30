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

<!-- ##### Feature Area Start ##### -->
<section class="pixel-feature-area d-flex flex-wrap">
    <!-- Feature Thumbnail -->
    <div class="feature-thumbnail bg-img jarallax" style="background-image: url(<?php echo get_field('visual1'); ?>);"></div>

    <!-- Feature Content -->
    <div class="feature-content">
        <?php echo get_field('description_1'); ?>
    </div>
</section>
<!-- ##### Feature Area End ##### -->

<!-- ##### Feature Area Start ##### -->
<section class="pixel-feature-area d-flex flex-wrap">
    <!-- Feature Content -->
    <div class="feature-content">
        <?php
        while (have_posts()) {
            the_post();
            echo get_field('description_2');
        }
        ?>
    </div>

    <!-- Feature Thumbnail -->
    <div class="feature-thumbnail bg-img jarallax" style="background-image: url(<?php echo get_field('visual2'); ?>);"></div>
</section>
<!-- ##### Feature Area End ##### -->

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
            <?php }wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!-- ##### Cool Facts Area End ##### -->


<!-- ##### Team Area Start ##### -->
<section class="team-member-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 style="margin-bottom: 15px;">Notre <span class="highlight">Équipe</span></h2>
                    <img class="mb-30" src="<?php echo get_theme_file_uri('img/core-img/x.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala">
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $custom = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'team'
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!-- Single Team Member -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-team-member mb-100">
                        <img src="<?php echo get_field('member_img'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala">
                        <!-- Hover Text -->
                        <div class="hover-text d-flex align-items-end justify-content-center text-center">
                            <div class="hover--">
                                <h4><?php the_title(); ?></h4>
                                <h6><?php echo get_field('position'); ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>

        </div>
    </div>
</section>
<!-- ##### Team Area End ##### -->

<!-- ##### Testimonial Area Start ##### -->
<section class="testimonial-area mb-100">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 style="margin-bottom: 15px;">Ce que disent nos <span class="highlight">Clients</span></h2>
                    <img class="mb-30" src="<?php echo get_theme_file_uri('img/core-img/x.png'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Testimonial Slides -->
                <div class="testimonial-slides owl-carousel">
                    <?php
                    $custom = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'testimonial'
                    ));
                    while ($custom->have_posts()) {
                        $custom->the_post();
                        ?>
                        <!-- Single Slide -->
                        <div class="single-testimonial-slide">
                            <img src="<?php echo get_field('customer_img'); ?>" alt="Kaizer web design La meilleure agence digitale, web et creation de sites web au cameroun, Yaounode et Douala">
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo get_field('customer_position') ?></span>
                            <h5><?php echo get_field('testimonial'); ?></h5>
                        </div>
                    <?php } wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonial Area End ##### -->

    <?php
    get_footer();
    