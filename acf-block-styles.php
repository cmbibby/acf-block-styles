<?php

/**
 * Plugin Name:     Acf Block Styles
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     acf-block-styles
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Acf_Block_Styles
 */

// Your code starts here.

class Acf_Block_Styles {

	public function __construct() {
		 add_action( 'acf/init', array( $this, 'register_acf_blocks' ) );
	}

	public function register_acf_blocks() {
		 $block = array(
			 'name'            => 'test-block',
			 'title'           => __( 'Test Block' ),
			 'description'     => __( 'Test block' ),
			 'icon'            => 'carrot',
			 'keywords'        => array( 'test' ),
			 'render_template' => plugin_dir_path( __FILE__ ) . 'block-templates/test-block.php',
			 'category'        => 'layout',
			 'styles'          => array(
				 array(
					 'name'      => 'default',
					 'label'     => __( 'Default' ),
					 'isDefault' => true,
				 ),
				 array(
					 'name'      => 'compact',
					 'label'     => __( 'Compact' ),
					 'isDefault' => false,
				 ),
			 ),
		 );

		acf_register_block_type( $block );
	}

}

new Acf_Block_Styles;
