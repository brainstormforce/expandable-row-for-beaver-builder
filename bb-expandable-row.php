<?php
/**
 * Plugin Name: Expandable Row For Beaver Builder
 * Plugin URI: http://www.brainstormforce.com
 * Description: This is the plugin to create expandable rows.
 * Version: 1.0
 * Author: Brainstorm Force
 * Author URI: https://www.brainstormforce.com/
 * Text Domain: bb-expandable-row
 */
define('BB_EXPAND_ROW_DIR', plugin_dir_path( __FILE__ ) );
define('BB_EXPAND_ROW_URL', plugins_url( __FILE__ ) );

// check of BSFBBExpandRowCHK class already exist or not
if( !class_exists('BSFBBExpandRowCHK') )
{
	class BSFBBExpandRowCHK {

			function __construct() {
				add_action('init', array( $this, 'load_expandable_row' ), 99 );
				add_action('init', array( $this, 'load_textdomain'));
			}

			function load_expandable_row() {
				if ( class_exists( 'FLBuilder' ) ) {
		    		require_once 'bb-expandable-row-module/bb-expandable-row-module.php';
		    	}
		    	else {
		    		// Display admin notice for activating beaver builder
	                add_action('admin_notices',array($this,'admin_notices_function'));
	                add_action('network_admin_notices',array($this,'admin_notices_function'));
		    	}
			}

			function admin_notices_function() {
				// check for Beaver Builder Installed / Activated or not
            if ( file_exists( plugin_dir_path( 'bb-plugin-agency/fl-builder.php' ) ) 
                || file_exists( plugin_dir_path( 'beaver-builder-lite-version/fl-builder.php' ) ) ) {
                $url = network_admin_url() . 'plugins.php?s=Beaver+Builder+Plugin';
            } else {
                $url = network_admin_url() . 'plugin-install.php?s=billyyoung&tab=search&type=author';
            }
            echo '<div class="notice notice-error">';
            echo "<p>The <strong>Expandable Row For Beaver Builder</strong> " . __( 'plugin requires', 'bb-expandable-row' )." <strong><a href='".$url."'>Beaver Builder</strong></a>" . __( ' plugin installed & activated.', 'bb-expandable-row' ) . "</p>";
            echo '</div>';
			}

			// function to load text domain
        	public function load_textdomain() {
            	load_plugin_textdomain( 'bb-bootstrap-alerts' );
        	}	
	}

	new BSFBBExpandRowCHK();
}