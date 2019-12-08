<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php if(is_front_page()){
	$image = wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'large');
  } ?>
  <meta property="og:image" content="https://www.gs-spot.co.uk/wp-content/uploads/2018/11/the_crest.jpg"  />
  <meta name="twitter:image" content="<?php echo $image; ?>" />
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

  <header class="header">
    <input type="checkbox" class="nav-toggle" id="nav-toggle">
    <label aria-label="Open navigation sidebar" for="nav-toggle">
      <span class="header__nav-icon">
        <div class="header__nav-icon--bar"></div>
        <div class="header__nav-icon--bar"></div>
        <div class="header__nav-icon--bar"></div>
      </span>
    </label>
    
    <nav class="navigation">
      <button aria-label="Close navigation sidebar" class="close-nav">
        &times;
      </button>
      <a class="crest-link" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/small-crest-transparent.png" alt="Logo" class="crest" />
      </a>
      <div class="list-container">
        <ol class="seasons">
          <li class="seasons__item"><a href="http://localhost/update-gs-spot/season-one/">Season One</a></li>
          <li class="seasons__item"><a href="http://localhost/update-gs-spot/season-two/">Season Two</a></li>
        </ol>
        <ul class="pages-list">
          <li class="page_item"><a href="<?php echo home_url(); ?>">Home</a></li>
          <?php 
            $page_args = array(
              'exclude'      => '480, 475',
              'title_li'     => '',
              'post_type'    => 'page',
              'post_status'  => 'publish' 
            );
            wp_list_pages( $page_args );
          ?>
					<a href="https://www.iubenda.com/privacy-policy/45338662" class="page_item" title="Privacy Policy" id="privacy-policy">Privacy Policy</a> <script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
        </ul>
      </div>
      <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
      <p class="copyright">Copyright &copy; <?php echo date("Y"); ?> Georgia Rose</p>
    </nav>

    <div class="header__title">
      <h1 class="header__title--heading"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
      <span class="header__title--tagline"><?php echo get_bloginfo( 'description' ); ?></span>
    </div>
    <div class="season-display">
      <h2 class="season-display__number">season two</h2>
      <span class="season-display__title">sex after</span>
    </div>
  </header>
