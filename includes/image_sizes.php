<?php

/**********************************************************************************/
/* Image Sizes */
/**********************************************************************************/

if (function_exists('add_theme_support')) {
  add_theme_support( 'post-thumbnails' );
}

// Register Image Sizes
if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'mobile-thumb', 400 );
  add_image_size( 'tablet-thumb', 768 );
}

?>