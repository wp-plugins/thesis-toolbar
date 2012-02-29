=== Thesis Toolbar ===
Contributors: daveshine
Donate link: http://genesisthemes.de/en/donate/
Tags: toolbar, tool bar, adminbar, admin bar, thesis, thesis theme, thesiswp, framework, administration, resources, links, theme, settings, manage, deckerweb, ddwtoolbar
Requires at least: 3.3
Tested up to: 3.4-alpha
Stable tag: 1.0

This plugin adds useful admin links and resources for the Thesis Theme/Framework to the WordPress Toolbar / Admin Bar.

== Description ==

This **small and lightweight plugin** just adds a lot Thesis Theme related resources to your toolbar / admin bar. Also links to all settings pages of this parent theme/framework are added making life for webmasters a lot easier. So you might just switch from the fontend of your site to the Thesis 'Design Options' or adjust the 'Custom File Editor' etc.

As the name suggests this plugin is **intended towards site admins and webmasters**. The new admin bar entries will only be displayed if the current user has the WordPress capability of `edit_themes` or `edit_theme_options`. (Note: I am open for suggestions here if this should maybe changed to a more suitable capability.)

= Special Features =
* Not only supporting official Thesis/DIYthemes sites ALSO third-party and user links - so just the whole Thesis ecosystem :)
* This time supporting all official  sites
* Link to downloadable German language packs - only displayed when German locales are active (de_DE, de_AT, de_CH, de_LU)
* *NOTE:* I would be happy to add more language/locale specific resources and more useful third-party links - just contact me!

= Plugin/ Theme Support =
*At this time the plugin out of the box supports also links to settings pages of some Thesis specific plugins and child themes/skins:*

* Plugin: "Thesis OpenHook" (free, by Rick Beckman)
* Plugin: "BYOB Thesis Simple Header Widgets" (free, by Rick Anderson)
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

**Multisite install:** Yes, it's fully compatible but have a look in the [FAQ section here](http://wordpress.org/extend/plugins/thesis-toolbar/faq/) for more info :)

For custom and update-secure language files please upload them to `/wp-content/languages/thesis-toolbar/` (just create this folder) - This enables you to use fully custom translations that won't be overridden on plugin updates. Also, fully custom English wording is possible with that, just use a language file like `thesis-toolbar-en_US.mo/.po` to achieve that.

== Frequently Asked Questions ==

= Does this plugin work with latest WP version and also older versions? =
Yes, this plugin works really fine with the latest WordPress 3.3+!
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

== Screenshots ==

1. Thesis Toolbar in default state (running with WordPress 3.3+ here)
2. Thesis Toolbar in action - primary level (running with WordPress 3.3+ here)
3. Thesis Toolbar in action - a secondary level - settings (running with WordPress 3.3+ here)
4. Thesis Toolbar in action - a secondary level - documentation & codex (running with WordPress 3.3+ here)
5. Thesis Toolbar in action - a secondary level - resources (running with WordPress 3.3+ here)
6. Thesis Toolbar in action - language specific links at the bottom - for German locales (running with WordPress 3.3+ here)

== Changelog ==

= 1.0 =
* Initial release
* Including support for 20 child themes/skins
* Including support for 7 Thesis specific plugins

== Upgrade Notice ==

= 1.0 =
Just released into the wild.

== Translations ==

* English - default, always included
* German: Deutsch - immer dabei! [Download auch via deckerweb.de](http://deckerweb.de/material/sprachdateien/thesis-theme/#thesis-toolbar)
* For custom and update-secure language files please upload them to `/wp-content/languages/thesis-toolbar/` (just create this folder) - This enables you to use fully custom translations that won't be overridden on plugin updates. Also, fully custom English wording is possible with that, just use a language file like `thesis-toolbar-en_US.mo/.po` to achieve that.

*Note:* All my plugins are localized/ translateable by default. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful. For translating I recommend the awesome ["Codestyling Localization" plugin](http://wordpress.org/extend/plugins/codestyling-localization/) and for validating the ["Poedit Editor"](http://www.poedit.net/), which works fine on Windows, Mac and Linux.

== Additional Info ==
**Idea Behind / Philosophy:** Just a little leightweight plugin for all the Thesis users out there to make their daily web admin life a bit easier. I'll try to add more plugin support if it makes some sense. So stay tuned :).

**Thesis News Planet** I also have started a little news/feed service via "FriendFeed" that you can subscribe to: http://friendfeed.com/thesisnews -- Please contact me via my Twitter for new resources (that have an RSS feed and are Thesis-related!)
