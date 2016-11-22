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
	<div class="bb-expandable-toggle-row bber-content-padding bber-shrinked">

			<div class="bber-content-section">

			<div class="bber-<?php echo $settings->bber_content_type; ?>">

				<?php BSFBBExpandableRow::get_content($settings); ?>
					
			</div>
		</div>
	</div>
	<!-- Content Row End Here -->
</div>
<!-- Expandable Row End Here -->