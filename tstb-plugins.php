<?php
/**
 * Display links to active Thesis plugins/extensions settings' pages
 *
 * @package    Thesis Toolbar
 * @subpackage Plugin/Extension Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/thesis-toolbar/
 * @link       http://twitter.com/#!/deckerweb
 *
 * @since 1.0
 */

/**
 * BYOB Thesis Plugin Series - free+premium, by Rick Anderson
 *
 * @since 1.0
 * @version 1.1
 */
	/** Simple Header Widgets */
	if ( in_array( 'byob-thesis-simple-header-widgets/byob-thesis-simple-header-widgets.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		$menu_items['ext-simpleheaderwidgets'] = array(
			'parent' => $extensions,
			'title'  => __( 'Simple Header Widgets', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-simple-header-widgets/admin/byobtshw_admin.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Simple Header Widgets', 'thesis-toolbar' ) )
		);
	}  // end-if simple header widgets

	/** Exclude Categories From Posts */
	if ( function_exists( 'byobtecfp_init' ) ) {
		$menu_items['ext-excludecategories'] = array(
			'parent' => $extensions,
			'title'  => __( 'Exclude Categories', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-exclude-categories-from-posts/byob-thesis-exclude-categories-from-posts.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Exclude Categories', 'thesis-toolbar' ) )
		);
	}  // end-if exclude categories from posts

	/** Feature Box */
	if ( function_exists( 'byobtfbox_plugin_startup' ) ) {
		$menu_items['ext-featurebox'] = array(
			'parent' => $extensions,
			'title'  => __( 'Simple Feature Box', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-feature-box/admin/byobtfbox_admin.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Simple Feature Box', 'thesis-toolbar' ) )
		);
	}  // end-if feature box

	/** Footer Widgets */
	if ( function_exists( 'byobtfrw_plugin_startup' ) ) {
		$menu_items['ext-footerwidgets'] = array(
			'parent' => $extensions,
			'title'  => __( 'Footer Widgets', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-footer-widgets/admin/byobtfrw_admin.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Footer Widgets', 'thesis-toolbar' ) )
		);
	}  // end-if footer widgets

	/** Full Width Backgrounds */
	if ( function_exists( 'byobtfwbks_init' ) ) {
		$menu_items['ext-fullwidthbg'] = array(
			'parent' => $extensions,
			'title'  => __( 'Full Width Backgrounds', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-full-width-backgrounds/byob-thesis-full-width-backgrounds.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Full Width Backgrounds', 'thesis-toolbar' ) )
		);
	}  // end-if full width backgrounds

	/** Header Horizontal Layout */
	if ( function_exists( 'byobthhl_plugin_startup' ) ) {
		$menu_items['ext-headerlayout'] = array(
			'parent' => $extensions,
			'title'  => __( 'Header Horizontal Layout', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-full-width-backgrounds/byob-thesis-full-width-backgrounds.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Header Horizontal Layout', 'thesis-toolbar' ) )
		);
	}  // end-if header horizontal layout

	/** Mobile Content Switcher */
	if ( function_exists( 'byobtmobcs_add_defaults' ) ) {
		$menu_items['ext-mobilecontent'] = array(
			'parent' => $extensions,
			'title'  => __( 'Mobile Content Switcher', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-mobile-content-switcher/byob-thesis-mobile-content-switcher.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Mobile Content Switcher', 'thesis-toolbar' ) )
		);
	}  // end-if mobile content switcher

	/** Nav Menu */
	if ( function_exists( 'byobtnm_init' ) ) {
		$menu_items['ext-navmenu'] = array(
			'parent' => $extensions,
			'title'  => __( 'Nav Menu', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-nav-menu/byob-thesis-nav-menu.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Nav Menu', 'thesis-toolbar' ) )
		);
	}  // end-if nav menu

	/** Shortcode Content Widgets */
	if ( function_exists( 'byobtscw_plugin_startup' ) ) {
		$menu_items['ext-shortcodecontentwidgets'] = array(
			'parent' => $extensions,
			'title'  => __( 'Shortcode Content Widgets', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-shortcode-content-widgets/admin/byobtscw_admin.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Shortcode Content Widgets', 'thesis-toolbar' ) )
		);
	}  // end-if shortcode content widgets

	/** Sub Sidebars */
	if ( function_exists( 'byobtssb_init' ) ) {
		$menu_items['ext-subsidebars'] = array(
			'parent' => $extensions,
			'title'  => __( 'Sub Sidebars', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-sub-sidebars/byob-thesis-sub-sidebars.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Sub Sidebars', 'thesis-toolbar' ) )
		);
	}  // end-if sub sidebars

	/** Widget Styles */
	if ( function_exists( 'byobtssb_init' ) ) {
		$menu_items['ext-widgetstyles'] = array(
			'parent' => $extensions,
			'title'  => __( 'Widget Styles', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-widget-styles/admin/byobtws_admin.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Widget Styles', 'thesis-toolbar' ) )
		);
	}  // end-if widget styles

	/** WP Menus */
	if ( function_exists( 'byobtssb_init' ) ) {
		$menu_items['ext-wpmenus'] = array(
			'parent' => $extensions,
			'title'  => __( 'WP Menus', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=byob-thesis-wp-menus/byob-thesis-wp-menus.php' ),
			'meta'   => array( 'target' => '', 'title' => __( 'WP Menus', 'thesis-toolbar' ) )
		);
	}  // end-if wp menus

/** End BYOB Plugin Series */


/**
 * Thesis Footer Tool (free, by Grand Slambert)
 *
 * @since 1.0
 */
if ( in_array( 'thesis-footer-tool/thesis-footer-tool.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	$menu_items['ext-footertool'] = array(
		'parent' => $extensions,
		'title'  => __( 'Footer Tool', 'thesis-toolbar' ),
		'href'   => admin_url( 'options-general.php?page=thesis-footer-tool' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Footer Tool', 'thesis-toolbar' ) )
	);
}  // end-if Footer Tool


/**
 * Author hReview (free, by Hesham Zebida)
 *
 * @since 1.0
 */
if ( in_array( 'author-hreview/author-hreview.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	$menu_items['ext-authorhreview'] = array(
		'parent' => $extensions,
		'title'  => __( 'Author hReview', 'thesis-toolbar' ),
		'href'   => admin_url( 'options-general.php?page=author-hreview/include/options.php' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Author hReview (Google Rich Snippets)', 'thesis-toolbar' ) )
	);
}  // end-if Author hReview


/**
 * Thesography (free, by kristarella)
 *
 * @since 1.0
 */
if ( in_array( 'thesography/thesography.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	$menu_items['ext-thesography'] = array(
		'parent' => $extensions,
		'title'  => __( 'Thesography Exif Options', 'thesis-toolbar' ),
		'href'   => admin_url( 'options-general.php?page=thesography' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Thesography Exif Options', 'thesis-toolbar' ) )
	);
}  // end-if Thesography


/**
 * Thesis Restore Points (free, by Thesify Team)
 *
 * @since 1.0
 */
if ( in_array( 'thesis-restore-points/thesis-restore-points.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

	// Entry at "Import, Export, Reset" section
	$menu_items['thesisexportimport-restorepoints'] = array(
		'parent' => $thesisexportimport,
		'title'  => __( 'Restore Points', 'thesis-toolbar' ),
		'href'   => admin_url( 'options-general.php?page=thesis-restore-points' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Restore Points', 'thesis-toolbar' ) )
	);
	// Entry at "Extensions" section
	$menu_items['ext-restorepoints'] = array(
		'parent' => $extensions,
		'title'  => __( 'Restore Points', 'thesis-toolbar' ),
		'href'   => admin_url( 'options-general.php?page=thesis-restore-points' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Restore Points', 'thesis-toolbar' ) )
	);
}  // end-if Restore Points


/**
 * Thesis Import/Export (free, by 3DogMedia)
 *
 * @since 1.0
 */
if ( in_array( 'thesis-settings-export/thesis-export.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

	// Entry at "Import, Export, Reset" section
	$menu_items['thesisexportimport-plugin'] = array(
		'parent' => $thesisexportimport,
		'title'  => __( 'Settings Import/Export (Plugin)', 'thesis-toolbar' ),
		'href'   => admin_url( 'themes.php?page=thesis-settings-export/thesis-export.php' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Settings Import/Export (Plugin)', 'thesis-toolbar' ) )
	);
	// Entry at "Extensions" section
	$menu_items['ext-thesisexport'] = array(
		'parent' => $extensions,
		'title'  => __( 'Settings Import/Export', 'thesis-toolbar' ),
		'href'   => admin_url( 'themes.php?page=thesis-settings-export/thesis-export.php' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Settings Import/Export', 'thesis-toolbar' ) )
	);
}  // end-if Import/Export
