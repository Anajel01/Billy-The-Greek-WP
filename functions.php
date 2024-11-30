<?php
function Billy_The_Greek_enqueue_styles() {
    wp_enqueue_style(
        'google-fonts', 
        "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    );
    wp_enqueue_style(
        'google-fonts', 
        "https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    );


    
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('nav-style', get_template_directory_uri() . "/nav.css");
    wp_enqueue_style('body-style', get_template_directory_uri() . "/body.css");
    wp_enqueue_style('menu-style', get_template_directory_uri() . "/menu.css");
}

add_action("wp_enqueue_scripts", "Billy_The_Greek_enqueue_styles");

function acf_remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "acf_remove_gutenberg");


function theme_name_scripts() {
    wp_enqueue_script(
        'custom-script', 
        get_template_directory_uri() . '/script.js', 
        array(), 
        '1.0.0', 
        true 
    );
}
add_action("wp_enqueue_scripts", "theme_name_scripts");

function enable_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'enable_svg_upload');

function plp_register_strings() {
    pll_register_string("Polylang Playground","Om us");
    pll_register_string("Polylang Playground","menu");
    pll_register_string("Polylang Playground","Bestil nu");
    pll_register_string("Polylang Playground","bestil i restauranten:");
    pll_register_string("Polylang Playground","book en tid:");
    pll_register_string("Polylang Playground","Om");
    pll_register_string("Polylang Playground","inspektion");
    pll_register_string("Polylang Playground","om vores");
    pll_register_string("Polylang Playground","Find ud af mere:");
    pll_register_string("Polylang Playground","reserve");
    pll_register_string("Polylang Playground","Mandag – torsdag:");
    pll_register_string("Polylang Playground","11:30 – 20:00");
    pll_register_string("Polylang Playground","Fredag – lørdag:");
    pll_register_string("Polylang Playground","11:30 – 21:00");
    pll_register_string("Polylang Playground","Søndag:");
    pll_register_string("Polylang Playground","11:30 – 20:00");
    pll_register_string("Polylang Playground","hovedsiden");
    pll_register_string("Polylang Playground","Bestil tid");
    pll_register_string("Polylang Playground","Priser:");
    pll_register_string("Polylang Playground","reserve:");
    
    
}



add_action("init", "plp_register_strings");
