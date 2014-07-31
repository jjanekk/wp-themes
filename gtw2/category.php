<?php
    get_header();
?>
<div>

    <main>
    <article class="page">

        <div class="container">
            <h1> <?php single_cat_title(); ?></h1>
            <hr/>
            <?php
                if ( have_posts () ) : while ( have_posts () ) : the_post (); ?>

                        <div class="content">
                            <div class="">
                                <h3 class="title">
                                    <a href="<?php the_permalink() ?>"><?php the_title (); ?></a>
                                </h3>
                                <div>
                                    <?php the_time('d.m. Y') ?>
                                </div>
                                <?php the_content (); ?>
                            </div>
                            <hr/>
                        </div>
                <?php
                endwhile;
                else:
                    ?>
                    <h3>Omlouváme se, nic k zobrazení.</h3>
                <?php
                endif;
                wp_reset_postdata ();
            ?>
        </div>
    </article>

<?php get_footer() ?>