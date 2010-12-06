<?php
/*
Plugin Name: Nagibatu Euskaraz
Plugin URI: http://mikel.olasagasti.info
Description: Nabigatzailea euskaraz ez dagoenean erabiltzailea ohartarazi
Version: 0.1
Author: Mikel Olasagasti Uranga <mikel@olasagasti.info>
Author URI: http://mikel.olasagasti.info/
*/

add_action('wp_print_scripts', 'NabigatuEuskaraz_js');

function NabigatuEuskaraz_js(){
        $NabigatuEuskaraz_plugin_url = trailingslashit( get_bloginfo('wpurl') ).PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) );
        if (!is_admin()){
          wp_enqueue_script('NabigatuEuskaraz', 'http://nabigatueuskaraz.com/euskaraz-0.1.js','','',true);
        }
}
?>
