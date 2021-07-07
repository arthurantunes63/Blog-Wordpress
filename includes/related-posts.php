<h1 class="font-bold text-center text-lg text-black">Posts relacionados</h1>
<section class="flex items-center justify-center ml-20 mr-20 mb-20">
    <?php
        $categories = get_categories_id( get_the_category() );
        $args = array (
            'posts_per_page' => 3,
            'post__not_in'   => array( get_the_ID() ),
            'category__in'   => $categories
        );
        $categoryPost = new WP_Query( $args );
        if( $categoryPost -> have_posts() ): 
            while( $categoryPost -> have_posts() ):
                $categoryPost -> the_post();
                get_template_part('includes/article', 'overview');
            endwhile;
            wp_reset_postdata();
            else:
        endif;?>
</section>