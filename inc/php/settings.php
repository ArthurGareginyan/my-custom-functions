<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab
 *
 * @since 4.2
 */
?>
    <!-- SIDEBAR -->
    <div class="inner-sidebar">
        <div id="side-sortables" class="meta-box-sortabless ui-sortable">

            <div id="about" class="postbox">
                <h3 class="title"><?php _e( 'About', MCFUNC_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'This plugin allows you to easily and safely add your custom functions (PHP code) to your website.', MCFUNC_TEXT ); ?></p>
                </div>
            </div>

            <div id="upgrade" class="postbox">
                <h3 class="title"><?php _e( 'Upgrade', MCFUNC_TEXT ); ?></h3>
                <div class="inside">
                    <a href="https://www.arthurgareginyan.com/plugin-my-custom-functions-pro.html" target="_blank">
                        <img src="http://mycyberuniverse.com/public-files/sale/pro-version.png" alt="PRO">
                    </a>
                </div>
            </div>

            <div id="support" class="postbox">
                <h3 class="title"><?php _e( 'Support', MCFUNC_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', MCFUNC_TEXT ); ?></p>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', MCFUNC_TEXT ); ?></a>
                    <p><?php _e( 'Thanks for your support!', MCFUNC_TEXT ); ?></p>
                </div>
            </div>

            <div id="help" class="postbox">
                <h3 class="title"><?php _e( 'Help', MCFUNC_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'Got something to say? Need help?', MCFUNC_TEXT ); ?></p>
                    <p><a href="mailto:arthurgareginyan@gmail.com?subject=<?php echo MCFUNC_NAME; ?>">arthurgareginyan@gmail.com</a></p>
                </div>
            </div>

        </div>
    </div>
    <!-- END-SIDEBAR -->

    <!-- FORM -->
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( MCFUNC_SETTINGS . '_settings_group' ); ?>

                    <?php
                        // Get options from the database
                        $options = get_option( MCFUNC_SETTINGS . '_settings' );

                        // Set default value if option is empty
                        $content = $options['anarcho_cfunctions-content'] ? $options['anarcho_cfunctions-content'] : '/* Enter your custom functions here */';
                        $enable = ( $options['enable'] == "on" ) ? 'checked' : ' ';
                    ?>

                    <div class="postbox">
                        <h3 class="title">
                            <label for="anarcho_cfunctions_settings[anarcho_cfunctions-content]" ><?php _e( 'Functions (PHP code)', MCFUNC_TEXT ); ?></label>
                            <div class="trigger">
                                <input type="checkbox" name="anarcho_cfunctions_settings[enable]" id="anarcho_cfunctions_settings[enable]" <?php echo $enable; ?> >
                                <label for="anarcho_cfunctions_settings[enable]"></label>
                            </div>
                        </h3>
                        <div class="inside">
                            <textarea name="anarcho_cfunctions_settings[anarcho_cfunctions-content]" id="anarcho_cfunctions_settings[anarcho_cfunctions-content]" ><?php echo htmlentities( $content ); ?></textarea>
                        </div>
                    </div>

                    <?php submit_button( __( 'Save Changes', MCFUNC_TEXT ), 'primary', 'submit', true ); ?>

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', MCFUNC_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', MCFUNC_TEXT ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', MCFUNC_TEXT ); ?></a>
                            <p><?php _e( 'Thanks for your support!', MCFUNC_TEXT ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- END-FORM -->
<?php
