<?php

/**********************************************************************************/
/* Register Meta Boxes */
/**********************************************************************************/

add_action( 'admin_init', 'theme_register_meta_boxes' );

function theme_register_meta_boxes() {

  if ( ! class_exists( 'RW_Meta_Box' ) ) return;
  $meta_boxes = array();
  $post_types = get_post_types();

  /**********************************************************************************/
  /* Intializes Each Above Meta Boxes */
  /**********************************************************************************/
  // $meta_boxes[] = array(
  //   'id' => 'custom_page_elements',
  //   'title' => 'Custom Page Elements',
  //   'pages' => array( 'page' ),
  //   'fields' => array(
  //     array(
  //       'name' => 'Logo',
  //       'id' => 'custom_logo',
  //       'type' => 'image_advanced',
  //       'desc' => 'Custom Logo'
  //       )
  //     )
  // );

  /**********************************************************************************/
  /* Registers Each Above Meta Boxes */
  /**********************************************************************************/

  foreach ( $meta_boxes as $meta_box ) {
    new RW_Meta_Box( $meta_box );
  }

}
?>