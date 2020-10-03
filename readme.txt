=== My Custom Functions ===
Contributors: Arthur Gareginyan
Tags: inject code, inject function, inject snippet, inject php, insert code, insert function, insert snippet, insert php, execute code, execute function, execute snippet, execute php, inject custom code, inject custom function, inject custom snippet, inject custom php, insert custom code, insert custom function, insert custom snippet, insert custom php, execute custom code, execute custom function, execute custom snippet, execute custom php, code, function, snippet, php, functionality plugin
Donate link: https://www.spacexchimp.com/donate.html
Requires at least: 4.9
Tested up to: 5.5
Requires PHP: 5.6
Stable tag: 4.43
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easily and safely add your custom PHP code to your WordPress website, directly out of the WordPress Admin Area, without the need to have an external editor.


== Description ==

An easy to use, with intuitive interface, WordPress plugin that gives you the ability to easily and safely add your custom PHP code to your WordPress website, directly out of the WordPress Admin Area, without the need to have an external editor.

This is a simple and perfect tool to use as your website's functionality plugin. This is a must have tool for authors and website's owners. Its purpose is to provide a familiar experience to WordPress users. There is no need for any more editing of the functions.php file of your theme or any of your plugin files for to add custom PHP code. Just add your custom PHP code in the field on the plugin page and this plugin will do the rest for you. It will automatically add your PHP code to your website, without changing any of your theme files and without slowing down your website.

The plugin works completely independently of the theme, so you can use it with any theme, and regardless of whether the theme does or does not have a functions.php file. The code you place on the plugin page will be entirely unaffected if you edit the contents of the theme’s functions.php file, or even completely change the theme. This is really useful in case of updating theme or plugins, because your custom PHP code would never be overwritten. Your custom PHP code will keep on working, no matter how many times you upgrade or switch your theme and plugins.

On the plugin page you find the code editor powered by CodeMirror. This code editor has options such as syntax highlighting, line numbering, and more. And if you want more options, let us know and we will be happy to add them.

**Features**

* Lightweight and fast
* Secure code with using clear coding standards
* Intuitive interface
* Cross browser compatible (work smooth in any modern browser)
* Compatible with all WordPress themes
* RTL compatible (right to left)
* Translation ready

**Key features include**

* Insert custom PHP code into the site
* Checks the entered code for fatal errors
* Easy disable option for WSOD
* Ability to temporarily disable all custom PHP code
* Code syntax highlighting
* Line numbering
* Active line highlighting
* Editor allow for Tab indentation
* And much, much more!

**PRO features include**

* Ability to easily customize the code editor by selecting the desired settings
* 56 themes for syntax highlighting
* Toolbar with useful buttons, such as Undo, Redo, etc.
* Ability to use shortcut keys (both Mac and PC) for Search, Replace, etc.
* Unlimited number of fields for functions
* Automatic backup of all functions to a downloadable text file
* Separate activation and deactivation of functions
* No ads on the settings page
* Well documented

