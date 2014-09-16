<?php
/**
 * Blog template
 */
 ?>

<?php get_header(); ?>


<div class="row">
  <div class="col-md-8">
  <h1>Blog</h1>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <? // content here ?>
  <?php endwhile; else: ?>
    <p><?php _e('Sorry, we couldn\'t find that post.'); ?></p>
  <?php endif; ?>

  </div>
  <div class="col-md-4">
    <?php get_sidebar(); ?>
  </div><!--/.span-->
</div><!--/.row-->


<?php get_footer(); ?>
