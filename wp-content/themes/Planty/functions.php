<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{ //on s assure que l on charge bien les style du theme parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  //et notre style theme.css
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// add_filter('wp_nav_menu_items','add_admin_link', 10, 2);
// function add_admin_link($items, $args) {
//   if (is_user_logged_in() && $args->theme_location == 'nav-menus') {
//     $items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';
//   }
//   return $items;
// }

// add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);

// function ajouter_lien_admin_au_menu($items, $args) {
//   if (is_user_logged_in() && current_user_can('administrator') && $args->theme_location == 'primary-menu') {
//     $admin_url = admin_url();
//     $items .= '<li><a href="' . esc_url($admin_url) . '">Admin</a></li>';
//   }
//   return $items;
// }

// function add_admin_link_to_menu($items, $args) {
//   if (is_user_logged_in() && current_user_can('manage_options')) {
//       // Créez un élément de menu pour le lien "Admin"
//       $admin_link = '<li id="menu-item-admin" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-admin"><a href="' . admin_url() . '">Admin</a></li>';
      
//       // Trouvez l'ID de l'élément après lequel vous souhaitez insérer "Admin"
//       $insert_after = 'menu-item-43'; // Remplacez 'menu-item-38' par l'ID de l'élément après lequel vous souhaitez insérer "Admin"

//       // Insérez l'élément "Admin" après l'élément spécifié
//       $index = array_search($insert_after, array_column($items, 'ID'));
//       if ($index !== false) {
//           array_splice($items, $index + 1, 0, array("admin_link" => $admin_link));
//       }
//   }
//   return $items;
// }
// add_filter('wp_nav_menu_objects', 'add_admin_link_to_menu', 10, 2);

