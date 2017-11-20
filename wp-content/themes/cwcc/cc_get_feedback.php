<?php

function cc_get_feedback(){
?>
		<section class="contactus <?php echo esc_attr( $wrapper_class ); ?>" id="contact" data-sorder="hestia_contact">
			<div class="container">
				<?php hestia_top_contact_section_content_trigger(); ?>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="hestia-title">Give us feedback</h2>

						<?php if ( ! empty( $hestia_contact_title ) || is_customize_preview() ) : ?>
							<h2 class="hestia-title"><?php echo esc_html( $hestia_contact_title ); ?></h2>
						<?php endif; ?>
						<?php if ( ! empty( $hestia_contact_subtitle ) || is_customize_preview() ) : ?>
							<h5 class="description"><?php echo wp_kses_post( $hestia_contact_subtitle ); ?></h5>
						<?php endif; ?>
						<?php

						$hestia_contact_content = get_theme_mod( 'hestia_contact_content_new', hestia_contact_get_old_content( 'hestia_contact_content' ) );
						if ( ! empty( $hestia_contact_content ) ) {
							echo '<div class="hestia-description">';
								echo wp_kses_post( $hestia_contact_content );
							echo '</div>';
						}

						?>
					</div>
					<?php
					$hestia_contact_form_shortcode_default = '[pirate_forms]';
					$hestia_contact_form_shortcode = get_theme_mod( 'hestia_contact_form_shortcode', $hestia_contact_form_shortcode_default );
					if ( defined( 'PIRATE_FORMS_VERSION' ) || ( $hestia_contact_form_shortcode != $hestia_contact_form_shortcode_default ) ) {
						?>
							<div class="col-md-6 col-md-offset-3">
									<?php if ( ! empty( $hestia_contact_area_title ) || is_customize_preview() ) : ?>
										<div class="header header-raised header-primary text-center">
											<h4 class="card-title"><?php echo esc_html( $hestia_contact_area_title ); ?></h4>
										</div>
									<?php endif; ?>
									<div class="content">
										<?php
										if ( function_exists( 'hestia_contact_form_callback' ) ) {
											hestia_contact_form_callback();
										} else {
											echo do_shortcode( '[pirate_forms]' );
										}
										?>
									</div>
							</div>
						<?php

					} elseif ( is_customize_preview() ) {
						hestia_contact_form_placeholder();
					}
?>
				</div>
			</div>
		</section>
		<?php


}
