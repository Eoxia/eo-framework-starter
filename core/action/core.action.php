<?php
/**
 * Les actions principales de l'application.
 *
 * @author Jimmy Latour <jimmy.eoxia@gmail.com>
 * @since 1.0.0
 * @version 1.5.1
 * @copyright 2015-2017 Eoxia
 * @package Task_Manager
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Les actions principales de l'application.
 */
class Test_Action {

	/**
	 * Le constructeur ajoutes les actions WordPress suivantes:
	 * admin_enqueue_scripts (Pour appeller les scripts JS et CSS dans l'admin)
	 * admin_print_scripts (Pour appeler les scripts JS en bas du footer)
	 * plugins_loaded (Pour appeler le domaine de traduction)
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'callback_admin_enqueue_scripts' ), 11 );
	}

	/**
	 * Initialise les fichiers JS inclus dans WordPress (jQuery, wp.media et thickbox)
	 *
	 * @return void nothing
	 */
	public function callback_before_admin_enqueue_scripts() {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-form' );
		wp_enqueue_script( 'jquery-ui-datepicker' );
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-ui-accordion' );
		wp_enqueue_script( 'jquery-ui-autocomplete' );
		wp_enqueue_media();
		add_thickbox();
	}

	/**
	 * Initialise le fichier style.min.css et backend.min.js du plugin DigiRisk.
	 *
	 * @return void nothing
	 */
	public function callback_admin_enqueue_scripts() {
		wp_enqueue_style( 'test-backend-style', PLUGIN_NOM_PLUGIN_URL . 'core/asset/css/style.css', array(), \eoxia\Config_Util::$init['starter']->version );
		wp_enqueue_script( 'test-backend-script', PLUGIN_NOM_PLUGIN_URL . 'core/asset/js/backend.min.js', array(), \eoxia\Config_Util::$init['starter']->version );
	}
}

new Test_Action();
