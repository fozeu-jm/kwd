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

<!-- ##### Portfolio Area Start ###### -->
<div class="pixel-portfolio-area pt-500">
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

    <div class="pixel-portfolio ">
        <?php
        $custom = new WP_Query(array(
            'posts_per_page' => -1,
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


<?php get_footer(); ?>