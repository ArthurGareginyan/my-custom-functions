<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 4.0.1
 */
function MCFunctions_render_submenu_page() {

    // Call messages
    MCFunctions_hello_message();
    MCFunctions_error_message();
    MCFunctions_successfull_message();
    MCFunctions_parsing_error_message();

    // Layout of page
    ?>
    <div class="wrap">
        <h2>
            <?php _e( 'My Custom Functions', MCFUNC_TEXT ); ?>
            <span>
                <?php printf(
                              __( 'by %s Arthur Gareginyan %s', MCFUNC_TEXT ),
                                  '<a href="http://www.arthurgareginyan.com" target="_blank">',
                                  '</a>'
                             );
                ?>
            </span>
        </h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- TABS NAVIGATION MENU -->
            <ul class="tabs-nav">
                <li class="active"><a href="#tab-core" data-toggle="tab"><?php _e( 'Main', MCFUNC_TEXT ); ?></a></li>
                <li><a href="#tab-usage" data-toggle="tab"><?php _e( 'Usage', MCFUNC_TEXT ); ?></a></li>
                <li><a href="#tab-faq" data-toggle="tab"><?php _e( 'F.A.Q.', MCFUNC_TEXT ); ?></a></li>
                <li><a href="#tab-author" data-toggle="tab"><?php _e( 'Author', MCFUNC_TEXT ); ?></a></li>
                <li><a href="#tab-support" data-toggle="tab"><?php _e( 'Support', MCFUNC_TEXT ); ?></a></li>
                <li><a href="#tab-family" data-toggle="tab"><?php _e( 'Family', MCFUNC_TEXT ); ?></a></li>
            </ul>
            <!-- END-TABS NAVIGATION MENU -->


            <!-- TAB 1 -->
            <div class="tab-page fade active in" id="tab-core">

                <?php require_once( MCFUNC_PATH . 'inc/php/settings.php' ); ?>

            </div>
            <!-- END-TAB 1 -->

            <!-- TAB 2 -->
            <div class="tab-page fade" id="tab-usage">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Usage', MCFUNC_TEXT ); ?></h3>
                    <div class="inside">
                        <p><?php _e( 'To add your custom functions (the PHP code) to your website, simply follow these steps:', MCFUNC_TEXT ); ?></p>
                        <ol class="custom-counter">
                            <li><?php _e( 'Go to the "Main" tab.', MCFUNC_TEXT ); ?></li>
                            <li><?php _e( 'Add your PHP code to the field, switch the toggle to the "ON" position and click the "Save Changes" button.', MCFUNC_TEXT ); ?><br><br>
                                <?php _e( 'Example of PHP code:', MCFUNC_TEXT ); ?>
<pre><code>function NameOfYourFunction {
    
    ...
    
}</code></pre>
                                <p class="note"><b><?php _e( 'Note!', MCFUNC_TEXT ); ?></b> <?php _e( 'Please do not wrap your PHP code in the <code>&lt;?php</code>...<code>?&gt;</code> HTML tags.', MCFUNC_TEXT ); ?></p>
                                <p class="note"><b><?php _e( 'Note!', MCFUNC_TEXT ); ?></b> <?php _e( 'Before use, please read the instructions on the F.A.Q. tab on what to do in case of a website crash.', MCFUNC_TEXT ); ?></p>
                            </li>
                            <li><?php _e( 'Enjoy the result of applying your PHP code.', MCFUNC_TEXT ); ?> <?php _e( 'It\'s that simple!', MCFUNC_TEXT ); ?></li>
                        </ol>
                        <p class="note"><b><?php _e( 'Note!', MCFUNC_TEXT ); ?></b> <?php _e( 'If you want more options then tell me and I will be happy to add it.', MCFUNC_TEXT ); ?></p>
                    </div>
                </div>
            </div>
            <!-- END-TAB 2 -->

            <!-- TAB 3 -->
            <div class="tab-page fade" id="tab-faq">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Frequently Asked Questions', MCFUNC_TEXT ); ?></h3>
                    <div class="inside">

                        <div class="panel-group" id="collapse-group">
                            <?php
                                $loopvalue = '13';
                                for ( $i = 1; $i <= $loopvalue; $i++ ) {
                                    echo '<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#collapse-group" href="#element' . $i . '">
                                                    <h4 class="panel-title"></h4>
                                                </a>
                                            </div>
                                            <div id="element' . $i . '" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                </div>
                                            </div>
                                          </div>';
                                }
                            ?>
                        </div>

                        <div class="question-1"><?php _e( 'Will this plugin work on my WordPress.COM website?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-1"><?php _e( 'Sorry, this plugin is available for use only on self-hosted (WordPress.ORG) websites.', MCFUNC_TEXT ); ?></div>

                        <div class="question-2"><?php _e( 'Can I use this plugin on my language?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-2"><?php printf(
                                                            __( 'Yes. But If your language is not available then you can make one. This plugin is ready for translation. The<code>.pot</code>file is included and placed in the <code>languages</code> folder. Many of plugin users would be delighted if you shared your translation with the community. Just send the translation files (<code>*.po, *.mo</code>) to me at the %s and I will include the translation within the next plugin update.', MCFUNC_TEXT ),
                                                                '<a href="mailto:arthurgareginyan@gmail.com?subject=My Custom Functions">arthurgareginyan@gmail.com</a>'
                                                          );
                                              ?></div>

                        <div class="question-3"><?php _e( 'How does it work?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-3"><?php _e( 'On the "Settings" tab, add your PHP code to the field, switch the toggle to the "ON" position and click the "Save Changes" button. Enjoy the result of applying your PHP code. It\'s that simple!', MCFUNC_TEXT ); ?></div>

                        <div class="question-4"><?php _e( 'Can I use HTML/CSS/JS code integrated in PHP code?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-4"><?php _e( 'Yes. But you need to do it properly, like this:', MCFUNC_TEXT ); ?><br>
<pre><code>function NameOfYourFunction {
    
    echo "&lt;script&gt;
                // Your JS code
          &lt;/script&gt;";
    
}</code></pre>
</div>

                        <div class="question-5"><?php _e( 'How much of PHP code (characters) I can enter in the text field?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-5"><?php _e( 'I don\'t limit the number of characters.', MCFUNC_TEXT ); ?></div>

                        <div class="question-6 question-red"><?php _e( 'On the plugin settings page, an error message appears. What could be wrong?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-6"><?php _e( 'Here are a few of the most likely causes of the error message:', MCFUNC_TEXT ); ?>
                                              <ol class="custom-counter">
                                                    <li><?php _e( 'You make a syntax error in the code that you have entered. Check the syntax of your code and try again.', MCFUNC_TEXT ); ?></li>
                                                    <li><?php _e( 'You entered two functions with the same name. Use a unique names for your functions.', MCFUNC_TEXT ); ?></li>
                                                    <li><?php _e( 'You have entered function with a name that is already occupied by another function. Use a unique name for your function.', MCFUNC_TEXT ); ?></li>
                                                    <li><?php _e( 'You are trying to overwrite an existing function (of WordPress, theme, or plugin). Instead, use filters and hooks.', MCFUNC_TEXT ); ?></li>
                                              </ol></div>

                        <div class="question-7"><?php _e( 'Does this plugin requires any modification of the theme?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-7"><?php _e( 'Absolutely not. This plugin is configurable entirely from the plugin settings page.', MCFUNC_TEXT ); ?></div>

                        <div class="question-8"><?php _e( 'Does this require any knowledge of HTML or CSS?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-8"><?php _e( 'This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page. But you need to know the HTML or CSS in order to add/remove/modify the HTML or CSS code by using this plugin.', MCFUNC_TEXT ); ?></div>

                        <div class="question-9 question-red"><?php _e( 'It\'s not working. What could be wrong?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-9"><?php _e( 'As with every plugin, it\'s possible that things don\'t work. The most common reason for this is a web browser\'s cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser\'s cache.​ Clearing your browser\'s cache may solve the problem.', MCFUNC_TEXT ); ?><br><br>
                                              <?php _e( 'It\'s impossible to tell what could be wrong exactly, but if you post a support request in the plugin\'s support forum on WordPress.org, I\'d be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.', MCFUNC_TEXT ); ?></div>

                        <div class="question-10 question-red"><?php _e( 'What to do if this plugin caused the white screen (WSOD)?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-10"><?php _e( 'This plugin is not perfect, so there are times when the entered custom code causes the error and white screen (WSOD). This is due to the fact that your custom code has a syntax error that this plugin could not detect. If this happened with you then do the following and all will be fine.', MCFUNC_TEXT ); ?>
                                              <ol class="custom-counter">
                                                    <li><?php _e( 'Via FTP, go to the plugin folder (in <code>wp-content/plugins/my-custom-functions/</code>). Rename the "START" file to "STOP".', MCFUNC_TEXT ); ?></li>
                                                    <li><?php _e( 'Return to the plugin settings page.', MCFUNC_TEXT ); ?></li>
                                                    <li><?php _e( 'Edit/fix your custom code that you entered before the crash.', MCFUNC_TEXT ); ?></li>
                                                    <li><?php _e( 'Rename the "STOP" file to "START" and you\'re done!', MCFUNC_TEXT ); ?></li>
                                              </ol>
                                              <?php _e( 'This plugin stored you entered code in the Database of your website. For getting your code, you also can go to the <code>Database</code> &#10145; Table <code>wp_options</code> &#10145; Option <code>anarcho_cfunctions_settings</code> &#10145; <code>option_value</code>.', MCFUNC_TEXT ); ?></div>

                        <div class="question-11 question-red"><?php _e( 'Where to report bug if found?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-11"><?php printf(
                                                            __( 'Please visit the %s Dedicated Plugin Page on GitHub %s and report.', MCFUNC_TEXT ),
                                                                '<a href="https://github.com/ArthurGareginyan/my-custom-functions" target="_blank">',
                                                                '</a>'
                                                           );
                                               ?></div>

                        <div class="question-12"><?php _e( 'Where to share any ideas or suggestions to make the plugin better?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-12"><?php printf(
                                                            __( 'Any suggestions are very welcome! Please send me an email to %s arthurgareginyan@gmail.com %s. Thank you!', MCFUNC_TEXT ),
                                                                '<a href="mailto:arthurgareginyan@gmail.com?subject=My Custom Functions">',
                                                                '</a>'
                                                           );
                                               ?></div>

                        <div class="question-13"><?php _e( 'I love this plugin! Can I help somehow?', MCFUNC_TEXT ); ?></div>
                        <div class="answer-13"><?php printf(
                                                            __( 'Yes, any financial contributions are welcome! Just visit %s my website %s, click on the donate button, and thank you!', MCFUNC_TEXT ),
                                                                '<a href="http://www.arthurgareginyan.com/donate.html" target="_blank">',
                                                                '</a>'
                                                           );
                                               ?></div>

                    </div>
                </div>
            </div>
            <!-- END-TAB 3 -->

            <!-- TAB 4 -->
            <div class="tab-page fade" id="tab-author">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Author', MCFUNC_TEXT ); ?></h3>
                    <div class="inside include-tab-author"></div>
                </div>
            </div>
            <!-- END-TAB 4 -->

            <!-- TAB 5 -->
            <div class="tab-page fade" id="tab-support">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Support', MCFUNC_TEXT ); ?></h3>
                    <div class="inside include-tab-support"></div>
                </div>
            </div>
            <!-- END-TAB 5 -->

            <!-- TAB 6 -->
            <div class="tab-page fade" id="tab-family">
                <div class="include-tab-family"></div>
            </div>
            <!-- END-TAB 6 -->

            <div class="additional-css"></div>

        </div>

    </div>
    <?php
}
