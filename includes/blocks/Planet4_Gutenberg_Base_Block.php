<?php

namespace Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

if ( ! class_exists( 'Planet4_Gutenberg_Base_Block' ) ) {
	class Planet4_Gutenberg_Base_Block {
		/**
		 * Generates a Wordpress shortcode
		 *
		 * @param string $shortcode_name
		 * @param array $parameters
		 * @param boolean $removeEmptyParameters: Removes empty parameters from shortcode
		 *
		 * @return string $shortcode
		 */
		public function generate_shortcode( $shortcode_name, $parameters, $removeEmptyParameters = false ) {
			$shortcode = '[' . $shortcode_name;

			foreach ( $parameters as $key => $value ) {
				if ( ! ( $removeEmptyParameters && empty( $value ) ) ) {
					$shortcode .= ' ' . $key . '="' . $value . '"';
				}
			}

			$shortcode .= ']';

			return $shortcode;
		}
	}
}