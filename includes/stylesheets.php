<?php

/**********************************************************************************/
/* Register Styles */
/**********************************************************************************/

//include the mce editor
add_editor_style( 'editor-style.less' );

// Register style sheetS.
add_action( 'wp_enqueue_scripts', 'register_styles' );

function register_styles() {

  //include the theme css file
  if ( ! is_admin() ){
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/library/production/css/theme.css' );
    wp_enqueue_style( 'font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css' );
  }

}

?>