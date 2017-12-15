<?php
	
/*
 * Template Name: How it works
*/

get_header();

?>
	<div id="primary" class="header-small pb-10">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-1 text-center">
					<?php single_post_title( '<h1 class="pt-13">', '</h1>' ); ?>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="pt-9 pb-11">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h2>1st step</h2>
				<h3 class="text-center pb-4">Use our online custom workout editor</h3>				
				<p>Click on the "Add an element" button to access the different type of intervals. Once you have entered your workout click the "Preview .ZWO output" button.
Select and copy the generated text.</p>
			</div>
		</div>
	</div>
</section>
								
<section class="pt-9 pb-11 section-inverse">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h2>2nd step</h2>
				<h3 class="text-center pb-4">Create the file on your computer</h3>
				<p class="pb-4">Because you need to create a text file the following step cannot be achieved with a mobile device. You need to use a Windows or Mac PC.</p>
				<p class="pb-4">If you are on a Windows PC, open Notepad, create a new file and paste the content in it. Save the file by adding the extension .zwo in Zwift folder.</p>
				<p class="pb-4">If you are on a Mac, open TextEdit, create a new file and paste the content in it. Enter .zwo at the end of the filename. Save the file in Zwift folder (/Users/[your username]/Documents/Zwift).</p>
			</div>
		</div>
	</div>
</section>

<section class="pt-9 pb-11">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h2>3rd step</h2>
				<h3 class="text-center pb-4">Load the workout in Zwift</h3>
				<p>Launch the Zwift App, click “Select Workout” on the launch screen, you will find your created workout under the “Custom Workouts” category.</p>
			</div>
		</div>
	</div>
</section>

<section class="pt-9 pb-11 section-inverse">
	<div class="container">
		<div class="row">
			<div class="col-8 offset-2">
				<h2>Not clear? Ask for help</h2>
				<?php echo do_shortcode( '[ninja_form id=1]' ) ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
