<?php

class BSFBBExpandableRow extends FLBuilderModule {
	public function __construct() 
	{
		parent::__construct( array(
				'name'          => __('BB Expandable Row', 'bb-expandable-row'),
				'description'   => __('Expandable Row Module for Beaver Builder', 'bb-expandable-row'),
				'category'		=> __('Advanced Modules', 'bb-expandable-row'),
				'dir'           => BB_EXPAND_ROW_DIR . 'bb-expandable-row-module/',
	            'url'           => BB_EXPAND_ROW_URL . 'bb-expandable-row-module/',
			) );
	}
	public function render_icon($icon) {
		return '<i id="bber-icon" class="bber-icon-size '.$icon.'"></i>';
	}
	public function render_image($settings) {
		return '<img src="'.$settings->bber_row_image_src.'" width="'.(($settings->bber_row_image_size!="") ? $settings->bber_row_image_size : "32" ).'"  />';
	}
}

FLBuilder::register_module( 'BSFBBExpandableRow', array(
		'general'		=> array(
			'title'     => __('General', 'bb-expandable-row'),
			'sections'  =>  array(
				'titles'	=>	array(
					'title' 	=> __( 'Titles', 'bb-expandable-row'),
					'fields'	=> array(
						// row title
						'bber_row_title'	=> array(
							'type'	=> 'text',
							'label'         => __('Row Title', 'bb-expandable-row'),
							'maxlength'     => '',
                    		'size'          => '',
                    		'placeholder'   => '',
						),
						// after click row title
						'bber_after_click_row_title'	=> array(
							'type'	=> 'text',
							'label'         => __('After Click Row Title', 'bb-expandable-row'),
							'maxlength'     => '',
                    		'size'          => '',
                    		'placeholder'   => '',
						),
						// title alignment
						'bber_title_alignment'	=> array(
							'type'	=> 'select',
							'label'	=> __('Title Alignment','bb-expandable-row'),
							'options'	=> array(
								'default' => __('Default','bb-expandable-row'),
								'left'	=> __('Left','bb-expandable-row'),
								'center'	=> __('Center','bb-expandable-row'),
								'right'	=> __('Right','bb-expandable-row')
								),
							'default' => 'default',
							'help'	=> 'Overall alignment of both titles',
						),
						// border radius
						'bber_border_radius'	=> array(
							'type'	=> 'text',
							'label'         => __('Border Radius', 'bb-expandable-row'),
							'maxlength'     => '3',
                    		'size'          => '3',
                    		'placeholder'   => '4',
                    		'description'	=> __('px','bb-expandable-row')
						),
					)//fields
				),// Title section
				'effect'	=>	array(
					'title' => __( 'Effect', 'bb-expandable-row'),
					'fields'	=> array(
						// effect
						'bber_row_effect'	=> array(
							'type'	=>	'select',
							'label'         => __('Effect', 'bb-expandable-row'),
							'options'		=> array(
							'slide'	=> __('Slide', 'bb-expandable-row'),
							'fade'	=> __('Fade', 'bb-expandable-row'),
							),
							'default'	=> 'slide',
							'help'	=> __('Appearing Effect of the Row', 'bb-expandable-row'),
							'description' => __('<br/>After changing it requires Page Refresh to observ effect.','bb-expandable-row')
						),
					)//fields
				),// Effect section
				'content'	=>	array(
					'title' => __( 'Content', 'bb-expandable-row'),
					'fields'	=> array(
						'bber_content_type'	=> array(
							'type'	=>	'select',
							'label'         => __('Type', 'bb-expandable-row'),
							'options'	=> array(
								'content'	=> __('Content', 'bb-expandable-row'),
								'photo'		=> __('Photo', 'bb-expandable-row'),
								'youtube'	=> __('Youtube Video', 'bb-expandable-row'),

							),
							'default'	=> 'content',
						),
					)//fields
				)// Content section
			/*	'content'	=>	array(
					'title' => __( 'Padding', 'bb-expandable-row'),
					'fields'	=> array()//fields
				)// Padding section 	*/ // may be required in future
			)// section
		),// general

		'icon-image'	=> array(
			'title'     => __('Icon/Image', 'bb-expandable-row'),
			'sections'  => array(
				'image-icon'	=>	array(
					'title'	 => __('Icon/Image', 'bb-expandable-row'),
					'fields' => array(
						'bber_image_type'	=> array(
						'type'          => 'select',
						'label'         => __('Image Type', 'bb-expandable-row'),
						'options'		=> array(
							'none'	=> __('None', 'bb-expandable-row'),
							'icon'	=> __('Icon', 'bb-expandable-row'),
							'image'	=> __('Image', 'bb-expandable-row'),
							),
						'default'	=> 'none',
						'toggle'	=> array(
								'icon'	=> array(
										'sections'	=> array('row-icon','after-click-row-icon'),
										'fields'	=> array('bber_icon_position','bber_row_icon_size')
									),
								'image' => array(
										'sections'	=> array('row-background-image'),
										'fields'	=> array('bber_image_position','bber_row_image_size')
									)
							),
						),// image type
						// position
						'bber_icon_position'=> array(
							'type'	=> 'select',
							'label' => __('Icon Position', 'bb-expandable-row'),
							'options'		=> array(
							'top'	=> __('Top', 'bb-expandable-row'),
							'bottom'	=> __('Bottom', 'bb-expandable-row'),
							'left'	=> __('Left', 'bb-expandable-row'),
							'right'	=> __('Right', 'bb-expandable-row')
							),
							'default'	=> 'left',
						),
						// size
						'bber_row_icon_size'	=> array(
							'type'          => 'text',
		                    'label'         => __('Icon Size', 'bb-expandable-row'),
		                    'maxlength'     => '',
		                    'size'          => '',
		                    'placeholder'   => '32',
		                    'description'   => 'px',
						),// position
						'bber_row_image' => array(
							'type'	=> 'photo',
							'label'	=> __( 'Select Image','bb-expandable-row'),
							'show_remove'	=> true,
						),
						'bber_image_position'=> array(
							'type'	=> 'select',
							'label' => __('Image Position', 'bb-expandable-row'),
							'options'		=> array(
							'top'	=> __('Top', 'bb-expandable-row'),
							'bottom'	=> __('Bottom', 'bb-expandable-row'),
							'left'	=> __('Left', 'bb-expandable-row'),
							'right'	=> __('Right', 'bb-expandable-row')
							),
							'default'	=> 'left',
						),
						// size
						'bber_row_image_size'	=> array(
							'type'          => 'text',
		                    'label'         => __('Image Size', 'bb-expandable-row'),
		                    'maxlength'     => '',
		                    'size'          => '',
		                    'placeholder'   => '32',
		                    'description'   => 'px',
						)
					)// fields
				),//image icon section

				'row-icon'				=> array(
					'title'	 => __('Row Icon', 'bb-expandable-row'),
					'fields' => array(
						// icon
						'bber_row_icon'	=> array(
							'type'		 => 'icon',
							'label'      => __('Row Icon', 'bb-expandable-row'),
							'show_remove'=> true,
						),
						// icon color
						'bber_row_icon_color'	=> array(
							'type'		=> 'color',
							'label'		=> __('Icon Color', 'bb-expandable-row'),
							'show_reset'=> true,
						),
						// hover icon color
						'bber_row_icon_hover_color'	=> array(
							'type'		=> 'color',
							'label'		=> __('Icon Hover Color', 'bb-expandable-row'),
							'show_reset'=> true,
						)
					)
				),// row icon section

				'after-click-row-icon'	=> array(
					'title'	 => __('After Click Row Icon', 'bb-expandable-row'),
					'fields' => array(
						// icon
						'bber_after_click_row_icon'	=> array(
							'type'		 => 'icon',
							'label'      => __('After Click Row Icon', 'bb-expandable-row'),
							'show_remove'=> true,
						),
						// icon color
						'bber_after_click_row_icon_color'	=> array(
							'type'		=> 'color',
							'label'		=> __('Icon Color', 'bb-expandable-row'),
							'show_reset'=> true,
							'description'	=> __('<br/><br/><br/>If not set it inherit color of Row Icon.','bb-expandable-row'),
							'help'		=>	__( 'Color of Icon After Click on Row (Optional)','bb-expandable-row'),
						),

						// hover icon color
						'bber_after_click_row_icon_hover_color'	=> array(
							'type'		=> 'color',
							'label'		=> __('Icon Hover Color', 'bb-expandable-row'),
							'show_reset'=> true,
							'description'	=> __('<br/><br/><br/>If not set it inherit hover color of Row Icon.','bb-expandable-row'),
							'help'		=>	__( 'Hover Color of Icon After Click on Row (Optional)','bb-expandable-row'),
						)
					)
				),// after click row icon section

				'row-background-image'	=> array(
					'title'	=> __('Row Background Image', 'bb-expandable-row'),
					'fields'=> array()
				)// row image background section
			)//section
		),// Icon/Image

		'background'	=> array(
			'title'     => __('Background', 'bb-expandable-row'),
			'sections'  => array(
				'row-background'			 => array(
					'title'	=> __('Row Background', 'bb-expandable-row'),
					'fields'  => array(
						// background color
						'bber_row_background_color'	=> array(
							'type'		=> 'color',
							'label'		=> __('Background Color', 'bb-expandable-row'),
							'show_reset'=> true,
						),
						// opacity
						'bber_background_opacity'     => array(
                        'type'          => 'text',
                        'label'         => __('Opacity', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '',
                        'description'   => '%',
                    	)
					)//fields
				),//row background section
				'after-click-row-background' => array(
					'title'	=> __('After Click Row Background', 'bb-expandable-row'),
					'fields'  => array(
						// background color
						'bber_after_click_row_background_color'	=> array(
							'type'		=> 'color',
							'label'		=> __('Background Color', 'bb-expandable-row'),
							'show_reset'=> true,
						),
						// opacity
						'bber_after_click_background_opacity'     => array(
                        'type'          => 'text',
                        'label'         => __('Opacity', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '',
                        'description'   => '%',
                    	)
					)//fields
				)// after click row background section
			)//section
		),// background

		'typography'	=> array(
			'title'     => __('Typography', 'bb-expandable-row'),
			'sections'  => array()//section
		),// typography

		'padding'		=> array(
			'title'     => __('Padding', 'bb-expandable-row'),
			'sections'  => array(
				'title_padding'  => array(
					'title'		=> __('Title Padding', 'bb-expandable-row'),
					'fields'	=> array(
						// padding top
						'bber_title_padding_top'     => array(
                        'type'          => 'text',
                        'label'         => __('Top', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '20',
                        'description'   => 'px',
                    	),
                    	// padding bottom
						'bber_title_padding_bottom'     => array(
                        'type'          => 'text',
                        'label'         => __('Bottom', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '20',
                        'description'   => 'px',
                    	),
                    	// padding left
						'bber_title_padding_left'     => array(
                        'type'          => 'text',
                        'label'         => __('Left', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '20',
                        'description'   => 'px',
                    	),
                    	// padding right
						'bber_title_padding_right'     => array(
                        'type'          => 'text',
                        'label'         => __('Right', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '20',
                        'description'   => 'px',
                    	),
					)// fields
				),// title padding section
				'content_padding'  => array(
					'title'		=> __('Content Padding', 'bb-expandable-row'),
					'fields'	=> array(
						// padding top
						'bber_content_padding_top'     => array(
                        'type'          => 'text',
                        'label'         => __('Top', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '20',
                        'description'   => 'px',
                    	),
                    	// padding bottom
						'bber_content_padding_bottom'     => array(
                        'type'          => 'text',
                        'label'         => __('Bottom', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '20',
                        'description'   => 'px',
                    	),
                    	// padding left
						'bber_content_padding_left'     => array(
                        'type'          => 'text',
                        'label'         => __('Left', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '20',
                        'description'   => 'px',
                    	),
                    	// padding right
						'bber_content_padding_right'     => array(
                        'type'          => 'text',
                        'label'         => __('Right', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '20',
                        'description'   => 'px',
                    	),
					)// fields
				)// title padding section
			)//section
		)// padding

	) // main array
); // register module