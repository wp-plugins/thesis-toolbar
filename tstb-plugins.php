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
 * BYOB Thesis Simple Header Widgets (free, by Rick Anderson)
 *
 * @since 1.0
 */
if ( in_array( 'byob-thesis-simple-header-widgets/byob-thesis-simple-header-widgets.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	$menu_items['ext-simpleheaderwidgets'] = array(
		'parent' => $extensions,
		'title'  => __( 'Simple Header Widgets', 'thesis-toolbar' ),
		'href'   => admin_url( 'admin.php?page=byob-thesis-simple-header-widgets/admin/byobtshw_admin.php' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Simple Header Widgets', 'thesis-toolbar' ) )
	);
}  // end-if BYOB Simple Header Widgets


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
