<?php get_header() ?>

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


<!-- ##### Google Maps ##### -->
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.7287937984765!2d11.515068814759397!3d3.868246897186258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2984dad9a528c2f6!2sKAIZER+WEB+DESIGN!5e0!3m2!1sen!2scm!4v1563753132340!5m2!1sen!2scm" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <!-- Single Contact Area -->
            <div class="col-12 col-lg-4">
                <!-- Contact Content -->
                <div class="contact-content mb-100">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Contact</h2>
                    </div>

                    <!-- Single Contact Content -->
                    <div class="single-contact-content d-flex">
                        <div class="icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h6>Address</h6>
                            <p>Cameroun Centre, <br> Yaoundé, Rue de Narvick, en face de la station </p>
                        </div>
                    </div>

                    <!-- Single Contact Content -->
                    <div class="single-contact-content d-flex">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="text">
                            <h6>Email</h6>
                            <p>contact@kaizerwebdesign.com</p>
                        </div>
                    </div>

                    <!-- Single Contact Content -->
                    <div class="single-contact-content d-flex">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text">
                            <h6>Phone</h6>
                            <p>+237 696 46 83 33</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Contact Area -->
            <div class="col-12 col-lg-8">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h2>Contactez-nous</h2>
                    <h6>Écrivez nous quelques lignes</h6>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-area mb-100">
                    <?php
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- ##### Contact Area End ##### -->


<?php get_footer(); ?>