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
    $path = SPACEXCHIMP_P001_PATH;

    // Call messages
    spacexchimp_p001_message_hello();
    spacexchimp_p001_message_error_version();
    spacexchimp_p001_message_save_select();

    // Layout of page
    ?>
    <div class="wrap">

        <h2 class="sxc-header">
            <?php echo $name; ?>
            <span>
                <?php
                    printf(
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
                <?php require_once( $path . 'inc/php/sidebar.php' ); ?>
                <!-- INCLUDE SETTINGS -->
                <?php require_once( $path . 'inc/php/tabs/settings.php' ); ?>
            </div>
            <!-- END-TAB 1 -->

            <!-- TAB 2 -->
            <div class="tab-page fade" id="tab-usage">
                <?php require_once( $path . 'inc/php/tabs/usage.php' ); ?>
            </div>
            <!-- END-TAB 2 -->

            <!-- TAB 3 -->
            <div class="tab-page fade" id="tab-faq">
                <?php require_once( $path . 'inc/php/tabs/faq.php' ); ?>
            </div>
            <!-- END-TAB 3 -->

            <!-- TAB 4 -->
            <div class="tab-page fade" id="tab-support">
                <?php require_once( $path . 'inc/php/tabs/support.php' ); ?>
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
