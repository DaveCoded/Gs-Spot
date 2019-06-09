<?php get_header(); ?>

<?php add_filter( 'the_title', 'max_title_length'); ?>

<?php $args = array(
'posts_per_page' => '1',
);

$query = new WP_query ( $args );
if ( $query->have_posts() ) { ?>

  <main class="content-area">
  <?php while ( $query->have_posts() ) : $query->the_post(); /* start the loop */ ?>

    <div class="left-column">
      <article class="main-article">
        <div class="image-box">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
            <div class="image-caption">
              <div class="image-caption__box">
                <h3 class="image-caption__title">
                  <?php the_title(); ?>
                </h3>
                <?php the_excerpt(); ?>
              </div>
            </div>
          </a>
        </div>
      </article>  
    </div>

    <?php // End the loop.
    endwhile;
    rewind_posts(); 
    } ?>

    <div class="right-column">
      <section class="secondary-articles-section">
        <?php 
        // query_posts('offset=1');
          if ( have_posts() ) : while ( have_posts() ) : the_post();
        
            get_template_part( 'content', get_post_format() );

          endwhile; endif;
        ?>
        <div class="pagination">
          <span class="pagination__older-posts"><?php next_posts_link( 'Older posts' ); ?></span>
          <span class="pagination__newer-posts"><?php previous_posts_link( 'Newer posts' ); ?></span>
        </div>
      </section>
    </div>
  </main>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us19.list-manage.com","uuid":"27104dd13b0e95fab4e9b06bd","lid":"1dab0d763f","uniqueMethods":true}) })</script>
<?php get_footer(); ?>