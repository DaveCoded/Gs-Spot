<div class="single-post__background">

  <h1 class="post-title"><?php the_title(); ?></h1>
  <div class="post-author-block">
    <span class="written-by">written by</span>
    <span class="author-name"><?php the_field('author'); ?></span>
  </div>

  <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail();
  } ?>
  
  <div class="single-post__content">
    <?php the_content(); ?>
  </div>

</div>