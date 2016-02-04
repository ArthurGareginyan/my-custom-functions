=== My Custom Functions ===
Contributors: Arthur Gareginyan
Tags: code, php, function, snippet, custom, execute, edit, editing, editor, functionality plugin, codemirror, syntax highlighting, syntaxhighlighting, syntax highlighter, syntaxhighlighter, syntax,
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS
Requires at least: 3.9
Tested up to: 4.4
Stable tag: 1.9
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

EASILY and SAFELY add your own functions, snippets or any custom codes directly out of your WordPress Dashboard without need of an external editor.


== Description ==
An easy to use WordPress plugin that lets you EASILY and SAFELY add your own functions, snippets or any custom codes for execution in WordPress environment directly out of your WordPress Dashboard without any need of an external editor. 

It’s purpose is to provide a familiar experience to WordPress users. No need any more editing the functions.php file of your theme. Just add your code in the field on the page and this plugin will do the rest for you.

No any more "Fatal error". These codes will run safely and will not generate fatal errors, so your website won't break if you make a typo in your code.

And your website will keep on working, no matter how many times you upgrade or switch your theme.

This is a simple and perfect tool to use as your site's functionality plugin.


= Features =

**Current features:**

* Safety execution code (Checks the entered code for fatal errors).
* Syntax highlighting (by CodeMirror).
* Line numbering (by CodeMirror).
* Input areas allow for tab indentation.
* Ready for translation (.pot file included).
* CodeMirror scripts are combined and minified.

**Coming soon:**

* Trigger to temporary disable the custom code.
* Backuping the custom code to a file.
* (Got more ideas? Tell me!)

For more details please visit - [Dedicated Plugin Page](http://mycyberuniverse.com/my_programs/wp-plugin-my-custom-functions.html)

**Please Vote and Enjoy**

* Your votes really make a difference! Thanks.

== Installation ==
Install "My Custom Functions" just as you would any other WordPress Plugin.

Automatically via WordPress:

1. Log into WordPress Dashboard of your website.
2. Go to "`Plugins`" —> "`add new plugins`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manual via FTP:

1. Download a copy (zip file) of this plugin from WordPress.org.
2. Unzip the zip file.
3. Upload the unzipped directory to your website's plugin directory (`/wp-content/plugins/`).
4. Log into WordPress Dashboard of your website.
5. Activate this plugin through the "`Plugins`" tab.

After installation, a "`Custom Functions`" menu item will appear in the "`Appearance`" section. Click on this in order to view plugin's administration page.

[More help installing Plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins "WordPress Codex: Installing Plugins")


== Frequently Asked Questions ==
= Q. Will this Plugin work on my WordPress.com website? =
A. Sorry, this plugin is available for use only on self-hosted (WordPress.org) websites.

= Q. How much of PHP code (characters) I can enter in the text field? =
A. I don't limit the number of characters.

= Q. Can I use this plugin on my language? =
A. Yes. But If your language is not available then you can make one. This plugin is ready for translation. The `.pot` file is included and placed in "`languages`" folder. Many of plugin users would be delighted if you shared your translation with the community. Just send the translation files (`*.po, *.mo`) to me at the arthurgareginyan@gmail.com and I will include the translation within the next plugin update.

= Q. What to do if this plugin caused the white screen? =
A. This plugin is not perfect, so there are times when the entered custom code causes the error and white screen. If this happened with you then do the following.

Your code stored in the Database of your web-site. For getting your code, you can go to the `Database` —> Table "`wp_options`" —> Option "`anarcho_cfunctions_settings`" —> "`option_value`".

Or you can use the FTP method, for access to plugin's settings page. Go to plugin's folder (in `wp-content/plugins/`). Open "`my-custom-functions.php`" file. Find this line of code:
`anarcho_cfunctions_exec();`
and comment it by placing two slashes (`//`) in beginning. Then you can go to plugin's settings page and edit your entered custom code. After editing, just delete two slashes which you written before.

= Q. Where to report bug if found? =
A. Please visit [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/my-custom-functions) and report.

= Q. Where to share any ideas or suggestions to make the plugin better? =
A. Please visit [Dedicated Plugin Page](http://mycyberuniverse.com/my_programs/wp-plugin-my-custom-functions.html) and share.


== Screenshots ==
1. Plugin’s page with custom code added.
2. Success message.
3. «Fatal error» message.


== Other Notes ==

"My Custom Functions" is one of the personal software projects of [Arthur Gareginyan](http://www.arthurgareginyan.com).

**License**

This plugin is licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html)
and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Support**

* Did you enjoy this plugin? Please [donate to support ongoing development](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS). Your contribution would be greatly appreciated.
* Do you have any ideas or suggestions to make the plugin better? I can’t wait to hear them! Please share! [Dedicated Plugin Page](http://mycyberuniverse.com/my_programs/wp-plugin-my-custom-functions.html)

**Please Vote and Enjoy**

* Your votes really make a difference! Thanks.

**Links**

* [Developer Website](http://www.arthurgareginyan.com)
* [Dedicated Plugin Page](http://mycyberuniverse.com/my_programs/wp-plugin-my-custom-functions.html)
* [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/my-custom-functions)


== Changelog ==
= 1.9 =
* Authors URI changed.
* Donate link changed.
* Localization improved.
* .pot file updated.
* Russian translation updated.
= 1.8 =
* The mode of CodeMirror editor changed from 'application/x-httpd-php' (HTML+PHP) to 'text/x-php' (PHP).
* Placeholder of <textarea> changed to "/* Enter Your Custom Functions Here */".
* Removed more unused do_action() from settings_page.php file.
= 1.7 =
* The stylesheet of plugin's page moved to separate file.
* The javascript from settings_page.php moved to separate file.
* Textdomain changed to "mcfunctions".
* Changed the style of title in plugin's page.
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
* Fixed positioning of the sidebar at the plugin page.
= 1.0 =
* Initial release.
* Added the check for safety execution code.
* Added ready for translation.
= 0.2 =
* Beta version.
= 0.1 =
* Alfa version.


== Upgrade Notice ==
= 1.9 =
* Authors URI changed.
* Donate link changed.
* Localization improved.
* .pot file updated.
* Russian translation updated.
= 1.8 =
* The mode of CodeMirror editor changed from 'application/x-httpd-php' (HTML+PHP) to 'text/x-php' (PHP).
* Placeholder of <textarea> changed to "/* Enter Your Custom Functions Here */".
* Removed more unused do_action() from settings_page.php file.
= 1.7 =
* The stylesheet of plugin's page moved to separate file.
* The javascript from settings_page.php moved to separate file.
* Textdomain changed to "mcfunctions".
* Changed the style of title in plugin's page.
* The LICENSE file renamed to LICENSE.txt
= 1.6 =
* Fixed the issue due to which nothing appears below line 26 until you click below that line.
* Added "register_setting" for error option.
* Corrected comments to source code.
= 1.5 =
CodeMirror scripts are combined and minified.
= 1.4 =
Please update to new version!
= 1.3 =
Please update to new version!
= 1.2 =
Added the syntax highlighting and line numbering.
= 1.1 =
Fixed positioning of the sidebar at the plugin page.
= 1.0 =
Please update to first stable release! Added the check for safety execution code.
= 0.2 =
Please update to beta version.
