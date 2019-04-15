<?php

namespace Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

use Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

if ( ! class_exists( 'Planet4_Gutenberg_Block_Social_Facebook_Page' ) ) {
	class Planet4_Gutenberg_Block_Social_Facebook_Page extends Blocks\Planet4_Gutenberg_Base_Block {

		/**
		 * @var string $shortcode_name
		 */
		private static $shortcode_name = 'shortcake_social_media';

		public function __construct() {
			if ( function_exists( 'acf_add_local_field_group' ) ) {
				acf_add_local_field_group( array(
					'key'                   => 'group_p4_gutenberg_social_facebook_page',
					'title'                 => 'Planet4 Block: Social (Facebook Page)',
					'fields'                => array(
						array(
							'key'               => 'field_p4_gutenberg_social_facebook_page_url',
							'label'             => __( 'Facebook page URL', 'planet4-gutenberg-blocks' ),
							'name'              => 'social_media_url',
							'type'              => 'url',
							'instructions'      => '',
							'required'          => 1,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
						),
						array(
							'key'               => 'field_p4_gutenberg_social_facebook_page_tab',
							'label'             => __( 'Facebook Content' ),
							'name'              => 'facebook_page_tab',
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
								'timeline' => 'Timeline',
								'events'   => 'Events',
								'messages' => 'Messages',
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
							'key'               => 'field_p4_gutenberg_social_facebook_page_align',
							'label'             => __( 'Align', 'planet4-gutenberg-blocks' ),
							'name'              => 'alignment_class',
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
								'none'        => 'None',
								'alignleft'   => 'Left',
								'aligncenter' => 'Center',
								'alignright'  => 'Right',
							),
							'default_value'     => array(),
							'allow_null'        => 0,
							'multiple'          => 0,
							'ui'                => 0,
							'return_format'     => 'value',
							'ajax'              => 0,
							'placeholder'       => '',
						),
					),
					'location'              => array(
						array(
							array(
								'param'    => 'block',
								'operator' => '==',
								'value'    => 'acf/p4block-social-facebook-page',
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

				// register the block
				acf_register_block( array(
					'name'            => 'p4block_social_facebook_page',
					'title'           => __( 'Planet4: Facebook page', 'planet4-gutenberg-blocks' ),
					'description'     => __( 'Planet4 Block: Facebook Page', 'planet4-gutenberg-blocks' ),
					'render_callback' => array( $this, 'block_callback' ),
					'category'        => 'common',
					'icon'            => 'admin-comments',
					'keywords'        => array( 'social', 'media', 'facebook', 'event' ),
				) );
			}
		}

		public function block_callback( $block ) {
			$fields = get_fields();

			// Shortcode parameters
			$parameters = array(
				'embed_type'        => 'facebook_page',
				'social_media_url'  => $fields['social_media_url'],
				'facebook_page_tab' => $fields['facebook_page_tab'],
				'alignment_class'   => $fields['alignment_class'],

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

