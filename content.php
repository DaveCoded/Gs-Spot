<a href="<?php the_permalink(); ?>">
<article class="secondary-article">
  <div class="thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="secondary-article__content">
    <h3 class="secondary-article__heading"><?php the_title(); ?></h3>
    <?php the_excerpt(); ?>
  </div>
</article>
</a>  