<?php

namespace Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

use Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

if ( ! class_exists( 'Planet4_Gutenberg_Block_Split_Two_Columns' ) ) {
	class Planet4_Gutenberg_Block_Split_Two_Columns extends Blocks\Planet4_Gutenberg_Base_Block {
		public function __construct() {
			if ( function_exists( 'acf_add_local_field_group' ) ) {
				acf_add_local_field_group( array(
					'key'                   => 'group_p4_gutenberg_split_two_columns',
					'title'                 => 'Planet4 Block: Split Two Columns',
					'fields'                => array(
						array(
							'key'               => 'field_p4_gutenberg_split_two_columns_issue',
							'label'             => __( 'Select Issue', 'planet4-gutenberg-blocks' ),
							'name'              => 'select_issue',
							'type'              => 'post_object',
							'instructions'      => '',
							'required'          => 1,
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
							'multiple'          => 0,
							'return_format'     => 'id',
							'ui'                => 1,
						),
						array(
							'key'               => 'field_p4_gutenberg_split_two_columns_title',
							'label'             => __( 'Title', 'planet4-gutenberg-blocks' ),
							'name'              => 'title',
							'type'              => 'text',
							'instructions'      => __( '(Optional) Fill this only if you need to override issue title.', 'planet4-gutenberg-blocks' ),
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
							'key'               => 'field_p4_gutenberg_split_two_columns_issue_description',
							'label'             => 'Issue description',
							'name'              => __( 'issue_description', 'planet4-gutenberg-blocks' ),
							'type'              => 'wysiwyg',
							'instructions'      => __( '(Optional) Fill this only if you need to override the issue description.', 'planet4-gutenberg-blocks' ),
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'tabs'              => 'all',
							'toolbar'           => 'basic',
							'media_upload'      => 0,
							'delay'             => 0,
						),
						array(
							'key'               => 'field_p4_gutenberg_split_two_columns_issue_link_text',
							'label'             => __( 'Issue Link Text', 'planet4-gutenberg-blocks' ),
							'name'              => 'issue_link_text',
							'type'              => 'text',
							'instructions'      => __( '(Optional)', 'planet4-gutenberg-blocks' ),
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
							'key'               => 'field_p4_gutenberg_split_two_columns_issue_link',
							'label'             => __( 'Issue Link', 'planet4-gutenberg-blocks' ),
							'name'              => 'issue_link_path',
							'type'              => 'link',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_split_two_columns_issue_image',
							'label'             => __( 'Issue Image', 'planet4-gutenberg-blocks' ),
							'name'              => 'issue_image',
							'type'              => 'image',
							'instructions'      => __( '(Optional)', 'planet4-gutenberg-blocks' ),
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'return_format'     => 'id',
							'preview_size'      => 'thumbnail',
							'library'           => 'all',
							'min_width'         => '',
							'min_height'        => '',
							'min_size'          => '',
							'max_width'         => '',
							'max_height'        => '',
							'max_size'          => '',
							'mime_types'        => '',
						),
						array(
							'key'               => 'field_p4_gutenberg_split_two_columns_issue_image_focus',
							'label'             => __( 'Focus Issue Image', 'planet4-gutenberg-blocks' ),
							'name'              => 'focus_issue_image',
							'type'              => 'select',
							'instructions'      => __( '(Optional)', 'planet4-gutenberg-blocks' ),
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'choices'           => array(
								'top left'      => __( 'Top Left', 'planet4-gutenberg-blocks' ),
								'top center'    => __( 'Top Center', 'planet4-gutenberg-blocks' ),
								'top right'     => __( 'Top Right', 'planet4-gutenberg-blocks' ),
								'middle left'   => __( 'Middle Left', 'planet4-gutenberg-blocks' ),
								'middle center' => __( 'Middle Center', 'planet4-gutenberg-blocks' ),
								'middle right'  => __( 'Middle Right', 'planet4-gutenberg-blocks' ),
								'bottom left'   => __( 'Bottom Left', 'planet4-gutenberg-blocks' ),
								'bottom center' => __( 'Bottom Center', 'planet4-gutenberg-blocks' ),
								'bottom right'  => __( 'Bottom Right', 'planet4-gutenberg-blocks' ),
							),
							'default_value'     => array(),
							'allow_null'        => 0,
							'multiple'          => 0,
							'ui'                => 1,
							'ajax'              => 0,
							'return_format'     => 'value',
							'placeholder'       => '',
						),
						array(
							'key'               => 'field_p4_gutenberg_split_two_columns_campaign',
							'label'             => __( 'Select Campaign Tag', 'planet4-gutenberg-blocks' ),
							'name'              => 'select_tag',
							'type'              => 'taxonomy',
							'instructions'      => '',
							'required'          => 1,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'taxonomy'          => 'post_tag',
							'field_type'        => 'select',
							'allow_null'        => 0,
							'add_term'          => 0,
							'save_terms'        => 0,
							'load_terms'        => 0,
							'return_format'     => 'id',
							'multiple'          => 0,
						),
						array(
							'key'               => 'field_p4_gutenberg_split_two_columns_campaign_description',
							'label'             => __( 'Campaign Description', 'planet4-gutenberg-blocks' ),
							'name'              => 'tag_description',
							'type'              => 'wysiwyg',
							'instructions'      => __( '(Optional) Fill this only if you need to override the campaign description.', 'planet4-gutenberg-blocks' ),
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'tabs'              => 'all',
							'toolbar'           => 'basic',
							'media_upload'      => 0,
							'delay'             => 0,
						),
						array(
							'key'               => 'field_p4_gutenberg_split_two_columns_campaign_button_text',
							'label'             => __( 'Campaign button text', 'planet4-gutenberg-blocks' ),
							'name'              => 'button_text',
							'type'              => 'text',
							'instructions'      => __( '(Optional)', 'planet4-gutenberg-blocks' ),
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
							'key'               => 'field_p4_gutenberg_split_two_columns_campaign_button_link',
							'label'             => __( 'Campaign button link', 'planet4-gutenberg-blocks' ),
							'name'              => 'button_link',
							'type'              => 'link',
							'instructions'      => __( '(Optional)', 'planet4-gutenberg-blocks' ),
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'return_format'     => 'array',
						),
						array(
							'key'               => 'field_p4_gutenberg_split_two_columns_campaign_image',
							'label'             => __( 'Campaign Image', 'planet4-gutenberg-blocks' ),
							'name'              => 'tag_image',
							'type'              => 'image',
							'instructions'      => __( '(Optional) Fill this only if you need to override the campaign image.', 'planet4-gutenberg-blocks' ),
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'return_format'     => 'id',
							'preview_size'      => 'thumbnail',
							'library'           => 'all',
							'min_width'         => '',
							'min_height'        => '',
							'min_size'          => '',
							'max_width'         => '',
							'max_height'        => '',
							'max_size'          => '',
							'mime_types'        => '',
						),
						array(
							'key'               => 'field_p4_gutenberg_split_two_columns_campaign_image_focus',
							'label'             => __( 'Focus Campaign Image', 'planet4-gutenberg-blocks' ),
							'name'              => 'focus_tag_image',
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
								'top left'      => __( 'Top Left', 'planet4-gutenberg-blocks' ),
								'top center'    => __( 'Top Center', 'planet4-gutenberg-blocks' ),
								'top right'     => __( 'Top Right', 'planet4-gutenberg-blocks' ),
								'middle left'   => __( 'Middle Left', 'planet4-gutenberg-blocks' ),
								'middle center' => __( 'Middle Center', 'planet4-gutenberg-blocks' ),
								'middle right'  => __( 'Middle Right', 'planet4-gutenberg-blocks' ),
								'bottom left'   => __( 'Bottom Left', 'planet4-gutenberg-blocks' ),
								'bottom center' => __( 'Bottom Center', 'planet4-gutenberg-blocks' ),
								'bottom right'  => __( 'Bottom Right', 'planet4-gutenberg-blocks' ),
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
								'value'    => 'acf/p4block-split-two-columns',
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
					'name'            => 'p4block_split_two_columns',
					'title'           => __( 'Planet4: Split Two Columns (Issue/Campaign)', 'planet4-gutenberg-blocks' ),
					'description'     => __( 'Planet4 Block: Split two columns for issue and campaign combination', 'planet4-gutenberg-blocks' ),
					'render_callback' => array( $this, 'block_callback' ),
					'category'        => 'common',
					'icon'            => 'admin-comments',
					'keywords'        => array( 'issue', 'campaign', 'columns' ),
				) );
			}
		}

		public function block_callback( $block ) {
			$fields = get_fields();

			// Shortcode parameters
			$parameters = array(
				'select_issue'      => $fields['select_issue'],
				'title'             => $fields['title'],
				'issue_description' => $fields['issue_description'],
				'issue_link_text'   => $fields['issue_link_text'],
				'issue_link_path'   => $fields['issue_link_path'],
				'issue_image'       => $fields['issue_image'],
				'focus_issue_image' => $fields['focus_issue_image'],
				'select_tag'        => $fields['select_tag'],
				'tag_description'   => $fields['tag_description'],
				'button_text'       => $fields['button_text'],
				'button_link'       => $fields['button_link']['url'],
				'tag_image'         => $fields['tag_image'],
				'focus_tag_image'   => $fields['focus_tag_image'],
			);

			// Generate Shortcode
			$shortcode = $this->generate_shortcode( 'shortcake_split_two_columns', $parameters, true );

			// Run shortcode only if it's registered (to prevent shortcodes from appearing in the frontend
			if ( shortcode_exists( 'shortcake_split_two_columns' ) ) {
				echo do_shortcode( $shortcode );
			}
		}
	}
}

