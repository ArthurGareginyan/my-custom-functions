<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render FAQ Tab Content
 */
?>
    <div class="postbox">
        <h3 class="title"><?php _e( 'Frequently Asked Questions', $text ); ?></h3>
        <div class="inside">

            <p class="note">
                <?php _e( 'If you have a question, please read the Frequently Asked Questions below to see if the answer is here.', $text ); ?>
            </p>

            <div class="panel-group" id="collapse-group">
                <?php
                    $loopvalue = '23';
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

            <?php $i = 1; ?>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Where can I find a documentation for this plugin?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php
                    printf(
                        __( 'Please visit our %s Documentation site %s to view documentation.', $text ),
                        '<a href="https://docs.spacexchimp.com" target="_blank">',
                        '</a>'
                    );
                ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Will this plugin work on my wordpress.COM website?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'Sorry, this plugin is available for use only on self-hosted (wordpress.ORG) websites.', $text ); ?>
                <br><br>
                <?php _e( 'Please note that there is a difference between wordpress.COM and wordpress.ORG.', $text ); ?>
                <?php _e( 'The wordpress.COM is a blog hosting service that offers a limited version of the popular self-hosted WordPress software.', $text ); ?>
                <?php
                    printf(
                        __( 'You can learn more about the difference here: %s .', $text ),
                        '<a href="https://en.support.wordpress.com/com-vs-org/" target="_blank">https://en.support.wordpress.com/com-vs-org/</a>'
                    );
                ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Will this plugin work/compatible with the theme I use?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'This plugin is compatible with most themes.', $text ); ?>
                <?php _e( 'But, unfortunately, we cannot check it with all third-party themes (especially paid ones) for compatibility, therefore there are cases when this plugin does not work with a third-party theme.', $text ); ?>
                <?php _e( 'We constantly check this plugin for compatibility with third-party themes.', $text ); ?>
                <?php _e( 'If we find that this plugin is incompatible with a third-party theme, and if we can fix it on our part, we release an update of our plugin to fix the problem.', $text ); ?>
                <br><br>
                <?php _e( 'If you find a conflict between our plugin and a third-party theme, please let us know and we will definitely release an update of our plugin to fix the problem.', $text ); ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Will this plugin work/compatible with other plugins that I use?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'This plugin is compatible with most plugins.', $text ); ?>
                <?php _e( 'But, unfortunately, we cannot check it with all third-party plugins (especially paid ones) for compatibility, therefore there are cases when this plugin does not work with a third-party plugin.', $text ); ?>
                <?php _e( 'We constantly check this plugin for compatibility with third-party plugins.', $text ); ?>
                <?php _e( 'If we find that this plugin is incompatible with a third-party plugin, and if we can fix it on our part, we release an update of our plugin to fix the problem.', $text ); ?>
                <br><br>
                <?php _e( 'If you find a conflict between our plugin and a third-party plugin, please let us know and we will definitely release an update of our plugin to fix the problem.', $text ); ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Can I use this plugin on my language?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'Yes.', $text ); ?>
                <?php _e( 'This plugin is ready for translation and has already been translated into several languages.', $text ); ?>
                <?php _e( 'But If your language is not available then you can make one.', $text ); ?>
                <?php _e( 'It is also possible that not all existing translations are up-to-date or correct, so you are welcome to make corrections.', $text ); ?>
                <?php _e( 'Many of plugin users would be delighted if you share your translation with the community.', $text ); ?>
                <?php _e( 'Thanks for your contribution!', $text ); ?>
                <br><br>
                <?php
                    printf(
                        __( 'If you want to help translate this plugin, please visit the %s.', $text ),
                        '<a href="https://translate.wordpress.org/projects/wp-plugins/' . $slug . '" target="_blank">translation page</a>'
                    );
                ?>
                <?php _e( 'You can also use the POT file that is included and placed in the "languages" folder to create a translation PO file.', $text ); ?>
                <?php
                    printf(
                        __( 'Just send the PO file to us ( %s ) and we will include this translation within the next plugin update.', $text ),
                        '<a href="mailto:support@spacexchimp.com?subject=New translation of the ' . $name . ' plugin">support@spacexchimp.com</a>'
                    );
                ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'How does it work?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'On the "Main" tab, place your custom PHP code in the code editor field, switch the toggle to the "ON" position and click the "Save changes" button.', $text ); ?>
                <?php _e( 'Enjoy the result of applying your custom PHP code.', $text ); ?>
                <?php _e( 'It\'s that simple!', $text ); ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Can I use HTML/CSS/JS code integrated in PHP code?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'Yes.', $text ); ?>
                <?php _e( 'But you need to do it properly, like this:', $text ); ?>
                <br><br>
