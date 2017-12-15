<?php
	
/*
 * Template Name: Login
*/
 
get_header();

?>

<!-- Login modal -->
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


<?php get_footer(); ?>
