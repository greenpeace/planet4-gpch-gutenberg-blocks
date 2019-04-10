<?php

namespace Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

if ( ! class_exists( 'P4_Gutenberg_Base_Block' ) ) {
	class P4_Gutenberg_Base_Block {
		/**
		 * Generates a Wordpress shortcode
		 *
		 * @param string $shortcode_name
		 * @param array $parameters
		 *
		 * @return string $shortcode
		 */
		public function generate_shortcode( $shortcode_name, $parameters ) {
			$shortcode = '[' . $shortcode_name;

			foreach ( $parameters as $key => $value ) {
				$shortcode .= ' ' . $key . '="' . $value . '"';
			}

			$shortcode .= ']';

			return $shortcode;
		}
	}
}