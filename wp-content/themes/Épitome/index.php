<?php get_header(); ?>
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?php echo get_theme_file_uri('img/bg-img/8.jpg'); ?>);">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <?php
                    while (have_posts()) {
                        the_post();
                        ?>
                    <h2><?php the_title(); ?></h2>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->



<section style="padding-top: 130px; padding-bottom: 130px;">
    <div class="container">
        <div class="row col-12">
            <?php
            while (have_posts()) {
                the_post();
                the_content();
            }
            ?>
        </div>
    </div>
</section>




<?php get_footer(); ?>