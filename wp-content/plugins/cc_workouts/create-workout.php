<?php
/*
Plugin Name: Create a workout
*/
	
/**
 * Load angular scripts
 *
*/

function cc_hook_javascript() {
	echo '<script src="' . esc_url( plugins_url( 'app/lib/angular.js', __FILE__ ) ) . '"></script>
	<script src="' . esc_url( plugins_url( 'app/js/app.js', __FILE__ ) ) . '"></script>
	<script src="' . esc_url( plugins_url( 'app/js/stepsService.js', __FILE__ ) ) . '"></script>
	<script src="' . esc_url( plugins_url( 'app/js/xmlGeneratorService.js', __FILE__ ) ) . '"></script>
	<script src="' . esc_url( plugins_url( 'app/js/stepType.js', __FILE__ ) ) . '"></script>
	';
}
add_action('wp_head', 'cc_hook_javascript');

/**
 * Declare angular scripts in header
 *
*/

function cc_hook_body() {
	echo 'ng-controller="appController"';
}

function cc_hook_html() {
	echo 'ng-app="zwiftWorkoutApp"';
}

/**
 * Get workout list
 */
function cc_workout_form_plan() {
?>
    <h2>Workout plan</h2>
    <table class="outline">
        <tr ng-repeat="step in steps">
            <td class="text-left"><label>Duration (seconds)</label><input type="text" ng-model="step.timeSeconds" class="form-control mb-4"></td>
            <td class="text-left"><label class="control-label">Starting % of FTP</label><input type="text" ng-model="step.ftpPercentageStart" class="form-control mb-4"></td>
            <td class="text-left"><label>Ending % of FTP</label><input type="text" ng-model="step.ftpPercentageEnd" class="form-control mb-4"></td>
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
	    <button class="btn btn-secondary my-2 mx-2" ng-click="addWarmUp()">Warm Up</button>
	    <button class="btn btn-secondary my-2 mx-2" ng-click="addIncreasingStep()">Increasing Step</button>
	    <button class="btn btn-secondary my-2 mx-2" ng-click="addSteadyStateStep()">Steady State</button>
	    <button class="btn btn-secondary my-2 mx-2" ng-click="addDecreasingStep()">Decreasing Step</button>
	    <button class="btn btn-secondary my-2 mx-2" ng-click="addCoolDown()">Cool Down</button>
    </div>


<?php
}	
	
function cc_workout_form_desc() {
?>
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
		<input type="button" ng-click="generateXmlOutput()" value="Preview .ZWO Output" class="btn btn-primary mt-5 mb-2">
	</div>

    <textarea rows="20" style="width: 100%" ng-model="xml" cols="30" placeholder="" required="" onchange="this.setCustomValidity('')"></textarea>

<?php
}


/**
 * Get workout list
 */

/**
 * Get workout item
 */

/**
 * Generate workout .zwo file
 */
