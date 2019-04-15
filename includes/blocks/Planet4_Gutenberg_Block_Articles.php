<?php

namespace Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

use Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

if ( ! class_exists( 'Planet4_Gutenberg_Block_Articles' ) ) {
	class Planet4_Gutenberg_Block_Articles extends Blocks\Planet4_Gutenberg_Base_Block {

		/**
		 * @var string $shortcode_name
		 */
		private static $shortcode_name = 'shortcake_articles';

		public function __construct() {
			if ( function_exists( 'acf_add_local_field_group' ) ) {
				acf_add_local_field_group( array(
						'key'                   => 'group_p4_gutenberg_articles',
						'title'                 => 'Planet4 Block: Articles',
						'fields'                => array(
							array(
								'key'               => 'field_p4_gutenberg_articles_button_text',
								'label'             => __( 'Read More Button Text', 'planet4-gutenberg-blocks' ),
								'name'              => 'read_more_text',
								'type'              => 'text',
								'instructions'      => __( 'The text on the read more button. Leave empty to use the standard.', 'planet4-gutenberg-blocks' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'placeholder'       => '',
								'prepend'           => '',
								'append'            => '',
								'maxlength'         => '',
							),
							array(
								'key'               => 'field_p4_gutenberg_articles_button_link',
								'label'             => __( 'Read More Button Link', 'planet4-gutenberg-blocks' ),
								'name'              => 'read_more_link',
								'type'              => 'link',
								'instructions'      => __( 'Leave empty for default behaviour: The button loads more articles in place. If you set this field, the button will link to a separate page instead.', 'planet4-gutenberg-blocks' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'return_format'     => 'url',
							),
							array(
								'key'               => 'field_p4_gutenberg_articles_post_types',
								'label'             => __( 'Post Types', 'planet4-gutenberg-blocks' ),
								'name'              => 'post_types',
								'type'              => 'taxonomy',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'taxonomy'          => 'p4-page-type',
								'field_type'        => 'checkbox',
								'add_term'          => 0,
								'save_terms'        => 0,
								'load_terms'        => 0,
								'return_format'     => 'id',
								'multiple'          => 0,
								'allow_null'        => 0,
							),
							array(
								'key'               => 'field_p4_gutenberg_articles_tags',
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
								'key'               => 'field_p4_gutenberg_articles_article_count',
								'label'             => __( 'Article Count', 'planet4-gutenberg-blocks' ),
								'name'              => 'article_count',
								'type'              => 'number',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => 4,
								'placeholder'       => '',
								'prepend'           => '',
								'append'            => '',
								'min'               => 1,
								'max'               => '',
								'step'              => 1,
							),
							array(
								'key'               => 'field_p4_gutenberg_articles_ignore_tags',
								'label'             => __( 'Ignore Tags', 'planet4-gutenberg-blocks' ),
								'name'              => 'ignore_categories',
								'type'              => 'select',
								'instructions'      => __( 'Ignore tags and show posts of all tags', 'planet4-gutenberg-blocks' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'choices'           => array(
									'false' => 'No',
									'true'  => 'Yes',
								),
								'default_value'     => array(
									0 => 'false',
								),
								'allow_null'        => 0,
								'multiple'          => 0,
								'ui'                => 0,
								'return_format'     => 'value',
								'ajax'              => 0,
								'placeholder'       => '',
							),
							array(
								'key'               => 'field_p4_gutenberg_articles_select_posts',
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
								'post_type'         => '',
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
									'value'    => 'acf/p4block-articles',
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
					'name'            => 'p4block_articles',
					'title'           => __( 'Planet4: Articles', 'planet4-gutenberg-blocks' ),
					'description'     => __( 'Planet4 Block: Articles List', 'planet4-gutenberg-blocks' ),
					'render_callback' => array( $this, 'block_callback' ),
					'category'        => 'common',
					'icon'            => 'admin-comments',
					'keywords'        => array( 'article', 'post' ),
				) );
			}
		}

		public function block_callback( $block ) {
			$fields = get_fields();

			// Shortcode parameters
			$parameters = array(
				'article_heading'      => '', // empty string to prevent default header to show
				'articles_description' => '', // empty string to prevent default header to show
				'read_more_text'       => $fields['read_more_text'],
				'read_more_link'       => $fields['read_more_link'],
				'post_types'           => is_array( $fields['posts_types'] ) ? implode( ',', $fields['post_types'] ) : '',
				'tags'                 => is_array( $fields['posts'] ) ? implode( ',', $fields['tags'] ) : '',
				'article_count'        => $fields['article_count'],
				'ignore_categories'    => $fields['ignore_categories'],
				'posts'                => is_array( $fields['posts'] ) ? implode( ',', $fields['posts'] ) : '',
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

