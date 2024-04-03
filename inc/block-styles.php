<?php
/**
 * Block Styles
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 */
	function justvideo_register_block_styles() {
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'justvideo-border',
				'label' => esc_html__( 'Borders', 'justvideo' ),
			)
		);
	}
	add_action( 'init', 'justvideo_register_block_styles' );
}
