<?php

namespace Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

use Greenpeace\Planet4GPCHGutenbergBlocks\Blocks;

if ( ! class_exists( 'Planet4_Gutenberg_Block_Carousel_Header_Zoom' ) ) {
	class Planet4_Gutenberg_Block_Carousel_Header_Zoom extends Blocks\Planet4_Gutenberg_Base_Block {

		/**
		 * @var string $shortcode_name
		 */
		private static $shortcode_name = 'shortcake_carousel_header';

		public function __construct() {
			if ( function_exists( 'acf_add_local_field_group' ) ) {
				acf_add_local_field_group( array(
					'key'                   => 'group_p4_gutenberg_carousel_header_zoom',
					'title'                 => 'Planet4 Block: Carousel Header (Zoom and slide to grey)',
					'fields'                => array(
						array(
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_carousel_autoplay',
							'label'             => 'Carousel Autoplay',
							'name'              => 'carousel_autoplay',
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
								'true'  => __( 'Yes', 'planet4-gutenberg-blocks' ),
								'false' => __( 'No', 'planet4-gutenberg-blocks' ),
							),
							'default_value'     => array(),
							'allow_null'        => 0,
							'multiple'          => 0,
							'ui'                => 0,
							'return_format'     => 'value',
							'ajax'              => 0,
							'placeholder'       => '',
						),
						// Slide 1
						array(
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_image_1',
							'label'             => 'Image 1',
							'name'              => 'image_1',
							'type'              => 'image',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_focus_image_1',
							'label'             => 'Focus Image 1',
							'name'              => 'focus_image_1',
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
								'left top'      => __( 'Top Left', 'planet4-gutenberg-blocks' ),
								'center top'    => __( 'Top Center', 'planet4-gutenberg-blocks' ),
								'right top'     => __( 'Top Right', 'planet4-gutenberg-blocks' ),
								'left center'   => __( 'Middle Left', 'planet4-gutenberg-blocks' ),
								'center center' => __( 'Middle Center', 'planet4-gutenberg-blocks' ),
								'right center'  => __( 'Middle Right', 'planet4-gutenberg-blocks' ),
								'left bottom'   => __( 'Bottom Left', 'planet4-gutenberg-blocks' ),
								'center bottom' => __( 'Bottom Center', 'planet4-gutenberg-blocks' ),
								'right bottom'  => __( 'Bottom Right', 'planet4-gutenberg-blocks' ),
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_header_1',
							'label'             => 'Header 1',
							'name'              => 'header_1',
							'type'              => 'text',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_subheader_1',
							'label'             => 'Subheader 1',
							'name'              => 'subheader_1',
							'type'              => 'text',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_description_1',
							'label'             => 'Description 1',
							'name'              => 'description_1',
							'type'              => 'textarea',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
							'maxlength'         => '',
							'rows'              => '',
							'new_lines'         => '',
						),
						array(
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_button_1',
							'label'             => 'Button 1',
							'name'              => 'button_1',
							'type'              => 'link',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
						),
						// Slide 2
						array(
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_image_2',
							'label'             => 'Image 2',
							'name'              => 'image_2',
							'type'              => 'image',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_focus_image_2',
							'label'             => 'Focus Image 2',
							'name'              => 'focus_image_2',
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
								'left top'      => __( 'Top Left', 'planet4-gutenberg-blocks' ),
								'center top'    => __( 'Top Center', 'planet4-gutenberg-blocks' ),
								'right top'     => __( 'Top Right', 'planet4-gutenberg-blocks' ),
								'left center'   => __( 'Middle Left', 'planet4-gutenberg-blocks' ),
								'center center' => __( 'Middle Center', 'planet4-gutenberg-blocks' ),
								'right center'  => __( 'Middle Right', 'planet4-gutenberg-blocks' ),
								'left bottom'   => __( 'Bottom Left', 'planet4-gutenberg-blocks' ),
								'center bottom' => __( 'Bottom Center', 'planet4-gutenberg-blocks' ),
								'right bottom'  => __( 'Bottom Right', 'planet4-gutenberg-blocks' ),
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_header_2',
							'label'             => 'Header 2',
							'name'              => 'header_2',
							'type'              => 'text',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_subheader_2',
							'label'             => 'Subheader 2',
							'name'              => 'subheader_2',
							'type'              => 'text',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_description_2',
							'label'             => 'Description 2',
							'name'              => 'description_2',
							'type'              => 'textarea',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
							'maxlength'         => '',
							'rows'              => '',
							'new_lines'         => '',
						),
						array(
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_button_2',
							'label'             => 'Button 2',
							'name'              => 'button_2',
							'type'              => 'link',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
						),
						// Slide 3
						array(
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_image_3',
							'label'             => 'Image 3',
							'name'              => 'image_3',
							'type'              => 'image',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_focus_image_3',
							'label'             => 'Focus Image 3',
							'name'              => 'focus_image_3',
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
								'left top'      => __( 'Top Left', 'planet4-gutenberg-blocks' ),
								'center top'    => __( 'Top Center', 'planet4-gutenberg-blocks' ),
								'right top'     => __( 'Top Right', 'planet4-gutenberg-blocks' ),
								'left center'   => __( 'Middle Left', 'planet4-gutenberg-blocks' ),
								'center center' => __( 'Middle Center', 'planet4-gutenberg-blocks' ),
								'right center'  => __( 'Middle Right', 'planet4-gutenberg-blocks' ),
								'left bottom'   => __( 'Bottom Left', 'planet4-gutenberg-blocks' ),
								'center bottom' => __( 'Bottom Center', 'planet4-gutenberg-blocks' ),
								'right bottom'  => __( 'Bottom Right', 'planet4-gutenberg-blocks' ),
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_header_3',
							'label'             => 'Header 3',
							'name'              => 'header_3',
							'type'              => 'text',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_subheader_3',
							'label'             => 'Subheader 3',
							'name'              => 'subheader_3',
							'type'              => 'text',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_description_3',
							'label'             => 'Description 3',
							'name'              => 'description_3',
							'type'              => 'textarea',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
							'maxlength'         => '',
							'rows'              => '',
							'new_lines'         => '',
						),
						array(
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_button_3',
							'label'             => 'Button 3',
							'name'              => 'button_3',
							'type'              => 'link',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
						),
						// Slide 4
						array(
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_image_4',
							'label'             => 'Image 4',
							'name'              => 'image_4',
							'type'              => 'image',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_focus_image_4',
							'label'             => 'Focus Image 4',
							'name'              => 'focus_image_4',
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
								'left top'      => __( 'Top Left', 'planet4-gutenberg-blocks' ),
								'center top'    => __( 'Top Center', 'planet4-gutenberg-blocks' ),
								'right top'     => __( 'Top Right', 'planet4-gutenberg-blocks' ),
								'left center'   => __( 'Middle Left', 'planet4-gutenberg-blocks' ),
								'center center' => __( 'Middle Center', 'planet4-gutenberg-blocks' ),
								'right center'  => __( 'Middle Right', 'planet4-gutenberg-blocks' ),
								'left bottom'   => __( 'Bottom Left', 'planet4-gutenberg-blocks' ),
								'center bottom' => __( 'Bottom Center', 'planet4-gutenberg-blocks' ),
								'right bottom'  => __( 'Bottom Right', 'planet4-gutenberg-blocks' ),
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_header_4',
							'label'             => 'Header 4',
							'name'              => 'header_4',
							'type'              => 'text',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_subheader_4',
							'label'             => 'Subheader 4',
							'name'              => 'subheader_4',
							'type'              => 'text',
							'instructions'      => '',
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
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_description_4',
							'label'             => 'Description 4',
							'name'              => 'description_4',
							'type'              => 'textarea',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
							'maxlength'         => '',
							'rows'              => '',
							'new_lines'         => '',
						),
						array(
							'key'               => 'field_p4_gutenberg_carousel_header_zoom_button_4',
							'label'             => 'Button 4',
							'name'              => 'button_4',
							'type'              => 'link',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
						),
					),
					'location'              => array(
						array(
							array(
								'param'    => 'block',
								'operator' => '==',
								'value'    => 'acf/p4block-header-carousel-zoom',
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
					'name'            => 'p4block_header_carousel_zoom',
					'title'           => __( 'Planet4: Header Carousel (Zoom and slide to grey)', 'planet4-gutenberg-blocks' ),
					'description'     => __( 'Planet4 Block: Header Carousel (Zoom and slide to grey)', 'planet4-gutenberg-blocks' ),
					'render_callback' => array( $this, 'block_callback' ),
					'category'        => 'common',
					'icon'            => 'admin-comments',
					'keywords'        => array( 'header', 'gallery', 'slider' ),
				) );
			}
		}

		/**
		 * Block output
		 *
		 * @param $block
		 */
		public function block_callback( $block ) {

			$fields = get_fields();

			// Shortcode parameters
			$parameters = array(
				'block_style'       => 'zoom-and-slide-to-gray',
				'carousel_autoplay' => $fields['carousel_autoplay'],
				// Slide 1
				'image_1'           => $fields['image_1'],
				'focus_image_1'     => $fields['focus_image_1'],
				'header_1'          => $fields['header_1'],
				'subheader_1'       => $fields['carousel_autoplay'],
				'description_1'     => $fields['subheader_1'],
				'link_text_1'       => $fields['button_1']['title'],
				'link_url_1'        => $fields['button_1']['url'],
				// Slide 2
				'image_2'           => $fields['image_2'],
				'focus_image_2'     => $fields['focus_image_2'],
				'header_2'          => $fields['header_2'],
				'subheader_2'       => $fields['carousel_autoplay'],
				'description_2'     => $fields['subheader_2'],
				'link_text_2'       => $fields['button_2']['title'],
				'link_url_2'        => $fields['button_2']['url'],
				// Slide 3
				'image_3'           => $fields['image_3'],
				'focus_image_3'     => $fields['focus_image_3'],
				'header_3'          => $fields['header_3'],
				'subheader_3'       => $fields['carousel_autoplay'],
				'description_3'     => $fields['subheader_3'],
				'link_text_3'       => $fields['button_3']['title'],
				'link_url_3'        => $fields['button_3']['url'],
				// Slide 4
				'image_4'           => $fields['image_4'],
				'focus_image_4'     => $fields['focus_image_4'],
				'header_4'          => $fields['header_4'],
				'subheader_4'       => $fields['carousel_autoplay'],
				'description_4'     => $fields['subheader_4'],
				'link_text_4'       => $fields['button_4']['title'],
				'link_url_4'        => $fields['button_4']['url'],
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

