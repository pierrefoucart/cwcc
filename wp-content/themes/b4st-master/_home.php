<?php
	
/*
 * Template Name: Home
*/

get_header();

?>

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1><span class="site-title small">Finally an easy way to</span>
				<span class="site-title">create custom workouts!</span></h1>
				<div class="buttons text-center">
					<a href="#" title="Create a custom workout" class="btn btn-primary btn-lg mt-4" role="button">Create a custom workout</a>
				</div>
			</div>
		</div>
	</div>
</div>
			
<section class="pt-9 pb-11">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h2>Features</h2>
				<h5 class="text-center pb-9">Tired to use Zwift complex user interface to create workouts? Not a pro at editing .zwo files? Here is your solution.
No coding knowledge or crazy mouse handling skills required!</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="rounded-circle mx-auto">
					<div class="icon-feature-1"></div>
				</div>
				<h3 class="text-center">Easy to create</h3>
				<p class="text-center">No need to dig in obscure files. No need to play with Zwift complex interface.</p>
			</div>
			<div class="col-md-4 text-center">
				<div class="rounded-circle mx-auto">
					<div class="icon-feature-2"></div>
				</div>
				<h3 class="text-center">Export as .zwo file</h3>
				<p class="text-center">We generate the file format you&#039;ll have to copy/paste in your Zwift folder.</p>
			</div>
			<div class="col-md-4 text-center">
				<div class="rounded-circle mx-auto">
					<div class="icon-feature-3"></div>
				</div>
				<h3 class="text-center">Share your workout</h3>
				<p class="text-center">Whereas it is with friends or team mates you can share your workout with everyone.</p>
			</div>
		</div>
	</div>
</section>
					
<section class="pt-9 pb-11 section-inverse">
	<div class="container">
		<div class="row">
			<div class="col-8 offset-2">
				<h2>Give us feedback</h2>
				<?php echo do_shortcode( '[ninja_form id=1]' ) ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>