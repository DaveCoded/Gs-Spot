<?php get_header('about'); ?>

<div class="page-content">
  <h1 class="post-title page-title"><?php the_title(); ?></h1>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  the_content();
  endwhile; endif; ?>

</div>

<?php get_footer(); ?>