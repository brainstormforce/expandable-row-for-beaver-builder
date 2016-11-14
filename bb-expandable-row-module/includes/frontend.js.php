jQuery(document).ready(function(){
	jQuery(".fl-node-<?php echo $id;?> .bb-expandable-trigger-row").click(function(){

		jQuery(".bb-expandable-trigger-row").toggleClass("bber-clicked");

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
		jQuery("#bber-icon").toggleClass("<?php echo $settings->bber_row_icon; ?> <?php echo $settings->bber_after_click_row_icon; ?>");


	});// trigger/click
}); // document.ready
