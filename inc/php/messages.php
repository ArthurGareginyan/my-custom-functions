<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Hello message - Bootstrap Modal
 *
 * @since 4.0
 */
function MCFunctions_hello_message() {

    $options = get_option( 'anarcho_cfunctions_settings' );

    if ( !empty($options) ) {
        return;
    }

    ?>
        <div id="hello-message" class="modal fade hello-message" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="http://mycyberuniverse.com/public-files/images/Arthur.png">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p><?php _e( 'Hello. I\'m Arthur, the author of this plugin.', MCFUNC_TEXT ); ?></p>
                        <p><?php printf(
                                        __( 'Thank you for installing my plugin! I hope you will love it %s', MCFUNC_TEXT ),
                                        '&#x1F603;'
                                        );
                            ?></p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function($) {
                  $("#hello-message").modal();
            });
        </script>
    <?php
}

/**
 * Error message (When the old version of plugin installed) - Bootstrap Modal
 *
 * @since 4.0
 */
function MCFunctions_error_message() {

    $info = get_option( 'anarcho_cfunctions_service_info' );
    $old_version = isset( $info['old_version'] ) && !empty( $info['old_version'] ) ? $info['old_version'] : '0';

    if ( $old_version != '1' ) {
        return;
    }

    ?>
        <div id="error-message" class="modal fade error-message" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p><?php _e( 'You have installed an old version of this plugin.', MCFUNC_TEXT ); ?></p>
                        <p><?php _e( 'Please update the plugin to the latest version, and all will be fine.', MCFUNC_TEXT ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function($) {
                $("#error-message").modal( {backdrop: "static", keyboard: false} );
            });
        </script>
    <?php
}

/**
 * Successfull message
 *
 * @since 4.0
 */
function MCFunctions_successfull_message() {

    // After settings updated
    if ( isset( $_GET['settings-updated'] ) ) {
        ?>
            <div id="message" class="updated">
                <p><?php _e( 'Custom functions updated successfully.', MCFUNC_TEXT ); ?></p>
            </div>
        <?php
    }
}

/**
 * Error message
 *
 * @since 4.0
 */
function MCFunctions_parsing_error_message() {

    $error = get_option( 'anarcho_cfunctions_error' );
    if ( $error == '1' ) {
        ?>
            <div id="message" class="error">
                <p>
                    <?php _e( 'Sorry, but your code causes a "Fatal error", so it is not applied!', MCFUNC_TEXT ); ?><br/>
                    <?php _e( 'Please, check the code and try again.', MCFUNC_TEXT ); ?>
                </p>
            </div>
        <?php
    }
}
