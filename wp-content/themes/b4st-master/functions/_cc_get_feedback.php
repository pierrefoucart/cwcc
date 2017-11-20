<?php

function cc_get_feedback(){
?>
	<div class="pirate_forms_wrap">	
	<form method="post" enctype="application/x-www-form-urlencoded" class="pirate_forms  form_honeypot-on pirate_forms_from_widget-on wordpress-nonce-on pirate-forms-contact-name-on pirate-forms-contact-email-on pirate-forms-contact-subject-on pirate-forms-contact-message-on pirate-forms-contact-submit-on contact-referrer-on">
	<div class="pirate_forms_three_inputs_wrap">
		<div class="col-xs-12 col-sm-6 contact_name_wrap pirate_forms_three_inputs form_field_wrap">
			<label for="pirate-forms-contact-name"class="control-label">Your Name</label>
			<input type="text" id="pirate-forms-contact-name" name="pirate-forms-contact-name" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Enter your name')" onchange="this.setCustomValidity('')" value="">
		</div>
		<div class="col-xs-12 col-sm-6 contact_email_wrap pirate_forms_three_inputs form_field_wrap">
			<label for="pirate-forms-contact-email"class="control-label">Your Email</label>
			<input type="email" id="pirate-forms-contact-email" name="pirate-forms-contact-email" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Enter valid email')" onchange="this.setCustomValidity('')" value="">
		</div>
		<div class="col-xs-12 contact_subject_wrap pirate_forms_three_inputs form_field_wrap">
			<label for="pirate-forms-contact-subject"class="control-label">Subject</label>
			<input type="text" id="pirate-forms-contact-subject" name="pirate-forms-contact-subject" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Please enter a subject')" onchange="this.setCustomValidity('')" value="">
		</div>
	</div>
	<div class="col-xs-12 form_field_wrap contact_message_wrap">
		<label for="pirate-forms-contact-message"class="control-label">Your message</label>
		<textarea rows=5 cols=30 id="pirate-forms-contact-message" name="pirate-forms-contact-message" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('Enter your question or comment')" onchange="this.setCustomValidity('')"></textarea>
	</div>
	<div class="col-xs-12 col-sm-6 form_field_wrap contact_submit_wrap">
		<button type="submit" id="pirate-forms-contact-submit" name="pirate-forms-contact-submit" class="pirate-forms-submit-button btn btn-primary" placeholder="" >Send Message</button>
	</div>
	<div class="form_field_wrap hidden" style="display: none"><input type="text" id="form_honeypot" name="honeypot" class="" placeholder=""  value=""></div>
	<input type="hidden" id="pirate_forms_from_widget" name="pirate_forms_from_widget" class="" placeholder=""  value="0">
	<input type="hidden" id="wordpress-nonce" name="wordpress-nonce" class="" placeholder=""  value="094b25a2d6">
	<input type="hidden" id="contact-referrer" name="contact-referrer" class="" placeholder=""  value="http://localhost:8888/cwcc/create-a-custom-workout/">
	</form>
	<div class="pirate_forms_clearfix"></div>
	</div>

<?php }
	
