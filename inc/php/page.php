<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Page
 */
function spacexchimp_p001_render_submenu_page() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p001_plugin();

    // Call messages
    spacexchimp_p001_message_hello();
    spacexchimp_p001_message_error_version();
    spacexchimp_p001_message_save_select();

    // Layout of page
    ?>
    <div class="wrap">

        <h2 class="sxc-header">
            <?php echo $plugin['name']; ?>
            <span>
                <?php
                    printf(
                        __( 'by %s Space X-Chimp %s', $plugin['text'] ),
                        '<a href="https://www.spacexchimp.com" target="_blank">',
                        '</a>'
                    );
                ?>
            </span>
            <p class="version"><?php _e( 'Version', $plugin['text'] ); ?> <?php echo $plugin['version']; ?></p>
        </h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- TABS NAVIGATION MENU -->
            <ul class="tabs-nav">
                <li class="active"><a href="#tab-core" data-toggle="tab"><?php _e( 'Main', $plugin['text'] ); ?></a></li>
                <li><a href="#tab-usage" data-toggle="tab"><?php _e( 'Usage', $plugin['text'] ); ?></a></li>
                <li><a href="#tab-faq" data-toggle="tab"><?php _e( 'F.A.Q.', $plugin['text'] ); ?></a></li>
                <li><a href="#tab-support" data-toggle="tab"><?php _e( 'Support', $plugin['text'] ); ?></a></li>
                <li><a href="#tab-store" data-toggle="tab"><?php _e( 'Store', $plugin['text'] ); ?></a></li>
            </ul>
            <!-- END-TABS NAVIGATION MENU -->

            <!-- TAB SETTINGS -->
            <div class="tab-page fade active in" id="tab-core">

                <!-- INCLUDE SIDEBAR -->
                <?php require_once( $plugin['path'] . 'inc/php/sidebar.php' ); ?>

                <?php require_once( $plugin['path'] . 'inc/php/tabs/settings.php' ); ?>
            </div>
            <!-- END-TAB SETTINGS -->

            <!-- TAB USAGE -->
            <div class="tab-page fade" id="tab-usage">
                <?php require_once( $plugin['path'] . 'inc/php/tabs/usage.php' ); ?>
            </div>
            <!-- END-TAB USAGE -->

            <!-- TAB FAQ -->
            <div class="tab-page fade" id="tab-faq">
                <?php require_once( $plugin['path'] . 'inc/php/tabs/faq.php' ); ?>
            </div>
            <!-- END-TAB FAQ -->

            <!-- TAB SUPPORT -->
            <div class="tab-page fade" id="tab-support">
                <?php require_once( $plugin['path'] . 'inc/php/tabs/support.php' ); ?>
            </div>
            <!-- END-TAB SUPPORT -->

            <!-- TAB STORE -->
            <div class="tab-page fade" id="tab-store">
                <div class="include-tab-store"></div>
            </div>
            <!-- END-TAB STORE -->

        </div>

    </div>
    <?php
}
