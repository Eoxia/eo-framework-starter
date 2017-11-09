<?php
/*
Plugin Name:  EO Framework Starter
Plugin URI:
Description:  Un plugin "Starter" WordPress utilisant EO-Framework.
Version:      0.1.0
Author:       Eoxia
Author URI:   https://eoxia.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

// Des defines utiles pour inclure votre CSS, JS et fichier MO.
// *_NOM_PLUGIN_* doit être remplacé par le nom de votre plugin.
DEFINE( 'PLUGIN_NOM_PLUGIN_PATH', realpath( plugin_dir_path( __FILE__ ) ) . '/' );
DEFINE( 'PLUGIN_NOM_PLUGIN_URL', plugins_url( basename( __DIR__ ) ) . '/' );
DEFINE( 'PLUGIN_NOM_PLUGIN_DIR', basename( __DIR__ ) );

// Ligne supplémentaire pour utiliser eo-framework.
require_once( 'core/external/eo-framework/eo-framework.php' );

// Boot votre plugin
// @see https://github.com/Eoxia/eo-framework pour en savoir plus.
\eoxia\Init_Util::g()->exec( PLUGIN_NOM_PLUGIN_PATH, basename( __FILE__, '.php' ) );
