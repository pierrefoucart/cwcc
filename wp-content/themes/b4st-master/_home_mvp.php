<?php
	
/*
 * Template Name: Home MVP
*/

get_header();

?>

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1><span class="site-title small">An easier way to</span>
				<span class="site-title">create custom Zwift workouts!</span></h1>
				<div class="buttons text-center">
					<a href="http://www.customworkout.cc/create-a-custom-workout/" title="Create a custom Zwiftworkout" class="btn btn-primary btn-lg mt-4" role="button">Create a custom workout</a>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="pt-9 pb-11">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h2 class="pb-4">How it works</h2>
				<h5 class="text-center pb-9">Tired to use Zwift complex user interface to create workouts? Not a pro at editing .zwo files? Here is your solution.
No coding knowledge or crazy mouse handling skills required!</h5>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-4">
				<h3 class="text-center">1. <a href="http://www.customworkout.cc/create-a-custom-workout/">Create a workout with our online tool</a></h3>
			</div>
			<div class="col-md-4 text-center">
				<h3 class="text-center">2. Copy/paste the generated text into a .zwo file</h3>
			</div>
			<div class="col-md-4 text-center">
				<h3 class="text-center">3. Select the workout in Zwift</h3>
			</div>

			<div class="col-md-12 text-center mt-4"><a href="<?php echo site_url( "how-it-works/" ); ?>" class="btn btn-outline-primary">Read the FAQ</a></div>
		</div>
	</div>
</section>
								
<section class="pt-9 pb-11 section-inverse">
	<div class="container">
		<div class="row">
			<div class="col-8 offset-2">
				<h2 class="pb-4">Give us feedback</h2>
				<?php echo do_shortcode( '[ninja_form id=1]' ) ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>