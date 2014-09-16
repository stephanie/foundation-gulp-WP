<?php

/**********************************************************************************/
/* Register Menus */
/**********************************************************************************/

//Add theme menu support
function register_menus() {
  register_nav_menu('primary_navigation',__( 'Primary Navigation' ));
  register_nav_menu('footer_navigation',__( 'Footer Navigation' ));
}
add_action( 'init', 'register_menus' );

?>