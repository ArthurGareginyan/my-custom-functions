<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Sidebar
 */
?>
    <div class="inner-sidebar">
        <div id="side-sortables" class="meta-box-sortabless ui-sortable">

            <div class="postbox about">
                <h3 class="title"><?php _e( 'About', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'This plugin allows you to easily and safely add your custom functions (PHP code) directly out of your WordPress Admin Area, without the need to have an external editor.', $text ); ?></p>
                </div>
            </div>

            <div class="postbox help">
                <h3 class="title"><?php _e( 'Help', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'If you have a question, please read the information in the FAQ section.', $text ); ?></p>
                </div>
            </div>

            <div class="postbox banner">
                <div class="inside">
                    <a href="https://www.spacexchimp.com/plugins/my-custom-functions-pro.html" target="_blank">
                        <img src="https://www.spacexchimp.com/assets/dynamic-content/images/plugin-upgrade.png" alt="Upgrade" style="margin-top:-16px;">
                    </a>
                </div>
            </div>

            <div class="postbox banner">
                <div class="inside">
                    <a href="https://www.spacexchimp.com/" target="_blank">
                        <img src="<?php echo SPACEXCHIMP_P001_URL . 'inc/img/banner.png'; ?>" alt="Space X-Chimp">
                    </a>
                </div>
            </div>

            <div class="postbox support">
                <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                            <span class="btn-label">
                                <img src="<?php echo SPACEXCHIMP_P001_URL . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                            </span>
                            <?php _e( 'Donate with PayPal', $text ); ?>
                    </a>
                    <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                </div>
            </div>

        </div>
    </div>
<?php
