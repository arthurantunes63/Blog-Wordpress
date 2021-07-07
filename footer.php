        <footer class="m-10 p-5">
            <h2 class="text-center font-semibold text-lg pb-5 flex flex-col justify-center items-center">
            <?php if( !is_post_type_archive( 'story' ) ): ?>
                <span class="mb-5">Conheça a nossa nova categoria especial de artigos</span>
                                <a href="<?php echo get_post_type_archive_link('story'); ?>">
                                    <span class="bg-indigo-100 font-bold text-3xl transition duration-500 ease-in-out hover:text-indigo-300 p-3">Histórias</span>
                                </a>
                            </h2>
            <?php endif; ?>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>