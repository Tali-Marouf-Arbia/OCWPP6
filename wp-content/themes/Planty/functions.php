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


function shortcode_personnalise_mon_formulaire() {
  ob_start(); // Démarre la temporisation de la sortie
  ?>
  <div class="input-group">
      <input class="quantity-field" max="" name="quantity" step="1" type="number" value="0" />
      <input class="button-minus" type="button" value="-" data-field="quantity" />
      <input class="button-plus" type="button" value="+" data-field="quantity" />
  </div>
  <?php
  return ob_get_clean(); // Récupère le contenu mis en mémoire tampon et le renvoie
}
add_shortcode('mon_formulaire_shortcode', 'shortcode_personnalise_mon_formulaire');
