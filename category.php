<?php get_header(); ?>
<h1 class="flex items-center justify-center text-center font-bold text-3xl">
	<?php echo $categoryName = single_term_title(); ?>
</h1>
<main class="flex flex-wrap items-center justify-center">
	<?php
		$categories = get_categories_id(get_the_category());
		$args = array (
			"posts_per_page" => 6,
			"category__in"   => $categories
		);

		$categoryPost = new WP_Query( $args );

		if( $categoryPost -> have_posts() ): 
            while( $categoryPost -> have_posts() ):
                $categoryPost -> the_post();
                get_template_part("includes/article", "overview");
            endwhile;
			wp_reset_postdata();
		endif; 
	?>
</main>

<?php 
$args = array(
	"before_page_number" => '<span class="p-3">',
	"after_page_number"  => '</span>'
);
?>

<nav class="flex justify-center pt-10 pb-20">
	<?php echo paginate_links($args); ?>
</nav>
		
	
<?php get_footer()?>