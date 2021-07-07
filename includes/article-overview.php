<article class="grid grid-col-3 m-5" <?php post_class(); ?>>
        <?php if( has_post_thumbnail(  )):?>
            <div class="flex justify-center">
                <a href="<?php the_permalink(); ?>">
                    <?php
                        $style = array("class" => "rounded max-w-lg h-auto align-middle border-none m-5");
                        the_post_thumbnail("medium", $style);
                    ?>
                </a> 
            </div>
        <?php endif;?>
    
        <h2 class = "text-center p-2" id="post-<?php the_ID(); ?>">
            <a class = "font-semibold font-lg text-indigo-500" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>     
</article>  