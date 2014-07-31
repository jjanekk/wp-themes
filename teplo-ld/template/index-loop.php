<?php

    $categoryName = "index";
    $category = get_category_by_slug($categoryName);

    wp_reset_query();

    if($category){
        $posts = get_posts(array(
            'category' => $category->term_id,
            'posts_per_page' => 1
        ));
    }else{
        $posts = null;
    }

    if($posts){
        $p = null;
        foreach($posts as $post){
            $p = $post;
        }
        setup_postdata( $p );
        global $more;
        $more = 0;
        echo "<h2 class='page-title'>" . get_the_title() . "</h2>";
        the_content("");
    }else{
        if( ( !$posts && current_user_can("edit_post") ) || ( count($posts) == 0 && current_user_can("edit_post") ) ){
            echo "<hr>";
            echo "<a class='btn btn-default' href='" . get_admin_url() . "/post-new.php'>Nastavit obsah pro tuto sekci ($categoryName)</a>";
        }
    }
