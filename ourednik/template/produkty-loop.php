<?php
    $categoryName = "produkt";
    $category = get_category_by_slug($categoryName);

    wp_reset_query();

    if($category){
        $posts = get_posts(array(
            'category' => $category->term_id,
            'posts_per_page' => 4
        ));
    }else{
        $posts = null;
    }

    if((current_user_can("edit_post")) || (count($posts) == 0 && current_user_can("edit_post"))  ){
        if(count($posts) < 4){
            echo "<a class='btn btn-default' href='" . get_admin_url() . "/post-new.php'>Přidat produkt ($categoryName)</a>";
        }
    }

    foreach($posts as $post){
        setup_postdata( $post );
        global $more;
        $more = 0;

?>
    <div class="product">

        <a href="<?php the_permalink() ?>">
            <?php if ( has_post_thumbnail() ):?>
                <?php the_post_thumbnail() ?>
            <?php endif; ?>

            <div class="triangle"></div>

            <div class="product-title">
                <?php the_title() ?>
            </div>
        </a>

    </div>


<?php
    }
?>