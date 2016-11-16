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
		return '<img id="bber-img" src="'.$settings->bber_row_image_src.'" width="'.(($settings->bber_row_image_size!="") ? $settings->bber_row_image_size : "32" ).'"  />';
	}
	public function get_video_src($url) {
		$vid_id='';
		if( preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches) ){
				$vid_id = $matches[1];
			}
		return '<iframe class="bber-video-frame" src="https://www.youtube.com/embed/'.$vid_id.'" frameborder="0" width="100%" height="100%" allowfullscreen></iframe>';
	}
}
require_once 'includes/bb_er_helper.php';

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
							'help'	=> __('Alignment of title before click','bb-expandable-row'),
						),
						// after click title alignment
						'bber_ac_title_alignment'	=> array(
							'type'	=> 'select',
							'label'	=> __('After Click Title Alignment','bb-expandable-row'),
							'options'	=> array(
								'default' => __('Default','bb-expandable-row'),
								'left'	=> __('Left','bb-expandable-row'),
								'center'	=> __('Center','bb-expandable-row'),
								'right'	=> __('Right','bb-expandable-row')
								),
							'default' => 'default',
							'help'	=> __('Alignment of title after click','bb-expandable-row'),
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
						'bber_shadow_effect'	=> array(
							'type'	=> 'select',
							'label'	=> __( 'Shadow Effect', 'bb-expandable-row'),
							'options'	=> array(
								'no'	=> __('No','bb-expandable-row'),
								'yes'	=> __('Yes','bb-expandable-row'),
							),
							'default'	=> 'no',
							'help'	=> 'You will observ this effect at bottom of row after click.',
						)
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
						),
					)//fields
				),// Effect section
				'content'	=>	array(
					'title' => __( 'Content', 'bb-expandable-row'),
					'fields'	=> array(
						// content type
						'bber_content_type'	=> array(
							'type'	=>	'select',
							'label'         => __('Type', 'bb-expandable-row'),
							'options'	=> array(
								'content'	=> __('Content', 'bb-expandable-row'),
								'photo'		=> __('Photo', 'bb-expandable-row'),
								'iframe'	=> __('Youtube Video', 'bb-expandable-row'),
								'saved_rows'        => array(
                                	'label'         => __('Saved Rows', 'bb-expandable-row'),
                                	'premium'       => true
                            	),
                            	'saved_modules'     => array(
	                                'label'         => __('Saved Modules', 'bb-expandable-row'),
	                                'premium'       => true
	                            ),
							),
							'default'	=> 'content',
							'toggle'	=> array(
								'content'	=> array(
									'fields'	=> array('bber_desc_align','bber_editor')
								),
								'photo'		=> array(
									'fields'	=> array('bber_desc_align','bber_desc_photo')
								),
								'iframe'	=> array(
									'fields'	=> array('bber_desc_align','bber_desc_video')
								),
								'saved_rows' => array(
									'fields' => array('bber_saved_row')
								),
								'saved_modules' => array(
									'fields' => array('bber_saved_module')
								),
							)
						),
						// content align
						'bber_desc_align'	=> array(
							'type'	=> 'select',
							'label'	=> __('Content Alignment','bb-expandable-row'),
							'options'	=> array(
								'default'	=> __('Default','bb-expandable-row'),
								'left'	=> __('Left','bb-expandable-row'),
								'right'	=> __('Right','bb-expandable-row'),
								'center'	=> __('Center','bb-expandable-row')
							),
							'default'	=> 'default',
						),
						// editor
						'bber_editor' => array(
						    'type'          => 'editor',
						    'media_buttons' => true,
						    'rows'          => 10
						),
						// photo
						'bber_desc_photo'	=> array(
							'type'	=> 'photo',
							'label'	=> __( 'Select Photo', 'bb-expandable-row'),
							'show_remove'	=> true,
						),
						// video
						'bber_desc_video'	=> array(
							'type'	=> 'text',
							'label'	=> __( 'URL','bb-expandable-row'),
							'description'	=> __( 'Copied URL of Video Paste Here','bb-expandable-row')
						),
						'bber_saved_row'	=> array(
							'type'                  => 'select',
                        	'label'                 => __('Select Row', 'bb-expandable-row'),
                        	'options'               => BSFBBERhelper::get_saved_row_template(),
						),
						'bber_saved_module'	=> array(
							'type'                  => 'select',
                        	'label'                 => __('Select Modules', 'bb-expandable-row'),
                        	'options'               => BSFBBERhelper::get_saved_module_template(),
						),
					)//fields
				)// Content section
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
										'sections'	=> array('row-image','after-click-row-image'),
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

				'row-image'	=> array(
					'title'	=> __('Row Image', 'bb-expandable-row'),
					'fields'=> array(
						'bber_row_image' => array(
							'type'	=> 'photo',
							'label'	=> __( 'Select Image','bb-expandable-row'),
							'show_remove'	=> true,
						),
					)
				),// row image background section

				'after-click-row-image'	=> array(
					'title'	=> __('After Click Row Image', 'bb-expandable-row'),
					'fields'=> array(
						'bber_after_click_row_image' => array(
							'type'	=> 'photo',
							'label'	=> __( 'Select Image','bb-expandable-row'),
							'show_remove'	=> true,
						),
					)
				)// row image background section
			)//section
		),// Icon/Image

		'background'	=> array(
			'title'     => __('Background', 'bb-expandable-row'),
			'sections'  => array(
				'row-background'			 => array(
					'title'	=> __('Row Background', 'bb-expandable-row'),
					'fields'  => array(
						'bber_row_bg_type' => array(
							'type'	=> 'select',
							'label'	=> __('Background Type'),
							'options'	=> array(
								'color'	=> __('Color', 'bb-expandable-row'),
								'image'	=> __('Image', 'bb-expandable-row')
							),
							'default'	=> 'color',
							'toggle'	=> array(
								'color'	=> array(
									'fields'	=> array('bber_row_background_color')
								),
								'image'	=> array(
									'fields'	=> array('bber_row_background_image','bber_row_bg_img_repeat','bber_row_bg_img_position','bber_row_bg_img_attachment')
								)
							),
						),
						// background color
						'bber_row_background_color'	=> array(
							'type'		=> 'color',
							'label'		=> __('Background Color', 'bb-expandable-row'),
							'default'	=> 'c1c1c1',
							'show_reset'=> true,
						),
						'bber_row_background_image' => array(
							'type'	=> 'photo',
							'label'	=> __( 'Select Image','bb-expandable-row'),
							'show_remove'	=> true,
						),
						'bber_row_bg_img_repeat'	=> array(
							'type'	=> 'select',
							'label'	=> __('Background Image Repeat','bb-expandable-row'),
							'options'	=> array(
								'no-repeat'	=> __('No Repeat','bb-expandable-row'),
								'repeat'	=> __('Repeat','bb-expandable-row'),
								'repeat-x'	=> __('Repeat-Y','bb-expandable-row'),
								'repeat-y'	=> __('Repeat-X','bb-expandable-row')
							),
							'default'	=> 'no-repeat'
						),
						'bber_row_bg_img_position'	=> array(
							'type'	=> 'select',
							'label'	=> __('Background Image Position','bb-expandable-row'),
							'options'	=> array(
								'0% 0%'	=> __('Left Top','bb-expandable-row'),
								'0% 50%'	=> __('Left Center','bb-expandable-row'),
								'0% 100%'	=> __('Left Bottom','bb-expandable-row'),
								'100% 0%'	=> __('Right Top','bb-expandable-row'),
								'100% 50%'	=> __('Right Center','bb-expandable-row'),
								'100% 100%'	=> __('Right Bottom','bb-expandable-row'),
								'50% 0%'	=> __('Center Top','bb-expandable-row'),
								'50% 50%'	=> __('Center Center','bb-expandable-row'),
								'50% 100%'	=> __('Center Bottom','bb-expandable-row')
							),
							'default'	=> '50% 50%'
						),
						'bber_row_bg_img_attachment'=> array(
							'type'	=> 'select',
							'label'	=> __('Background Attachment','bb-expandable-row'),
							'options'	=> array(
								'fixed'	=> __('Fixed','bb-expandable-row'),
								'scroll'	=> __('Scroll','bb-expandable-row')
							),
							'default'	=> 'scroll'
						),
						// opacity
						/*'bber_background_opacity'     => array(
                        'type'          => 'text',
                        'label'         => __('Opacity', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '',
                        'description'   => '%',
                    	)*/
					)//fields
				),//row background section
				'after-click-row-background' => array(
					'title'	=> __('After Click Row Background', 'bb-expandable-row'),
					'fields'  => array(
						'bber_row_ac_bg_type' => array(
							'type'	=> 'select',
							'label'	=> __('Background Type'),
							'options'	=> array(
								'color'	=> __('Color', 'bb-expandable-row'),
								'image'	=> __('Image', 'bb-expandable-row')
							),
							'default'	=> 'color',
							'toggle'	=> array(
								'color'	=> array(
									'fields'	=> array('bber_after_click_row_background_color')
								),
								'image'	=> array(
									'fields'	=> array('bber_row_ac_background_image','bber_row_ac_bg_img_repeat','bber_row_ac_bg_img_position','bber_row_ac_bg_img_attachment')
								)
							),
						),
						// background color
						'bber_after_click_row_background_color'	=> array(
							'type'		=> 'color',
							'label'		=> __('Background Color', 'bb-expandable-row'),
							'default'	=> 'c1c1c1',
							'show_reset'=> true,
						),
						'bber_row_ac_background_image' => array(
							'type'	=> 'photo',
							'label'	=> __( 'Select Image','bb-expandable-row'),
							'show_remove'	=> true,
						),
						'bber_row_ac_bg_img_repeat'	=> array(
							'type'	=> 'select',
							'label'	=> __('Background Image Repeat','bb-expandable-row'),
							'options'	=> array(
								'no-repeat'	=> __('No Repeat','bb-expandable-row'),
								'repeat'	=> __('Repeat','bb-expandable-row'),
								'repeat-x'	=> __('Repeat-Y','bb-expandable-row'),
								'repeat-y'	=> __('Repeat-X','bb-expandable-row')
							),
							'default'	=> 'no-repeat'
						),
						'bber_row_ac_bg_img_position'	=> array(
							'type'	=> 'select',
							'label'	=> __('Background Image Position','bb-expandable-row'),
							'options'	=> array(
								'0% 0%'	=> __('Left Top','bb-expandable-row'),
								'0% 50%'	=> __('Left Center','bb-expandable-row'),
								'0% 100%'	=> __('Left Bottom','bb-expandable-row'),
								'100% 0%'	=> __('Right Top','bb-expandable-row'),
								'100% 50%'	=> __('Right Center','bb-expandable-row'),
								'100% 100%'	=> __('Right Bottom','bb-expandable-row'),
								'50% 0%'	=> __('Center Top','bb-expandable-row'),
								'50% 50%'	=> __('Center Center','bb-expandable-row'),
								'50% 100%'	=> __('Center Bottom','bb-expandable-row')
							),
							'default'	=> '50% 50%'
						),
						'bber_row_ac_bg_img_attachment'=> array(
							'type'	=> 'select',
							'label'	=> __('Background Attachment','bb-expandable-row'),
							'options'	=> array(
								'fixed'	=> __('Fixed','bb-expandable-row'),
								'scroll'	=> __('Scroll','bb-expandable-row')
							),
							'default'	=> 'scroll'
						),
						// opacity
						/*'bber_after_click_background_opacity'     => array(
                        'type'          => 'text',
                        'label'         => __('Opacity', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '',
                        'description'   => '%',
                    	)*/
					)//fields
				)// after click row background section
			)//section
		),// background

		'typography'	=> array(
			'title'     => __('Typography', 'bb-expandable-row'),
			'sections'  => array(
				'title_tyopgraphy'	=> array(
					'title'	=> __('Typography', 'bb-expandable-row'),
					'fields'	=> array(
						// font typography
						'bber_font'	=> array(
							'type'	=> 'font',
							'label'	=>	__('Typography','bb-expandable-row'),
							'default'       => array(
                            	'family'        => 'Defaults',
                            	'weight'        => 'Defaults'
							),
							'preview'       => array(
                            	'type'          => 'font',
                            	'selector'      => '.bb-expandable-trigger-row'  
                        	)
						),
						// Font Size
                        'bber_font_size'     => array(
	                        'type'          => 'text',
	                        'label'         => __('Font Size', 'bb-expandable-row'),
	                        'placeholder'   => '18',
	                        'maxlength'     => '3',
	                        'size'          => '5',
                        	'description'   => 'px',
                    	),
                    	// Line Height
                    	'bber_line_height'     => array(
	                        'type'          => 'text',
	                        'label'         => __('Line Height', 'bb-expandable-row'),
	                        'placeholder'   => '22',
	                        'maxlength'     => '3',
	                        'size'          => '5',
	                        'description'   => 'px',
                    	),
					)//fields
				)//title typography
			)//section
		),// typography

		'padding'		=> array(
			'title'     => __('Padding', 'bb-expandable-row'),
			'sections'  => array(
				'title_padding'  => array(
					'title'		=> __('Row Padding', 'bb-expandable-row'),
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
				'after_click_title_padding'  => array(
					'title'		=> __('After Click Row Padding', 'bb-expandable-row'),
					'fields'	=> array(
						// padding top
						'bber_ac_title_padding_top'     => array(
                        'type'          => 'text',
                        'label'         => __('Top', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '20',
                        'description'   => 'px',
                    	),
                    	// padding bottom
						'bber_ac_title_padding_bottom'     => array(
                        'type'          => 'text',
                        'label'         => __('Bottom', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '20',
                        'description'   => 'px',
                    	),
                    	// padding left
						'bber_ac_title_padding_left'     => array(
                        'type'          => 'text',
                        'label'         => __('Left', 'bb-expandable-row'),
                        'maxlength'     => '3',
                        'size'          => '3',
                        'placeholder'   => '20',
                        'description'   => 'px',
                    	),
                    	// padding right
						'bber_ac_title_padding_right'     => array(
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
