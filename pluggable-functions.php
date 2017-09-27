<?php
/*
Plugin Name: Pluggable Functions
Description: Basic example demonstrating pluggable functions.
Plugin URI:  http://localhost/
Author:      Ronny Freites
Version:     1.0
*/

if ( !function_exists('wp_logout') ) :
    /**
     * Log the current user out.
     *
     * @since 2.5.0
     */
    function wp_logout() {
        wp_destroy_current_session();
        wp_clear_auth_cookie();

        //custom function added
        my_plugin_custom_logout();

        /**
         * Fires after a user is logged-out.
         *
         * @since 1.5.0
         */
        do_action( 'wp_logout' );
    }
endif;



// customize logout function
function my_plugin_custom_logout() {

    // do something when the user logs out..
    wp_die('bye');

}
// add_action( 'wp_logout', 'myplugin_custom_logout' );
