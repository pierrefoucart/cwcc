<!DOCTYPE html>
<html <?php cc_hook_html(); ?>>
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  	<meta property="og:url" content="http://www.customworkout.cc/"/>
	<meta property="og:type" content="product" />
	<meta property="og:title" content="Create your Zwift custom workout online!"/>
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/og-image.jpg"/>
	<meta property="og:description" content="Finally an easy way to create custom workout."/>
	<meta property="og:site_name" content="CustomWorkout.cc"/>
	<meta property="og:locale" content="en_US"/>
	<meta name="fb:app_id" content="188685161691889" />

  	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" /> <!-- 192x192 Google -->
  	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon_180.png" /> <!-- 180x180 Apple -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-344455-10"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-344455-10');
	</script>
	<?php wp_head(); ?>
</head>

<body <?php cc_hook_body(); ?> <?php body_class(); ?>>

<nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">	
  <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <?php
      wp_nav_menu( array(
        'theme_location'	=> 'navbar',
        'container'       => false,
        'menu_class'		  => '',
        'fallback_cb'		  => '__return_false',
      	'items_wrap'		  => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
        'depth'			      => 2,
	      'walker'  	      => new b4st_walker_nav_menu()
      ) );
    ?>
  </div>
</nav>
