<!DOCTYPE html>
<html>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php wp_head(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>

    <body>
        <!-- Preloader -->
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
            <!-- Navbar Area -->
            <div class="pixel-main-menu" id="sticker">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container-fluid">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="pixelNav">

                            <!-- Nav brand -->
                            <a style="width:10%" href="<?php echo site_url(''); ?>" class="nav-brand">
                                <img style="max-width:100%;" src="<?php echo get_theme_file_uri('img/core-img/kwd-black.png'); ?>" alt="Kaizer Web Design la Meilleure entreprise de creations de site web au Cameroun a Yaounde et DOuala">
                            </a>

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- Close Button -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul class="menu-list">
                                        <li class="<?php if(is_front_page()){ echo 'active';} ?>"><a href="<?php echo site_url('/'); ?>">Accueil</a></li>
                                        <li class="<?php if(is_page('a-propos')){ echo 'active';} ?>"><a href="<?php echo site_url('a-propos'); ?>">A propos</a></li>
                                        <li class="<?php if(get_post_type() == 'package' OR is_page('service')){    echo 'active';} ?>"><a href="<?php echo site_url('service'); ?>">Services</a></li>
                                        <li class="<?php if(is_page('projet')){ echo 'active';} ?>"><a href="<?php echo site_url('projet'); ?>">Projets</a></li>
                                        <li class="<?php if(is_page('contact')){ echo 'active';} ?>"><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                                    </ul>

                                    <!-- Top Social Info -->
                                    <div class="top-social-info ml-5">
                                        <a href="https://www.facebook.com/kaizerwebdesign" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.instagram.com/kaizerwebdesign/" target="_blank"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->