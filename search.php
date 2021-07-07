<?php get_header(); ?>

<main>
    <?php
        if ( have_posts() ) : ?>
            <h2 class="flex items-center justify-center">Resultados da busca para <?php the_search_query(); ?></h2>
            <?php
                while ( have_posts() ):
                    the_post();
                    get_template_part('includes/article', 'overview');
                endwhile;
            
            else:?>
                <div class="flex-col items-center justify-center">
                    <img class="w-40 h-auto m-auto" src="<?php echo get_template_directory_uri() . "/assets/images/searching.svg" ?>" alt="Homem olhando para uma página Web por meio de uma luneta">
                    <p class="p-6 text-5xl font-black text-center">Nenhum post encontrado.</p>
                </div>
    <?php endif;?>
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

<?php get_footer(); ?>