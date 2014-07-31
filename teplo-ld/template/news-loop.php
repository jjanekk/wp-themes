<?php

    wp_reset_query();

    $posts = get_posts(array(
        'post_type' => 'news',
        'posts_per_page' => -1,
        'orderby' => "title",
        'order' => 'ASC'
    ));

    foreach($posts as $post){
        setup_postdata( $post );
        global $more;
        $more = 0;

        ?>
        <div class="news-box">

            <div class="news-header clearfix">

                <div class="pull-left">
                    <span class="img-h"></span>
                    <span class="img-o" style="display: none"></span>
                    <h3><?php the_title() ?></h3>
                </div>
                <div class="pull-right"><span class="date-box"><?php the_time('d.m. Y') ?></span></div>

            </div>

            <div class="news-description" style="display: none">
                <?php the_content() ?>
            </div>

        </div>


    <?php
    }
?>