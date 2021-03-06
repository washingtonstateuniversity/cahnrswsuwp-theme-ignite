<?php

class Footer_Ignite extends Abstract_Theme_Part {


	protected $ctmzr_fields = array(
		'_cahnrswp_footer_type' => '',
	);


	public function get_the_part( $context = 'single', $args = array() ) {

		$html = '';

		$html .= ignite_get_widget_area( 'footer_before', 'footer-before' );

		$settings = $this->get_settings( $this->ctmzr_fields, $args );

		switch ( $settings['_cahnrswp_footer_type'] ) {

			case 'college-global':
				$html .= $this->get_college_global_footer( $context, $args );
				break;

		} // End switch

		$html .= ignite_get_widget_area( 'footer_after', 'footer-after' );

		$html .= $this->get_template_parts();

		return $html;

	} // End get_the_footer


	protected function get_template_parts() {

		ob_start();

		include ignite_get_theme_path( 'lib/theme-parts/main/main-end.php' );

		get_footer();

		return ob_get_clean();

	} // End


	protected function get_college_global_footer( $context, $args ) {

		ob_start();

		include ignite_get_theme_path( 'lib/displays/footers/college-footer/footer.min.php', false );

		return ob_get_clean();

	} // End get_college_global_footer */


} // End Footer_Ignite
