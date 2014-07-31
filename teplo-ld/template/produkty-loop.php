<?php

    wp_reset_query();

    $posts = get_posts(array(
        'post_type' => 'produkty',
        'posts_per_page' => -1,
        'orderby' => "title",
        'order' => 'ASC'
    ));

    foreach($posts as $post){
        setup_postdata( $post );
        global $more;
        $more = 0;

?>
    <div class="product">

        <a href="<?php the_permalink() ?>">
            <?php if ( has_post_thumbnail() ):?>
                <div class="thumbnail"><?php the_post_thumbnail() ?></div>
            <?php endif; ?>

            <div class="product-title">
                <?php the_title() ?>
            </div>

            <div class="product-description">
                <?php the_excerpt() ?>
            </div>

            <div class="product-button">
                <a class="btn btn-default" href="<?php the_permalink() ?>">zjisti více</a>
            </div>
        </a>

    </div>


<?php
    }
?>