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

<section class="pt-500" >

    <div class="container">
        <div class="row">
            <div class="col-md-4 single-pad">
                <div class="single-slider major-caousel owl-carousel mb-5">
                    <?php
                    while (have_posts()) {
                        the_post();
                        $images = acf_photo_gallery('package_gallery', get_the_ID());
                        $img_count = count($images);
                        if (count($images)) {
                            for ($counter = 0; $counter < $img_count; $counter++) {
                                ?>
                                <div class="slider-item">
                                    <a href="<?php echo $images[$counter]['full_image_url']; ?>" data-fancybox="images" data-caption="<?php echo $images[$counter]['title']; ?>">
                                        <img src="<?php echo $images[$counter]['full_image_url']; ?>" alt="radikal graphix" class="img-fluid">
                                    </a>
                                </div>
                                <?php
                            }
                        }
                        ?>

                    </div>
                </div>

                <div class = "offset-md-1 col-md-7">
                    <h1 style = "font-size: 48px" class = "bold"><?php echo the_title();?></h1>
                    <h4 style="font-size: 28px; color: #bf1e2e; " class="bold mt-4"><?php echo number_format(get_field('package_price')).' CFA'; ?></h4>
                    <div style="text-align: justify;">
                            <?php the_content(); ?>
                    </div>

                </div>
            </div>
        </div>

    <?php } ?>
</section>

<?php get_footer(); ?>