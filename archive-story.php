<?php get_header(); ?>

<h1 class="flex items-center justify-center text-center font-bold text-3xl">
    <?php post_type_archive_title();?>
</h1>

<main class="flex flex-wrap items-center justify-center"> 
	<?php
		$args = array ( 'posts_per_page' => 6);
		$queryPost = new WP_Query( $args );
		if( $queryPost -> have_posts() ): 
            while( $queryPost -> have_posts() ):
                $queryPost -> the_post();
                get_template_part('includes/article', 'overview');
            endwhile;
		endif;
	?>	
</main>


<?php $args = array(
	'before_page_number' => '<span class="p-3">',
	'after_page_number'  => '</span>'
);?>
<nav class="flex justify-center pb-10">
	<?php echo paginate_links($args);?>
</nav>

<?php get_footer()?>