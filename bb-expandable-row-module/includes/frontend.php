<!-- Expandable Row Starts Here -->
<div class="bb-expandable-row-module">

	<!-- Trigger Row -->
	<div class="bb-expandable-trigger-row content-align bber-row-padding">

		<?php if( $settings->bber_image_type == 'icon' && $settings->bber_icon_position == 'top'): ?>
			<!-- Icon at Top -->
			<div><?php echo BSFBBExpandableRow::render_icon($settings->bber_row_icon); ?></div>
		<?php elseif ( $settings->bber_image_type == 'image' && $settings->bber_image_position == 'top'): ?>
			<!-- Image at Top -->
			<div><?php echo BSFBBExpandableRow::render_image($settings); ?></div>
		<?php endif ?>

			<div class="bber-title-section">

				<?php if( $settings->bber_image_type == 'icon' && $settings->bber_icon_position == 'left'): ?>
					<!-- Icon at Left -->
					<span><?php echo BSFBBExpandableRow::render_icon($settings->bber_row_icon); ?></span>
				<?php elseif ( $settings->bber_image_type == 'image' && $settings->bber_image_position == 'left'): ?>
					<!-- Image at Left -->
					<span><?php echo BSFBBExpandableRow::render_image($settings); ?></span>
				<?php endif ?>

					<span class="bber-title"><?php echo $settings->bber_row_title; ?></span>

				<?php if( $settings->bber_image_type == 'icon' && $settings->bber_icon_position == 'right'): ?>
					<!-- Icon at Right -->
					<span><?php echo BSFBBExpandableRow::render_icon($settings->bber_row_icon); ?></span>
				<?php elseif ( $settings->bber_image_type == 'image' && $settings->bber_image_position == 'right'): ?>
					<!-- Image at Right -->
					<sapn><?php echo BSFBBExpandableRow::render_image($settings); ?></span>
				<?php endif ?>

			</div>
			
		<?php if( $settings->bber_image_type == 'icon' && $settings->bber_icon_position == 'bottom'): ?>
			<!-- Icon at Bottom -->
			<div><?php echo BSFBBExpandableRow::render_icon($settings->bber_row_icon); ?></div>
		<?php elseif ( $settings->bber_image_type == 'image' && $settings->bber_image_position == 'bottom'): ?>
			<!-- Image at Bottom -->
			<div><?php echo BSFBBExpandableRow::render_image($settings); ?></div>
		<?php endif ?>
	</div>

	<!-- Content Row -->
	<div class="bb-expandable-toggle-row bber-content-padding">

		<div class="bber-content-section">

			<?php if($settings->bber_content_type == 'content'): ?>
			<!-- content description -->
				<div class="bber-description">
					<?php echo $settings->bber_editor; ?>
				</div>
			<?php endif ?>

			<?php if($settings->bber_content_type == 'photo'): ?>
			<!-- content image -->
				<div class="bber-image">
					<?php if( isset($settings->bber_desc_photo_src) ): ?>
						<img src="<?php echo $settings->bber_desc_photo_src; ?>">
					<?php endif ?>
				</div>
			<?php endif ?>

			<?php if($settings->bber_content_type == 'iframe'): ?>
			<!-- content video -->
				<div class="bber-video">
					<?php echo BSFBBExpandableRow::get_video_src($settings->bber_desc_video); ?>
				</div>
			<?php endif ?>

			<?php if($settings->bber_content_type == 'saved_rows'): ?>
			<!-- saved row -->
				<div class="bber-saved-row">
					<?php echo do_shortcode('[fl_builder_insert_layout id="'.$settings->bber_saved_row.'"]'); ?>
				</div>
			<?php endif ?>

			<?php if($settings->bber_content_type == 'saved_modules'): ?>
			<!-- saved module -->
				<div class="bber-saved-module">
					<?php echo do_shortcode('[fl_builder_insert_layout id="'.$settings->bber_saved_module.'"]'); ?>
				</div>
			<?php endif ?>

		</div>
	</div>
	<!-- Content Row End Here -->
</div>
<!-- Expandable Row End Here -->