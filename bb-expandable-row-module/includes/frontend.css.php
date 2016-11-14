<?php if($settings->bber_title_alignment != 'default'): ?>
.fl-node-<?php echo $id; ?> .content-align{
    text-align: <?php echo $settings->bber_title_alignment; ?>;
}
<?php endif ?>

/* title padding */
.fl-node-<?php echo $id; ?> .bber-row-padding {
	padding-top:<?php echo ($settings->bber_title_padding_top != '') ? $settings->bber_title_padding_top : '20' ?>px;
	padding-bottom:<?php echo ($settings->bber_title_padding_bottom != '') ? $settings->bber_title_padding_bottom : '20' ?>px;
	padding-left:<?php echo ($settings->bber_title_padding_left != '') ? $settings->bber_title_padding_left : '20' ?>px;
	padding-right:<?php echo ($settings->bber_title_padding_right != '') ? $settings->bber_title_padding_right : '20' ?>px;
}

/* content padding */
.fl-node-<?php echo $id; ?> .bber-content-padding {
	padding-top:<?php echo ($settings->bber_content_padding_top != '') ? $settings->bber_content_padding_top : '20' ?>px;
	padding-bottom:<?php echo ($settings->bber_content_padding_bottom != '') ? $settings->bber_content_padding_bottom : '20' ?>px;
	padding-left:<?php echo ($settings->bber_content_padding_left != '') ? $settings->bber_content_padding_left : '20' ?>px;
	padding-right:<?php echo ($settings->bber_content_padding_right != '') ? $settings->bber_content_padding_right : '20' ?>px;	
}

/* Icon Size */
.fl-node-<?php echo $id; ?> .bber-icon-size {
	font-size:<?php echo ($settings->bber_row_icon_size != '') ? $settings->bber_row_icon_size : '32' ?>px;
}

/* Row Icon Color */
.fl-node-<?php echo $id; ?> .content-align #bber-icon {
	color:#<?php echo ($settings->bber_row_icon_color != '') ? $settings->bber_row_icon_color : 'inherit' ?>;
}

/* Row Icon Hover Color */
.fl-node-<?php echo $id; ?> .content-align:hover #bber-icon {
	color:#<?php echo ($settings->bber_row_icon_hover_color != '') ? $settings->bber_row_icon_hover_color : 'inherit' ?>;
}

/* After Click Row Icon Color */
.fl-node-<?php echo $id; ?> .bber-clicked #bber-icon {
	color:#<?php echo ($settings->bber_after_click_row_icon_color != '') ? $settings->bber_after_click_row_icon_color : 'inherit' ?>;
}

/* After Click Row Icon Hover Color */
.fl-node-<?php echo $id; ?> .bber-clicked:hover #bber-icon {
	color:#<?php echo ($settings->bber_after_click_row_icon_hover_color != '') ? $settings->bber_after_click_row_icon_hover_color : 'inherit' ?>;
}

/* Title Row Background Color */
.fl-node-<?php echo $id; ?> .bb-expandable-trigger-row {
	background-color:#<?php echo ($settings->bber_row_background_color != '') ? $settings->bber_row_background_color : 'inherit' ?>;
}

/* Title Row Background Color */
.fl-node-<?php echo $id; ?> .bber-clicked {
	background-color:#<?php echo ($settings->bber_after_click_row_background_color != '') ? $settings->bber_after_click_row_background_color : 'inherit' ?>;
}