<?php 
/**
 * Main plugin file. This plugin adds useful admin links and resources for the Thesis Theme/Framework to the WordPress Toolbar / Admin Bar.
 *
 * @package   Thesis Toolbar
 * @author    David Decker
 * @link      http://twitter.com/#!/deckerweb
 * @copyright Copyright 2012, David Decker - DECKERWEB
 *
 * @credits   Inspired and based on the plugin "WooThemes Admin Bar Addition" by Remkus de Vries @defries.
 * @link      http://remkusdevries.com/
 * @link      http://twitter.com/#!/defries
 *
 * Plugin Name: Thesis Toolbar
 * Plugin URI: http://genesisthemes.de/en/wp-plugins/thesis-toolbar/
 * Description: This plugin adds useful admin links and resources for Thesis Theme/Framework to the WordPress Toolbar / Admin Bar.
 * Version: 1.1
 * Author: David Decker - DECKERWEB
 * Author URI: http://deckerweb.de/
 * License: GPLv2
 * Text Domain: thesis-toolbar
 * Domain Path: /languages/
 */

/**
 * Setting constants
 *
 * @since 1.0
 * @version 1.1
 */
/** Plugin directory */
define( 'TSTB_PLUGIN_DIR', dirname( __FILE__ ) );

/** Plugin base directory */
define( 'TSTB_PLUGIN_BASEDIR', dirname( plugin_basename( __FILE__ ) ) );


add_action( 'init', 'ddw_tstb_init' );
/**
 * Load the text domain for translation of the plugin
 * 
 * @since 1.0
 */
function ddw_tstb_init() {

	/** First look in WordPress' "languages" folder = custom & update-secure! */
	load_plugin_textdomain( 'thesis-toolbar', false, TSTB_PLUGIN_BASEDIR . '/../../languages/thesis-toolbar/' );

	/** Then look in plugin's "languages" folder = default */
	load_plugin_textdomain( 'thesis-toolbar', false, TSTB_PLUGIN_BASEDIR . '/languages/' );
}


add_filter( 'plugin_row_meta', 'ddw_tstb_plugin_links', 10, 2 );
/**
 * Add various support links to plugin page
 *
 * @since 1.0
 *
 * @param  $tstb_links
 * @param  $tstb_file
 * @return strings plugin links
 */
function ddw_tstb_plugin_links( $tstb_links, $tstb_file ) {

	if ( !current_user_can( 'install_plugins' ) )
		return $tstb_links;

	if ( $tstb_file == TSTB_PLUGIN_BASEDIR . '/thesis-toolbar.php' ) {
		$tstb_links[] = '<a href="http://wordpress.org/extend/plugins/thesis-toolbar/faq/" target="_new" title="' . __( 'FAQ', 'thesis-toolbar' ) . '">' . __( 'FAQ', 'thesis-toolbar' ) . '</a>';
		$tstb_links[] = '<a href="http://wordpress.org/tags/thesis-toolbar?forum_id=10" target="_new" title="' . __( 'Support', 'thesis-toolbar' ) . '">' . __( 'Support', 'thesis-toolbar' ) . '</a>';
		$tstb_links[] = '<a href="' . __( 'http://genesisthemes.de/en/donate/', 'thesis-toolbar' ) . '" target="_new" title="' . __( 'Donate', 'thesis-toolbar' ) . '">' . __( 'Donate', 'thesis-toolbar' ) . '</a>';
	}

	return $tstb_links;
}


add_action( 'admin_bar_menu', 'ddw_tstb_admin_bar_menu', 98 );
/**
 * Add new menu items to the WP Toolbar / Admin Bar.
 * 
 * @since 1.0
 *
 * @global mixed $wp_admin_bar 
 */
