<?php

namespace Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

use Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

if ( ! class_exists( 'P4_Gutenberg_Block_Gallery_Slider' ) ) {
	class P4_Gutenberg_Block_Gallery_Slider extends Blocks\P4_Gutenberg_Base_Block {
		public function __construct() {
			if ( function_exists( 'acf_add_local_field_group' ) ) {
				acf_add_local_field_group( array(
					'key'                   => 'group_p4_gutenberg_gallery_slider',
					'title'                 => 'Planet4 Block: Gallery (Slider)',
					'fields'                => array(
						array(
							'key'               => 'field_p4_gutenberg_gallery_slider_images',
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
								'value'    => 'acf/p4block-gallery-slider',
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
					'name'            => 'p4block_gallery_slider',
					'title'           => __( 'Planet4: Gallery (Slider)' ),
					'description'     => __( 'Planet4 Block: Gallery (Slider)' ),
					'render_callback' => array( $this, 'block_callback' ),
					'category'        => 'common',
					'icon'            => 'admin-comments',
					'keywords'        => array( 'gallery', 'slider' ),
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
				'gallery_block_style' => 1,
				'multiple_image'      => $idList,
			);

			// Generate Shortcode
			//$shortcode = '[shortcake_gallery gallery_block_style="1" multiple_image="' . $idList . '"]';
			$shortcode = $this->generate_shortcode( 'shortcake_gallery', $parameters );

			// Run shortcode only if it's registered (to prevent shortcodes from appearing in the frontend
			if ( shortcode_exists( 'shortcake_gallery' ) ) {
				echo do_shortcode( $shortcode );
			}
		}
	}
}

