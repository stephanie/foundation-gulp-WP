<?php

/**********************************************************************************/
/* Register Scripts */
/**********************************************************************************/

// enqueue javascript
if( !function_exists( "theme_js" ) ) {
  function theme_js(){

    $VERSION = '1.0';
    wp_register_script( 'jquery',
      'http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js'
    );

    wp_register_script( 'modernizr',
      JAVASCRIPTPATH.'vendor/modernizr.min.js',
      array('jquery'),
      $VERSION, true );

    wp_register_script( 'jquery.placeholders',
      JAVASCRIPTPATH.'vendor/placeholders.min.js',
      array('jquery'),
      $VERSION, true );

    wp_register_script( 'theme-scripts',
      JAVASCRIPTPATH.'theme-scripts.js',
      array('jquery'),
      $VERSION, true );

    wp_enqueue_script('jquery');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('jquery.placeholders');
    wp_enqueue_script('theme-scripts');
  }
}
add_action( 'wp_enqueue_scripts', 'theme_js', 20 );

?>