function ddw_tstb_admin_bar_menu() {

	global $wp_admin_bar;

	/**
	 * Allows for filtering the general user capability to see main & sub-level items
	 *
	 * Default capability: 'edit_theme_options'
	 *
	 * @since 1.1
	 */
	$tstb_filter_capability = apply_filters( 'tstb_filter_capability_all', 'edit_theme_options' );

	/**
	 * Required WordPress cabability to display new admin bar entry
	 * Only showing items if toolbar / admin bar is activated and user is logged in!
	 *
	 * @since 1.0
	 */
	if ( !is_user_logged_in() || 
		!is_admin_bar_showing() || 
		!current_user_can( $tstb_filter_capability ) ||  // allows for custom filtering the required capability
		defined( 'TSTB_DISPLAY' )  // allows for custom disabling
	)
		return;

	/** Set unique prefix */
	$prefix = 'ddw-thesis-';
	
	/** Create parent menu item references */
	$thesisbar = $prefix . 'admin-bar';				// root level
		$thesissupport = $prefix . 'thesissupport';			// sub level: thesis support
		$thesisguide = $prefix . 'thesisguide';				// sub level: thesis user guide
		$thesistutorials = $prefix . 'thesistutorials';					// third level: thesis tutorials
		$thesissites = $prefix . 'thesissites';				// sub level: thesis sites
			$thesisblog = $prefix . 'thesisblog';					// third level: thesis blog
			$thesisaffiliates = $prefix . 'thesisaffiliates';			// third level: thesis affiliates
		$thesissettings = $prefix . 'thesissettings';			// sub level: thesis settings
			$thesiscustom = $prefix . 'thesiscustom';				// third level: thesis custom file editor
			$thesisexportimport = $prefix . 'thesisexportimport';			// third level: thesis export/import
			$thesisopenhook = $prefix . 'thesisopenhook';				// third level: thesis openhook plugin
		$extgroup = $prefix . 'extgroup';				// sub level: extend group ("hook" place)
			$tgroup = $prefix . 'tgroup';				// sub level: theme group ("hook" place)
				$themedysettings = $prefix . 'themedysettings';			// third level theme: themedy child themes
				$thesisawesomesettings = $prefix . 'thesisawesomesettings';	// third level theme: thesisawesome skins
				$kolakubesettings = $prefix . 'kolakubesettings';		// third level theme: kolakube skins
			$pgroup = $prefix . 'pgroup';				// sub level: plugins group ("hook" place)
				$extensions = $prefix . 'extensions';		// sub level: extensions
		$thesisgroup = $prefix . 'thesisgroup';				// sub level: thesis group (resources)
			$tpsgroup = $prefix . 'tpsgroup';					// third level: tps group (t-p. support)


	/** Make the "Thesis" name filterable within menu items */
	$tstb_thesis_name = apply_filters( 'tstb_filter_thesis_name', __( 'Thesis', 'thesis-toolbar' ) );

	/** Make the "Thesis" name's tooltip filterable within menu items */
	$tstb_thesis_name_tooltip = apply_filters( 'tstb_filter_thesis_name_tooltip', _x( 'Thesis', 'Translators: For the tooltip', 'thesis-toolbar' ) );


	/** Display these items also when Thesis Theme/Framework is not installed */
	if ( !defined( 'TSTB_RESOURCES_DISPLAY' ) ) {
		$thesisgroup_menu_items = array(

			// Support menu items
			'thesissupport' => array(
				'parent' => $thesisgroup,
				'title'  => __( 'Thesis Support', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/forums/',
				'meta'   => array( 'title' => __( 'Thesis Support', 'thesis-toolbar' ) )
			),
			'thesissupportsearch' => array(
				'parent' => $thesissupport,
				'title'  => __( 'Search Forum', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/forums/search.php',
				'meta'   => array( 'title' => __( 'Search Forum', 'thesis-toolbar' ) )
			),
			'thesissupportsubscribed' => array(
				'parent' => $thesissupport,
				'title'  => __( 'My Subscribed Topics', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/forums/subscription.php',
				'meta'   => array( 'title' => __( 'My Subscribed Topics', 'thesis-toolbar' ) )
			),
			'thesissupportnew' => array(
				'parent' => $thesissupport,
				'title'  => __( 'New Topics since last visit', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/forums/search.php?do=getnew&contenttype=vBForum_Post',
				'meta'   => array( 'title' => __( 'New Topics since last visit', 'thesis-toolbar' ) )
			),
			'thesissupportnewtoday' => array(
				'parent' => $thesissupport,
				'title'  => __( 'New Topics Today', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/forums/search.php?do=getdaily&contenttype=vBForum_Post',
				'meta'   => array( 'title' => __( 'New Topics Today', 'thesis-toolbar' ) )
			),
			'thesissupportuser' => array(
				'parent' => $thesissupport,
				'title'  => __( 'User Account at Support Site', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/forums/usercp.php',
				'meta'   => array( 'title' => __( 'User Account at Support Site', 'thesis-toolbar' ) )
			),

			// User Guide menu items
			'thesisguide' => array(
				'parent' => $thesisgroup,
				'title'  => __( 'User Guide', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/thesis/rtfm/',
				'meta'   => array( 'title' => __( 'User Guide', 'thesis-toolbar' ) )
			),
			'thesisguide-hooks' => array(
				'parent' => $thesisguide,
				'title'  => __( 'Hook Reference', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/thesis/rtfm/hooks/',
				'meta'   => array( 'title' => __( 'Hook Reference', 'thesis-toolbar' ) )
			),
			'thesisguide-filter' => array(
				'parent' => $thesisguide,
				'title'  => __( 'Filter Reference', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/thesis/rtfm/filter/',
				'meta'   => array( 'title' => __( 'Filter Reference', 'thesis-toolbar' ) )
			),
			'thesisguide-csshelp' => array(
				'parent' => $thesisguide,
				'title'  => __( 'custom.css Help', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/thesis/rtfm/custom-css/',
				'meta'   => array( 'title' => _x( 'custom.css Help', 'Translators: For the tooltip', 'thesis-toolbar' ) )
			),
			'thesisguide-loopapi' => array(
				'parent' => $thesisguide,
				'title'  => __( 'Custom Loop API', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/thesis/rtfm/custom-loop-api/',
				'meta'   => array( 'title' => __( 'Custom Loop API', 'thesis-toolbar' ) )
			),

			// Tutorials menu items
			'thesistutorials' => array(
				'parent' => $thesisgroup,
				'title'  => __( 'Tutorials', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/thesis/tutorials/',
				'meta'   => array( 'title' => __( 'Tutorials', 'thesis-toolbar' ) )
			),
			'thesistutorials-videos' => array(
				'parent' => $thesistutorials,
				'title'  => __( 'Video Tutorials', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/thesis/tutorials/videos/',
				'meta'   => array( 'title' => __( 'Video Tutorials', 'thesis-toolbar' ) )
			),
			'thesistutorials-articles' => array(
				'parent' => $thesistutorials,
				'title'  => __( 'Article Tutorials', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/thesis/tutorials/articles/',
				'meta'   => array( 'title' => __( 'Article Tutorials', 'thesis-toolbar' ) )
			),
			'thesistutorials-community' => array(
				'parent' => $thesistutorials,
				'title'  => __( 'Video Tutorials', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/thesis/tutorials/community/',
				'meta'   => array( 'title' => __( 'Video Tutorials', 'thesis-toolbar' ) )
			),

			// Thesis HQ menu items
			'thesissites' => array(
				'parent' => $thesisgroup,
				'title'  => __( 'Thesis HQ', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/',
				'meta'   => array( 'title' => __( 'Thesis HQ', 'thesis-toolbar' ) )
			),
			'thesisblog' => array(
				'parent' => $thesissites,
				'title'  => __( 'Official Blog', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/thesis/',
				'meta'   => array( 'title' => __( 'Official Blog (diythemes.com)', 'thesis-toolbar' ) )
			),
			'thesisblog-pearson' => array(
				'parent' => $thesisblog,
				'title'  => __( 'Chris Pearson Blog', 'thesis-toolbar' ),
				'href'   => 'http://www.pearsonified.com/',
				'meta'   => array( 'title' => __( 'Chris Pearson Blog (Thesis Lead Dev - pearsonified.com)', 'thesis-toolbar' ) )
			),
			'thesisblog-halpern' => array(
				'parent' => $thesisblog,
				'title'  => __( 'Derek Halpern Blog', 'thesis-toolbar' ),
				'href'   => 'http://socialtriggers.com/',
				'meta'   => array( 'title' => __( 'Derek Halpern Blog (Thesis Community Leader - socialtriggers.com)', 'thesis-toolbar' ) )
			),
			'thesisshowcase' => array(
				'parent' => $thesissites,
				'title'  => __( 'Showcase Gallery', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/showcase/',
				'meta'   => array( 'title' => __( 'Showcase Gallery', 'thesis-toolbar' ) )
			),
			'thesisaffiliates' => array(
				'parent' => $thesissites,
				'title'  => __( 'Affiliate Program', 'thesis-toolbar' ),
				'href'   => 'http://diythemes.com/affiliate-program/',
				'meta'   => array( 'title' => __( 'Affiliate Program', 'thesis-toolbar' ) )
			),
			'thesisaffiliateslogin' => array(
				'parent' => $thesisaffiliates,
				'title'  => __( 'Affiliate Login', 'thesis-toolbar' ),
				'href'   => 'https://shareasale.com/a-login.cfm',
				'meta'   => array( 'title' => __( 'Affiliate Login', 'thesis-toolbar' ) )
			),
			'thesispluginswporg' => array(
				'parent' => $thesissites,
				'title'  => __( 'Free plugins/extensions at WP.org', 'thesis-toolbar' ),
				'href'   => 'http://wordpress.org/extend/plugins/search.php?q=thesis',
				'meta'   => array( 'title' => __( 'Free plugins/extensions at WP.org', 'thesis-toolbar' ) )
			),
			'thesisffnews' => array(
				'parent' => $thesissites,
				'title'  => __( 'Thesis News Planet', 'thesis-toolbar' ),
				'href'   => 'http://friendfeed.com/thesisnews',
				'meta'   => array( 'title' => __( 'Thesis News Planet (official and community news via FriendFeed service)', 'thesis-toolbar' ) )
			),
		);

	}  // end-if constant check for displaying resources


	/** Display language specific links only for these locales: de_DE, de_AT, de_CH, de_LU */
	if ( !defined( 'TSTB_DE_DISPLAY' ) && ( get_locale() == 'de_DE' || get_locale() == 'de_AT' || get_locale() == 'de_CH' || get_locale() == 'de_LU' ) ) {
		// German Thesis language packs
		$thesisgroup_menu_items['languages-de'] = array(
			'parent' => $thesisgroup,
			'title'  => __( 'German language files', 'thesis-toolbar' ),
			'href'   => 'http://deckerweb.de/material/sprachdateien/thesis-theme/',
			'meta'   => array( 'title' => __( 'German language files for Thesis Theme and more extensions', 'thesis-toolbar' ) )
		);
	}  // end-if German locales


	/** Show these items only if Thesis Theme/Framework is actually installed */
	if ( defined( 'THESIS_CLASSES' ) || 
		get_template() == 'thesis' || 
		get_template() == 'thesis_184' || 
		get_template() == 'thesis_183' || 
		get_template() == 'thesis_182' || 
		get_template() == 'thesis_181' || 
		get_template() == 'thesis_18' || 
		get_template() == 'thesis_17' || 
		get_current_theme() == 'Thesis'
	) {

		// Thesis Settings section
		$menu_items['thesissettings'] = array(
			'parent' => $thesisbar,
			'title'  => __( 'Website Options', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=thesis-options' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Website Options', 'thesis-toolbar' ) )
		);
		$menu_items['thesiswidgets'] = array(
			'parent' => $thesissettings,
			'title'  => $tstb_thesis_name . ' ' . __( 'Widgets', 'thesis-toolbar' ),
			'href'   => admin_url( 'widgets.php' ),
			'meta'   => array( 'target' => '', 'title' => $tstb_thesis_name_tooltip . ' ' . __( 'Widgets', 'thesis-toolbar' ) )
		);
		$menu_items['thesismenus'] = array(
			'parent' => $thesissettings,
			'title'  => $tstb_thesis_name . ' ' . __( 'Menus', 'thesis-toolbar' ),
			'href'   => admin_url( 'nav-menus.php' ),
			'meta'   => array( 'target' => '', 'title' => $tstb_thesis_name_tooltip . ' ' . __( 'Menus', 'thesis-toolbar' ) )
		);

		// Design Options section
		$menu_items['thesisdesign'] = array(
			'parent' => $thesisbar,
			'title'  => __( 'Design Options', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=thesis-design-options' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Design Options', 'thesis-toolbar' ) )
		);

		// Header Image section
		$menu_items['thesisheader'] = array(
			'parent' => $thesisbar,
			'title'  => __( 'Header Image', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=thesis-header-image' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Header Image', 'thesis-toolbar' ) )
		);

		// Favicon section
		$menu_items['thesisfavicon'] = array(
			'parent' => $thesisbar,
			'title'  => __( 'Favicon Manager', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=thesis-favicon' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Favicon Manager', 'thesis-toolbar' ) )
		);

		// Custom Editor section
		$menu_items['thesiscustom'] = array(
			'parent' => $thesisbar,
			'title'  => __( 'Custom Additions Editor', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=thesis-file-editor' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Additions Editor', 'thesis-toolbar' ) )
		);
		$menu_items['thesiscustom-css'] = array(
			'parent' => $thesiscustom,
			'title'  => __( 'File: custom.css', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=thesis-file-editor&file=custom.css' ),
			'meta'   => array( 'target' => '', 'title' => _x( 'File: custom.css', 'Translators: For the tooltip', 'thesis-toolbar' ) )
		);
		$menu_items['thesiscustom-functions'] = array(
			'parent' => $thesiscustom,
			'title'  => __( 'File: custom_functions.php', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=thesis-file-editor&file=custom_functions.php' ),
			'meta'   => array( 'target' => '', 'title' => _x( 'File: custom_functions.php', 'Translators: For the tooltip', 'thesis-toolbar' ) )
		);
		$menu_items['thesiscustom-csshelp'] = array(
			'parent' => $thesiscustom,
			'title'  => __( 'custom.css Help', 'thesis-toolbar' ),
			'href'   => 'http://diythemes.com/thesis/rtfm/custom-css/',
			'meta'   => array( 'title' => _x( 'custom.css Help', 'Translators: For the tooltip', 'thesis-toolbar' ) )
		);

		// Plugin: Thesis OpenHook section (free, by Rick Beckman)
		if ( defined( 'OPENHOOK_SETTINGS_THESIS' ) ) {  // v3.x of plugin
			$tstb_openhook_active = 'openhook_yes';
			$tstb_openhook_newer = 'openhook_newer_yes';
			$tstb_openhook_aurl = admin_url( 'options-general.php?page=openhook&tab=thesis' );
		} elseif ( function_exists( 'openhook_settings' ) ) {  // v2.x of plugin
			$tstb_openhook_active = 'openhook_yes';
			$tstb_openhook_aurl = admin_url( 'themes.php?page=thesis-openhook/options.php' );
		}  // end-if openhook plugin version check

		if ( current_user_can( 'edit_themes' ) && ( $tstb_openhook_active == 'openhook_yes' ) ) {
			$menu_items['thesisopenhook'] = array(
				'parent' => $thesisbar,
				'title'  => __( 'OpenHook Manager', 'thesis-toolbar' ),
				'href'   => $tstb_openhook_aurl,
				'meta'   => array( 'target' => '', 'title' => __( 'OpenHook Manager (Plugin)', 'thesis-toolbar' ) )
			);

			// Sub-level links, only for newer v3.x versions of OpenHook!
			if ( $tstb_openhook_newer == 'openhook_newer_yes' ) {
				$menu_items['thesisopenhook-thesis'] = array(
					'parent' => $thesisopenhook,
					'title'  => $tstb_thesis_name . ' ' . __( 'Hooks', 'thesis-toolbar' ),
					'href'   => admin_url( 'options-general.php?page=openhook&tab=thesis' ),
					'meta'   => array( 'target' => '', 'title' => $tstb_thesis_name_tooltip . ' ' . __( 'Hooks', 'thesis-toolbar' ) )
				);
				$menu_items['thesisopenhook-wordpress'] = array(
					'parent' => $thesisopenhook,
					'title'  => __( 'WordPress Hooks', 'thesis-toolbar' ),
					'href'   => admin_url( 'options-general.php?page=openhook&tab=wordpress' ),
					'meta'   => array( 'target' => '', 'title' => __( 'WordPress Hooks', 'thesis-toolbar' ) )
				);
				$menu_items['thesisopenhook-general'] = array(
					'parent' => $thesisopenhook,
					'title'  => __( 'General Settings', 'thesis-toolbar' ),
					'href'   => admin_url( 'options-general.php?page=openhook&tab=general' ),
					'meta'   => array( 'target' => '', 'title' => __( 'General Settings', 'thesis-toolbar' ) )
				);
				$menu_items['thesisopenhook-phpinfo'] = array(
					'parent' => $thesisopenhook,
					'title'  => __( 'PHP Info', 'thesis-toolbar' ),
					'href'   => admin_url( 'options-general.php?page=openhook&tab=phpinfo' ),
					'meta'   => array( 'target' => '', 'title' => __( 'PHP Info', 'thesis-toolbar' ) )
				);
				$menu_items['thesisopenhook-contact'] = array(
					'parent' => $thesisopenhook,
					'title'  => __( 'Contact/ Help', 'thesis-toolbar' ),
					'href'   => admin_url( 'options-general.php?page=openhook&tab=contact' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Contact/ Help', 'thesis-toolbar' ) )
				);
			}  // end-if sub-level links for newer openhook version

			// WP.org support forum for plugin
			$menu_items['thesisopenhook-forum'] = array(
				'parent' => $thesisopenhook,
				'title'  => __( 'Support Forum (WP.org)', 'thesis-toolbar' ),
				'href'   => 'http://wordpress.org/tags/thesis-openhook?forum_id=10',
				'meta'   => array( 'title' => __( 'Support Forum (WP.org)', 'thesis-toolbar' ) )
			);

		}  // end-if Thesis OpenHook

		// Export, Import, Reset section
		$menu_items['thesisexportimport'] = array(
			'parent' => $thesisbar,
			'title'  => __( 'Export, Import, Reset', 'thesis-toolbar' ),
			'href'   => admin_url( 'admin.php?page=options-manager' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Export, Import, Reset', 'thesis-toolbar' ) )
		);

		/**
		 * Display last main item in the menu for active extensions/plugins
		 * ATTENTION: This is where plugins/extensions hook in on the sub-level hierarchy
		 *
		 * @since 1.0
		 */
		if ( !defined( 'TSTB_EXTENSIONS_DISPLAY' ) && current_user_can( 'activate_plugins' ) ) {
			$menu_items['extensions'] = array(
				'parent' => $pgroup,
				'title'  => __( 'Active Extensions', 'thesis-toolbar' ),
				'href'   => admin_url( 'plugins.php' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Active Extensions', 'thesis-toolbar' ) )
			);
		}  // end-if constant & cap check for displaying extensions

	} else {

		// If Thesis is not active, to avoid PHP notices
		$menu_items = $thesisgroup_menu_items;

		// If Thesis is not active and no icon filter is active, then display no icon
		if ( !has_filter( 'tstb_filter_main_icon' ) ) {
			add_filter( 'tstb_filter_main_item_icon_display', '__tstb_no_icon_display' );
		}

	}  // end-if Thesis conditional


	/**
	 * Display links to active Thesis Child Themes/Skins settings' pages
	 *
	 * @since 1.0
	 */
		/** Include plugin file with theme/skin support links */
		require_once( TSTB_PLUGIN_DIR . '/tstb-themes.php' );


	/**
	 * Display links to active Thesis plugins/extensions settings' pages
	 *
	 * @since 1.0
	 */
		/** Include plugin file with plugin support links */
		require_once( TSTB_PLUGIN_DIR . '/tstb-plugins.php' );


	/** Allow menu items to be filtered, but pass in parent menu item IDs */
	$menu_items = (array) apply_filters( 'ddw_tstb_menu_items', $menu_items, $thesisgroup_menu_items, $prefix, $thesisbar, 
						$thesissupport, $thesisguide, $thesistutorials, $thesissites, $thesisaffiliates,  								$thesisblog, $thesissettings, $thesiscustom, $thesisexportimport, $thesisopenhook, 
						$extgroup, $tgroup, $themedysettings, $thesisawesomesettings, $kolakubesettings, 
							$extensions, $pgroup, 
						$thesisgroup, $tpsgroup );


	/**
	 * Add the Thesis top-level menu item
	 *
	 * @since 1.0
	 * @version 1.1
	 *
	 * @param $tstb_main_item_title
	 * @param $tstb_main_item_title_tooltip
	 * @param $tstb_main_item_icon_display
	 */
		/** Filter the main item name */
		$tstb_main_item_title = apply_filters( 'tstb_filter_main_item', __( 'Thesis', 'thesis-toolbar' ) );

		/** Filter the main item name's tooltip */
		$tstb_main_item_title_tooltip = apply_filters( 'tstb_filter_main_item_tooltip', _x( 'Thesis Theme', 'Translators: For the tooltip', 'thesis-toolbar' ) );

		/** Filter the main item icon's class/display */
		$tstb_main_item_icon_display = apply_filters( 'tstb_filter_main_item_icon_display', 'icon-thesis' );

		/** Add the main item */
		$wp_admin_bar->add_menu( array(
			'id'    => $thesisbar,
			'title' => $tstb_main_item_title,
			'href'  => admin_url( 'admin.php?page=thesis-options' ),
			'meta'  => array( 'class' => $tstb_main_item_icon_display, 'title' => $tstb_main_item_title_tooltip )
		) );


	/** Loop through the menu items */
	foreach ( $menu_items as $id => $menu_item ) {
		
		// Add in the item ID
		$menu_item['id'] = $prefix . $id;

		// Add meta target to each item where it's not already set, so links open in new window/tab
		if ( ! isset( $menu_item['meta']['target'] ) )		
			$menu_item['meta']['target'] = '_blank';

		// Add class to links that open up in a new window/tab
		if ( '_blank' === $menu_item['meta']['target'] ) {
			if ( ! isset( $menu_item['meta']['class'] ) )
				$menu_item['meta']['class'] = '';
			$menu_item['meta']['class'] .= $prefix . 'tstb-new-tab';
		}

		// Add item
		$wp_admin_bar->add_menu( $menu_item );

	}  // end foreach menu items


	/** Extend Group: Main Entry */
	$wp_admin_bar->add_group( array(
		'parent' => $thesisbar,
		'id'     => $extgroup,
	) );

		/** Theme Group: Main Entry */
		if ( !defined( 'TSTB_CHILD_SKIN_DISPLAY' ) ) {
			$wp_admin_bar->add_group( array(
				'parent' => $extgroup,
				'id'     => $tgroup,
			) );
		}  // end-if constant check for displaying theme group

		/** Plugin Group: Main Entry */
		$wp_admin_bar->add_group( array(
			'parent' => $extgroup,
			'id'     => $pgroup,
		) );

	/** Thesis Group: Main Entry */
	$wp_admin_bar->add_group( array(
		'parent' => $thesisbar,
		'id'     => $thesisgroup,
		'meta'   => array( 'class' => 'ab-sub-secondary' )
	) );


	/** Thesis Group: Loop through the group menu items */
	foreach ( $thesisgroup_menu_items as $id => $thesisgroup_menu_item ) {
		
		// Thesis Group: Add in the item ID
		$thesisgroup_menu_item['id'] = $prefix . $id;

		// Thesis Group: Add meta target to each item where it's not already set, so links open in new window/tab
		if ( ! isset( $thesisgroup_menu_item['meta']['target'] ) )		
			$thesisgroup_menu_item['meta']['target'] = '_blank';

		// Thesis Group: Add class to links that open up in a new window/tab
		if ( '_blank' === $thesisgroup_menu_item['meta']['target'] ) {
			if ( ! isset( $thesisgroup_menu_item['meta']['class'] ) )
				$thesisgroup_menu_item['meta']['class'] = '';
			$thesisgroup_menu_item['meta']['class'] .= $prefix . 'tstb-new-tab';
		}

		// Thesis Group: Add item
		$wp_admin_bar->add_menu( $thesisgroup_menu_item );

	}  // end foreach Thesis Group


	/** TPS (Third-Party-Support) Group: Sub-Level Entry (under "Thesis Support") */
	$wp_admin_bar->add_group( array(
		'parent' => $thesissupport,
		'id'     => $tpsgroup,
	) );

}  // end of main function ddw_tstb_admin_bar_menu


add_action( 'wp_head', 'ddw_tstb_admin_style' );
add_action( 'admin_head', 'ddw_tstb_admin_style' );
/**
 * Add the styles for new WP Toolbar / Admin Bar entry
 * 
 * @since 1.0
 * @version 1.1
 *
 * @param $tstb_main_icon
 */
function ddw_tstb_admin_style() {

	/** No styles if admin bar is disabled or user is not logged in */
	if ( !is_admin_bar_showing() || !is_user_logged_in() )
		return;

	/** Add CSS styles to wp_head/admin_head */
	$tstb_main_icon = apply_filters( 'tstb_filter_main_icon', ( get_template_directory_uri() . '/lib/images/icon-swatch.png' ) );

	?>
	<style type="text/css">
		#wpadminbar.nojs .ab-top-menu > li.menupop.icon-thesis:hover > .ab-item,
		#wpadminbar .ab-top-menu > li.menupop.icon-thesis.hover > .ab-item,
		#wpadminbar.nojs .ab-top-menu > li.menupop.icon-thesis > .ab-item,
		#wpadminbar .ab-top-menu > li.menupop.icon-thesis > .ab-item {
      			background-image: url(<?php echo $tstb_main_icon; ?>);
			background-repeat: no-repeat;
			background-position: 0.85em 50%;
			padding-left: 30px;
		}
		#wp-admin-bar-ddw-thesis-languages-de > .ab-item:before {
			color: #ff9900;
			content: '• ';
		}
	</style>
	<?php

}  // end of function ddw_tstb_admin_style


/**
 * Helper functions for custom branding of the plugin
 *
 * @since 1.1
 */
	/** Include plugin file with special custom stuff */
	require_once( TSTB_PLUGIN_DIR . '/tstb-branding.php' );
