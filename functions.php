<?php

/**********************************************************************************/
/* Theme support and functions */
/**********************************************************************************/

include 'includes/environment_variables.php';
include 'includes/menus.php';
include 'includes/post_types.php';
include 'includes/meta_boxes.php';
include 'includes/image_sizes.php';
include 'includes/custom_taxonomy.php';
include 'includes/javascripts.php';
include 'includes/stylesheets.php';
include 'includes/theme_functions.php';

/**********************************************************************************/
/* Widgets */
/**********************************************************************************/

// function template_widgets_init() {
      // register_sidebar( array(
      //       'name' => 'Footer Social',
      //       'id' => 'footer_social',
      //       'before_widget' => '<div class = "footer-social">',
      //       'after_widget' => '</div>',
      //       'before_title' => '<h3>',
      //       'after_title' => '</h2>',
      //     ) );
// }
// add_action( 'widgets_init', 'template_widgets_init' );

// Disable unused WP Widgets
// function unregister_default_wp_widgets() {
//   unregister_widget('WP_Widget_Pages');
//   unregister_widget('WP_Widget_Calendar');
//   unregister_widget('WP_Widget_Archives');
//   unregister_widget('WP_Widget_Links');
//   unregister_widget('WP_Widget_Meta');
//   unregister_widget('WP_Widget_Search');
//   unregister_widget('WP_Widget_Categories');
//   unregister_widget('WP_Widget_Recent_Posts');
//   unregister_widget('WP_Widget_Recent_Comments');
//   unregister_widget('WP_Widget_RSS');
//   unregister_widget('WP_Widget_Tag_Cloud');
// }
// add_action('widgets_init', 'unregister_default_wp_widgets', 1);



?>