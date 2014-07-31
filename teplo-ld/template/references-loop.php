<?php

    wp_reset_query();

    $posts = get_posts(array(
        'post_type' => 'reference',
        'posts_per_page' => 4,
        'orderby' => "date",
        'order' => 'ASC'
    ));

    foreach($posts as $post){
        setup_postdata( $post );
        global $more;
        $more = 0;

        ?>
        <div class="reference-box">

            <a href="<?php the_permalink() ?>">
                <?php if ( has_post_thumbnail() ):?>
                    <div class="thumbnail"><?php the_post_thumbnail() ?></div>
                <?php endif; ?>

                <div class="reference-title">
                    <?php the_title() ?>
                </div>

                <div class="reference-city">
                    <?php echo get_post_meta($post->ID, 'city', true); ?>
                </div>

                <div class="reference-description">
                    <?php the_excerpt() ?>
                </div>
            </a>

        </div>


    <?php
    }
?>