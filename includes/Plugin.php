<?php

namespace Greenpeace\Planet4GPCHGutenbergBlocks;

use Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

if ( ! class_exists( 'Planet4_Gpch_Gutenberg_Blocks' ) ) {
	class Planet4_Gpch_Gutenberg_Blocks {

		/**
		 * Singleton instance
		 *
		 * @var Planet4_Gpch_Gutenberg_Blocks
		 */
		private static $instance;

		/**
		 * Block instances
		 *
		 * @var $blocks
		 */
		private $blocks;

		/**
		 * Returns the instance
		 *
		 * @return Planet4_Gpch_Gutenberg_Blocks
		 */
		public static function get_instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Constructor.
		 */
		private function __construct() {
			// Output an error message in case ACF isn't installed.
			if ( ! class_exists( 'ACF' ) ) {
				add_action( 'admin_notices', array( $this, 'error_message_no_acf' ) );
			}

			// Actions
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );

			// Load Blocks
			$this->blocks = array(
				new Blocks\Planet4_Gutenberg_Block_Gallery_Slider(),
				new Blocks\Planet4_Gutenberg_Block_Gallery_3Column(),
				new Blocks\Planet4_Gutenberg_Block_Gallery_Grid(),
				new Blocks\Planet4_Gutenberg_Block_Carousel_Header_Zoom(),
				new Blocks\Planet4_Gutenberg_Block_Carousel_Header_Classic(),
			);
		}

		/**
		 * Outputs an error message in Wordpress admin
		 */
		public function error_message_no_acf() {
			?>
            <div class="error notice">
                <p><?php _e( 'Planet 4 GPCH Gutenberg Blocks: Advanced Custom Fields must be installed and activated for this plugin to work.', 'planet4-gutenberg-blocks' ); ?></p>
            </div>
			<?php
		}

		/**
		 * Enqueue our scripts
		 */
		public function enqueue_admin_scripts() {
			wp_enqueue_script( 'twitter-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ), '4.1.1' );

			wp_enqueue_style( 'twitter-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css?ver=4.1.1', null, '4.1.1' );
			wp_enqueue_style( 'planet4-plugin-blocks', '/wp-content/plugins/planet4-plugin-blocks/style.css', array( 'twitter-bootstrap' ), '1.9.0' );
		}
	}
}