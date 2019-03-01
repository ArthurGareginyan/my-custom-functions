<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab Content
 */
?>
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( SPACEXCHIMP_P001_SETTINGS . '_settings_group' ); ?>

                    <?php
                        // Retrieve options from database
                        $options = get_option( SPACEXCHIMP_P001_SETTINGS . '_settings' );

                        // Set default value if option is empty
                        $snippets = !empty( $options['snippets'] ) ? $options['snippets'] : '';
                        $checked = ( !empty( $options['enable'] ) && $options['enable'] == "on" ) ? 'checked' : '';
                    ?>

                    <div class="postbox">
                        <h3 class="title">
                            <?php _e( 'Functions (PHP code)', $text ); ?>
                            <div class="pull-right">
                                <span class="not-saved"><?php _e( 'NOT SAVED!', $text ); ?></span>
                                <input
                                    type="checkbox"
                                    name="spacexchimp_p001_settings[enable]"
                                    id="spacexchimp_p001_settings[enable]"
                                    <?php echo $checked; ?>
                                    class="control-switch-onoff"
                                >
                            </div>
                        </h3>
                        <div class="inside">
                            <textarea
                                name="spacexchimp_p001_settings[snippets]"
                                id="spacexchimp_p001_settings[snippets]"
                                placeholder="<?php _e( 'Enter your PHP functions here', $text ); ?>"
                            ><?php echo htmlentities( $snippets ); ?></textarea>
                        </div>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="<?php _e( 'Save changes', $text ); ?>">

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Every little contribution helps to cover our costs and allows us to spend more time creating things for awesome people like you to enjoy.', $text ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                                <span class="btn-label">
                                    <img src="<?php echo SPACEXCHIMP_P001_URL . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                </span>
                                <?php _e( 'Donate with PayPal', $text ); ?>
                            </a>
                            <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
<?php
