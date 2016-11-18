<?php

if (!class_exists('BSFBBERhelper')) {

    class BSFBBERhelper
    {
        /* function return list of saved page templets
         * since 1.0
         */
        static public function get_saved_page_template()
        {
            if (FLBuilderModel::node_templates_enabled()) {

                $page_templates = BSFBBERhelper::get_post_template('layout');
                $node_template = FLBuilderModel::is_post_node_template();

                $options = array();

                if (count($page_templates)) {
                    foreach ($page_templates as $page_template) {
                        $options[$page_template['id']] = $page_template['name'];
                    }
                } else {
                    $options['no_template'] = "It seems that, you have not saved any template yet.";
                }
                return $options;
            }
        }

        /* function return list of saved row templets
         * since 1.0
         */
        static public function get_saved_row_template()
        {
            if (FLBuilderModel::node_templates_enabled()) {
                $saved_rows = BSFBBERhelper::get_post_template('row');
                $node_template = FLBuilderModel::is_post_node_template();

                $options = array();
                if (count($saved_rows)) {
                    foreach ($saved_rows as $saved_row) {
                        $options[$saved_row['id']] = $saved_row['name'];
                    }
                } else {
                    $options['no_template'] = "It seems that, you have not saved any template yet.";
                }
                return $options;
            }
        }

        /* function return list of saved module templets
         * since 1.0
         */
        static public function get_saved_module_template()
        {
            if (FLBuilderModel::node_templates_enabled()) {

                $saved_modules = BSFBBERhelper::get_post_template('module');
                $node_template = FLBuilderModel::is_post_node_template();

                $options = array();
                if (count($saved_modules)) {
                    foreach ($saved_modules as $saved_module) {
                        $options[$saved_module['id']] = $saved_module['name'];
                    }
                } else {
                    $options['no_template'] = "It seems that, you have not saved any template yet.";
                }
                return $options;
            }
        }

        /* function return list of post remplets
         * since 1.0
         */
        static public function get_post_template($type = 'layout')
        {
            $posts = get_posts(array(
                'post_type' => 'fl-builder-template',
                'orderby' => 'title',
                'order' => 'ASC',
                'posts_per_page' => '-1',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'fl-builder-template-type',
                        'field' => 'slug',
                        'terms' => $type
                    )
                )
            ));
            $templates = array();
            foreach ($posts as $post) {
                $templates[] = array(
                    'id' => $post->ID,
                    'name' => $post->post_title,
                    'global' => get_post_meta($post->ID, '_fl_builder_template_global', true),
                );
            }
            return $templates;
        }

        /* function return RBGA color code
         * since 1.0
         */
        static public function toRBGA($hex, $opacity)
        {
            if ($opacity) {
                if (abs($opacity) > 1) {
                    $opacity = $opacity / 100;
                }
            }
            $rgba = $hex;
            if ($opacity != '') {
                if (strlen($hex) == 3) {
                    $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
                    $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
                    $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
                } else {
                    $r = hexdec(substr($hex, 0, 2));
                    $g = hexdec(substr($hex, 2, 2));
                    $b = hexdec(substr($hex, 4, 2));
                }
                return 'rgba( ' . $r . ', ' . $g . ', ' . $b . ', ' . $opacity . ' )';
            } else {
                return '#' . $hex;
            }
        }
    }

    new BSFBBERhelper();
}
