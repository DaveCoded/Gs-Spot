<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <?php wp_head();?>
</head>
<body>

  <header class="header extra-padding">
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
          <li class="seasons__item">Season One</li>
        </ol>
        <ul class="pages-list">
		  <li class="page_item"><a href="<?php echo home_url(); ?>">Home</a></li>
          <?php wp_list_pages( '&title_li=' ); ?>
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
      <h2 class="season-display__number">Mission Statement</h2>
    </div>
  </header>
