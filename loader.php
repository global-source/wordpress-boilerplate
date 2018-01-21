<?php

if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'PLUGIN_VERSION', 'your_version' );
define( 'PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define('PLUGIN_NAME','plugin_name');
define('PLUGIN_TEXT_DOMAIN', 'text_domain');

// Importing composer components.
require_once 'vendor/autoload.php';

// Importing installer.
require_once 'includes/installer.php';

// Base installer.
require_once 'includes/base_setup.php';

register_activation_hook( __FILE__, array( 'Plugin', 'installer::plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'Plugin', 'un_installer::plugin_deactivation' ) );
