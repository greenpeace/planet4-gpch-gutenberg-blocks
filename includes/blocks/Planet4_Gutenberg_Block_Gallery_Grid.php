<?php

namespace Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

use Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

if ( ! class_exists( 'Planet4_Gutenberg_Block_Gallery_Grid' ) ) {
	class Planet4_Gutenberg_Block_Gallery_Grid extends Blocks\Planet4_Gutenberg_Base_Block {

		/**
		 * @var string $shortcode_name
		 */
		private static $shortcode_name = 'shortcake_gallery';

		public function __construct() {
			if ( function_exists( 'acf_add_local_field_group' ) ) {
				acf_add_local_field_group( array(
					'key'                   => 'group_p4_gutenberg_gallery_grid',
					'title'                 => 'Planet4 Block: Gallery (Grid)',
					'fields'                => array(
						array(
							'key'               => 'field_p4_gutenberg_gallery_grid_images',
							'label'             => 'Images',
							'name'              => 'images',
							'type'              => 'gallery',
							'instructions'      => '',
							'required'          => 1,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'min'               => '',
							'max'               => '',
							'insert'            => 'append',
							'library'           => 'all',
							'min_width'         => '',
							'min_height'        => '',
							'min_size'          => '',
							'max_width'         => '',
							'max_height'        => '',
							'max_size'          => '',
							'mime_types'        => '',
						),
					),
					'location'              => array(
						array(
							array(
								'param'    => 'block',
								'operator' => '==',
								'value'    => 'acf/p4block-gallery-grid',
							),
						),
					),
					'menu_order'            => 0,
					'position'              => 'normal',
					'style'                 => 'default',
					'label_placement'       => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen'        => '',
					'active'                => true,
					'description'           => '',
				) );
			}

			add_action( 'acf/init', array( $this, 'init_acf_block' ) );
		}


		public function init_acf_block() {
			// check function exists
			if ( function_exists( 'acf_register_block' ) ) {

				// register a testimonial block
				acf_register_block( array(
					'name'            => 'p4block_gallery_grid',
					'title'           => __( 'Gallery (Grid)', 'planet4-gutenberg-blocks' ),
					'description'     => __( 'Planet4 Block: Gallery (Grid)', 'planet4-gutenberg-blocks' ),
					'render_callback' => array( $this, 'block_callback' ),
					'category'        => 'planet4',
					'icon'            => 'screenoptions',
					'keywords'        => array( 'gallery', 'grid' ),
				) );
			}
		}

		public function block_callback( $block ) {
			// get image field (array)
			$images = get_field( 'images' );

			// Find image IDs
			$ids = array();
			foreach ( $images as $image ) {
				$ids[] = $image['id'];
			}

			$idList = implode( ',', $ids );

			// Shortcode parameters
			$parameters = array(
				'gallery_block_style' => 3,
				'multiple_image'      => $idList,
			);

			// Generate Shortcode
			//$shortcode = '[shortcake_gallery gallery_block_style="1" multiple_image="' . $idList . '"]';
			$shortcode = $this->generate_shortcode( self::$shortcode_name, $parameters );

			// Run shortcode only if it's registered (to prevent shortcodes from appearing in the frontend
			if ( shortcode_exists( self::$shortcode_name ) ) {
				echo do_shortcode( $shortcode );
			}
		}
	}
}

