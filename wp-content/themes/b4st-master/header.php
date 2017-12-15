<?php
	
function login_redirect( $redirect_to, $request, $user ){
    return get_permalink( 27 );
}
add_filter( 'login_redirect', 'login_redirect', 10, 3 );


// 1- WORKOUT FORM LINK IN MENU

function cc_form_link( $nav, $args ) {
	if( is_user_logged_in() ) { 
		$link = '<li><a href="'.site_url( "create-a-custom-workout/" ).'" class="nav-link">Create a custom workout</a></li>';
	} else {
		$link = '<li><a href="#exampleModal" data-toggle="modal" class="nav-link">Create a custom workout</a></li>'; 
	}
	
	if( $args->theme_location == 'navbar' ) {
		return $nav.$link ;
	} else {
	return $nav;
	}
}
add_filter('wp_nav_menu_items','cc_form_link', 10, 2);

// 2- WORKOUT LIST LINK IN MENU

/*function cc_workouts_link( $nav, $args ) {
	$link = '<li><a href="'.site_url( "workouts/" ).'" class="nav-link">Find a workout</a></li>';
	
	if( $args->theme_location == 'navbar' ) {
		return $nav.$link ;
	} else {
	return $nav;
	}
}
add_filter('wp_nav_menu_items','cc_workouts_link', 10, 2);*/

// 3- WORKOUT LIST LINK IN MENU

function cc_workouts_link( $nav, $args ) {
	$link = '<li><a href="'.site_url( "how-it-works/" ).'" class="nav-link">How it works</a></li>';
	
	if( $args->theme_location == 'navbar' ) {
		return $nav.$link ;
	} else {
	return $nav;
	}
}
add_filter('wp_nav_menu_items','cc_workouts_link', 10, 2);


// 4- LOGOUT LINK IN MENU

function cc_logout_link( $nav, $args ) {
	$logoutlink = '<li><a href="'.wp_logout_url( home_url() ).'" class="nav-link">Logout</a></li>'; // redirect to home page
	if( $args->theme_location == 'navbar' ) {
		return $nav.$logoutlink ;
	} else {
	return $nav;
	}
}

if(is_user_logged_in() ) { 
add_filter('wp_nav_menu_items','cc_logout_link', 10, 2);
}

?>

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
	<meta property="fb:app_id" content="188685161691889" />

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

<?php
if(!is_user_logged_in() ) { 
?>
<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><label>Close</label></button>
				<h2>Login / Sign up</h2>
			</div>
			<div class="modal-body">
				Connect CustomWorkout.cc with your Facebook or Google account to access the workout form and save your workouts:
				<div class="the_champ_login_container">
					<p><button class="btn btn-outline-primary facebook mt-3 mb-3" onclick="theChampInitiateLogin(this)" alt="Login with Facebook">Login with Facebook</button></p>
					<p><button class="btn btn-outline-primary google" id="theChampGoogleButton" alt="Login with Google" onclick="theChampInitiateLogin(this)">Login with Google</button></p>
				</div>
			</div>

				</div>
			</div>
		</div>


		</div>
	</div>
</div>


<?php
}

