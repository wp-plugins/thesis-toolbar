<?php
/**
 * Display links to active Thesis Child Themes/Skins settings' pages
 *
 * @package    Thesis Toolbar
 * @subpackage Theme Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/thesis-toolbar/
 * @link       http://twitter.com/#!/deckerweb
 *
 * @since 1.0
 */

/**
 * Display link to active Themedy or ThesisThemes Child theme settings page (premium, by Themedy or ThesisThemes)
 *
 * @since 1.0
 */
if ( function_exists( 'themedy_load_styles' ) ) {

	/** Check for Themedy or ThesisThemes Child Theme name */
	// Themedy: Cinchpress (premium)
	if ( get_current_theme() == 'Cinchpress Child Theme' ) {
		$themedy_child_name = __( 'Cinchpress Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/cinchpress';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// Themedy: Clip Cart (premium)
	} elseif ( get_current_theme() == 'Clip Cart Child Theme' ) {
		$themedy_child_name = __( 'Clip Cart Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/clip-cart';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// Themedy: Feedpop (premium)
	} elseif ( get_current_theme() == 'Feedpop Child Theme' ) {
		$themedy_child_name = __( 'Feedpop Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/feedpop';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// Themedy: Foxy News (premium)
	} elseif ( get_current_theme() == 'Foxy News Child Theme' ) {
		$themedy_child_name = __( 'Foxy News Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/foxynews';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// Themedy: Fremedy (free)
	} elseif ( get_current_theme() == 'Fremedy Child Theme' ) {
		$themedy_child_name = __( 'Fremedy Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/fremedy';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// Themedy: Line It Up (premium)
	} elseif ( get_current_theme() == 'Line It Up Child Theme' ) {
		$themedy_child_name = __( 'Line It Up Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/line-it-up';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// Themedy: MockFive (premium)
	} elseif ( get_current_theme() == 'MockFive Child Theme' ) {
		$themedy_child_name = __( 'MockFive Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/mockfive';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// Themedy: Reactiv (premium)
	} elseif ( get_current_theme() == 'Reactiv Child Theme' ) {
		$themedy_child_name = __( 'Reactiv Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/reactiv';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// Themedy: Readyfolio (premium)
	} elseif ( get_current_theme() == 'Readyfolio Child Theme' ) {
		$themedy_child_name = __( 'Readyfolio Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/readyfolio';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// Themedy: Rough Print (premium)
	} elseif ( get_current_theme() == 'Rough Print Child Theme' ) {
		$themedy_child_name = __( 'Rough Print Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/rough-print';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// Themedy: Smooth Post (premium)
	} elseif ( get_current_theme() == 'Smooth Post Child Theme' ) {
		$themedy_child_name = __( 'Smooth Post Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/smooth-post';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// Themedy: Stage (premium)
	} elseif ( get_current_theme() == 'Stage Child Theme' ) {
		$themedy_child_name = __( 'Stage Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://themedy.com/forum/categories/stage';
		$themedy_support = 'http://themedy.com/forum/';
		$themedy_support_profile = 'http://themedy.com/forum/profile';
	// ThesisThemes: Fresh Company (free)
	} elseif ( get_current_theme() == 'Fresh Company Child Theme' ) {
		$themedy_child_name = __( 'Fresh Company Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://thesisthemes.com/support/categories/community-skin-support-for-our-free-skins';
		$themedy_support = 'http://thesisthemes.com/support/';
		$themedy_support_profile = 'http://thesisthemes.com/support/profile';
	// ThesisThemes: Simple Life (free)
	} elseif ( get_current_theme() == 'Simple Life Child Theme' ) {
		$themedy_child_name = __( 'Simple Life Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://thesisthemes.com/support/categories/community-skin-support-for-our-free-skins';
		$themedy_support = 'http://thesisthemes.com/support/';
		$themedy_support_profile = 'http://thesisthemes.com/support/profile';
	// ThesisThemes: Straight Shooter (free)
	} elseif ( get_current_theme() == 'Straight Shooter Child Theme' ) {
		$themedy_child_name = __( 'Straight Shooter Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://thesisthemes.com/support/categories/community-skin-support-for-our-free-skins';
		$themedy_support = 'http://thesisthemes.com/support/';
		$themedy_support_profile = 'http://thesisthemes.com/support/profile';
	// ThesisThemes: Thesis Bold (free)
	} elseif ( get_current_theme() == 'Thesis Bold Child Theme' ) {
		$themedy_child_name = __( 'Thesis Bold Child Theme Settings', 'thesis-toolbar' );
		$themedy_child_forum = 'http://thesisthemes.com/support/categories/community-skin-support-for-our-free-skins';
		$themedy_support = 'http://thesisthemes.com/support/';
		$themedy_support_profile = 'http://thesisthemes.com/support/profile';
	}  // end-if Themedy and ThesisThemes Child name check

	/** "Theme Group" menu items */
	$menu_items['themedysettings'] = array(
		'parent' => $tgroup,
		'title'  => $themedy_child_name,
		'href'   => admin_url( 'themes.php?page=themedy' ),
		'meta'   => array( 'target' => '', 'title' => $themedy_child_name )
	);
	$menu_items['themedy-readme'] = array(
		'parent' => $themedysettings,
		'title'  => __( 'README Info', 'thesis-toolbar' ),
		'href'   => admin_url( 'themes.php?page=readme' ),
		'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'thesis-toolbar' ) )
	);
	$menu_items['themedy-support'] = array(
		'parent' => $themedysettings,
		'title'  => __( 'Support Forum', 'thesis-toolbar' ),
		'href'   => $themedy_child_forum,
		'meta'   => array( 'title' => __( 'Support Forum for Child Theme', 'thesis-toolbar' ) )
	);

	/** Check for custom background support */
	if ( current_theme_supports( 'custom-background' ) ) {
		$menu_items['themedy-background'] = array(
			'parent' => $themedysettings,
			'title'  => __( 'Custom Background', 'thesis-toolbar' ),
			'href'   => admin_url( 'themes.php?page=custom-background' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Background', 'thesis-toolbar' ) )
		);
	}  // end-if custom background

	/** Check for custom header support */
	if ( current_theme_supports( 'custom-header' ) ) {
		$menu_items['themedy-header'] = array(
			'parent' => $themedysettings,
			'title'  => __( 'Custom Header', 'thesis-toolbar' ),
			'href'   => admin_url( 'themes.php?page=custom-header' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Header', 'thesis-toolbar' ) )
		);
	}  // end-if custom header

	/** Entries at "Thesis Support" section */
	$menu_items['thesissupport-themedy'] = array(
		'parent' => $tpsgroup,
		'title'  => __( 'Themedy Support Forum', 'thesis-toolbar' ),
		'href'   => $themedy_support,
		'meta'   => array( 'title' => __( 'Themedy Support Forum', 'thesis-toolbar' ) )
	);
	$menu_items['thesissupport-themedyprofile'] = array(
		'parent' => $tpsgroup,
		'title'  => __( 'Themedy User Profile', 'thesis-toolbar' ),
		'href'   => $themedy_support_profile,
		'meta'   => array( 'title' => __( 'Themedy User Profile', 'thesis-toolbar' ) )
	);

}  // end-if Themedy check


/**
 * Display link to active BlogSkin Skin settings page (premium, by ThesisAwesome)
 *
 * @since 1.0
 */
if ( function_exists( 'ta_admin_options' ) ) {

	/** Check for ThesisAwesome skin name */
	// ThesisAwesome: BlogSkin (premium)
	if ( $themename = 'BlogSkin' ) {
		$thesisawesome_skin_name = __( 'BlogSkin Settings', 'thesis-toolbar' );
	// ThesisAwesome: Avenger (premium)
	} elseif ( $themename = 'Avenger' ) {
		$thesisawesome_skin_name = __( 'Avenger Settings', 'thesis-toolbar' );
	// ThesisAwesome: Silver (premium)
	} elseif ( $themename = 'Silver' ) {
		$thesisawesome_skin_name = __( 'Silver Settings', 'thesis-toolbar' );
	}  // end-if ThesisAwesome check

	/** "Theme Group" menu items */
	$menu_items['thesisawesomesettings'] = array(
		'parent' => $tgroup,
		'title'  => $thesisawesome_skin_name,
		'href'   => admin_url( 'admin.php?page=ta_admin' ),
		'meta'   => array( 'target' => '', 'title' => $thesisawesome_skin_name )
	);
	$menu_items['thesisawesome-support'] = array(
		'parent' => $thesisawesomesettings,
		'title'  => __( 'Support Forum', 'thesis-toolbar' ),
		'href'   => 'http://www.thesisawesome.com/support/',
		'meta'   => array( 'title' => __( 'Support Forum for Skin', 'thesis-toolbar' ) )
	);

	/** Entry at "Thesis Support" section */
	$menu_items['thesissupport-thesisawesome'] = array(
		'parent' => $tpsgroup,
		'title'  => __( 'ThesisAwesome Support Forum', 'thesis-toolbar' ),
		'href'   => 'http://www.thesisawesome.com/support/',
		'meta'   => array( 'title' => __( 'ThesisAwesome Support Forum', 'thesis-toolbar' ) )
	);
}  // end-if ThesisAwesome check


/**
 * Display link to active KolFolio Skin settings page (free, by KolaKube.com)
 *
 * @since 1.0
 */
if ( function_exists( 'kol_option' ) ) {

	/** "Theme Group" menu items */
	$menu_items['kolakubesettings'] = array(
		'parent' => $tgroup,
		'title'  => __( 'KolFolio Settings', 'thesis-toolbar' ),
		'href'   => admin_url( 'admin.php?page=kolfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'KolFolio Skin Settings', 'thesis-toolbar' ) )
	);
	$menu_items['kolakubesettings-docs'] = array(
		'parent' => $kolakubesettings,
		'title'  => __( 'Documentation', 'thesis-toolbar' ),
		'href'   => 'http://kolakube.com/docs/',
		'meta'   => array( 'title' => 'Kolakube ' . __( 'Documentation', 'thesis-toolbar' ) )
	);
	$menu_items['kolakubesettings-support'] = array(
		'parent' => $kolakubesettings,
		'title'  => __( 'Support Forum', 'thesis-toolbar' ),
		'href'   => 'http://kolakube.com/forum/',
		'meta'   => array( 'title' => 'Kolakube ' . __( 'Support Forum for Skin', 'thesis-toolbar' ) )
	);
	$menu_items['kolakubesettings-supportaccount'] = array(
		'parent' => $kolakubesettings,
		'title'  => __( 'Support User Account', 'thesis-toolbar' ),
		'href'   => 'http://kolakube.com/forum/index.php?app=nexus&module=clients/',
		'meta'   => array( 'title' => 'Kolakube ' . __( 'Support User Account', 'thesis-toolbar' ) )
	);

	/** Entries at "Thesis Support" section */
	$menu_items['thesissupport-kolakubedocs'] = array(
		'parent' => $tpsgroup,
		'title'  => 'Kolakube ' . __( 'Documentation', 'thesis-toolbar' ),
		'href'   => 'http://kolakube.com/docs/',
		'meta'   => array( 'title' => 'Kolakube ' . __( 'Documentation', 'thesis-toolbar' ) )
	);
	$menu_items['thesissupport-kolakubesupport'] = array(
		'parent' => $tpsgroup,
		'title'  => 'Kolakube ' . __( 'Support Forum', 'thesis-toolbar' ),
		'href'   => 'http://kolakube.com/forum/',
		'meta'   => array( 'title' => 'Kolakube ' . __( 'Support Forum for Skin', 'thesis-toolbar' ) )
	);
	$menu_items['thesissupport-kolakubesupportaccount'] = array(
		'parent' => $tpsgroup,
		'title'  => 'Kolakube ' . __( 'Support User Account', 'thesis-toolbar' ),
		'href'   => 'http://kolakube.com/forum/index.php?app=nexus&module=clients/',
		'meta'   => array( 'title' => 'Kolakube ' . __( 'Support User Account', 'thesis-toolbar' ) )
	);
}  // end-if KolFolio check
