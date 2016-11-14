<!-- Expandable Row Starts Here -->
<div class="bb-expandable-row-module">

	<!-- Trigger Row -->
	<div class="bb-expandable-trigger-row content-align bber-row-padding">

		<?php if($settings->bber_icon_position == 'top'): ?>
			<!-- Icon at Top -->
			<div><i id="bber-icon" class="bber-icon-size <?php echo $settings->bber_row_icon;?>"></i></div>
		<?php endif ?>
			<div class="bber-title-section">

				<?php if($settings->bber_icon_position == 'left'): ?>
					<!-- Icon at Left -->
					<span><i id="bber-icon" class="bber-icon-size <?php echo $settings->bber_row_icon;?>"></i></span>
				<?php endif ?>

					<span class="bber-title"><?php echo $settings->bber_row_title; ?></span>

				<?php if($settings->bber_icon_position == 'right'): ?>
					<!-- Icon at Right -->
					<span><i id="bber-icon" class="bber-icon-size <?php echo $settings->bber_row_icon;?>"></i></span>
				<?php endif ?>

			</div>
		<?php if($settings->bber_icon_position == 'bottom'): ?>
			<!-- Icon at Bottom -->
			<div><i id="bber-icon" class="bber-icon-size <?php echo $settings->bber_row_icon;?>"></i></div>
		<?php endif ?>
	</div>

	<!-- Content Row -->
	<div class="bb-expandable-toggle-row bber-content-padding">

		<div class="bber-content-section">

			<span class="bber-description">This is toggle row</span>
		</div>
	</div>
</div>
<!-- Expandable Row End Here -->