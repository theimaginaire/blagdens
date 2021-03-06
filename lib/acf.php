<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_585ac90296fbe',
	'title' => 'Pages',
	'fields' => array (
		
		array (
			'key' => 'field_585aca09aa64b',
			'label' => 'Hero/Carousel',
			'name' => 'hero_carousel',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Carousel' => 'Carousel',
				'Hero' => 'Hero',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_585ac906ad8bc',
			'label' => 'Carousel',
			'name' => 'carousel',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_585aca09aa64b',
						'operator' => '==',
						'value' => 'Carousel',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_585ac912ad8bd',
					'label' => 'Background Image',
					'name' => 'background_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '50%',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_585ac922ad8be',
					'label' => 'Slide Content',
					'name' => 'slide_content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '50%',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
			),
		),
		array (
			'key' => 'field_585aca441f7f7',
			'label' => 'Hero Image',
			'name' => 'hero_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_585aca09aa64b',
						'operator' => '==',
						'value' => 'Hero',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_585aca5e1f7f8',
			'label' => 'Hero Content',
			'name' => 'hero_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_585aca09aa64b',
						'operator' => '==',
						'value' => 'Hero',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		
		
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_59c420bb8acf7',
	'title' => 'Flexible Content',
	'fields' => array (
		array (
			'key' => 'field_59c420c3d09d5',
			'label' => 'Flexible Content',
			'name' => 'flexible_content',
			'type' => 'flexible_content',
			'instructions' => 'Adds content blocks',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array (
				'bavasgs7as7yxh' => array (
					'key' => 'bavasgs7as7yxh',
					'name' => 'main_content',
					'label' => 'Main Content',
					'display' => 'block',
					'sub_fields' => array (
						
					),
					'min' => '',
					'max' => '1',
				),
				'59c422c3316fe' => array (
					'key' => '59c422c3316fe',
					'name' => 'fw_image',
					'label' => 'Full Width Image',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59c422d49fbe0',
							'label' => 'Full Width Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => 1920,
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'59c426167ac3b' => array (
					'key' => '59c426167ac3b',
					'name' => 'carousel',
					'label' => 'Carousel',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59c426237ac3c',
							'label' => 'Slides',
							'name' => 'slides',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'block',
							'button_label' => 'Add Slide',
							'sub_fields' => array (
								array (
									'key' => 'field_59c426337ac3d',
									'label' => 'Image',
									'name' => 'image',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'url',
									'preview_size' => 'thumbnail',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
								array (
									'key' => 'field_59c426457ac3e',
									'label' => 'Content',
									'name' => 'content',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'59ce5f2cdd10e' => array (
					'key' => '59ce5f2cdd10e',
					'name' => 'panels',
					'label' => 'Panels',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59ce5f36dd10f',
							'label' => 'Panels',
							'name' => 'panels',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'block',
							'button_label' => 'Add Panel',
							'sub_fields' => array (
								array (
									'key' => 'field_59ce5f43dd110',
									'label' => 'Content',
									'name' => 'content',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'59ce60f579c04' => array (
					'key' => '59ce60f579c04',
					'name' => 'cta',
					'label' => 'Call to action',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59ce60fd79c05',
							'label' => 'CTA Content',
							'name' => 'cta_content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'59ce622dab2e4' => array (
					'key' => '59ce622dab2e4',
					'name' => 'latest_posts',
					'label' => 'Latest Blog Posts',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59ce623aab2e5',
							'label' => 'Number of posts to show',
							'name' => 'num_posts',
							'type' => 'number',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'min' => '',
							'max' => '',
							'step' => 1,
						),
						array (
							'key' => 'field_59ce626cab2e6',
							'label' => 'Intro Text',
							'name' => 'intro_text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'bashxyagyuas7cy' => array (
					'key' => 'bashxyagyuas7cy',
					'name' => 'gallery',
					'label' => 'Gallery',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_5ad9fc50d830f',
							'label' => 'Gallery',
							'name' => 'gallery',
							'type' => 'gallery',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'min' => '',
							'max' => '',
							'insert' => 'append',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => 1,
				),
				'59ce68d1bd720' => array (
					'key' => '59ce68d1bd720',
					'name' => 'latest_cases',
					'label' => 'Latest Case Studies',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59ce68d1bd721',
							'label' => 'Number of posts to show',
							'name' => 'num_posts',
							'type' => 'number',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'min' => '',
							'max' => '',
							'step' => 1,
						),
						array (
							'key' => 'field_59ce68d1bd722',
							'label' => 'Intro Text',
							'name' => 'intro_text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'59ce697097fb5' => array (
					'key' => '59ce697097fb5',
					'name' => 'extra_block',
					'label' => 'Extra Block',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59ce817a4e3d8',
							'label' => 'Extra Block',
							'name' => 'extra_block',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'block',
							'button_label' => 'Add Block',
							'sub_fields' => array (
								array (
									'key' => 'field_59ce81844e3d9',
									'label' => 'Panel Width',
									'name' => 'panel_style',
									'type' => 'radio',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'choices' => array (
										'full' => '100%',
										'half' => '50%',
										'third' => '33%',
										'two-thirds' => '66%',
										'quarter' => '25%',
										'two-quarters' => '75%',
									),
									'allow_null' => 0,
									'other_choice' => 0,
									'save_other_choice' => 0,
									'default_value' => '',
									'layout' => 'horizontal',
									'return_format' => 'value',
								),
								array (
									'key' => 'field_59ce81e44e3da',
									'label' => 'BG Type',
									'name' => 'bg_type',
									'type' => 'radio',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'choices' => array (
										'colour' => 'Colour',
										'image' => 'Image',
									),
									'allow_null' => 0,
									'other_choice' => 0,
									'save_other_choice' => 0,
									'default_value' => '',
									'layout' => 'horizontal',
									'return_format' => 'value',
								),
								array (
									'key' => 'field_59ce82014e3db',
									'label' => 'BG Colour',
									'name' => 'bg_colour',
									'type' => 'color_picker',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array (
										array (
											array (
												'field' => 'field_59ce81e44e3da',
												'operator' => '==',
												'value' => 'colour',
											),
										),
									),
									'wrapper' => array (
										'width' => '50',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
								),
								array (
									'key' => 'field_59ce821c4e3dc',
									'label' => 'BG Image',
									'name' => 'bg_image',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array (
										array (
											array (
												'field' => 'field_59ce81e44e3da',
												'operator' => '==',
												'value' => 'image',
											),
										),
									),
									'wrapper' => array (
										'width' => '50',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'url',
									'preview_size' => 'thumbnail',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
								array (
									'key' => 'field_59ce82394e3dd',
									'label' => 'Text Colour',
									'name' => 'text_colour',
									'type' => 'color_picker',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '50',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
								),
								array (
									'key' => 'field_59ce82464e3de',
									'label' => 'Content',
									'name' => 'content',
									'type' => 'wysiwyg',
									'instructions' => 'Can be blank',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'59ce862b47491' => array (
					'key' => '59ce862b47491',
					'name' => 'testimonials',
					'label' => 'Testimonials',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59ce863347492',
							'label' => 'Intro Text',
							'name' => 'intro_text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Add Block',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'case-studies',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;