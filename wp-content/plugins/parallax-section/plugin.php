<?php
/**
 * Plugin Name: Parallax Section - Block
 * Description: Makes background element scrolls slower than foreground content.
 * Version: 1.0.4
 * Author: bPlugins LLC
 * Author URI: http://bplugins.com
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: parallax-section
 */

// ABS PATH
if ( !defined( 'ABSPATH' ) ) { exit; }

// Constant
define( 'PSB_PLUGIN_VERSION', isset($_SERVER['HTTP_HOST']) && 'localhost' === $_SERVER['HTTP_HOST'] ? time() : '1.0.4' );
define( 'PSB_ASSETS_DIR', plugin_dir_url( __FILE__ ) . 'assets/' );

// Parallax Section
class PSBParallaxSection{
	function __construct(){
		add_action( 'init', [$this, 'onInit'] );
	}

	function onInit() {
		wp_register_style( 'psb-parallax-editor-style', plugins_url( 'dist/editor.css', __FILE__ ), [ 'wp-edit-blocks' ], PSB_PLUGIN_VERSION ); // Backend Style
		wp_register_style( 'psb-parallax-style', plugins_url( 'dist/style.css', __FILE__ ), [ 'wp-editor' ], PSB_PLUGIN_VERSION ); // Both Style

		register_block_type( __DIR__, [
			'editor_style'		=> 'psb-parallax-editor-style',
			'style'				=> 'psb-parallax-style',
			'render_callback'	=> [$this, 'render']
		] ); // Register Block

		wp_set_script_translations( 'psb-parallax-editor-script', 'parallax-section', plugin_dir_path( __FILE__ ) . 'languages' ); // Translate
	}

	function render( $attributes, $content ){
		extract( $attributes );

		$className = $className ?? '';
		$psbBlockClassName = 'wp-block-psb-parallax ' . $className . ' align' . $align;

		ob_start(); ?>
		<div class='<?php echo esc_attr( $psbBlockClassName ); ?>' id='psbParallaxSection-<?php echo esc_attr( $cId ) ?>' data-props='<?php echo esc_attr( wp_json_encode( [ 'attributes' => $attributes, 'content' => $content ] ) ); ?>'></div>

		<?php return ob_get_clean();
	} // Render
}
new PSBParallaxSection;