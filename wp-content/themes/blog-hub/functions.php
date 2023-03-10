<?php
function blog_hub_register_styles()
{
    wp_enqueue_style('blog_hub_register_styles', get_template_directory_uri() . "/style.css", array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'blog_hub_register_styles');
