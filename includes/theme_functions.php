<?php

/**********************************************************************************/
/* Custom Functions */
/**********************************************************************************/

// example usage:
// $terms = get_the_terms( $latest_post->ID, 'category' );
// echo join(', ', array_map('get_post_term_name', $terms));
function get_post_term_name($term) {
  return $term->name;
}

// example usage:
// $groups = group_array($posts, 6);
// foreach ($groups as $group):
//   <div class="row">
//     foreach ($group as $post):
//       <div class="col-md-2">
//         <a href="#">$post->post_title;</a>
//       </div>
//     endforeach;
//   </div>
// endforeach;
function group_array($old_array, $by=6) {
  $groups = array();
  $current_item = 1;
  $group_key = 0;
  foreach($old_array as $item) {
    if($current_item > $by) {
      $group_key += 1;
      $current_item = 1;
    }
    $groups[$group_key][] = $item;
    $current_item += 1;
  }
  return $groups;
}

?>