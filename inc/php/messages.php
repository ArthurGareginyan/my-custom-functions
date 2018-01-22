<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Hello message - Bootstrap Modal
 */
function spacexchimp_p001_hello_message() {

    $options = get_option( SPACEXCHIMP_P001_SETTINGS . '_settings' );

    if ( !empty( $options ) ) {
        return;
    }

    ?>
        <div id="hello-message" class="modal fade hello-message" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="<?php echo SPACEXCHIMP_P001_URL . 'inc/img/spacexchimp-logo.png'; ?>">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p><?php _e( 'Hello. We are the team of Space X-Chimp.', SPACEXCHIMP_P001_TEXT ); ?></p>
                        <p><?php printf(
                                        __( 'Thank you for installing our plugin! We hope you will love it! %s', SPACEXCHIMP_P001_TEXT ),
                                        '&#x1F603;'
                                        );
                            ?></p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function($) {

                // Show the message
                $("#hello-message").modal();

                // Hide the message after 7 seconds
                setTimeout(function() {
                    $('#hello-message').modal('hide');
                }, 7000);
            });
        </script>
    <?php
}

/**
 * Error message (When the old version of plugin installed) - Bootstrap Modal
 */
function spacexchimp_p001_error_message() {

    $info = get_option( SPACEXCHIMP_P001_SETTINGS . '_service_info' );
    $old_version = !empty( $info['old_version'] ) ? $info['old_version'] : '0';

    if ( $old_version != '1' ) {
        return;
    }

    ?>
        <div id="error-message" class="modal fade error-message" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p><?php _e( 'You have installed an old version of this plugin.', SPACEXCHIMP_P001_TEXT ); ?></p>
                        <p><?php _e( 'Please update the plugin to the latest version, and all will be fine.', SPACEXCHIMP_P001_TEXT ); ?></p>
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
 */
function spacexchimp_p001_successfull_message() {

    // After settings updated
    if ( isset( $_GET['settings-updated'] ) ) {
        ?>
            <div id="message" class="updated">
                <p><?php _e( 'Custom functions updated successfully.', SPACEXCHIMP_P001_TEXT ); ?></p>
            </div>
        <?php
    }
}

/**
 * Error message
 */
function spacexchimp_p001_parsing_error_message() {

    $error = get_option( SPACEXCHIMP_P001_SETTINGS . '_error' );
    if ( $error == '1' ) {
        ?>
            <div id="message" class="error">
                <p>
                    <?php _e( 'Sorry, but your code causes a "Fatal error", so it is not applied!', SPACEXCHIMP_P001_TEXT ); ?><br/>
                    <?php _e( 'Please, check the code and try again.', SPACEXCHIMP_P001_TEXT ); ?>
                </p>
            </div>
        <?php
    }
}
