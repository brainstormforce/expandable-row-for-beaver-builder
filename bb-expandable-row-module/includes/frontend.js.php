jQuery(document).ready(function(){
	jQuery(".fl-node-<?php echo $id;?> .bb-expandable-trigger-row").click(function(){

		// toggle class
		jQuery(".fl-node-<?php echo $id;?> .bb-expandable-trigger-row").toggleClass("bber-clicked");
		jQuery(".fl-node-<?php echo $id;?> .bb-expandable-toggle-row").toggleClass("bber-expanded");

		// appearing effect
		<?php if( $settings->bber_row_effect == 'slide' ): ?>
			jQuery(".fl-node-<?php echo $id;?> .bb-expandable-toggle-row").slideToggle();
		<?php endif ?>
		<?php if( $settings->bber_row_effect == 'fade' ): ?>
			jQuery(".fl-node-<?php echo $id;?> .bb-expandable-toggle-row").fadeToggle();
		<?php endif ?>

		// toggle row title
		if(jQuery(".fl-node-<?php echo $id;?> .bber-title").text() == "<?php echo $settings->bber_row_title;?>")
			jQuery(".fl-node-<?php echo $id;?> .bber-title").text("<?php echo $settings->bber_after_click_row_title; ?>");
		else
			jQuery(".fl-node-<?php echo $id;?> .bber-title").text("<?php echo $settings->bber_row_title; ?>");

		// toggle row icon
		<?php if($settings->bber_image_type == 'icon'): ?>
			jQuery(".fl-node-<?php echo $id;?> #bber-icon").toggleClass("<?php echo $settings->bber_row_icon; ?> <?php echo $settings->bber_after_click_row_icon; ?>");
		<?php endif?>

		// toggle row image
		<?php if($settings->bber_image_type == 'image'): ?>
			var bber_src = (jQuery(".fl-node-<?php echo $id;?> #bber-img").attr("src") == "<?php echo $settings->bber_row_image_src; ?>")  ? '<?php echo $settings->bber_after_click_row_image_src; ?>' : '<?php echo $settings->bber_row_image_src; ?>' ;
			jQuery(".fl-node-<?php echo $id;?> #bber-img").attr("src",bber_src);
		<?php endif?>

		// toggle row backgrounds
		<?php if( $settings->bber_row_bg_type == 'image' ):?>
		
			// toggle background image
			var bber_bg_src = ( (jQuery(".fl-node-<?php echo $id;?> .bb-expandable-trigger-row").css("background-image") == 'url("<?php echo $settings->bber_row_background_image_src;?>")' ) ? "url('<?php echo $settings->bber_row_ac_background_image_src;?>')" : "url('<?php echo $settings->bber_row_background_image_src;?>')" );
			jQuery(".fl-node-<?php echo $id;?> .bb-expandable-trigger-row").css({"background-image":bber_bg_src });

			// toggle background repeat
			var bber_bg_repeat =  ( jQuery(".fl-node-<?php echo $id;?> .bb-expandable-trigger-row").css("background-repeat") == '<?php echo $settings->bber_row_bg_img_repeat;?>' )? '<?php echo $settings->bber_row_ac_bg_img_repeat;?>' : '<?php echo $settings->bber_row_bg_img_repeat;?>' ;
			jQuery(".fl-node-<?php echo $id;?> .bb-expandable-trigger-row").css({"background-repeat":bber_bg_repeat });

			// toggle background position
			var bber_bg_pos = ( jQuery(".fl-node-<?php echo $id;?> .bb-expandable-trigger-row").css("background-position") == '<?php echo $settings->bber_row_bg_img_position;?>' )? '<?php echo $settings->bber_row_ac_bg_img_position;?>' : '<?php echo $settings->bber_row_bg_img_position;?>' ;
			jQuery(".fl-node-<?php echo $id;?> .bb-expandable-trigger-row").css({"background-position":bber_bg_pos });

			// toggle background attachment
			var bber_bg_attach = ( jQuery(".fl-node-<?php echo $id;?> .bb-expandable-trigger-row").css("background-attachment") == '<?php echo $settings->bber_row_bg_img_attachment;?>' )? '<?php echo $settings->bber_row_ac_bg_img_attachment;?>' : '<?php echo $settings->bber_row_bg_img_attachment;?>' ;
			jQuery(".fl-node-<?php echo $id;?> .bb-expandable-trigger-row").css({"background-attachment":bber_bg_attach });
		
		<?php endif ?>

	});// trigger/click
}); // document.ready