<pre><code>function my_custom_html_code() {

    // Print the custom HTML code
    echo '&lt;script&gt;YOUR CUSTOM HTML CODE HERE&lt;/script&gt;';

}
add_action( 'wp_head', 'my_custom_html_code' );</code></pre>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'How much of PHP code (characters) I can enter in the code editor?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'We don\'t limit the number of characters.', $text ); ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Does this plugin requires any modification of the theme?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'Absolutely not.', $text ); ?>
                <?php _e( 'This plugin is configurable entirely from the plugin settings page.', $text ); ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Does this require any knowledge of HTML or CSS?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'Absolutely not.', $text ); ?>
                <?php _e( 'This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page.', $text ); ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Can I add my custom PHP code to a specific page of my website?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'For now, this plugin does not have an option to apply the custom PHP code only on specific pages.', $text ); ?>
                <?php _e( 'We plan to add this feature soon.', $text ); ?>
                <?php _e( 'But for now in order to apply your custom PHP code only on specific pages of your website, you need to wrap your custom PHP code in a PHP function that will determine the page you want.', $text ); ?>
                <?php _e( 'You need something like this:', $text ); ?>
                <br><br>
<pre><code>function my_custom_php_code() {

    // Stop the function if this is not the Home page of website
    if ( !is_home() ) {
        return;
    }

    // YOUR CUSTOM PHP CODE HERE

}
my_custom_php_code();</code></pre>
            </div>

            <div class="question-<?php echo $i; ?> question-red">
                <?php _e( 'It\'s not working.', $text ); ?>
                <?php _e( 'What could be wrong?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'As with every plugin, it\'s possible that things don\'t work.', $text ); ?>
                <?php _e( 'It\'s impossible to tell what could be wrong exactly.', $text ); ?>
                <?php _e( 'The most common reason for this is a web browser\'s cache.', $text ); ?>
                <?php _e( 'Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load.', $text ); ?>
                <?php _e( 'This is called the browser\'s cache.', $text ); ?>
                <?php _e( 'Clearing your browser\'s cache may solve the problem.', $text ); ?>
                <br><br>
                <?php _e( 'If you post a support request in the plugin\'s support forum on WordPress.org, we\'d be happy to give it a look and try to help out.', $text ); ?>
                <?php _e( 'Please include as much information as possible, including a link to your website where the problem can be seen.', $text ); ?>
            </div>

            <div class="question-<?php echo $i; ?> question-red">
                <?php _e( 'On the plugin settings page, an error message appears.', $text ); ?>
                <?php _e( 'What could be wrong?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'Here are a few of the most likely causes of the error message:', $text ); ?>
                <ol class="custom-list">
                    <li>
                        <?php _e( 'You make a syntax error in the code that you have entered.', $text ); ?>
                        <?php _e( 'Check the syntax of your code and try again.', $text ); ?>
                    </li>
                    <li>
                        <?php _e( 'You entered two functions with the same name.', $text ); ?>
                        <?php _e( 'Use a unique names for your functions.', $text ); ?>
                    </li>
                    <li>
                        <?php _e( 'You have entered function with a name that is already occupied by another function.', $text ); ?>
                        <?php _e( 'Use a unique name for your function.', $text ); ?>
                    </li>
                    <li>
                        <?php _e( 'You are trying to overwrite an existing function (of WordPress, theme, or plugin).', $text ); ?>
                        <?php _e( 'Instead, use filters and hooks.', $text ); ?>
                    </li>
                </ol>
            </div>

            <div class="question-<?php echo $i; ?> question-red">
                <?php _e( 'My custom PHP code is not working.', $text ); ?>
                <?php _e( 'What could be wrong?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'It happens that your custom PHP code that you insert on the plugin page does not work, even if an error message does not appear.', $text ); ?>
                <?php _e( 'Here are a few of the most likely causes of the issue:', $text ); ?>
                <ol class="custom-list">
                    <li><?php _e( 'You have a typo during the insertion of your custom PHP code.', $text ); ?></li>
                    <li><?php _e( 'Your custom PHP code has a syntax error.', $text ); ?></li>
                    <li><?php _e( 'Your custom PHP code is incorrect and may not work.', $text ); ?></li>
                </ol>
            </div>

            <div class="question-<?php echo $i; ?> question-red">
                <?php _e( 'What to do if this plugin crashed the website?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'This plugin has a built-in functions for checking the custom code for syntax errors, duplicate functions names, and etc.', $text ); ?>
                <?php _e( 'But plugin is not perfect, so there are times when the entered custom code causes the error and white screen (WSOD).', $text ); ?>
                <?php _e( 'This is due to the fact that your custom code has a syntax error that this plugin could not detect.', $text ); ?>
                <?php _e( 'When this happens with you, please perform the following steps.', $text ); ?>
                <ol class="custom-counter">
                    <li>
                        <?php _e( 'Access your server via FTP or SFTP.', $text ); ?>
                        <?php _e( 'If you aren\'t sure how usually your web hosting provider will have instructions somewhere on their website.', $text ); ?>
                    </li>
                    <li>
                        <?php _e( 'Browse to the directory <code>wp-content/plugins/my-custom-functions/</code>.', $text ); ?>
                        <?php _e( 'Please contact your web hosting company to get help if you can\'t find this folder.', $text ); ?>
                    </li>
                    <li>
                        <?php _e( 'Rename the file <code>START</code> to <code>STOP</code>.', $text ); ?>
                        <?php _e( 'This will stop the execution of your custom code.', $text ); ?>
                    </li>
                    <li><?php _e( 'Log in to Admin Area of your WordPress website.', $text ); ?></li>
                    <li><?php _e( 'Go to the plugin settings page <code>Settings</code> &#10145; <code>PHP Inserter</code>.', $text ); ?></li>
                    <li><?php _e( 'Edit/fix your custom PHP code that you entered before the crash.', $text ); ?></li>
                    <li><?php _e( 'Return to the plugin folder and rename the file <code>STOP</code> to <code>START</code> and you\'re done!', $text ); ?></li>
                </ol>
                <?php _e( 'This plugin stored you entered code in the database of your website.', $text ); ?>
                <?php _e( 'For getting your code, you also can go to the <code>Database</code> &#10145; Table <code>wp_options</code> &#10145; Option <code>spacexchimp_p001_settings</code> &#10145; <code>option_value</code>.', $text ); ?>
                <br><br>
                <?php _e( 'We are already working on a feature to automatically stop the execution of users custom PHP code for cases when this plugin could not detect the error, and this caused the inaccessibility of the website.', $text ); ?>
            </div>

            <div class="question-<?php echo $i; ?> question-red">
                <?php _e( 'The last WordPress update is preventing me from editing my website that is using this plugin.', $text ); ?>
                <?php _e( 'Why is this?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'This plugin can not cause such problem.', $text ); ?>
                <?php _e( 'More likely, the problem are related to the settings of the website.', $text ); ?>
                <?php _e( 'It could just be a cache, so please try to clear your website\'s cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser.', $text ); ?>
                <?php _e( 'Also please try to re-login to the website, this too can help.', $text ); ?>
            </div>

            <div class="question-<?php echo $i; ?> question-red">
                <?php _e( 'Where to report bug if found?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'Bug reports are very welcome!', $text ); ?>
                <?php
                    printf(
                        __( 'Please visit our %s contact page %s and report.', $text ),
                        '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                        '</a>'
                    );
                ?>
                <?php _e( 'Please do not forget to specify the name of the plugin.', $text ); ?>
                <?php _e( 'Thank you!', $text ); ?>
                <br><br>
                <?php _e( 'Please include as much information as possible, including a link to your website where the problem can be seen.', $text ); ?>
                <?php _e( 'Describe in more detail what exactly you are seeing.', $text ); ?>
                <?php _e( 'Here are some examples:', $text ); ?>
                <br><br>
                <ul class="custom-list">
                    <li><?php _e( 'Elements of the plugin settings page are not working.', $text ); ?></li>
                    <li><?php _e( 'An error message is displayed on the plugin settings page.', $text ); ?></li>
                    <li><?php _e( 'An error message is displayed on the front end of website.', $text ); ?></li>
                    <li><?php _e( 'An error message is displayed on the back end of website.', $text ); ?></li>
                    <li><?php _e( 'Custom code is inserted on the plugin settings page, but it is not applied on the website.', $text ); ?></li>
                    <li><?php _e( 'Website is crashed.', $text ); ?></li>
                </ul>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Where to share any ideas or suggestions to make the plugin better?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'Any suggestions are very welcome!', $text ); ?>
                <?php
                    printf(
                        __( 'Please visit our %s contact page %s.', $text ),
                        '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                        '</a>'
                    );
                ?>
                <?php _e( 'Please do not forget to specify the name of the plugin.', $text ); ?>
                <?php _e( 'Thank you!', $text ); ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'I love this plugin!', $text ); ?>
                <?php _e( 'Can I help somehow?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php _e( 'Yes, any contributions are very welcome!', $text ); ?>
                <?php
                    printf(
                        __( 'Please visit our %s Support Us %s page.', $text ),
                        '<a href="https://www.spacexchimp.com/donate.html" target="_blank">',
                        '</a>'
                    );
                ?>
                <?php _e( 'Thank you!', $text ); ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Where can I find information about your licenses, payment process and refunds?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php
                    printf(
                        __( 'Answers to common questions about our licenses, payment process and refunds can be found on our %s Common Questions %s page.', $text ),
                        '<a href="https://www.spacexchimp.com/faq.html" target="_blank">',
                        '</a>'
                    );
                ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Where can I find information about your customer support?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php
                    printf(
                        __( 'Answers to common questions about our customer support can be found on our %s Common Questions %s page.', $text ),
                        '<a href="https://www.spacexchimp.com/faq.html" target="_blank">',
                        '</a>'
                    );
                ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'Where can I find information about your affiliate program?', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php
                    printf(
                        __( 'Answers to common questions about our affiliate program can be found on our %s Common Questions %s page.', $text ),
                        '<a href="https://www.spacexchimp.com/faq.html" target="_blank">',
                        '</a>'
                    );
                ?>
            </div>

            <div class="question-<?php echo $i; ?>">
                <?php _e( 'My question wasn\'t answered here.', $text ); ?>
            </div>
            <div class="answer-<?php echo $i; $i++ ?>">
                <?php
                    printf(
                        __( 'You can ask your question on %s this page %s.', $text ),
                        '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                        '</a>'
                    );
                ?>
                <?php _e( 'But please keep in mind that this plugin is free, and there is no a special support team, so we have no way to answer everyone.', $text ); ?>
            </div>

        </div>
    </div>
<?php
