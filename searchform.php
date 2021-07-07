<form class="flex items-center justify-center" role="search" method="get" action="<?php echo home_url('/'); ?>">
    <input class="bg-white rounded-md border border-gray-200 p-2 focus:outline-none focus:ring-2 focus:ring-indigo-600 w-full" type="search" value="<?php echo get_search_query() ?>" name="s" required/>
    <button class="w-10 ml-3 h-auto hover:bg-indigo-200 p-2 rounded-full transition duration-500 ease-in-out" type="submit">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/search.svg';?>" alt="Lupa">
    </button>
</form>