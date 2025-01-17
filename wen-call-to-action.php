<?php
/**
 * The plugin bootstrap file.
 *
 * @package WEN_Call_To_Action
 *
 * Plugin Name: WEN Call To Action
 * Plugin URI: https://wenthemes.com/item/wordpress-plugins/wen-call-to-action/
 * Description: Easily create call to action for your WordPress site.
 * Version: 1.4.3
 * Author: WEN Themes
 * Author URI: https://wenthemes.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: wen-call-to-action
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Define.
define( 'WEN_CALL_TO_ACTION_NAME', 'WEN Call To Action' );
define( 'WEN_CALL_TO_ACTION_SLUG', 'wen-call-to-action' );
define( 'WEN_CALL_TO_ACTION_VERSION', '1.4.3' );
define( 'WEN_CALL_TO_ACTION_BASENAME', basename( dirname( __FILE__ ) ) );
define( 'WEN_CALL_TO_ACTION_DIR', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
define( 'WEN_CALL_TO_ACTION_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );
define( 'WEN_CALL_TO_ACTION_POST_TYPE_CTA', 'wen_cta' );


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wen-call-to-action-activator.php
 */
function activate_wen_call_to_action() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wen-call-to-action-activator.php';
	WEN_Call_To_Action_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wen-call-to-action-deactivator.php
 */
function deactivate_wen_call_to_action() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wen-call-to-action-deactivator.php';
	WEN_Call_To_Action_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wen_call_to_action' );
register_deactivation_hook( __FILE__, 'deactivate_wen_call_to_action' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wen-call-to-action.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wen_call_to_action() {

	$plugin = new WEN_Call_To_Action();
	$plugin->run();

}
run_wen_call_to_action();
