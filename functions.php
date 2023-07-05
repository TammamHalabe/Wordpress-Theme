<?php
/**
 * Functions and definitions
 *
 */

/*
 * Let WordPress manage the document title.
 */
add_theme_support('title-tag');

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support('post-thumbnails');

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support(
  'html5',
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  )
);

/** 
 * Include primary navigation menu
 */
function htmlwp_nav_init()
{
  register_nav_menus(
    array(
      'menu-header' => 'Header Menu',
      'menu-footer' => 'Footer Menu',
    )
  );
}
add_action('init', 'htmlwp_nav_init');


// Add Custom Walker Class for Dropdown Menu
class Custom_Nav_Walker extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = array()) {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"submenu\">\n";
  }
}

// Display the Menu in your Theme Template
function custom_display_nav_menu() {
  wp_nav_menu(array(
      'theme_location' => 'primary',
      'container' => 'div',
      'container_id' => 'menu-container',
      'menu_class' => 'menu',
      'walker' => new Custom_Nav_Walker()
  ));
}

/**
 * Register widget area.
 *
 */
add_theme_support('post-thumbnails');
if (function_exists('register_sidebar'))
  register_sidebar(
    array(
      'name' => 'Sidebar',
      'id' => 'sidebar-1',
      'before_widget' => '<li id="%1$s" style="margin-bottom:40px;">',
      'after_widget' => '</li>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    )
  );

/**
 * Enqueue scripts and styles.
 */
function htmlwp_scripts()
{
  wp_enqueue_style('htmlwp-style', get_stylesheet_uri());

}

#Just for checking to hide the title of page 

function remove_wp_title()
{
  remove_action('wp_head', '_wp_render_title_tag', 1);
}
add_action('after_setup_theme', 'remove_wp_title');