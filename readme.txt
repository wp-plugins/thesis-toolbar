=== Thesis Toolbar ===
Contributors: daveshine, deckerweb
Donate link: http://genesisthemes.de/en/donate/
Tags: toolbar, tool bar, adminbar, admin bar, thesis, thesis theme, thesiswp, framework, administration, resources, links, theme, settings, manage, deckerweb, ddwtoolbar
Requires at least: 3.3
Tested up to: 3.4-alpha
Stable tag: 1.1

This plugin adds useful admin links and resources for the Thesis Theme/Framework to the WordPress Toolbar / Admin Bar.

== Description ==

= Have Quicker Access to Your Thesis Resources - Time Saver! =
This **small and lightweight plugin** just adds a lot Thesis Theme related resources to your toolbar / admin bar. Also links to all settings pages of this parent theme/framework are added making life for webmasters a lot easier. So you might just switch from the frontend of your site to the Thesis 'Design Options' or adjust the 'Custom File Editor' etc.

= General Features =
* All Thesis settings, as well as community extensions are hooked in!
* Access your stuff from one place in the toolbar on backend and frontend, without much scrolling...
* Alternate main Icon with 11 additional colors included :) (changeable via filters)
* Plus 4 filters included to change wording/tooltip and icon of the main item - for more info [see FAQ section here](http://wordpress.org/extend/plugins/thesis-toolbar/faq/)
* For custom "branding" or special needs a few sections like "Extensions" and "Resource links group" could be hidden from displaying via your active child theme/skin - for more info [see FAQ section here](http://wordpress.org/extend/plugins/thesis-toolbar/faq/)
* Fully internationalized! Real-life tested and developed with international users in mind!
* Fully WPML compatible!
* Fully Multisite compatible, you can also network-enable it if ever needed (per site use is recommended).
* Tested with WordPress versions 3.3.1 and 3.4-alpha - also in debug mode (no stuff there, ok? :)

= Special Features =
* Not only supporting all official Thesis/DIYthemes sites ALSO third-party and user links - so just the whole Thesis ecosystem :)
* Link to downloadable German language packs - only displayed when German locales are active (de_DE, de_AT, de_CH, de_LU)
* *NOTE:* I would be happy to add more language/locale specific resources and more useful third-party links - just contact me!

As the name suggests this plugin is **intended towards site admins and webmasters**. The new admin bar entries will only be displayed if the current user has the WordPress capability of `edit_theme_options`. (Note: I am open for suggestions here if the default value should maybe changed to a more suitable capability. However, you can now tweak this also yourself using our new filter :)

= Plugin/ Theme Support =
*At this time the plugin out of the box supports also links to settings pages of some Thesis specific plugins and child themes/skins:*

* Plugin: "Thesis OpenHook" (free, by Rick Beckman) - supporting both, 2.x and new 3.x branch! :)
* Plugin: "BYOB Thesis Simple Header Widgets" (free, by Rick Anderson)
* Plugin series by "BYOB", including: "Exclude Categories From Posts", "Feature Box", "Footer Widgets", "Full Width Backgrounds", "Header Horizontal Layout", "Mobile Content Switcher", "Nav Menu", "Shortcode Content Widgets", "Sub Sidebars", "Widget Styles", "WP Menus" (all premium, by Rick Anderson)
* Plugin: "Thesis Footer Tool" (free, by Grand Slambert)
* Plugin: "Thesis Restore Points" (free, by Thesify Team)
* Plugin: "Thesis Import/Export" (free, by 3DogMedia)
* Plugin: "Author hReview" (free, by Hesham Zebida)
* Plugin: "Thesography" (free, by kristarella)
* Child Themes: All child themes by Themedy (11 premium + 1 free)
* Child Themes: All free child themes by ThesisThemes (4 free)
* Skins: "BlogSkin", "Avenger", "Silver" by ThesisAwesome (all premium)
* Skin: "KolFolio" by Kolakube (free)
* *Your child theme/ skin/ plugin? - [Just contact me with specific data](http://genesisthemes.de/en/contact/)*

= Localization =
* English (default) - always included
* German - always included
* .pot file (`thesis-toolbar.pot`) for translators is also always included :)
* *Your translation? - [Just send it in](http://genesisthemes.de/en/contact/)*

Credit where credit is due: This plugin here is inspired and based on the work of Remkus de Vries @defries and his original "WooThemes Admin Bar Addition" plugin.

[A plugin from deckerweb.de and GenesisThemes](http://genesisthemes.de/en/)

= Feedback =
* I am open for your suggestions and feedback - Thank you for using or trying out one of my plugins!
* Drop me a line [@deckerweb](http://twitter.com/#!/deckerweb) on Twitter
* Follow me on [my Facebook page](http://www.facebook.com/deckerweb.service)
* Or follow me on [+David Decker](http://deckerweb.de/gplus) on Google Plus ;-)

= More =
* [Also see my other plugins](http://genesisthemes.de/en/wp-plugins/) or see [my WordPress.org profile page](http://profiles.wordpress.org/users/daveshine/)
* Tip: [*GenesisFinder* - Find then create. Your Genesis Framework Search Engine.](http://genesisfinder.com/)

== Installation ==

1. Upload the entire `thesis-toolbar` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Look at your toolbar / admin bar and enjoy using the new links there :)
4. Go and manage your theme/framework settings :)

**Please note, this plugin requires WordPress 3.3 or higher in order to work!**

**Also note:** This plugin has NO settings page because I believe it's just not neccessarry. All customizing could be done via filters, constants and regular WordPress user roles & capabilities. As the plugin is indended for a admin/ webmaster use that's the way to go. This way we can save the overhaul of an options panel/settings page, additional database requests, uninstall routines and such. End result: a lightweight system that just works and saves clicks & time :-).

**Multisite install:** Yes, it's fully compatible but have a look in the [FAQ section here](http://wordpress.org/extend/plugins/thesis-toolbar/faq/) for more info :)

**Own translation/wording:** For custom and update-secure language files please upload them to `/wp-content/languages/thesis-toolbar/` (just create this folder) - This enables you to use fully custom translations that won't be overridden on plugin updates. Also, fully custom English wording is possible with that, just use a language file like `thesis-toolbar-en_US.mo/.po` to achieve that (for creating one see the tools on "Other Notes").

== Frequently Asked Questions ==

= Does this plugin work with latest WP version and also older versions? =
Yes, this plugin works really fine with the latest WordPress 3.3+ including latest 3.4-alpha!
And sorry, it DOES NOT work with older WordPress versions so please update your install if you haven't done yet :).

= How are new resources being added to the toolbar/admin bar? =
Just drop me a note on [my Twitter @deckerweb](http://twitter.com/deckerweb) or via my contact page and I'll add the link if it is useful for admins/ webmasters and the Thesis #thesiswp community.

= How could my plugin/extension or child theme/skin options page be added to the toolbar/admin bar links? =
This is possible of course and highly welcomed! Just drop me a note on [my Twitter @deckerweb](http://twitter.com/deckerweb) or via my contact page and we sort out the details!
Particularly, I need the admin url for the primary options page (like so `wp-admin/admin.php?page=foo`) - this is relevant for both, plugins and child themes. For child themes then I also need the correct name defined in the stylesheet (like so `Footheme`) and the correct folder name (like so `footheme-folder`) because this would be the template name when using with child themes. For skins I need a certain skin-only function name or class name. (Note: I don't own all the premium stuff myself yet so you're more than welcomed to help me out with these things. Thank you!)

= Is this plugin Multisite compatible? =
Yes, it is! :) Works really fine in Multisite invironment - here I just recommend to activate on a per site basis so to load things only where and when needed.

= In Multisite, could I "network enable" this plugin? =
Yes, you could. -- However, it doesn't make much sense. The plugin is intented for a per site use as the admin links refer to the special settings, plugin-support and child theme/skin support for that certain site/blog. So if you have a Multisite install with 5 sites but only 3 would run on "Thesis" then the other 2 sites will only see support links in the Toolbar / Admin Bar... I guess, you got it? :)

Though intended for a per site use it could make some sense in such an edge case: if all of the sites in Multisite use the Thesis Theme and have lots of Thesis-specific plugins. This might be the case if you use Multisite for multilingual projects, especially with that awesome plugin: http://wordpress.org/extend/plugins/multilingual-press/

= Can certain sections be removed? =
Yes, this is possible! You can remove the following sections: "Child Theme/Skin" area (all items) / "Extensions" (main item + sub items!) / "Resources link group" at the bottom (all items) / "German language stuff" (all items)

To achieve this add one, some or all of the following constants to your `custom_functions.php` file or child theme's or skin's `functions.php` or similar file:
`
/** Thesis Toolbar: Remove Child Theme/Skin Items */
define( 'TSTB_CHILD_SKIN_DISPLAY', FALSE );

/** Thesis Toolbar: Remove Extensions Items */
define( 'TSTB_EXTENSIONS_DISPLAY', FALSE );

/** Thesis Toolbar: Remove Resource Items */
define( 'TSTB_RESOURCES_DISPLAY', FALSE );

/** Thesis Toolbar: Remove German Language Items */
define( 'TSTB_DE_DISPLAY', FALSE );
`

= Can the the whole toolbar entry be removed, especially for certain users? =
Yes, that's also possible! This could be useful if your site has special user roles/capabilities or other settings that are beyond the default WordPress stuff etc. For example: if you want to disable the display of any "Thesis Toolbar" items for all user roles of "Editor" please use this code:
`
/** Thesis Toolbar: Remove all items for "Editor" user role */
if ( current_user_can( 'editor' ) ) {
	define( 'TSTB_DISPLAY', FALSE );
}
`

To hide only from the user with a user ID of "2":
`
/** Thesis Toolbar: Remove all items for user ID 2 */
if ( 2 == get_current_user_id() ) {
	define( 'TSTB_DISPLAY', FALSE );
}
`

To hide items only in frontend use this code:
`
/** Thesis Toolbar: Remove all items from frontend */
if ( !is_admin() ) {
	define( 'TSTB_DISPLAY', FALSE );
}
`

In general, use this constant do hide any "Thesis Toolbar" items:
`
/** Thesis Toolbar: Remove all items */
define( 'TSTB_DISPLAY', FALSE );
`

= Available Filters to Customize More Stuff =
All filters are listed with the filter name in bold and the below additional info, helper functions (if available) as well as usage examples.

**tstb_filter_capability_all**

* Default value: `edit_theme_options`
* 4 Predefined helper functions:
 * `__tstb_admin_only` -- returns `'administrator'` role -- usage:
`
add_filter( 'tstb_filter_capability_all', '__tstb_admin_only' );
`
 * `__tstb_role_editor` -- returns `'editor'` role -- usage:
`
add_filter( 'tstb_filter_capability_all', '__tstb_role_editor' );
`
 * `__tstb_cap_switch_themes` -- returns `'edit_switch_themes'` capability -- usage:
`
add_filter( 'tstb_filter_capability_all', '__tstb_cap_switch_themes' );
`
 * `__tstb_cap_manage_options` -- returns `'manage_options'` capability -- usage:
`
add_filter( 'tstb_filter_capability_all', '__tstb_cap_manage_options' );
`
 * `__tstb_cap_install_plugins` -- returns `'install_plugins'` capability -- usage:
`
add_filter( 'tstb_filter_capability_all', '__tstb_cap_install_plugins' );
`
* Another example:
`
add_filter( 'tstb_filter_capability_all', 'custom_tstb_capability_all' );
/**
 * Thesis Toolbar: Change Main Capability
 */
function custom_tstb_capability_all() {
	return 'activate_plugins';
}
`
--> Changes the capability to `activate_plugins`

**tstb_filter_main_icon**

* Default value: Thesis default graphic like in the admin menu
* 11 Predefined helper functions for the 11 included colored icons, returning special colored icon values - the helper function always has this name: `__tstb_colornamehere_icon()` this results in the following filters ready for usage:
`
add_filter( 'tstb_filter_main_icon', '__tstb_blue_icon' );

add_filter( 'tstb_filter_main_icon', '__tstb_brown_icon' );

add_filter( 'tstb_filter_main_icon', '__tstb_green_icon' );

add_filter( 'tstb_filter_main_icon', '__tstb_green2_icon' );

add_filter( 'tstb_filter_main_icon', '__tstb_grey_icon' );

add_filter( 'tstb_filter_main_icon', '__tstb_khaki_icon' );

add_filter( 'tstb_filter_main_icon', '__tstb_orange_icon' );

add_filter( 'tstb_filter_main_icon', '__tstb_pink_icon' );

add_filter( 'tstb_filter_main_icon', '__tstb_red_icon' );

add_filter( 'tstb_filter_main_icon', '__tstb_turquoise_icon' );

add_filter( 'tstb_filter_main_icon', '__tstb_yellow_icon' );
`
* Example for using the "custom" folder in your Thesis install:
`
add_filter( 'tstb_filter_main_icon', 'custom_folder_tstb_main_icon' );
/**
 * Thesis Toolbar: Change Main Icon ("custom" Folder)
 */
function custom_folder_tstb_main_icon() {
	return THESIS_CUSTOM_FOLDER . '/images/custom-icon.png';
}
`
* Another example for using with child themes and Thesis:
`
add_filter( 'tstb_filter_main_icon', 'custom_child_tstb_main_icon' );
/**
 * Thesis Toolbar: Change Main Icon (Child Theme)
 */
function custom_child_tstb_main_icon() {
	return get_stylesheet_directory_uri() . '/images/custom-icon.png';
}
`
--> Uses a custom image from your active child theme's `/images/` folder
--> Recommended dimensions are 16px x 16px

**tstb_filter_main_icon_display**

* Returning the CSS class for the main item icon
* Default value: `icon-thesis` (class is: `.icon-thesis`)
* 1 Predefined helper function:
 * `__tstb_no_icon_display()` -- usage:
`
add_filter( 'tstb_filter_main_icon_display', '__tstb_no_icon_display' );
`
 * This way you can REMOVE the icon!
* Another example:
`
add_filter( 'tstb_filter_main_icon_display', 'custom_tstb_main_icon_display_class' );
/**
 * Thesis Toolbar: Change Main Icon CSS Class
 */
function custom_tstb_main_icon_display_class() {
	return 'your-custom-icon-class';
}
`
--> You then have to define CSS rules in your `custom.css` file or your child theme/skin stylesheet for your own custom class `.your-custom-icon-class`

**tstb_filter_main_item**

* Default value: "Thesis"
* Example code for your `custom_functions.php` file or similar file from child theme/skin:
`
add_filter( 'tstb_filter_main_item', 'custom_tstb_main_item' );
/**
 * Thesis Toolbar: Change Main Item Name
 */
function custom_tstb_main_item() {
	return __( 'Your custom main item', 'your-child-theme-textdomain' );
}
`

**tstb_filter_main_item_tooltip**

* Default value: "Thesis Theme"
* Example code for your `custom_functions.php` file or similar file from child theme/skin:
`
add_filter( 'tstb_filter_main_item_tooltip', 'custom_tstb_main_item_tooltip' );
/**
 * Thesis Toolbar: Change Main Item Name's Tooltip
 */
function custom_tstb_main_item_tooltip() {
	return __( 'Your custom main item tooltip', 'your-child-theme-textdomain' );
}
`

**tstb_filter_thesis_name** and **tstb_filter_thesis_name_tooltip**

* Default value for both: "Thesis"
* Used for some items within toolbar links to enable proper branding
* Change things like in the other examples/principles shown above

**Final note:** If you don't like to add your customizations to your `custom_functions.php` file or similar file of child theme/skin you can also add them to a functionality plugin or an mu-plugin. This way you can also use this better for Multisite environments. In general you are then more independent from child theme changes etc.

All the custom & branding stuff code above can also be found as a Gist on GitHub: https://gist.github.com/2181318

== Screenshots ==

1. Thesis Toolbar in default state (running with WordPress 3.3+ here)
2. Thesis Toolbar in action - primary level (running with WordPress 3.3+ here)
3. Thesis Toolbar in action - a secondary level - settings (running with WordPress 3.3+ here)
4. Thesis Toolbar in action - a secondary level - documentation & codex (running with WordPress 3.3+ here)
5. Thesis Toolbar in action - a secondary level - resources (running with WordPress 3.3+ here)
6. Thesis Toolbar in action - language specific links at the bottom - for German locales (running with WordPress 3.3+ here)

== Changelog ==

= 1.1 (2012-03-24) =
* *Extended possibilities for users to customize the plugin output:*
 * NEW: Added filter for main item icon to use custom icon.
 * NEW: Added filters for main item name to use a custom or no name (for example only keep the icon...) plus: for main item name's tooltip
 * NEW: Added alternate main Icon in 11 additional colors (changeable via filters)
 * NEW: Added possibility to remove certain sections - in general or for certain conditions (user roles, user ID's etc.)
 * *For more info on that topic and for code examples for filters and constants [see the FAQ section here](http://wordpress.org/extend/plugins/thesis-toolbar/faq/)*
* *Extended third-party plugin support:*
 * Added support for 11 Thesis-specific premium plugins from the "BYOB" brand
* *More plugin updates with the following:*
 * UPDATE: Added support for new plugin version of "Thesis OpenHook" - and kept support for old version!
 * UPDATE: Improved and generalized the Thesis detection code to be more independent from Thesis updates - all newer releases should now appear without any issues!
 * CODE: Minor code/documentation tweaks.
 * UPDATE: Corrected/updated readme.txt file.
 * UPDATE: Updated some screenshots.
 * UPDATE: Improved some language strings, also updated German translations as well as the .pot file for all translators!

= 1.0 (2012-02-23) =
* Initial release
* Including support for 20 child themes/skins
* Including support for 7 Thesis specific plugins

== Upgrade Notice ==

= 1.1 =
Major changes & improvements - Added filters & constants for customizing; extended plugin support. Optimized and improved code, documentation and language files. Also updated .pot file for translators together with German translations.

= 1.0 =
Just released into the wild.

== Translations ==

* English - default, always included
* German: Deutsch - immer dabei! [Download auch via deckerweb.de](http://deckerweb.de/material/sprachdateien/thesis-theme/#thesis-toolbar)
* For custom and update-secure language files please upload them to `/wp-content/languages/thesis-toolbar/` (just create this folder) - This enables you to use fully custom translations that won't be overridden on plugin updates. Also, complete custom English wording is possible with that as well, just use a language file like `thesis-toolbar-en_US.mo/.po` to achieve that (for creating one see the following tools on).

*Note:* All my plugins are localized/ translateable by default. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful. For translating I recommend the awesome ["Codestyling Localization" plugin](http://wordpress.org/extend/plugins/codestyling-localization/) and for validating the ["Poedit Editor"](http://www.poedit.net/), which works fine on Windows, Mac and Linux.

== Additional Info ==
**Idea Behind / Philosophy:** Just a little leightweight plugin for all the Thesis users out there to make their daily web admin life a bit easier. I'll try to add more plugin support if it makes some sense. So stay tuned :).

**Thesis News Planet** I also have started a little news/feed service via "FriendFeed" that you can subscribe to: http://friendfeed.com/thesisnews -- Please contact me via my Twitter for new resources (that have an RSS feed and are Thesis-related!)

**Filters and Constants for Customizing** See FAQ section here or step up to out Gist on GitHub: https://gist.github.com/2181318 (you can also add your questions/ feedback there :)
