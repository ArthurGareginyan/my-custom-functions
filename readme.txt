=== My Custom Functions ===
Contributors: Arthur Gareginyan
Tags: code, php, function, snippet, custom, execute, edit, editing, editor, functionality plugin, codemirror, syntax highlighting, syntaxhighlighting, syntax highlighter, syntaxhighlighter, syntax,
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS
Requires at least: 3.9
Tested up to: 4.7
Stable tag: 4.0.1
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easily and safely add your custom functions (PHP code) directly out of your WordPress Admin area without need of an external editor.


== Description ==
An easy to use, with intuitive interface WordPress plugin that gives you the ability to easily and safely add your custom functions (PHP code) for execution in WordPress environment directly out of your WordPress Admin area and without any need of an external editor. It's purpose is to provide a familiar experience to WordPress users. No need anymore editing the functions.php file of your theme. Just add your PHP code in the field on the plugin settings page and this plugin will do the rest for you.This is a simple and perfect tool to use as your site's functionality plugin.
It's really useful in case of any theme update, because your custom PHP code would never be overwritten. Your custom PHP code will keep on working, no matter how many times you upgrade or switch your theme.On the plugin settings page you find the PHP editor powered by CodeMirror. It have syntax highlighting and line numbering options. Also this editor support a tab indentation. If you want more options then tell me and I will be happy to add it.

= Features =

* Lightweight and fast
* Secure code with using clear coding standards
* Intuitive interface with many settings
* Cross browser compatible (work smooth in any modern browser)
* Compatible with all WordPress themes
* RTL compatible (right to left)
* Translation ready

**Key features include...**

* Checks the entered code for fatal errors (simple checks)
* Toggle for temporary disable the custom functions
* Easy disable option for WSOD
* Syntax highlighting (by CodeMirror)
* Line numbering
* Active line highlighting
* Editor allow for tab indentation
* And much, much more!

**Coming soon:**
* Reload the settings page at same position after pushing the save button
* Multisite network support

= Translation =

