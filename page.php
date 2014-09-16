<?php
/**
 * Standard page template
 *
 */
?>

<?php get_header(); ?>


<div id = "content" class = "row">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-md-12">
      <? // the content goes here ?>
    </div>
  <?php endwhile; else: ?>
    <p><?php _e('Sorry, we couldn\'t find that page.'); ?></p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