[Get the PRO version now!](https://www.spacexchimp.com/plugins/my-custom-functions-pro.html)

**Supported languages**

* PHP

**Translation**

This plugin is ready for translation and has already been translated into several languages. But If your language is not available then you can make one. It is also possible that not all existing translations are up-to-date or correct, so you are welcome to make corrections. Many of plugin users would be delighted if you share your translation with the community. Thanks for your contribution!

* English (default)
* Russian (translation by [Milena Kiseleva](https://www.instagram.com/milava_kiseleva/))
* German (translation by Michael)
* Chinese-Taiwan (translation by Gordon Yu)
* Spanish (translation by Ramiro Garcés and Patricio Toledo)
* Dutch (translation by Peter Leenders)
* French (translation by Jean-Michel, Theophil Bethel and Hervé Bouzin)

If you want to help translate this plugin, please visit the [translation page](https://translate.wordpress.org/projects/wp-plugins/my-custom-functions).

**Minimum system requirements:**

* [WordPress](https://wordpress.org) version **4.9** or higher.
* [PHP](https://secure.php.net) version **5.6** or higher.
* [MySQL](https://www.mysql.com) version **5.0** or higher.

**Recommended system requirements:**

* [WordPress](https://wordpress.org) version **5.0** or higher.
* [PHP](https://secure.php.net) version **7.0** or higher.
* [MySQL](https://www.mysql.com) version **5.6** or higher.

**Contribution**

Developing plugins is long and tedious work. If you benefit or enjoy this plugin please take the time to:

* [Donate](https://www.spacexchimp.com/donate.html) to support ongoing development. Your contribution would be greatly appreciated.
* [Rate and Review](https://wordpress.org/support/plugin/my-custom-functions/reviews/#new-post) this plugin.
* [Share with us](https://www.spacexchimp.com/contact.html) or view the [GitHub Repo](https://github.com/ArthurGareginyan/my-custom-functions) if you have any ideas or suggestions to make this plugin better.


== Installation ==

Install "My Custom Functions" just as you would any other WordPress Plugin.

Automatically via WordPress Admin Area:

1. Log in to Admin Area of your WordPress website.
2. Go to "`Plugins`" -> "`Add New`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manually via FTP access:

1. Download a copy (ZIP file) of this plugin from WordPress.org.
2. Unzip the ZIP file.
3. Upload the unzipped catalog to your website's plugin directory (`/wp-content/plugins/`).
4. Log in to Admin Area of your WordPress website.
5. Activate this plugin through the "`Plugins`" tab.

After installation and activation, the "`PHP Inserter`" menu item will appear in the "`Settings`" section of Admin Area. Click on it in order to view the plugin settings page.

[More help installing plugins](https://wordpress.org/support/article/managing-plugins/ "WordPress Codex: Installing Plugins")


== Frequently Asked Questions ==

= Q. Will this plugin work on my wordpress.COM website? =
A. Sorry, this plugin is available for use only on self-hosted (wordpress.ORG) websites.

= Q. Can I use this plugin on my language? =
A. Yes. This plugin is ready for translation and has already been translated into several languages. But If your language is not available then you can make one. It is also possible that not all existing translations are up-to-date or correct, so you are welcome to make corrections. Many of plugin users would be delighted if you share your translation with the community. Thanks for your contribution!

If you want to help translate this plugin, please use the POT file that is included and placed in the `languages` folder to create a translation PO file. Just [send the PO file to us](https://www.spacexchimp.com/contact.html) and we will include this translation within the next plugin update.

= Q. How does it work? =
A. Simply go to the plugin settings page, place your custom PHP code in the code editor field, switch the toggle to the "ON" position and click the "Save changes" button. Enjoy the result of applying your custom PHP code. It's that simple!
You can find the plugin settings page at "`WordPress Admin Area`" -> "`Settings`" -> "`PHP Inserter`".

= Q. Can I use HTML/CSS/JS code integrated in PHP code? =
A. Yes. But you need to do it properly, like this:

`function my_custom_html_code() {

    // Print the custom HTML code
    echo '<script>YOUR CUSTOM HTML CODE HERE</script>';

}
add_action( 'wp_head', 'my_custom_html_code' );`

= Q. How much of PHP code (characters) I can enter in the code editor? =
A. We don't limit the number of characters.

= Q. Does this plugin requires any modification of the theme? =
A. Absolutely not. This plugin is configurable entirely from the plugin settings page that you can find in the Admin Area of your WordPress website.

= Q. Does this require any knowledge of HTML or CSS? =
A. This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page. But you need to know the HTML or CSS in order to add/remove/modify the HTML or CSS code by using this plugin.

= Q. Can I add my custom PHP code to a specific page of my website? =
A. For now, this plugin does not have an option to apply the custom PHP code only on specific pages. We plan to add this feature soon. But for now in order to apply your custom PHP code only on specific pages of your website, you need to wrap your custom PHP code in a PHP function that will determine the page you want. You need something like this:

`function my_custom_php_code() {

    // Stop the function if this is not the Home page of website
    if ( !is_home() ) {
        return;
    }

    // YOUR CUSTOM PHP CODE HERE

}
my_custom_php_code();`

= Q. On the plugin settings page, an error message appears. What could be wrong? =
A. Here are a few of the most likely causes of the error message:

1. You make a syntax error in the code that you have entered. Check the syntax of your code and try again.
2. You entered two functions with the same name. Use a unique names for your functions.
3. You have entered function with a name that is already occupied by another function. Use a unique name for your function.
4. You are trying to overwrite an existing function (of WordPress, theme, or plugin). Instead, use filters and hooks.

= Q. My custom PHP code is not working. What could be wrong? =
A. It happens that your custom PHP code that you insert on the plugin page does not work, even if an error message does not appear. Here are a few of the most likely causes of the issue:

1. You have a typo during the insertion of your custom PHP code.
2. Your custom PHP code has a syntax error.
3. Your custom PHP code is incorrect and may not work.

= Q. It's not working. What could be wrong? =
A. As with every plugin, it's possible that things don't work. It's impossible to tell what could be wrong exactly. The most common reason for this is a web browser’s cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser’s cache. Clearing your browser’s cache may solve the problem.

If you post a support request in the plugin's support forum on WordPress.org, we'd be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.

= Q. What to do if this plugin crashed the website? =
A. This plugin has a built-in functions for checking the custom code for syntax errors, duplicate functions names, and etc. But plugin is not perfect, so there are times when the entered custom code causes the error and white screen (WSOD). This is due to the fact that your custom code has a syntax error that this plugin could not detect. When this happens with you, please perform the following steps.

1. Access your server via FTP or SFTP. If you aren’t sure how usually your web hosting provider will have instructions somewhere on their website.
2. Browse to the directory `wp-content/plugins/my-custom-functions/`. Please contact your web hosting company to get help if you can't find this folder.
3. Rename the file `START` to `STOP`. This will stop the execution of your custom code.
4. Log in to Admin Area of your WordPress website.
5. Go to the plugin settings page `Settings` -> `PHP Inserter`.
6. Edit/fix your custom PHP code that you entered before the crash.
7. Return to the plugin folder and rename the file `STOP` to `START` and you're done!

This plugin stored you entered code in the database of your website. For getting your code, you also can go to the `Database` -> Table "`wp_options`" -> Option "`spacexchimp_p001_settings`" -> "`option_value`".

We are already working on a feature to automatically stop the execution of users custom PHP code for cases when this plugin could not detect the error, and this caused the inaccessibility of the website.

= Q. The last WordPress update is preventing me from editing my website that is using this plugin. Why is this? =
A. This plugin can not cause such problem. More likely, the problem are related to the settings of the website. It could just be a cache, so please try to clear your website's cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser. Also please try to re-login to the website, this too can help.

= Q. Where to report bug if found? =
A. Bug reports are very welcome! Please visit [our contact page](https://www.spacexchimp.com/contact.html) and report. Thank you!

= Q. Where to share any ideas or suggestions to make the plugin better? =
A. Any suggestions are very welcome! Please visit [our contact page](https://www.spacexchimp.com/contact.html) and share. Thank you!

= Q. I love this plugin! Can I help somehow? =
A. Yes, any contributions are very welcome! Please visit [our donation page](https://www.spacexchimp.com/donate.html). Thank you!


== Screenshots ==

1. Plugin page.
2. Plugin page with custom PHP code added.
3. Success message.
4. «Fatal error» message.


== Other Notes ==

****

"My Custom Functions" is one of the own software projects of [Space X-Chimp](https://www.spacexchimp.com).

**License**

This plugin is licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html) and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Credits**

* The icon of plugin is a copyrighted image created by the [Space X-Chimp](https://www.spacexchimp.com) team. (C) All rights reserved.
* The banner of plugin is a copyrighted image created by the [Space X-Chimp](https://www.spacexchimp.com) team. (C) All rights reserved.
* [CodeMirror](https://codemirror.net/) is an open-source project shared under the [MIT license](https://codemirror.net/LICENSE).
* [Bootstrap](http://getbootstrap.com) by Twitter, Inc. released under the [MIT license](https://github.com/twbs/bootstrap/blob/master/LICENSE).
* [Bootstrap-checkbox](https://github.com/vsn4ik/bootstrap-checkbox) is a project of [Vasily A.](https://github.com/vsn4ik), shared under the [MIT license](https://github.com/vsn4ik/bootstrap-checkbox/blob/master/LICENSE).
* [Font Awesome](https://fontawesome.com) is an open source-project created by Dave Gandy. Font released under the [SIL OFL 1.1 license](http://scripts.sil.org/OFL). Code released under the [MIT License](http://opensource.org/licenses/mit-license.html).

**Links**

* [Developer website](https://www.spacexchimp.com)
* [Dedicated plugin page on GitHub](https://github.com/ArthurGareginyan/my-custom-functions)
* [Dedicated plugin page on WordPress.org](https://wordpress.org/plugins/my-custom-functions/)
* [Premium Version](https://www.spacexchimp.com/plugins/my-custom-functions-pro.html)


== Changelog ==

= 4.43 - Aug 10, 2020 =
* Maintenance: Ensure compatibility with upcoming WordPress 5.5.
* Enhancement: Remove the second ask for an upgrade on the "Plugins" page and change the color of some links to the right emotional colors. (Thanks to Abdulla Hussain)

= 4.42 - Mar 20, 2020 =
* Maintenance: Ensure compatibility with upcoming WordPress 5.4.
* Maintenance: Minimum WordPress version requirement is set to 4.9. Support for WordPress 4.8 and below has been discontinued.
* Maintenance: Minimum PHP version requirement is set to 5.6. Support for PHP 5.5 and below has been discontinued.

= 4.41 - Jan 20, 2020 =
* Maintenance: The copyright date updated to support the 2020 year.

= 4.40 - Nov 11, 2019 =
* Maintenance: Compatibility with upcoming WordPress 5.3.
* Framework update: Bootstrap library updated to the latest version; v3.4.1.
* Framework update: The list control has been redesigned.

= 4.39 - Oct 2, 2019 =
* French translation updated. (Thanks to Hervé Bouzin)

= 4.38.1 - Jul 16, 2019 =
* Fixed: Prints a warning since PHP/7.1: "Notice: A non well formed numeric value encountered in /inc/php/versioning.php on line 43".

= 4.38 - Mar 31, 2019 =
* Framework updated: Code formatting improved.
* Framework updated: Code commenting improved.
* Framework updated: The change log design is improved.

= 4.37 - Mar 24, 2019 =
* Framework updated: Added function "_plugin", which returns an array with the contents of plugin constants. The mention of plugin constants is replaced by the use of the function "_plugin".
* Framework updated: The functions "_settings_link" and "_upgrade_link" are combined and improved.
* Framework updated: The function "_plugin_row_meta" is improved.
* Framework updated: Code formatting improved.
* Framework updated: Code commenting improved.
* Framework updated: All translation files are updated.

= 4.36 - Mar 18, 2019 =
* Improvement: Notification display system updated
* Code commenting improved.
* Style sheet for the back end is optimised.

= 4.35 - Mar 1, 2019 =
* Framework updated: The file "page.php" is divided into the following parts: "page.php", "usage.php", "faq.php", "support.php".
* Framework updated: The files "settings.php", "usage.php", "faq.php", "support.php" are moved to the subfolder "tabs".

= 4.34 - Feb 24, 2019 =
* Added French translation. (Thanks to Hervé Bouzin)

= 4.33 - Feb 21, 2019 =
* The readme "Tested up to:" value changed to 5.1 after full testing process and ensuring compatibility.
* Content of the "F.A.Q." section updated.
* Some texts are corrected or replaced with new ones.
* All translation files are updated.
* Code formatting improved.
* Code commenting improved.
* The function '_duplicates' is renamed to "_preparation_duplicates".
* Added CSS class ".custom-list" for displaying a custom list, which is used on the plugin settings page.
* The "humans.txt" file updated.

= 4.32 - Jan 11, 2019 =
* Content of the "Usage" section updated.
* Content of the "FAQ" section updated.
* Code formatting in the "admin.js" file improved.
* Code commenting improved.
* The copyright date updated.
* Translation files are updated.

= 4.31 - Nov 2, 2018 =
* Improvement: Design of the plugin settings page is improved.

= 4.30 - Oct 23, 2018 =
* Improvement: Design of the plugin settings page is improved.
* Content of the "Usage Instructions" section updated.
* Translation files are updated.

= 4.29 - Oct 8, 2018 =
* Added new feature: If the changes in the code editor were made, but not saved, the message "NOT SAVED" is displayed.
* Code commenting improved.
* Translation files are updated.

= 4.28 - Sep 22, 2018 =
* CSS code, which is located in the file "admin.css" and is related to the "FAQ" section, is improved.
* The sidebar items are rearranged.
* Some texts are updated.
* Translation files are updated.

= 4.27 - Sep 12, 2018 =
* The design of the message "Successful" is improved.
* The design of the message "Error" is improved.
* The "readme.txt" file is updated.
* Some texts are updated.
* Translation files are updated.

= 4.26 - Aug 19, 2018 =
* The function '_prepare' is improved.
* The function '_duplicates' is improved.
* The function '_exec' is improved.
* Code commenting improved.
* Some texts are updated.
* Translation files are updated.

= 4.25 - Aug 7, 2018 =
* Some texts are updated.
* Translation files are updated.
* The translation into Russian has been corrected.

= 4.24 - Jul 24, 2018 =
* Dutch translation added. (Thanks to Peter Leenders)
* The function '_load_scripts_codemirror' is improved. Removed an unnecessary call of constants.
* The function '_load_scripts_admin' is improved.
* The banner of Space X-Chimp, located on the settings page of the plugin, is updated. The image 'banner.png' is deleted.
* Some texts are updated.
* All translation files are updated.

= 4.23 - Jul 13, 2018 =
* The code block that enqueue the CodeMirror library files is moved to a separate function '_load_scripts_codemirror' within the 'enqueue.php' file.
* Enqueue of the CodeMirror addons is moved to the beginning of the queue, before enqueuing the CodeMirror mods.
* All translation files are updated.

= 4.22 - Jul 1, 2018 =
* Fixed: CodeMirror addon 'autorefresh.js' was added to one of the previous versions of the plugin, but it was not enabled.

= 4.21 - Jun 30, 2018 =
* Fixed localization of the word "licence". (Thanks to Garrett Hyder @garrett-eclipse)
* Settings for the CodeMirror editor are moved to a separate file 'codemirror-settings.js'.
* Added the addon 'placeholder.js' to the CodeMirror editor. Added a placeholder for code field.
* Texts on the plugin settings page are updated. Translations are updated.

= 4.20 - Jun 26, 2018 =
* Updated the method of loading the addons of the CodeMirror library.
* Added the addon 'autorefresh.js' to the CodeMirror editor. The code for manual refreshing the CodeMirror editor is deleted.
* Texts on the plugin settings page are updated. Translations are updated.

= 4.19 - Jun 12, 2018 =
* CodeMirror library updated to the latest version v5.38.0. The directory structure is changed (files are better organized). Added a test files for the CodeMirror modes.
* Updated the method of loading the modes and addons of the CodeMirror library.

= 4.18 - Jun 4, 2018 =
* Fixed a bug due to which the plugin data that stored in the database to not be deleted during the uninstallation of the plugin.
* The contents of the file 'uninstall.php' is moved to the file 'core.php'. The file 'uninstall.php' is deleted.
* The upgrade banner has moved from an external source to the plugin folder.
* Some texts are corrected.

= 4.17 - May 20, 2018 =
* Added new constant "_FILE".
* Added a function that runs during the plugin activation. Now the date of the first activation of the plugin is recorded in the database.

= 4.16 - May 6, 2018 =
* Added auto-versioning of the CSS and JavaScript files to avoid cache issues.
* CSS code in the file 'admin.css' is optimized.

= 4.15 - Apr 25, 2018 =
* Fixed the link "Settings", located in the plugin's meta row on the "Plugins" page. The suffix ".php" was deleted.
* Fixed information stored in the header of the translation files.
* Translation files updated.

= 4.14 - Apr 20, 2018 =
* Some texts updated, and typos corrected.
* All translation files updated.
* The information about the author of the plugin (including name, links, copyright, etc.) was changed due to the fact that the plugin became the property of SpaceXChimp.
* The "humans.txt" file updated.

= 4.13 - Jan 22, 2018 =
* Texts updated.
* The year in the copyright text is updated.
* The sidebar items are rearranged.
* Translation files updated.

= 4.12 - Nov 13, 2017 =
* The plugin is fully tested for compatibility with WordPress version 4.9.
* CSS code improved.

= 4.11 - Oct 28, 2017 =
* German translation added. (Thanks to Michael)
* Spanish translation updated. (Thanks to Patricio Toledo)
* Fixed an issue where the "Hello" message could not be hidden.

= 4.10 - Sep 23, 2017 =
* At the request of some users, plugin settings page moved to the submenu item in the top-level menu item "Settings", like before.
* In the "_register_submenu_page" function, "$capability" changed from the 'edit_theme_options' to 'manage_options'.

= 4.9 - Sep 19, 2017 =
* Fixed the issue due to which the 'Space X-Chimp' sub menu item in the brand menu item was displayed.
* Added branded footer text on the plugin's settings page.

= 4.8 - Sep 15, 2017 =
* Added the top level menu item of the brand.
* The submenu item of the plugin has moved to the menu item of the brand.
* The menu item of the plugin is renamed.
* The "Author" tab on the settings page is removed.
* Content of the "Support" tab on the settings page is updated.
* Copyright of plugin files is changed to the "Space X-Chimp".
* The "Support" tab renamed to the "Support Me".
* The "Usage" tab renamed to the "Usage Instructions".

= 4.7 - Sep 8, 2017 =
* Added Spanish translation. (Thanks Patricio Toledo)
* The group name of the '_service_info' option renamed to '_settings_group_si'.
* The 'admin.css' file improved.
* The "Font Awesome" library is integrated for use on the plugin settings page.
* The ON/OFF switch replaced with new.
* The 'bootstrap-checkbox.js' JavaScript plugin added.
* Prefixes of the PHP functions changed to ''spacexchimp_p001_.
* Prefixes of the PHP constants changed to ''SPACEXCHIMP_P001_.
* Plugin data that saved in the database upgraded to version 0001.

= 4.6 - Aug 10, 2017 =
* Russian translation updated.
* The navigation of the tabs is rearranged.
* Fixed an issue due to which the sidebar was not hiding on mobile devices.
* Code of sidebar moved to separate file 'sidebar.php'.
* Support page tab moved from external source to plugin code.
* My avatar moved from external source to plugin folder.
* Banner moved from external source to plugin folder.
* Code of PayPal button updated.

= 4.5 - Aug 8, 2017 =
* Stylesheet in the admin.css file improved.
* The '!important' declarations in the admin.css file removed.
* Code formatting in the admin.js file improved.
* Code commenting improved.
* Load of the additional remote CSS file removed from the admin.js file.
* Changed the sorting of enqueueing of scripts.
* The 'Family' page tab renamed to 'Store'.
* Added ad banner of my store website.

= 4.4.1 - Jun 21, 2017 =
* The HTTPS mixed content issue fixed by changing all links to HTTPS.
* Content of the "FAQ" section updated.

= 4.4 - Jun 16, 2017 =
* On the plugin settings page, text of buttons are corrected.
* On the plugin settings page, the information about the plugin version number moved to header section.
* Some mention of constants replaced with variables for easier access.
* Content of the "Usage" tab updated.
* Content of the "FAQ" tab updated.
* An SSL issue within the admin area fixed. The 'src=”http://' replaced with 'src=”//'.
* Added load of the jQuery library on the plugin settings page.

= 4.3 - Jun 4, 2017 =
* To the plugin settings page added information about the plugin version number.
* The "Tested up to:" comment changed to 4.8 after full testing process.
* The "version.php" file renamed to "versioning.php".
* The "versioning.php" file updated to new version.
* The "_plugin_version_number" function renamed to the "_versioning".
* Content of the FAQ tab updated.
* Values of the variables on the settings page are improved.

= 4.2 - May 26, 2017 =
* Compatibility with PHP version 5.2 improved.
* PHP shorthands improved.
* Added function for generating the plugin constants.
* Some constants now get the value from the plugin header data.
* The "_plugin_version_number" function improved.
* Added file "upgrade.php" for future upgrades.

= 4.1.1 =
* Fixed the bug due to which the "Warning: Constants may only evaluate to scalar values in" warning are displayed.

= 4.1 - May 24, 2017 =
* Added new constants: "_SLUG", "_PREFIX", "_SETTINGS" and "_NAME".
* Value of the "_VERSION" constant replaced with information from the plugin header data.
* All references to the plugin name, slug, prefix are replaced with constants.
* The "name" attribute removed from the "form" tag.
* Code formatting improved.
* F.A.Q. section updated.

= 4.0.1 - May 12, 2017 =
* Fixed the bug due to which the the "Warning: Illegal string offset 'version' in" and the "Warning: Illegal string offset 'old_version' in" warnings are displayed. (Thanks to Sven Brill)
* Contents of the F.A.Q. tab updated.

= 4.0 - May 8, 2017 =
* The design of the plugin settings page is completely redone.
* Added additional donate link to the "Plugins" page.
* The 'Using' section renamed to 'Usage'.
* My Unicode signature added to the main file.
* The donate button replaced with new.
* The 'Donate' section renamed to 'Support'.
* The 'donate.png' image removed.
* Options from the settings page moved to a separate file.
* The "Usage" section removed from the sidebar area.
* Additional "Support" section added.
* Added tab navigation menu for the settings page.
* Added additional tabs on the settings page.
* Code of the 'admin.css' file improved and better commented.
* A full version of the Bootstrap framework is integrated.
* The 'MCFunctions_load_scripts' function renamed to 'MCFunctions_load_scripts_admin'.
* Added the CSS code for the custom list numbers on the plugin settings page.
* The main font is changed to "Verdana".
* All PHP and HTML code is better formatted.
* The header on the settings page of plugin is redesigned.
* The "LICENSE.txt" file renamed to "license.txt".
* The "humans.txt" file added.
* Messages from the plugin settings page moved to a separate file "messages.php".
* The "_service_info" setting added to the data-base.
* Added function for managing information about the version number of the plugin.
* Added the "Hello" message that show when the plugin is just installed.
* Added the "Error" message that show when user is trying to degrade the version number of the plugin.
* Fixed the parameter that contain the path to source files in all translation files.
* The POT file updated.
* Translations updated.

= 3.5 - Nov 20, 2016 =
* Added French translation. (Thanks Theophil Bethel)
* Image of the donate button changed.

= 3.4.1 - Nov 8, 2016 =
* Translations updated.
* Readme for translations updated.
* Link of banner image updated.

= 3.4 - Oct 28, 2016 =
* Added Spanish translation. (Thanks [Ramiro Garcés](http://www.ramirogarces.com.ve/))

= 3.3 - Oct 1, 2016 =
* User's PHP code displayed on settings page are escaped for output by `htmlentities()` instead of `esc_attr()` for prevent converting characters to HTML entities.
* Added global constant for plugin text-domain.
* Russian translation improved.

= 3.2 - Sep 15, 2016 =
* Added option for easy disable the custom code for cases of WSOD.
* Style sheet of settings page improved.
* On the settings page added an advertisement about the PRO version of this plugin.
* The Readme.txt file improved.
* Added the Readme.txt file for translation contribution.

= 3.1 - Sep 3, 2016 =
* Added prefixes to the stylesheet and script names when using wp_enqueue_style() and wp_enqueue_script().
* Added constant for storing the plugin version number.

= 3.0 - Aug 30, 2016 =
* The structure of files changed.
* Style sheet of settings page improved and better commented.
* JS code improved.
* The "thanks.png" image removed.
* POT file updated.* Russian translation updated.* Chinese (Taiwan) translation updated.

= 2.5.1 - Aug 3, 2016 =
* The update_option() returned into _duplicates function.

= 2.5 - Jul 26, 2016 =
* Added active-line add-on to CodeMirror.
* Extra update_option() removed from the _duplicates function.
* The _exec function optimized.
* CSS class "slider" renamed to "trigger".
* Styles of settings page optimized for mobile devices.
* The styles.css file better commented.
* The _enqueue_codemirror_scripts function renamed to mcfunctions_load_scripts.

= 2.4 - Jul 21, 2016 =
* Added a toggle for temporarily disable the custom functions.
* Functions _prepare, _duplicates, and _exec optimized.

= 2.3 - Jul 20, 2016 =
* Added function to check for duplicate function names. Compares the names of all functions (internal, user). The _duplicates function added.
* Added function of automatic remove the "successful" message after 3 seconds.
* Removed the default message about successful saving.
* The function of user code cleaning modified.
* File js-functions.js renamed to functions.js.
* Removed my personal ad about freelance.

= 2.2 - Apr 8, 2016 =
* Added Chinese (Taiwan) translation. (Thanks Gordon Yu)
* Text domain changed to "my-custom-functions".
* Added compatibility with the translate.wordpress.org.

= 2.1 - Apr 7, 2016 =
* In the page.php, on the line 21, fixed typo.
* Removed extra rules in style.css file.
* All images are moved to the directory "images".
* Image "btn_donateCC_LG.gif" is now located in the "images" directory.

= 2.0 - Apr 3, 2016 =
* New design of settings page (new layout).
* Constants variables added.
* editor.js deleted.
* js-functions.js (file with all js functions) created.
* Prefixes changed to "MCFunctions".
* Text domain changed to "MCFunctions".
* Plugin URI changed to GitHub repository.
* Added my personal ad about freelance.
* .pot file updated.
* Russian translation updated.

= 1.9 - Feb 4, 2016 =
* Authors URI changed.
* Donate link changed.
* Localization improved.
* .pot file updated.
* Russian translation updated.

= 1.8 - Dec 13, 2015 =
* The mode of CodeMirror editor changed from 'application/x-httpd-php' (HTML+PHP) to 'text/x-php' (PHP).
* Placeholder of <textarea> changed to "/* Enter Your Custom Functions Here */".
* Removed more unused do_action() from page.php file.

= 1.7 - Nov 25, 2015 =
* The stylesheet of plugin page moved to separate file.
* The javascript from page.php moved to separate file.
* Textdomain changed to "mcfunctions".
* Changed the style of title in plugin page.
* The LICENSE file renamed to LICENSE.txt

= 1.6 - Nov 25, 2015 =
* Fixed the issue due to which nothing appears below line 26 until you click below that line.
* Added "register_setting" for error option.
* Corrected comments to source code.

= 1.5 - Nov 25, 2015 =
* CodeMirror scripts are combined and minified.

= 1.4 - Nov 25, 2015 =
* Fixed the issue due to which the alert message was appearing after installation.

= 1.3 - Nov 25, 2015 =
* .pot file included.
* Minor fixes.

= 1.2 =
* Added the syntax highlighting and line numbering.

= 1.1 =
* Fixed positioning of the sidebar at the plugin settings page.

= 1.0 =
* Initial release.
* Added the check for safety execution code.
* Added ready for translation.

= 0.3 =
* Release candidate.

= 0.2 =
* Beta version.

= 0.1 =
* Alpha version.


== Upgrade Notice ==

= 4.0 =
Please update to new release!

= 3.0 =
Please update to new release!

= 2.0 =
Please update to new release!

= 1.0 =
Please update to first stable release!
