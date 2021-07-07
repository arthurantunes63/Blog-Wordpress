<?php get_header(); ?>
    <main class="overflow-hidden">
        <?php
            // Definição das categorias escolhidas em um vetor
            $categories = array('Cultura', 'Tecnologia', 'Literatura', 'Música', 'Projetos');

            // Criação de seções delimitando categorias com respectivos posts
            foreach ($categories as $category) :?>
                    <?php 
                        $args = array ( 'category_name' => $category, 'posts_per_page'=>3);
                        $categoryPost = new wp_Query( $args );
                        if( $categoryPost -> have_posts() ):?>
                            <h2 class="text-center font-bold text-3xl pt-20">
                                <a href="<?php echo get_category_link(get_cat_ID($category))?>">
                                    <span class="transition duration-500 ease-in-out hover:text-indigo-300"><?php echo $category ?></span>
                                </a>
                            </h2>
                            <section class= "flex justify-center items-center m-5" id='<?php echo $category?>' >
                                <?php
                                while( $categoryPost -> have_posts() ):
                                    $categoryPost -> the_post();
                                    get_template_part("includes/article", "overview");
                                endwhile;
                                ?>
                            </section>
                    <?php
                        endif;

                        wp_reset_postdata();
                    ?>
                
            <?php endforeach; ?>
    </main>
<?php get_footer();?>