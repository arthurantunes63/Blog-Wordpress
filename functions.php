<?php
function load_styles() {
        wp_register_style('tailwind', get_template_directory_uri() . '/css/tailwind.css', array(), false, 'all');
        wp_enqueue_style('tailwind');

        wp_register_style('main', get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('main'); 
}
add_action('wp_enqueue_scripts', 'load_styles');


function create_post_type_story() {
    $args = array(
        'label'           => 'Histórias',
        'public'          => true,
        'has_archive'     => true,
        'query_var'       => true,
        'capability_type' => 'post',
        'hierarchical'    => true,
        'supports'        => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite'         => array('slug' => 'stories')
    );
    register_post_type( 'story', $args);
    flush_rewrite_rules();
}
add_action('init', 'create_post_type_story');


function get_categories_id(array $categories_post) {
    $categories_ID = array();
    foreach ($categories_post as $category) {
        $categories_ID[] = $category -> term_id;
    }
    return $categories_ID;
}

?>