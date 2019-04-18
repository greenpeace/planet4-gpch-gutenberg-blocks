<?php

namespace Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

use Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

if ( ! class_exists( 'Planet4_Gutenberg_Block_Covers_Take_Action' ) ) {
	class Planet4_Gutenberg_Block_Covers_Take_Action extends Blocks\Planet4_Gutenberg_Base_Block {

		/**
		 * @var string $shortcode_name
		 */
		private static $shortcode_name = 'shortcake_newcovers';

		public function __construct() {
			if ( function_exists( 'acf_add_local_field_group' ) ) {
				acf_add_local_field_group( array(
						'key'                   => 'group_p4_gutenberg_covers_take_action',
						'title'                 => 'Planet4 Block: Covers (Take Action)',
						'fields'                => array(
							array(
								'key'               => 'field_p4_gutenberg_covers_take_action_rows',
								'label'             => 'Rows to display',
								'name'              => 'covers_view',
								'type'              => 'select',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'choices'           => array(
									'0' => __( '1 Row', 'planet4-gutenberg-blocks' ),
									'3' => __( '2 Rows', 'planet4-gutenberg-blocks' ),
									'1' => __( 'All', 'planet4-gutenberg-blocks' ),
								),
								'default_value'     => array(),
								'allow_null'        => 0,
								'multiple'          => 0,
								'ui'                => 0,
								'return_format'     => 'value',
								'ajax'              => 0,
								'placeholder'       => '',
							),
							array(
								'key'               => 'field_p4_gutenberg_covers_take_action_tags',
								'label'             => __( 'Tags', 'planet4-gutenberg-blocks' ),
								'name'              => 'tags',
								'type'              => 'taxonomy',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'taxonomy'          => 'post_tag',
								'field_type'        => 'multi_select',
								'allow_null'        => 0,
								'add_term'          => 0,
								'save_terms'        => 0,
								'load_terms'        => 0,
								'return_format'     => 'id',
								'multiple'          => 0,
							),
							array(
								'key'               => 'field_p4_gutenberg_covers_take_action_select_posts',
								'label'             => __( 'Select posts', 'planet4-gutenberg-blocks' ),
								'name'              => 'posts',
								'type'              => 'post_object',
								'instructions'      => __( 'Select posts to show manually and override the tag / post type selection', 'planet4-gutenberg-blocks' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'post_type'         => array(
									0 => 'page',
								),
								'taxonomy'          => '',
								'allow_null'        => 0,
								'multiple'          => 1,
								'return_format'     => 'id',
								'ui'                => 1,
							),
						),
						'location'              => array(
							array(
								array(
									'param'    => 'block',
									'operator' => '==',
									'value'    => 'acf/p4block-covers-take-action',
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
					)
				);
			}

			add_action( 'acf/init', array( $this, 'init_acf_block' ) );
		}


		public function init_acf_block() {
			// check function exists
			if ( function_exists( 'acf_register_block' ) ) {

				// register a testimonial block
				acf_register_block( array(
					'name'            => 'p4block-covers-take-action',
					'title'           => __( 'Covers (Take Action)', 'planet4-gutenberg-blocks' ),
					'description'     => __( 'Planet4 Block: Covers (Take Action)', 'planet4-gutenberg-blocks' ),
					'render_callback' => array( $this, 'block_callback' ),
					'category'        => 'planet4',
					'icon'            => 'screenoptions',
					'keywords'        => array( 'cover', 'act' ),
				) );
			}
		}

		public function block_callback( $block ) {
			$fields = get_fields();

			// Shortcode parameters
			$parameters = array(
				'cover_type'  => '1', // Sets the cover to type Take Action
				'tags'        => is_array( $fields['tags'] ) ? implode( ',', $fields['tags'] ) : '',
				'covers_view' => $fields['covers_view'],
				'posts'       => is_array( $fields['posts'] ) ? implode( ',', $fields['posts'] ) : '',
			);

			// Generate Shortcode
			$shortcode = $this->generate_shortcode( self::$shortcode_name, $parameters );

			// Run shortcode only if it's registered (to prevent shortcodes from appearing in the frontend
			if ( shortcode_exists( self::$shortcode_name ) ) {
				echo do_shortcode( $shortcode );
			}

		}
	}
}

