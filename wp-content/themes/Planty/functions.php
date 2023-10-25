<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{ //on s assure que l on charge bien le style css du theme parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  //et mon style theme.css
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// add_filter('wp_nav_menu_items','add_admin_link', 10, 2);
// function add_admin_link($items, $args) {
//   if (is_user_logged_in() && $args->theme_location == 'primary') {
//     $items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';
//   }
//   return $items;
// }

add_filter('wp_nav_menu_items','add_admin_link', 10, 2);
function add_admin_link($items, $args) {
  if (is_user_logged_in() && $args->theme_location == 'primary') {
    $admin_link = '<li><a href="'. get_admin_url() .'">Admin</a></li>';
    $items = $admin_link . $items; 
  }
  return $items;
}


