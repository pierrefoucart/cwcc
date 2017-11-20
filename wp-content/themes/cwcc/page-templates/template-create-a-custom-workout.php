<?php
/**
 * Template Name: Create a workout form
 *
 * The template for the full-width page.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

get_header();
?>
	<div id="primary" class="<?php echo hestia_boxed_layout_header(); ?> page-header header-small">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<?php single_post_title( '<h1 class="hestia-title">', '</h1>' ); ?>
				</div>
			</div>
		</div>
		<?php hestia_output_wrapper_header_background( false ); ?>
	</div>
</header>
<div class="<?php echo hestia_layout(); ?>">
	<div class="blog-post blog-post-wrapper">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-8 col-md-offset-2"><? echo cc_workout_form_plan(); ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6 col-md-offset-3"><? echo cc_workout_form_desc(); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
