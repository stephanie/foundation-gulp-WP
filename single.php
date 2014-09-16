<?php
/**
 * Single posts template
 */
?>

<?php get_header(); ?>

<div class="row">
  <div class="col-md-12">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <? // the content goes here ?>
  <?php endwhile; else: ?>
    <p><?php _e('Sorry, we couldn\'t find that page.'); ?></p>
  <?php endif; ?>

  </div><!--col-->
</div><!--row-->

<?php get_footer(); ?>