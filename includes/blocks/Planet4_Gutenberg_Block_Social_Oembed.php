<?php

namespace Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

use Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

if ( ! class_exists( 'Planet4_Gutenberg_Block_Social_Oembed' ) ) {
	class Planet4_Gutenberg_Block_Social_Oembed extends Blocks\Planet4_Gutenberg_Base_Block {
		public function __construct() {
			if ( function_exists( 'acf_add_local_field_group' ) ) {
				acf_add_local_field_group( array(
					'key'                   => 'group_p4_gutenberg_social_oembed',
					'title'                 => 'Planet4 Block: Social (oEmbed)',
					'fields'                => array(
						array(
							'key'               => 'field_p4_gutenberg_social_oembed_url',
							'label'             => __('URL', 'planet4-gutenberg-blocks'),
							'name'              => 'social_media_url',
							'type'              => 'url',
							'instructions'      => sprintf( '%s<br>- %s<br>- %s<br>- %s',
								__( 'The block works with the following social media content:', 'planet4-gutenberg-blocks' ),
								__( 'Twitter: tweet, profile, list, collection, likes, moment', 'planet4-gutenberg-blocks' ),
								__( 'Facebook: post, activity, photo, video, media, question, note', 'planet4-gutenberg-blocks' ),
								__( 'Instagram: image', 'planet4-gutenberg-blocks' )
							),
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
							'key'               => 'field_p4_gutenberg_social_oembed_align',
							'label'             => __('Align', 'planet4-gutenberg-blocks'),
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
								'value'    => 'acf/p4block-social-oembed',
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
					'name'            => 'p4block_social_oembed',
					'title'           => __( 'Planet4: Social Content', 'planet4-gutenberg-blocks' ),
					'description'     => __( 'Planet4 Block: Social Media Content', 'planet4-gutenberg-blocks' ),
					'render_callback' => array( $this, 'block_callback' ),
					'category'        => 'common',
					'icon'            => 'admin-comments',
					'keywords'        => array( 'social', 'media', 'facebook', 'twitter', 'instagram' ),
				) );
			}
		}

		public function block_callback( $block ) {
			$fields = get_fields();

			// Shortcode parameters
			$parameters = array(
				'facebook_page_tab' => 'timeline', // This gets inserted in the Shortcake plugin. Probably not intended, but it's replicated here.
				'social_media_url'  => $fields['social_media_url'],
				'alignment_class'   => $fields['alignment_class'],

			);

			// Generate Shortcode
			$shortcode = $this->generate_shortcode( 'shortcake_social_media', $parameters );

			// Run shortcode only if it's registered (to prevent shortcodes from appearing in the frontend
			if ( shortcode_exists( 'shortcake_social_media' ) ) {
				echo do_shortcode( $shortcode );
			}
		}
	}
}

