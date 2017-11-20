<?php
	
/*
 * Template Name: Home
*/

get_header();

?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1><span class="site-title small">Finally an easy way to</span>
				<span class="site-title">create custom workouts!</span></h1>
				<div class="buttons text-center">
					<a href="#" title="Create a custom workout" class="btn btn-primary btn-lg" role="button">Create a custom workout</a>
				</div>
			</div>
		</div>
	</div>
</div>
			
<div>
	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>Features</h2>
					<h5 class="description">Tired to use Zwift complex user interface to create workouts? Not a pro at editing .zwo files? Here is your solution.
No coding knowledge or crazy mouse handling skills required!</h5>
				</div>
			</div>
		<div class="row">
			<div class="col-md-4 feature-box">
				<div>
					<div class="icon" style="color:#b287d7">
						<i class="fa fa-wechat"></i>
					</div>
					<h3 class="text-center">Easy to create</h3>
					<p class="text-center">No need to dig in obscure files. No need to play with Zwift complex interface.</p>
				</div>
			</div>
			<div class="col-md-4 feature-box">
				<div>
					<div class="icon" style="color:#b287d7">
						<i class="fa fa-check"></i>
					</div>
					<h3 class="text-center">Export as .zwo file</h3>
					<p class="text-center">We generate the file format you&#039;ll have to copy/paste in your Zwift folder.</p>
				</div>
			</div>
			<div class="col-md-4 feature-box">
				<div>
					<div class="icon" style="color:#b287d7">
						<i class="fa fa-support"></i>
					</div>
					<h3 class="text-center">Share your workout</h3>
					<p class="text-center">Whereas it is with friends or team mates you can share your workout with everyone.</p>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row"></div>
		</div>
	</section>
						
						
	<section class="contactus " id="contact" data-sorder="hestia_contact">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>Give us feedback</h2>
					<div>
						<div class="info info-horizontal"></div>
						<div class="info info-horizontal">
							<div class="description"><p></p></div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3">
					<div class="content"><? get_feedback(); ?></div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>