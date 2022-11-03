<?php

add_filter("use_block_editor_for_post", "__return_false", 10);
add_theme_support("post-thumbnails");
add_theme_support("menus");

function get_field($key, $isList = true) {
    return get_post_meta(get_the_ID(), $key, $isList);
};

function create_custom_post_type() {  
    register_post_type('Projetos', [
        "id" => "projects",
        'labels' => [
            'name' => __('Projetos'),
            'singular_name' => __('Projeto')
        ],
        'public' => true,
        'rewrite' => ['slug' => 'projetos'],
        'show_in_rest' => true,
    ]);

    register_post_type('Arquivos', [
        'labels' => [
            'name' => __('Arquivos'),
            'singular_name' => __('Arquivo')
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'arquivos'],
        'show_in_rest' => true,
    ]);
};
add_action("init", "create_custom_post_type");

// Menu
function register_my_menu() {
    register_nav_menu("menu-principal", "Menu Principal");
};
add_action("init", "register_my_menu");

require_once(get_template_directory() . "/cmb2-fields/cf-page-home.php");
require_once(get_template_directory() . "/cmb2-fields/cf-page-contact.php");
require_once(get_template_directory() . "/cmb2-fields/cf-projects.php");
require_once(get_template_directory() . "/cmb2-fields/cf-files.php");

?>