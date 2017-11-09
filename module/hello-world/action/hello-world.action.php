<?php
/**
 * Les actions du module "Hello World".
 *
 * @author Jimmy Latour <jimmy.eoxia@gmail.com>
 * @since 0.1.0
 * @version 0.1.0
 * @copyright 2015-2017 Eoxia
 * @package EO_Framework_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Les actions du module "Hello World".
 */
class Hello_World_Action {

	/**
	 * Le constructeur
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'callback_admin_menu' ) );
	}


	/**
	 * Ajout du sous menu 'Hello World' dans le menu de WordPress.
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 */
	public function callback_admin_menu() {
		add_menu_page( 'Hello World', 'Hello World', 'manage_options', 'hello-world', array( $this, 'callback_add_menu_page' ) );
	}

	/**
	 * Le callback pour afficher la vue.
	 *
	 * @since 0.1.0
	 * @version 0.1.0
	 */
	public function callback_add_menu_page() {
		\eoxia\View_Util::exec( 'starter', 'hello_world', 'main' );
	}
}

new Hello_World_Action();
