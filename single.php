<?php get_header(); ?>
	<article>
        <?php if (have_posts() ):?>
                <header class="flex-col justify-center">
                        <?php 
                            while( have_posts() ):
                                the_post();

                                $categories = get_the_category(get_the_ID());
                                foreach ($categories as $category):
                        ?>
                                    <div class="flex justify-center"> 
                                        <a class="inline-flex overflow-hidden text-white bg-gray-900 rounded group" href="<?php echo get_category_link($category->term_id)?>"?>
                                            <span class="flex items-center justify-center px-1 py-0.5 text-black bg-indigo-300 group-hover:bg-indigo-400 ">
                                                <?php echo $category -> name; ?>
                                            </span>
                                        </a>
                        
                                    </div>
                                <?php endforeach; ?>
                        <h1 class="p-6 flex items-center justify-center text-5xl font-black">
                            <?php the_title();?>
                        </h1>
                        
                        <div>
                            <?php
                                $style = array("class" => "mx-auto rounded max-w-xl h-auto align-middle border-none");
                                the_post_thumbnail("full", $style);
                            ?>
                        </div>
                        <div class="pt-2 pl-40 pb-5">
                            <p class="text-indigo-600 text-semibold">
                                Postado em <?php the_date();?>
                            </p>
                            <h3 class="pb-2">
                                <?php the_author_meta('firstName') . the_author_meta('lastName')?>
                            </h3>
                        </div>
                </header>
                <main class="text-justify pl-40 pr-40 pb-40 mx-auto post-content">
                    <?php the_content();?>
                </main>
            <?php endwhile; ?>
        <?php endif;?>
    </article>
<footer>
    <?php get_template_part('includes/related', 'posts');?>
</footer>
<?php get_footer(); ?>