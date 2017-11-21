<?php
	
/*
 * Template Name: WIP Workout form 
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

    <h2>Workout plan</h2>
    <table class="outline">
        <tr>
            <td class="text-left"><label>Duration (seconds)</label><input type="text" class="form-control mb-4"></td>
            <td class="text-left"><label class="control-label">Starting % of FTP</label><input type="text" class="form-control mb-4"></td>
            <td class="text-left"><label>Ending % of FTP</label><input type="text" class="form-control mb-4"></td>
            <td class="text-left">
                <button class="btn-secondary plan-edit mb-4" ng-click="moveDown($index)"><i class="icon-down"></i></button>
                <button class="btn-secondary plan-edit mb-4" ng-click="moveUp($index)"><i class="icon-up"></i></button>
                <button class="btn-secondary plan-edit mb-4" ng-click="deleteStep($index)"><i class="icon-delete"></i></button>
            </td>
        </tr>
    </table>
    
	<p>
	  <button class="btn btn-outline-primary mt-4" type="button" data-toggle="collapse" data-target="#collapseTools" aria-expanded="false" aria-controls="collapseTools">Add an element</button>
	</p>
	<div class="collapse py-2" id="collapseTools">
	    <button class="btn btn-secondary my-2 mx-2">Warm Up</button>
	    <button class="btn btn-secondary my-2 mx-2">Increasing Step</button>
	    <button class="btn btn-secondary my-2 mx-2">Steady State</button>
	    <button class="btn btn-secondary my-2 mx-2">Decreasing Step</button>
	    <button class="btn btn-secondary my-2 mx-2">Cool Down</button>
    </div>

			</div>
		</div>
	</div>
</div>
<div class="blog-post blog-post-wrapper section-inverse pt-9 pb-10">
	<div class="container">
		<div class="row">
			<div class="col-8 offset-2">
				
    <h2>Description</h2>
	<div class="label-floating is-empty">
		<label for="pirate-forms-contact-name" class="control-label">Your name</label>
		<input type="text" ng-model="workout.author" id="pirate-forms-contact-name" name="pirate-forms-contact-name" class="form-control" placeholder="" required="" oninvalid="this.setCustomValidity('Enter your name')" onchange="this.setCustomValidity('')" value="">
	</div>

	<div class="label-floating is-empty">
		<label for="pirate-forms-contact-name" class="control-label mt-5">Workout title</label>
		<input type="text"  ng-model="workout.title" id="pirate-forms-contact-name" name="pirate-forms-contact-name" class="form-control" placeholder="" required="" oninvalid="this.setCustomValidity('Enter workout title')" onchange="this.setCustomValidity('')" value="">
	</div>

	<div class="label-floating is-empty">
		<label for="pirate-forms-contact-message" class="control-label mt-5">Your description (optional)</label>
		<textarea ng-model="workout.description" rows="5" cols="30" id="pirate-forms-contact-message" name="pirate-forms-contact-message" class="form-control" placeholder="" required="" oninvalid="this.setCustomValidity('Enter description')" onchange="this.setCustomValidity('')"></textarea>
	</div>

	<div class="text-center">
		<input type="button" value="Preview .ZWO Output" class="btn btn-primary mt-5">
	</div>
				
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
