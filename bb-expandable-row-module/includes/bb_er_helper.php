<?php

if( !class_exists( 'BSFBBERhelper' ) ) {

	class BSFBBERhelper {

	static public function get_saved_row_template() {
		if ( FLBuilderModel::node_templates_enabled() ) {
			$saved_rows = BSFBBERhelper::get_post_template('row');
			$node_template = FLBuilderModel::is_post_node_template();

			$options = array();
				if ( count($saved_rows) ) {
					foreach ($saved_rows as $saved_row) {
	            		$options[$saved_row['id']] = $saved_row['name'];
					}
				} else {
					$options['no_template'] = "It seems that, you have not saved any template yet.";
				}
	    	return $options;
		}
	}

	static public function get_saved_module_template() {
		if ( FLBuilderModel::node_templates_enabled() ) {
		
			$saved_modules = BSFBBERhelper::get_post_template( 'module' );
			$node_template = FLBuilderModel::is_post_node_template();
			
    		$options = array();
			if ( count($saved_modules) ) {
				foreach ($saved_modules as $saved_module) {
            		$options[$saved_module['id']] = $saved_module['name'];
				}
			}else{
				$options['no_template'] = "It seems that, you have not saved any template yet.";
			}
    		return $options;
		}
	}

	static public function get_post_template( $type = 'layout' ) {
		$posts = get_posts( array(
						'post_type'      => 'fl-builder-template',
						'orderby'        => 'title',
						'order'          => 'ASC',
						'posts_per_page' => '-1',
						'tax_query'      => array(
							array(
								'taxonomy' => 'fl-builder-template-type',
								'field'    => 'slug',
								'terms'    => $type
							)
						)
					) );

		$templates = array();

		foreach ( $posts as $post ) {
			$templates[] = array(
				'id'     => $post->ID,
				'name'   => $post->post_title,
				'global' => get_post_meta( $post->ID, '_fl_builder_template_global', true ),
			);
		}
		return $templates;
	}
}
 new BSFBBERhelper();
}
