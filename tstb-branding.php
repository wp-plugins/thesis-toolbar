<?php
/**
 * Helper functions for custom branding & capabilities
 *
 * @package    Thesis Toolbar
 * @subpackage Branding
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/thesis-toolbar/
 * @link       http://twitter.com/#!/deckerweb
 *
 * @since 1.1
 */

/**
 * Helper functions for returning a few popular roles/capabilities.
 *
 * @since 1.1
 *
 * @return role/capability
 */
	/**
	 * Helper function for returning 'administrator' role/capability.
	 *
	 * @since 1.1
	 *
	 * @return 'administrator' role
	 */
	function __tstb_admin_only() {

		return 'administrator';
	}

	/**
	 * Helper function for returning 'editor' role/capability.
	 *
	 * @since 1.1
	 *
	 * @return 'editor' role
	 */
	function __tstb_role_editor() {

		return 'editor';
	}

	/**
	 * Helper function for returning 'switch_themes' capability.
	 *
	 * @since 1.1
	 *
	 * @return 'edit_switch_themes' capability
	 */
	function __tstb_cap_switch_themes() {

		return 'switch_themes';
	}

	/**
	 * Helper function for returning 'manage_options' capability.
	 *
	 * @since 1.1
	 *
	 * @return 'manage_options' capability
	 */
	function __tstb_cap_manage_options() {

		return 'manage_options';
	}

	/**
	 * Helper function for returning 'install_plugins' capability.
	 *
	 * @since 1.1
	 *
	 * @return 'install_plugins' capability
	 */
	function __tstb_cap_install_plugins() {

		return 'install_plugins';
	}

/** End of role/capability helper functions */


/**
 * Helper functions for returning colored icons.
 *
 * @since 1.1
 *
 * @return colored icon image
 */
	/**
	 * Helper function for returning the blue icon.
	 *
	 * @since 1.1
	 *
	 * @return blue icon
	 */
	function __tstb_blue_icon() {

		return plugins_url( 'thesis-toolbar/images/icon-thesis-blue.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the brown icon.
	 *
	 * @since 1.1
	 *
	 * @return brown icon
	 */
	function __tstb_brown_icon() {

		return plugins_url( 'thesis-toolbar/images/icon-thesis-brown.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the green icon.
	 *
	 * @since 1.1
	 *
	 * @return green icon
	 */
	function __tstb_green_icon() {

		return plugins_url( 'thesis-toolbar/images/icon-thesis-green.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the green2 icon.
	 *
	 * @since 1.1
	 *
	 * @return green2 icon
	 */
	function __tstb_green2_icon() {

		return plugins_url( 'thesis-toolbar/images/icon-thesis-green2.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the grey icon.
	 *
	 * @since 1.1
	 *
	 * @return grey icon
	 */
	function __tstb_grey_icon() {

		return plugins_url( 'thesis-toolbar/images/icon-thesis-grey.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the khaki icon.
	 *
	 * @since 1.1
	 *
	 * @return khaki icon
	 */
	function __tstb_khaki_icon() {

		return plugins_url( 'thesis-toolbar/images/icon-thesis-khaki.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the orange icon.
	 *
	 * @since 1.1
	 *
	 * @return orange icon
	 */
	function __tstb_orange_icon() {

		return plugins_url( 'thesis-toolbar/images/icon-thesis-orange.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the pink icon.
	 *
	 * @since 1.1
	 *
	 * @return pink icon
	 */
	function __tstb_pink_icon() {

		return plugins_url( 'thesis-toolbar/images/icon-thesis-pink.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the red icon.
	 *
	 * @since 1.1
	 *
	 * @return red icon
	 */
	function __tstb_red_icon() {

		return plugins_url( 'thesis-toolbar/images/icon-thesis-red.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the turquoise icon.
	 *
	 * @since 1.1
	 *
	 * @return turquoise icon
	 */
	function __tstb_turquoise_icon() {

		return plugins_url( 'thesis-toolbar/images/icon-thesis-turquoise.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the yellow icon.
	 *
	 * @since 1.1
	 *
	 * @return yellow icon
	 */
	function __tstb_yellow_icon() {

		return plugins_url( 'thesis-toolbar/images/icon-thesis-yellow.png', dirname( __FILE__ ) );
	}

/** End of icon helper functions */


/**
 * Helper functions for returning icon class.
 *
 * @since 1.1
 *
 * @return icon class
 */
	/**
	 * Helper function for returning no icon class.
	 *
	 * @since 1.1
	 *
	 * @return no icon class
	 */
	function __tstb_no_icon_display() {

		return NULL;
	}

/** End of icon class helper functions */
