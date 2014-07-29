<header>

    <div class="container">

        <div id="logo-wrapper" class="pull-left">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo" class="logo-img">
                </a>
            </div>
        </div>

        <div id="description-wrapper" class="pull-left">
            <p><?php echo get_bloginfo('description') ?></p>
        </div>

        <div id="nav-wrapper" class="pull-left">
            <?php html5blank_nav(); ?>
        </div>

        <div id="search-wrapper" class="pull-right">
            <?php get_search_form() ?>
        </div>
    </div>

</header>

<div id="sub-nav">
    <div class="container">
        <?php html5blank_nav('sub-menu'); ?>
    </div>
</div>

<div id="page-content">
    <div class="container">




