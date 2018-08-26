<?php

function theme_enqueue_styles(){
    $parent_style = 'storefront';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



// Remover titulo do produto
remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);

