<?php
/*
 * Template Name: Create a custom workout
*/

get_header();

?>
	<div id="primary" class="header-small pb-10">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-1 text-center">
					<?php single_post_title( '<h1 class="pt-13">', '</h1>' ); ?>
					<h5 class="text-center">Create workouts to load in Zwift</h5>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="blog-post blog-post-wrapper pt-9 pb-10">
	<div class="container">
		<div class="row">
			<div class="col-8 offset-2 text-center">
				<? echo cc_workout_form_plan(); ?>
			</div>
		</div>
	</div>
</div>
<div class="blog-post blog-post-wrapper section-inverse pt-9 pb-10">
	<div class="container">
		<div class="row">
			<div class="col-8 offset-2">
				<? echo cc_workout_form_desc(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
