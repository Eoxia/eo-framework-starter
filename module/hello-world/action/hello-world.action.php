<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Hello_World_Action {

	/**
	 * Le constructeur
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'callback_admin_menu' ) );
	}


	/**
	 * Ajout du sous menu 'Hello World' dans le menu de WordPress.
	 */
	public function callback_admin_menu() {
		add_menu_page( 'Hello World', 'Hello World', 'manage_options', 'hello-world', array( $this, 'callback_add_menu_page' ) );
	}

	/**
	 * Le callback pour afficher la vue.
	 */
	public function callback_add_menu_page() {
		\eoxia\View_Util::exec( 'starter', 'hello_world', 'main' );
	}
}

new Hello_World_Action();
