<?php

if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class app_base_setup
{
    // Connect with your INIT action.
    public function init(){
        $this->load_translation();
    }

    public function load_translation() {

        // Domain ID - used in eg __( 'Text', 'pluginname' )
        $domain = PLUGIN_NAME;

        // get the languages locale eg 'en_US'
        $locale = apply_filters( 'plugin_locale', get_locale(), $domain );

        $locale = 'en_US';

        // Look for languages here: wp-content/languages/pluginname/pluginname-en_US.mo
        load_textdomain( $domain, WP_LANG_DIR . "/{$domain}/{$domain}-{$locale}.mo" ); // Don't mention this location in the docs - but keep it for legacy.

        // Look for languages here: wp-content/languages/plugins/pluginname-en_US.mo
        load_textdomain( $domain, WP_LANG_DIR . "/plugins/{$domain}-{$locale}.mo" );

        // Look for languages here: wp-content/languages/pluginname-en_US.mo
        load_textdomain( $domain, WP_LANG_DIR . "/{$domain}-{$locale}.mo" );

        // Look for languages here: wp-content/plugins/pluginname/languages/pluginname-en_US.mo
        load_plugin_textdomain( $domain, FALSE, dirname( plugin_basename( __FILE__ ) ) . "/languages/" );
    }
}