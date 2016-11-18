/* title alignment */
<?php if ($settings->bber_title_alignment != 'default'): ?>
    .fl-node-<?php echo $id; ?> .content-align{
    text-align: <?php echo $settings->bber_title_alignment; ?>;
    }
<?php endif ?>

/* title padding */
.fl-node-<?php echo $id; ?>.bber-row-padding {
padding-top:<?php echo ($settings->bber_title_padding_top != '') ? $settings->bber_title_padding_top : '20' ?>px;
padding-bottom:<?php echo ($settings->bber_title_padding_bottom != '') ? $settings->bber_title_padding_bottom : '20' ?>px;
padding-left:<?php echo ($settings->bber_title_padding_left != '') ? $settings->bber_title_padding_left : '20' ?>px;
padding-right:<?php echo ($settings->bber_title_padding_right != '') ? $settings->bber_title_padding_right : '20' ?>px;
}

/* after click title padding */
.fl-node-<?php echo $id; ?>.bber-row-padding.bber-clicked {
padding-top:<?php echo ($settings->bber_ac_title_padding_top != '') ? $settings->bber_ac_title_padding_top : '20' ?>px;
padding-bottom:<?php echo ($settings->bber_ac_title_padding_bottom != '') ? $settings->bber_ac_title_padding_bottom : '20' ?>px;
padding-left:<?php echo ($settings->bber_ac_title_padding_left != '') ? $settings->bber_ac_title_padding_left : '20' ?>px;
padding-right:<?php echo ($settings->bber_ac_title_padding_right != '') ? $settings->bber_ac_title_padding_right : '20' ?>px;
}

/* content padding */
.fl-node-<?php echo $id; ?>.bber-content-padding {
padding-top:<?php echo ($settings->bber_content_padding_top != '') ? $settings->bber_content_padding_top : '20' ?>px;
padding-bottom:<?php echo ($settings->bber_content_padding_bottom != '') ? $settings->bber_content_padding_bottom : '20' ?>px;
padding-left:<?php echo ($settings->bber_content_padding_left != '') ? $settings->bber_content_padding_left : '20' ?>px;
padding-right:<?php echo ($settings->bber_content_padding_right != '') ? $settings->bber_content_padding_right : '20' ?>px;
}

/* Icon Size */
.fl-node-<?php echo $id; ?>.bber-icon-size {
font-size:<?php echo ($settings->bber_row_icon_size != '') ? $settings->bber_row_icon_size : '32' ?>px;
}

/* Row Icon Color */
.fl-node-<?php echo $id; ?>.content-align #bber-icon {
color:<?php echo ($settings->bber_row_icon_color != '') ? '#' . $settings->bber_row_icon_color : 'inherit' ?>;
}

/* Row Icon Hover Color */
.fl-node-<?php echo $id; ?>.content-align:hover #bber-icon {
color:<?php echo ($settings->bber_row_icon_hover_color != '') ? '#' . $settings->bber_row_icon_hover_color : 'inherit' ?>;
}

/* After Click Row Icon Color */
.fl-node-<?php echo $id; ?>.bber-clicked #bber-icon {
color:<?php echo ($settings->bber_after_click_row_icon_color != '') ? '#' . $settings->bber_after_click_row_icon_color : 'inherit' ?>;
}

/* After Click Row Icon Hover Color */
.fl-node-<?php echo $id; ?>.bber-clicked:hover #bber-icon {
color:<?php echo ($settings->bber_after_click_row_icon_hover_color != '') ? '#' . $settings->bber_after_click_row_icon_hover_color : 'inherit' ?>;
}

/* Title Row Background Color */
.fl-node-<?php echo $id; ?>.bb-expandable-trigger-row {

<?php if ($settings->bber_row_bg_type == 'color'): ?>
    background-color: <?php echo BSFBBERhelper::toRBGA($settings->bber_row_background_color, $settings->bber_background_opacity); ?>;
<?php elseif ($settings->bber_row_bg_type == 'image'): ?>
    background-image: url("<?php echo $settings->bber_row_background_image_src; ?>");
    background-repeat: <?php echo $settings->bber_row_bg_img_repeat; ?>;
    background-position: <?php echo $settings->bber_row_bg_img_position; ?>;
    background-attachment: <?php echo $settings->bber_row_bg_img_attachment; ?>;
<?php endif ?>

border-radius:<?php echo ($settings->bber_border_radius != '') ? $settings->bber_border_radius : '4' ?>px;
}

