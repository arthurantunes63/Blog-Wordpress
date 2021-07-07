<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php wp_title(); ?> </title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="flex items-center justify-between m-4">
        <div>
            <a href="<?php echo home_url(); ?>">
                <img class="w-8 h-auto max-w-20" src="<?php echo get_template_directory_uri() . '/assets/images/home.svg';?>" alt="Página Inicial">
            </a>
        </div>
        <?php echo get_search_form(); ?>
    </header>