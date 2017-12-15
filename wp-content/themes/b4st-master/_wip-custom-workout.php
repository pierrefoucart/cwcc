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
			<div class="col-md-8 offset-md-2 text-center">

    <h2>Workout plan</h2>

    <div class="row outline mb-4">
        <div class="col-1 icon-warmup"></div>
        <div class="col-2 text-left"><label>Duration</label><input type="text" placeholder="h:m:s" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Starting power</label><input type="text" placeholder="% of FTP" class="form-control"></div>
        <div class="col-3 text-left"><label>Ending power</label><input type="text" placeholder="% of FTP" class="form-control"></div>
        <div class="col-3 text-left">
            <button class="btn-secondary btn-edit" ng-click="moveDown($index)"><i class="icon-down"></i></button>
            <button class="btn-secondary btn-edit" ng-click="moveUp($index)"><i class="icon-up"></i></button>
            <button class="btn-secondary btn-edit" ng-click="deleteStep($index)"><i class="icon-delete"></i></button>
        </div>
    </div>

    <div class="row outline mb-4">
         <div class="col-1 icon-z1"></div>
        <div class="col-2 text-left"><label>Duration</label><input type="text" placeholder="h:m:s" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Power</label><input type="text" placeholder="% of FTP" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Cadence</label><input type="text" placeholder="RPM" class="form-control"></div>
        <div class="col-3 text-left">
            <button class="btn-secondary btn-edit" ng-click="moveDown($index)"><i class="icon-down"></i></button>
            <button class="btn-secondary btn-edit" ng-click="moveUp($index)"><i class="icon-up"></i></button>
            <button class="btn-secondary btn-edit" ng-click="deleteStep($index)"><i class="icon-delete"></i></button>
        </div>
    </div>
    
    <div class="row outline mb-4">
         <div class="col-1 icon-z2"></div>
        <div class="col-2 text-left"><label>Duration</label><input type="text" placeholder="h:m:s" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Power</label><input type="text" placeholder="% of FTP" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Cadence</label><input type="text" placeholder="RPM" class="form-control"></div>
        <div class="col-3 text-left">
            <button class="btn-secondary btn-edit" ng-click="moveDown($index)"><i class="icon-down"></i></button>
            <button class="btn-secondary btn-edit" ng-click="moveUp($index)"><i class="icon-up"></i></button>
            <button class="btn-secondary btn-edit" ng-click="deleteStep($index)"><i class="icon-delete"></i></button>
        </div>
    </div>

    <div class="row outline mb-4">
        <div class="col-1 icon-z3"></div>
        <div class="col-2 text-left"><label>Duration</label><input type="text" placeholder="h:m:s" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Power</label><input type="text" placeholder="% of FTP" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Cadence</label><input type="text" placeholder="RPM" class="form-control"></div>
        <div class="col-3 text-left">
            <button class="btn-secondary btn-edit" ng-click="moveDown($index)"><i class="icon-down"></i></button>
            <button class="btn-secondary btn-edit" ng-click="moveUp($index)"><i class="icon-up"></i></button>
            <button class="btn-secondary btn-edit" ng-click="deleteStep($index)"><i class="icon-delete"></i></button>
        </div>
    </div>

    <div class="row outline mb-4">
        <div class="col-1 icon-z4"></div>
        <div class="col-2 text-left"><label>Duration</label><input type="text" placeholder="h:m:s" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Power</label><input type="text" placeholder="% of FTP" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Cadence</label><input type="text" placeholder="RPM" class="form-control"></div>
        <div class="col-3 text-left">
            <button class="btn-secondary btn-edit" ng-click="moveDown($index)"><i class="icon-down"></i></button>
            <button class="btn-secondary btn-edit" ng-click="moveUp($index)"><i class="icon-up"></i></button>
            <button class="btn-secondary btn-edit" ng-click="deleteStep($index)"><i class="icon-delete"></i></button>
        </div>
    </div>
    
    <div class="row outline mb-4">
        <div class="col-1 icon-z5"></div>
        <div class="col-2 text-left"><label>Duration</label><input type="text" placeholder="h:m:s" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Power</label><input type="text" placeholder="% of FTP" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Cadence</label><input type="text" placeholder="RPM" class="form-control"></div>
        <div class="col-3 text-left">
            <button class="btn-secondary btn-edit" ng-click="moveDown($index)"><i class="icon-down"></i></button>
            <button class="btn-secondary btn-edit" ng-click="moveUp($index)"><i class="icon-up"></i></button>
            <button class="btn-secondary btn-edit" ng-click="deleteStep($index)"><i class="icon-delete"></i></button>
        </div>
    </div>

    <div class="row outline mb-4">
        <div class="col-1 icon-z6"></div>
        <div class="col-2 text-left"><label>Duration</label><input type="text" placeholder="h:m:s" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Power</label><input type="text" placeholder="% of FTP" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Cadence</label><input type="text" placeholder="RPM" class="form-control"></div>
        <div class="col-3 text-left">
            <button class="btn-secondary btn-edit" ng-click="moveDown($index)"><i class="icon-down"></i></button>
            <button class="btn-secondary btn-edit" ng-click="moveUp($index)"><i class="icon-up"></i></button>
            <button class="btn-secondary btn-edit" ng-click="deleteStep($index)"><i class="icon-delete"></i></button>
        </div>
    </div>

    <div class="row outline mb-4">
        <div class="col-1 icon-cooldown"></div>
        <div class="col-2 text-left"><label>Duration</label><input type="text" placeholder="h:m:s" class="form-control"></div>
        <div class="col-3 text-left"><label class="control-label">Starting power</label><input type="text" placeholder="% of FTP" class="form-control"></div>
        <div class="col-3 text-left"><label>Ending power</label><input type="text" placeholder="% of FTP" class="form-control"></div>
        <div class="col-3 text-left">
            <button class="btn-secondary btn-edit" ng-click="moveDown($index)"><i class="icon-down"></i></button>
            <button class="btn-secondary btn-edit" ng-click="moveUp($index)"><i class="icon-up"></i></button>
            <button class="btn-secondary btn-edit" ng-click="deleteStep($index)"><i class="icon-delete"></i></button>
        </div>
    </div>

    <div class="row outline mb-4">
        <div class="col-1 icon-freeride"></div>
        <div class="col-8 text-left"><label>Duration</label><input type="text" placeholder="h:m:s" class="form-control"></div>
        <div class="col-3 text-left">
            <button class="btn-secondary btn-edit" ng-click="moveDown($index)"><i class="icon-down"></i></button>
            <button class="btn-secondary btn-edit" ng-click="moveUp($index)"><i class="icon-up"></i></button>
            <button class="btn-secondary btn-edit" ng-click="deleteStep($index)"><i class="icon-delete"></i></button>
        </div>
    </div>

    <div class="row outline mb-4">
        <div class="col-1 icon-textevent"></div>
        <div class="col-8 text-left"><label>Text</label><input type="text" placeholder="h:m:s" class="form-control"></div>
        <div class="col-3 text-left">
            <button class="btn-secondary btn-edit" ng-click="moveDown($index)"><i class="icon-down"></i></button>
            <button class="btn-secondary btn-edit" ng-click="moveUp($index)"><i class="icon-up"></i></button>
            <button class="btn-secondary btn-edit" ng-click="deleteStep($index)"><i class="icon-delete"></i></button>
        </div>
    </div>

	<p>
	  <button class="btn btn-outline-primary mt-4" type="button" data-toggle="collapse" data-target="#collapseTools" aria-expanded="false" aria-controls="collapseTools">Add an element</button>
	</p>
	<div class="collapse py-2" id="collapseTools">
	    <button class="btn btn-secondary btn-add my-2 mx-2 icon-z1"><label>Z1</label></button>
	    <button class="btn btn-secondary btn-add my-2 mx-2 icon-z2"><label>Z2</label></button>
	    <button class="btn btn-secondary btn-add my-2 mx-2 icon-z3"><label>Z3</label></button>
	    <button class="btn btn-secondary btn-add my-2 mx-2 icon-z4"><label>Z4</label></button>
	    <button class="btn btn-secondary btn-add my-2 mx-2 icon-z5"><label>Z5</label></button>
	    <button class="btn btn-secondary btn-add my-2 mx-2 icon-z6"><label>Z6</label></button>
	    <button class="btn btn-secondary btn-add my-2 mx-2 icon-warmup"><label>Warm up</label></button>
	    <button class="btn btn-secondary btn-add my-2 mx-2 icon-cooldown"><label>Cool down</label></button>
	    <button class="btn btn-secondary btn-add my-2 mx-2 icon-freeride"><label>Free ride</label></button>
	    <button class="btn btn-secondary btn-add my-2 mx-2 icon-textevent"><label>Text event</label></button>
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
		<input type="button" value="Create workout" class="btn btn-primary mt-5">
	</div>
				
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