* English (default)
* Russian
* Chinese-Taiwan (translation by Gordon Yu)
* Spanish (translation by [Ramiro Garcés](http://www.ramirogarces.com.ve/))
* French (translation by Theophil Bethel)

If you would like to add a translation to this plugin then please head to our [Translating WordPress](https://translate.wordpress.org/projects/wp-plugins/my-custom-functions) page.

**Consider Going Pro For Additional Features!**>**Pro Features**>
> All features from Free version included plus:>* Unlimited number of functions>* Automatic backup of all functions to a file>* Toggle for temporary disable the certain functions>* Button for collapse/expand the field with code>* Sidebar items can be collapsed or expanded>* Well documented>>[Get the PRO version now!](https://www.arthurgareginyan.com/plugin-my-custom-functions-pro.html)


== Installation ==
Install "My Custom Functions" just as you would any other WordPress Plugin.

Automatically via WordPress Admin area:

1. Log into Admin area of your WordPress website.
2. Go to "`Plugins`" -> "`Add New`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manually via FTP access:

1. Download a copy (ZIP file) of this plugin from WordPress.org.
2. Unzip the ZIP file.
3. Upload the unzipped catalog to your website's plugin directory (`/wp-content/plugins/`).
4. Log into Admin area of your WordPress website.
5. Activate this plugin through the "`Plugins`" tab.

After installation, a "`Custom Functions`" menu item will appear in the "`Appearance`" section. Click on this in order to view plugin administration page.

[More help installing Plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins "WordPress Codex: Installing Plugins")


== Frequently Asked Questions ==
= Q. Will this plugin work on my WordPress.COM website? =
A. Sorry, this plugin is available for use only on self-hosted (WordPress.ORG) websites.

= Q. Can I use this plugin on my language? =
A. Yes. But If your language is not available then you can make one. This plugin is ready for translation. The `.pot` file is included and placed in the "`languages`" folder. Many of plugin users would be delighted if you shared your translation with the community. Just send the translation files (`*.po, *.mo`) to me at the arthurgareginyan@gmail.com and I will include the translation within the next plugin update.

= Q. How does it work? =
A. Simply go to the plugin settings page, add your PHP code to the field, switch the toggle to the "ON" position and click the "Save Changes" button. Enjoy the result of applying your PHP code. It's that simple!
You can find the plugin settings page at "`WP Admin Panel`" -> "`Appearance`" -> "`Custom Functions`".

= Q. Can I use HTML/CSS/JS code integrated in PHP code? =
A. Yes. But you need to do it properly, like this:
`function NameOfYourFunction {

    echo "<script>
		// Your JS code
	  </script>";

}`

= Q. How much of PHP code (characters) I can enter in the text field? =
A. I don't limit the number of characters.

= Q. On the plugin settings page, an error message appears. What could be wrong? =
A. Here are a few of the most likely causes of the error message:

1. You make a syntax error in the code that you have entered. Check the syntax of your code and try again.
2. You entered two functions with the same name. Use a unique names for your functions.
3. You have entered function with a name that is already occupied by another function. Use a unique name for your function.
4. You are trying to overwrite an existing function (of WordPress, theme, or plugin). Instead, use filters and hooks.

= Q. Does this plugin requires any modification of the theme? =
A. Absolutely not. This plugin is configurable entirely from the plugin settings page that you can find in the Admin Panel of your WordPress website.

= Q. Does this require any knowledge of HTML or CSS? =
A. This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page. But you need to know the HTML or CSS in order to add/remove/modify the HTML or CSS code by using this plugin.

= Q. It's not working. What could be wrong? =
A. As with every plugin, it's possible that things don't work. The most common reason for this is a web browser's cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser's cache.​ Clearing your browser's cache may solve the problem.

It's impossible to tell what could be wrong exactly, but if you post a support request in the plugin's support forum on WordPress.org, I'd be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.

= Q. What to do if this plugin caused the white screen (WSOD)? =
A. This plugin is not perfect, so there are times when the entered custom code causes the error and white screen (WSOD). This is due to the fact that your custom code has a syntax error that this plugin could not detect. If this happened with you then do the following and all will be fine.

1. Via FTP, go to the plugin folder (in `wp-content/plugins/my-custom-functions/`). Rename the "`START`" file to "`STOP`".
2. Return to the plugin settings page.
3. Edit/fix your custom code that you entered before the crash.
4. Rename the "`STOP`" file to "`START`" and you're done!

This plugin stored you entered code in the Database of your website. For getting your code, you also can go to the `Database` -> Table "`wp_options`" -> Option "`anarcho_cfunctions_settings`" -> "`option_value`".

= Q. Where to report bug if found? =
A. Please visit the [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/my-custom-functions) and report.

= Q. Where to share any ideas or suggestions to make the plugin better? =
A. Any suggestions are very welcome! Please send me an email to [arthurgareginyan@gmail.com](mailto:arthurgareginyan@gmail.com). Thank you!

= Q. I love this plugin! Can I help somehow? =
A. Yes, any financial contributions are welcome! Just visit [my website](http://www.arthurgareginyan.com/donate.html), click on the donate button, and thank you!


== Screenshots ==
1. Plugin page.
2. Plugin page with custom code added.
3. Success message.
4. «Fatal error» message.


== Other Notes ==

"My Custom Functions" is one of the personal software projects of [Arthur Gareginyan](http://www.arthurgareginyan.com).

**License**

This plugin is licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html) and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Credits**

* The icon of plugin is a copyrighted image created by [Arthur Gareginyan](http://www.arthurgareginyan.com). (C) All rights reserved.
* The banner of plugin is a copyrighted image created by [Arthur Gareginyan](http://www.arthurgareginyan.com). (C) All rights reserved.
* [CodeMirror](https://codemirror.net/) is an open-source project shared under the [MIT license](https://codemirror.net/LICENSE).
* [Bootstrap](http://getbootstrap.com) by Twitter, Inc. released under the [MIT license](https://github.com/twbs/bootstrap/blob/master/LICENSE).

**Links**

* [Developer Website](http://www.arthurgareginyan.com)
* [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/my-custom-functions)
* [Premium Version](https://www.arthurgareginyan.com/plugin-my-custom-functions-pro.html)


== Changelog ==

= 4.0.1 =
* Fixed the bug due to which the the "Warning: Illegal string offset 'version' in" and the "Warning: Illegal string offset 'old_version' in" warnings are displayed. (Thanks to Sven Brill)
* Contents of the F.A.Q. tab updated.

= 4.0 =
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

= 3.5 =
* Added French translation. (Thanks Theophil Bethel)
* Image of the donate button changed.

= 3.4.1 =
* Translations updated.
* Readme for translations updated.
* Link of banner image updated.

= 3.4 =
* Added Spanish translation. (Thanks [Ramiro Garcés](http://www.ramirogarces.com.ve/))

= 3.3 =
* User's PHP code displayed on settings page are escaped for output by `htmlentities()` instead of `esc_attr()` for prevent converting characters to HTML entities.
* Added global constant for plugin text-domain.
* Russian translation improved.

= 3.2 =
* Added option for easy disable the custom code for cases of WSOD.
* Style sheet of settings page improved.
* On the settings page added an advertisement about the PRO version of this plugin.
* The Readme.txt file improved.
* Added the Readme.txt file for translation contribution.

= 3.1 =
* Added prefixes to the stylesheet and script names when using wp_enqueue_style() and wp_enqueue_script().
* Added constant for storing the plugin version number.

= 3.0 =
* The structure of files changed.
* Style sheet of settings page improved and better commented.
* JS code improved.
* The "thanks.png" image removed.
* POT file updated.* Russian translation updated.* Chinese (Taiwan) translation updated.

= 2.5.1 =
* The update_option() returned into _duplicates function.

= 2.5 =
* Added active-line add-on to CodeMirror.
* Extra update_option() removed from the _duplicates function.
* The _exec function optimized.
* CSS class "slider" renamed to "trigger".
* Styles of settings page optimized for mobile devices.
* The styles.css file better commented.
* The _enqueue_codemirror_scripts function renamed to mcfunctions_load_scripts.

= 2.4 =
* Added a toggle for temporary disable the custom functions.
* Functions _prepare, _duplicates, and _exec optimized.

= 2.3 =
* Added function to check for duplicate function names. Compares the names of all functions (internal, user). The _duplicates function added.
* Added function of automatic remove the "successful" message after 3 seconds.
* Removed the default message about successful saving.
* The function of user code cleaning modified.
* File js-functions.js renamed to functions.js.
* Removed my personal ad about freelance.

= 2.2 =
* Added Chinese (Taiwan) translation. (Thanks Gordon Yu)
* Text domain changed to "my-custom-functions".
* Added compatibility with the translate.wordpress.org.

= 2.1 =
* In the page.php, on the line 21, fixed typo.
* Removed extra rules in style.css file.
* All images are moved to the directory "images".
* Image "btn_donateCC_LG.gif" is now located in the "images" directory.

= 2.0 =
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

= 1.9 =
* Authors URI changed.
* Donate link changed.
* Localization improved.
* .pot file updated.
* Russian translation updated.

= 1.8 =
* The mode of CodeMirror editor changed from 'application/x-httpd-php' (HTML+PHP) to 'text/x-php' (PHP).
* Placeholder of <textarea> changed to "/* Enter Your Custom Functions Here */".
* Removed more unused do_action() from page.php file.

= 1.7 =
* The stylesheet of plugin page moved to separate file.
* The javascript from page.php moved to separate file.
* Textdomain changed to "mcfunctions".
* Changed the style of title in plugin page.
* The LICENSE file renamed to LICENSE.txt

= 1.6 =
* Fixed the issue due to which nothing appears below line 26 until you click below that line.
* Added "register_setting" for error option.
* Corrected comments to source code.

= 1.5 =
* CodeMirror scripts are combined and minified.

= 1.4 =
* Fixed the issue due to which the alert message was appearing after installation.

= 1.3 =
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
* Alfa version.


== Upgrade Notice ==
= 4.0 =
Please update to new release!
= 3.0 =
Please update to new release!
= 2.0 =
Please update to new release!
= 1.0 =
Please update to first stable release!
