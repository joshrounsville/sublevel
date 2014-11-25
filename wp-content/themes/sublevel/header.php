<!doctype html>
<!--[if IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title(' | ', true, 'right'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/img/structure/favicon.png">

    <link href='http://fonts.googleapis.com/css?family=Glegoo' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>


    <nav class="nav-scroll">
      <ul>
        <li class="icon">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/library/img/structure/sublevel-icon.svg" alt="Sublevel Drum Co.">
          </a>
        </li>
        <li><a href="<?php echo home_url(); ?>"<?php if( is_front_page() ) : ?> class="active"<?php endif; ?>>Home</a></li>
        <li><a href="<?php echo get_page_link(7); ?>"<?php if( is_page(7) ) : ?> class="active"<?php endif; ?>>About</a></li>
        <li><a href="<?php echo get_page_link(9); ?>"<?php if( is_page(9) ) : ?> class="active"<?php endif; ?>>Order</a></li>
        <li><a href="<?php echo get_page_link(11); ?>"<?php if( is_page(11) ) : ?> class="active"<?php endif; ?>>Contact</a></li>
      </ul>
    </nav>


    <header>
      <?php if ( !is_front_page() ) : ?>
      <div class="full-width">
      <?php endif; ?>
      <div class="container">

        <div class="row text-center">
          <div class="span12">
            <nav class="nav-main">
              <ul>
                <li><a href="<?php echo home_url(); ?>"<?php if( is_front_page() ) : ?> class="active"<?php endif; ?>>Home</a></li>
                <li><a href="<?php echo get_page_link(7); ?>"<?php if( is_page(7) ) : ?> class="active"<?php endif; ?>>About</a></li>
                <li>
                  <a href="/" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/img/structure/sublevel-drum.svg" alt="Sublevel Drum Co.">
                  </a>
                </li>
                <li><a href="<?php echo get_page_link(9); ?>"<?php if( is_page(9) ) : ?> class="active"<?php endif; ?>>Order</a></li>
                <li><a href="<?php echo get_page_link(11); ?>"<?php if( is_page(11) ) : ?> class="active"<?php endif; ?>>Contact</a></li>
              </ul>
            </nav>
            <?php if ( is_front_page() ) : ?>
            <h1 class="pad-b--2x">Quality, hand crafted drum kits made with purpose in the USA.</h1>
            <a href="https://www.kickstarter.com/projects/subleveldrumco/sublevel-drum-company" target="_blank" class="btn btn--outline">Support our Kickstarter</a>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <?php if ( is_front_page() ) : ?>
      <div class="video-bg">
        <video autoplay loop poster="<?php echo get_template_directory_uri(); ?>/library/img/structure/header-bg-black.jpg">
          <source src="<?php echo get_template_directory_uri(); ?>/library/video/sublevel.mp4" type="video/mp4">
          <source src="<?php echo get_template_directory_uri(); ?>/library/video/sublevel.webm" type="video/webm">
        </video>
      </div>
      <?php endif; ?>
      <?php if ( !is_front_page() ) : ?>
      </div>
      <?php endif; ?>
    </header>