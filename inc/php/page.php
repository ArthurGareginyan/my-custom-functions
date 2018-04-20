<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Page
 */
function spacexchimp_p001_render_submenu_page() {

    // Put value of constants to variables for easier access
    $name = SPACEXCHIMP_P001_NAME;
    $slug = SPACEXCHIMP_P001_SLUG;
    $version = SPACEXCHIMP_P001_VERSION;
    $text = SPACEXCHIMP_P001_TEXT;

    // Call messages
    spacexchimp_p001_hello_message();
    spacexchimp_p001_error_message();
    spacexchimp_p001_successfull_message();
    spacexchimp_p001_parsing_error_message();

    // Layout of page
    ?>
    <div class="wrap">
        <h2>
            <?php echo $name; ?>
            <span>
                <?php printf(
                              __( 'by %s Space X-Chimp %s', $text ),
                                  '<a href="https://www.spacexchimp.com" target="_blank">',
                                  '</a>'
                             );
                ?>
            </span>
            <p class="version"><?php _e( 'Version', $text ); ?> <?php echo $version; ?></p>
        </h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- TABS NAVIGATION MENU -->
            <ul class="tabs-nav">
                <li class="active"><a href="#tab-core" data-toggle="tab"><?php _e( 'Main', $text ); ?></a></li>
                <li><a href="#tab-usage" data-toggle="tab"><?php _e( 'Usage', $text ); ?></a></li>
                <li><a href="#tab-faq" data-toggle="tab"><?php _e( 'F.A.Q.', $text ); ?></a></li>
                <li><a href="#tab-support" data-toggle="tab"><?php _e( 'Support', $text ); ?></a></li>
                <li><a href="#tab-store" data-toggle="tab"><?php _e( 'Store', $text ); ?></a></li>
            </ul>
            <!-- END-TABS NAVIGATION MENU -->

            <!-- TAB 1 -->
            <div class="tab-page fade active in" id="tab-core">
                <!-- INCLUDE SIDEBAR -->
                <?php require_once( SPACEXCHIMP_P001_PATH . 'inc/php/sidebar.php' ); ?>
                <!-- INCLUDE SETTINGS -->
                <?php require_once( SPACEXCHIMP_P001_PATH . 'inc/php/settings.php' ); ?>
            </div>
            <!-- END-TAB 1 -->

            <!-- TAB 2 -->
            <div class="tab-page fade" id="tab-usage">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Usage Instructions', $text ); ?></h3>
                    <div class="inside">
                        <p><?php _e( 'To add your custom functions (the PHP code) to your website, simply follow these steps:', $text ); ?></p>
                        <ol class="custom-counter">
                            <li><?php _e( 'Go to the "Main" tab.', $text ); ?></li>
                            <li><?php _e( 'Place your PHP code in the field.', $text ); ?><br><br>
                                <?php _e( 'Example of PHP code:', $text ); ?>
<pre><code>function NameOfYourFunction {

    ...

}</code></pre>
                                <p class="note"><b><?php _e( 'Note!', $text ); ?></b> <?php _e( 'Please do not wrap your PHP code in the <code>&lt;?php</code>...<code>?&gt;</code> HTML tags.', $text ); ?></p>
                                <p class="note"><b><?php _e( 'Note!', $text ); ?></b> <?php _e( 'Before use, please read the instructions on the F.A.Q. tab on what to do in case of a website crash.', $text ); ?></p>
                            </li>
                            <li><?php _e( 'Switch the toggle to the "ON" position.', $text ); ?></li>
                            <li><?php _e( 'Click the "Save changes" button.', $text ); ?></li>
                            <li><?php _e( 'Enjoy the result of applying your PHP code.', $text ); ?> <?php _e( 'It\'s that simple!', $text ); ?></li>
                        </ol>
                        <p class="note"><b><?php _e( 'Note!', $text ); ?></b> <?php printf(
                                                                                            __( 'If you want more options then %s tell us %s and we will be happy to add it.', $text ),
                                                                                                '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                                                                                '</a>'
                                                                                          );
                                                                              ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END-TAB 2 -->

            <!-- TAB 3 -->
            <div class="tab-page fade" id="tab-faq">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Frequently Asked Questions', $text ); ?></h3>
                    <div class="inside">

                        <p class="note">
                            <?php _e( 'If you have a question, please read the Frequently Asked Questions below to see if the answer is here.', $text ); ?>
                        </p>

                        <div class="panel-group" id="collapse-group">
                            <?php
                                $loopvalue = '15';
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

                        <div class="question-1"><?php _e( 'Will this plugin work on my WordPress.COM website?', $text ); ?></div>
                        <div class="answer-1"><?php _e( 'Sorry, this plugin is available for use only on self-hosted (WordPress.ORG) websites.', $text ); ?></div>

                        <div class="question-2"><?php _e( 'Can I use this plugin on my language?', $text ); ?></div>
                        <div class="answer-2"><?php _e( 'Yes. This plugin is ready for translation and has already been translated into several languages.', $text ); ?><br><br>
                                              <?php printf(
                                                            __( 'If you want to help translate this plugin then please visit the %s. You can also use the POT file, that is included and placed in the "languages" folder, in order to create a translation PO file. Just send the PO file to us at the %s and we will include this translation within the next plugin update.', $text ),
                                                                '<a href="https://translate.wordpress.org/projects/wp-plugins/' . $slug . '" target="_blank">translation page</a>',
                                                                '<a href="mailto:support@spacexchimp.com?subject=New translation of the ' . $name . ' plugin">support@spacexchimp.com</a>'
                                                           );
                                              ?><br><br>
                                              <?php _e( 'Maybe not all existed translations are up to date. You are welcome to contribute corrections!', $text ); ?><br><br>
                                              <?php _e( 'Many of plugin users would be delighted if you share your translation with the community. Thanks for your contribution!', $text ); ?></div>

                        <div class="question-3"><?php _e( 'How does it work?', $text ); ?></div>
                        <div class="answer-3"><?php _e( 'On the "Main" tab, place your PHP code in the field, switch the toggle to the "ON" position and click the "Save changes" button. Enjoy the result of applying your PHP code. It\'s that simple!', $text ); ?></div>

                        <div class="question-4"><?php _e( 'Can I use HTML/CSS/JS code integrated in PHP code?', $text ); ?></div>
                        <div class="answer-4"><?php _e( 'Yes. But you need to do it properly, like this:', $text ); ?><br>
<pre><code>function NameOfYourFunction {

    echo "&lt;script&gt;
                // Your JS code
          &lt;/script&gt;";

}</code></pre>
</div>

                        <div class="question-5"><?php _e( 'How much of PHP code (characters) I can enter in the text field?', $text ); ?></div>
                        <div class="answer-5"><?php _e( 'We don\'t limit the number of characters.', $text ); ?></div>

                        <div class="question-6 question-red"><?php _e( 'On the plugin settings page, an error message appears. What could be wrong?', $text ); ?></div>
                        <div class="answer-6"><?php _e( 'Here are a few of the most likely causes of the error message:', $text ); ?>
                                              <ol class="custom-counter">
                                                    <li><?php _e( 'You make a syntax error in the code that you have entered. Check the syntax of your code and try again.', $text ); ?></li>
                                                    <li><?php _e( 'You entered two functions with the same name. Use a unique names for your functions.', $text ); ?></li>
                                                    <li><?php _e( 'You have entered function with a name that is already occupied by another function. Use a unique name for your function.', $text ); ?></li>
                                                    <li><?php _e( 'You are trying to overwrite an existing function (of WordPress, theme, or plugin). Instead, use filters and hooks.', $text ); ?></li>
                                              </ol></div>

                        <div class="question-7"><?php _e( 'Does this plugin requires any modification of the theme?', $text ); ?></div>
                        <div class="answer-7"><?php _e( 'Absolutely not. This plugin is configurable entirely from the plugin settings page.', $text ); ?></div>

                        <div class="question-8"><?php _e( 'Does this require any knowledge of HTML or CSS?', $text ); ?></div>
                        <div class="answer-8"><?php _e( 'This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page. But you need to know the HTML or CSS in order to add/remove/modify the HTML or CSS code by using this plugin.', $text ); ?></div>

                        <div class="question-9 question-red"><?php _e( 'It\'s not working. What could be wrong?', $text ); ?></div>
                        <div class="answer-9"><?php _e( 'As with every plugin, it\'s possible that things don\'t work. The most common reason for this is a web browser\'s cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser\'s cache.​ Clearing your browser\'s cache may solve the problem.', $text ); ?><br><br>
                                              <?php _e( 'It\'s impossible to tell what could be wrong exactly, but if you post a support request in the plugin\'s support forum on WordPress.org, we\'d be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.', $text ); ?></div>

                        <div class="question-10 question-red"><?php _e( 'What to do if this plugin crashed the website?', $text ); ?></div>
                        <div class="answer-10"><?php _e( 'This plugin has a built-in functions for checking the custom code for syntax errors, duplicate functions names, and etc. But plugin is not perfect, so there are times when the entered custom code causes the error and white screen (WSOD). This is due to the fact that your custom code has a syntax error that this plugin could not detect. When this happens with you just do the following and all will be fine.', $text ); ?>
                                              <ol class="custom-counter">
                                                    <li><?php _e( 'Via FTP, go to the plugin folder (in <code>wp-content/plugins/my-custom-functions/</code>).', $text ); ?></li>
                                                    <li><?php _e( 'Rename the "START" file to "STOP". This will stop the execution of your custom code.', $text ); ?></li>
                                                    <li><?php _e( 'Return to the plugin settings page and edit/fix your custom code that you entered before the crash.', $text ); ?></li>
                                                    <li><?php _e( 'Rename the "STOP" file to "START" and you\'re done!', $text ); ?></li>
                                              </ol>
                                              <?php _e( 'This plugin stored you entered code in the database of your website. For getting your code, you also can go to the <code>Database</code> &#10145; Table <code>wp_options</code> &#10145; Option <code>spacexchimp_p001_settings</code> &#10145; <code>option_value</code>.', $text ); ?></div>

                        <div class="question-11 question-red"><?php _e( 'The last WordPress update is preventing me from editing my website that is using this plugin. Why is this?', $text ); ?></div>
                        <div class="answer-11"><?php _e( 'This plugin can not cause such problem. More likely, the problem are related to the settings of the website. It could just be a cache, so please try to clear your website\'s cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser. Also please try to re-login to the website, this too can help.', $text ); ?></div>

                        <div class="question-12 question-red"><?php _e( 'Where to report bug if found?', $text ); ?></div>
                        <div class="answer-12"><?php printf(
                                                            __( 'Bug reports are very welcome! Please visit %s our contact page %s and report. Please do not forget to specify the name of the plugin. Thank you!', $text ),
                                                                '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                                                '</a>'
                                                           );
                                               ?></div>

                        <div class="question-13"><?php _e( 'Where to share any ideas or suggestions to make the plugin better?', $text ); ?></div>
                        <div class="answer-13"><?php printf(
                                                            __( 'Any suggestions are very welcome! Please visit %s our contact page %s. Please do not forget to specify the name of the plugin. Thank you!', $text ),
                                                                '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                                                '</a>'
                                                           );
                                               ?></div>

                        <div class="question-14"><?php _e( 'I love this plugin! Can I help somehow?', $text ); ?></div>
                        <div class="answer-14"><?php printf(
                                                            __( 'Yes, any contributions are very welcome! Please visit %s our donation page %s. Thank you!', $text ),
                                                                '<a href="https://www.spacexchimp.com/donate.html" target="_blank">',
                                                                '</a>'
                                                           );
                                               ?></div>

                        <div class="question-15"><?php _e( 'My question wasn\'t answered here.', $text ); ?></div>
                        <div class="answer-15"><?php printf(
                                                            __( 'You can ask your question on %s this page %s. But please keep in mind that this plugin is free, and there is no a special support team, so we have no way to answer everyone.', $text ),
                                                                '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                                                '</a>'
                                                           );
                                               ?></div>

                    </div>
                </div>
            </div>
            <!-- END-TAB 3 -->

            <!-- TAB 4 -->
            <div class="tab-page fade" id="tab-support">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Support Me', $text ); ?></h3>
                    <div class="inside">
                        <span class="image-with-button pull-left">
                            <img src="<?php echo SPACEXCHIMP_P001_URL . 'inc/img/thanks.png'; ?>" alt="Thanks!">
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                                    <span class="btn-label">
                                        <img src="<?php echo SPACEXCHIMP_P001_URL . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                    </span>
                                    <?php _e( 'Donate with PayPal', $text ); ?>
                            </a>
                        </span>
                        <p><?php
                                 printf(
                                         __( 'Hello! My name is %s Arthur Gareginyan %s and I\'m the founder of %s Space X-Chimp %s.', $text ),
                                         '<a href="https://www.arthurgareginyan.com" target="_blank">',
                                         '</a>',
                                         '<a href="https://www.spacexchimp.com" target="_blank">',
                                         '</a>'
                                       );
                           ?>
                        </p>
                        <p><?php _e( 'My intention is to create projects that will make this world a better place. I\'m really passionate about my work, I like what I\'m doing and hope that you will be enriched by my projects too.', $text ); ?></p>
                        <p><?php _e( 'I spend a lot of time and effort trying to make sure that the themes, plugins and other things I build are useful, and the ultimate proof of that for me is that you actually want to use them. But, I’m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                        <p><?php _e( 'If you appreciate my work, you can buy me a coffee!', $text ); ?></p>
                        <p><?php _e( 'Thank you for your support!', $text ); ?></p>
                    </div>
                </div>
            </div>
            <!-- END-TAB 4 -->

            <!-- TAB 5 -->
            <div class="tab-page fade" id="tab-store">
                <div class="include-tab-store"></div>
            </div>
            <!-- END-TAB 5 -->

        </div>

    </div>
    <?php
}
