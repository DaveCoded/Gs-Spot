<?php get_header('contact'); ?>

<div class="page-content" id="contact-page">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  the_content();
  endwhile; endif; ?>

</div>

<?php get_footer(); ?>