/* Title Row Background Color */
.fl-node-<?php echo $id; ?>.bber-clicked {
<?php if ($settings->bber_row_bg_type == 'color'): ?>
    background-color: <?php echo BSFBBERhelper::toRBGA($settings->bber_after_click_row_background_color, $settings->bber_after_click_background_opacity); ?>;
<?php endif ?>
<?php if ($settings->bber_shadow_effect == 'yes'): ?>
    position: relative;
    -webkit-box-shadow: 0 8px 10px -8px black;
    -moz-box-shadow: 0 8px 10px -8px black;
    box-shadow: 0 8px 10px -8px black;
<?php endif ?>
}
/* Border Radius After Expand */
.fl-node-<?php echo $id; ?>.bb-expandable-trigger-row.bber-clicked {
color:<?php echo ($settings->bber_typo_ac_title_color != '') ? '#' . $settings->bber_typo_ac_title_color : 'inherit' ?>;
<?php $bradius = ($settings->bber_border_radius != '') ? $settings->bber_border_radius : '4'; ?>
-webkit-border-radius:<?php echo $bradius; ?>px<?php echo $bradius; ?>px 0px 0px;
-moz-border-radius:<?php echo $bradius; ?>px<?php echo $bradius; ?>px 0px 0px;
-ms-border-radius:<?php echo $bradius; ?>px<?php echo $bradius; ?>px 0px 0px;
-o-border-radius:<?php echo $bradius; ?>px<?php echo $bradius; ?>px 0px 0px;
border-radius:<?php echo $bradius; ?>px<?php echo $bradius; ?>px 0px 0px;
}
.fl-node-<?php echo $id; ?>.bb-expandable-toggle-row.bber-expanded {
-webkit-border-radius: 0px 0px<?php echo $bradius; ?>px<?php echo $bradius; ?>px;
-moz-border-radius: 0px 0px<?php echo $bradius; ?>px<?php echo $bradius; ?>px;
-ms-border-radius: 0px 0px<?php echo $bradius; ?>px<?php echo $bradius; ?>px;
-o-border-radius: 0px 0px<?php echo $bradius; ?>px<?php echo $bradius; ?>px;
border-radius: 0px 0px<?php echo $bradius; ?>px<?php echo $bradius; ?>px;
}

/* Typography */
.fl-node-<?php echo $id; ?>.bb-expandable-trigger-row {
font-family:"<?php echo $settings->bber_font['family']; ?>";
font-weight:<?php echo ($settings->bber_font['weight'] != 'regular') ? $settings->bber_font['weight'] : '500'; ?>;
font-size:<?php echo ($settings->bber_font_size != '') ? $settings->bber_font_size : '18'; ?>px;
line-height:<?php echo ($settings->bber_line_height != '') ? $settings->bber_line_height : '22'; ?>px;
color:#<?php echo ($settings->bber_typo_title_color != '') ? $settings->bber_typo_title_color : '000' ?>;
}

/* Content Description */
<?php if ($settings->bber_desc_align != 'default'): ?>
    .fl-node-<?php echo $id; ?> .bber-content-section {
    text-align: <?php echo $settings->bber_desc_align; ?>;
    }
<?php endif ?>

<?php if ($settings->bber_content_type == 'content'): ?>
    .fl-node-<?php echo $id; ?> .bber-content {
    color: <?php echo ($settings->bber_typo_content_color != '') ? '#' . $settings->bber_typo_content_color : 'inherit' ?>;
    }
<?php endif ?>

/* Content background */
.fl-node-<?php echo $id; ?>.bb-expandable-toggle-row {
<?php if ($settings->bber_content_row_type == 'color'): ?>
    background-color: <?php echo BSFBBERhelper::toRBGA($settings->bber_content_row_color, $settings->bber_content_row_opacity); ?>;
<?php elseif ($settings->bber_content_row_type == 'image'): ?>
    background-image: url("<?php echo $settings->bber_content_row_photo_src; ?>");
    background-repeat: <?php echo $settings->bber_content_row_img_repeat; ?>;
    background-position: <?php echo $settings->bber_content_row_img_position; ?>;
    background-attachment: <?php echo $settings->bber_content_row_img_attachment; ?>;
<?php endif ?>
}

/* Hover Color */
.fl-node-<?php echo $id; ?>.bb-expandable-trigger-row:hover {
color: #<?php echo $settings->bber_typo_title_hover_color; ?>;
<?php if ($settings->bber_row_bg_type == 'color'): ?>
    background-color: <?php echo BSFBBERhelper::toRBGA($settings->bber_row_background_hover_color, $settings->bber_background_hover_opacity); ?>;
<?php endif ?>
}

.fl-node-<?php echo $id; ?>.bb-expandable-trigger-row.bber-clicked:hover {
color: #<?php echo $settings->bber_typo_ac_title_hover_color; ?>;
<?php if ($settings->bber_row_bg_type == 'color'): ?>
    background-color: <?php echo BSFBBERhelper::toRBGA($settings->bber_ac_row_background_hover_color, $settings->bber_ac_background_hover_opacity); ?>;
<?php endif ?>
}