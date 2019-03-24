<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Usage Tab Content
 */
?>
    <div class="postbox">
        <h3 class="title"><?php _e( 'Usage Instructions', $plugin['text'] ); ?></h3>
        <div class="inside">
            <p><?php _e( 'To add your custom PHP code to your website, simply follow these steps:', $plugin['text'] ); ?></p>
            <ol class="custom-counter">
                <li><?php _e( 'Go to the "Main" tab on this page.', $plugin['text'] ); ?></li>
                <li>
                    <?php _e( 'Place your custom PHP code in the code editor field.', $plugin['text'] ); ?>
                    <br><br>
                    <p class="note">
                        <b><?php _e( 'Note!', $plugin['text'] ); ?></b>
                        <?php _e( 'Do not wrap your custom PHP code in HTML tags, such as <code>&lt;?php</code>...<code>?&gt;</code>.', $plugin['text'] ); ?>
                    </p>
                    <p class="note">
                        <b><?php _e( 'Note!', $plugin['text'] ); ?></b>
                        <?php
                            printf(
                                __( 'Before use, please read the %s instructions %s in our Blog on what to do in case of a website crash.', $plugin['text'] ),
                                '<a href="https://mycyberuniverse.com/my-custom-functions-plugin-causes-site-failure.html" target="_blank">',
                                '</a>'
                            );
                        ?>
                    </p>
                </li>
                <li><?php _e( 'Switch the toggle to the "ON" position.', $plugin['text'] ); ?></li>
                <li><?php _e( 'Click the "Save changes" button.', $plugin['text'] ); ?></li>
                <li><?php _e( 'Enjoy the result of applying your custom PHP code.', $plugin['text'] ); ?> <?php _e( 'It\'s that simple!', $plugin['text'] ); ?></li>
            </ol>
            <p class="note">
                <?php
                    printf(
                        __( 'If you want more options, then %s let us know %s and we will be happy to add them.', $plugin['text'] ),
                        '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                        '</a>'
                    );
                ?>
            </p>
        </div>
    </div>
<?php
