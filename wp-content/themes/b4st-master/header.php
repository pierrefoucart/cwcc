<!DOCTYPE html>
<html <?php cc_hook_html(); ?>>
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
