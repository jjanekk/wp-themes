<header class="clearfix">

    <div id="header-left" class="pull-left">

        <div id="description-wrapper" class="pull-right">
            <p><?php echo get_bloginfo('description') ?></p>
        </div>

        <div id="logo-wrapper" class="pull-right">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="logo-img">
                </a>
            </div>
        </div>

    </div>

    <div id="header-right" class="pull-right">
        <div id="nav-wrapper" class="pull-left">
            <?php html5blank_nav(); ?>
        </div>
    </div>

</header>

<?php if(is_front_page()): ?>

    <div id="slider-wrapper-box">

        <div id="slider-wrapper" class="clear-fix">
            <div id="sl"></div>
            <div id="slider-center">
                <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
            </div>
            <div id="sr"></div>
        </div>

    </div>

<?php endif; ?>



<div id="page-content">
    <div class="container">




