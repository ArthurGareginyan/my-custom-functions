<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 3.0
 */
function MCFunctions_render_submenu_page() {

    // After settings updated
    if ( isset( $_GET['settings-updated'] ) ) {

        // Successful message
        ?>
            <div id="message" class="updated">
                <p><?php _e( 'Custom functions updated successfully.', 'my-custom-functions' ); ?></p>
            </div>
        <?php
    }

    // Error message
    $error = get_option( 'anarcho_cfunctions_error' );
    if ( $error == '1' ) :
        ?>
            <div id="message" class="error">
                <p>
                    <?php _e( 'Sorry, but your code causes a "Fatal error", so it is not applied!', 'my-custom-functions' ); ?><br/>
                    <?php _e( 'Please, check the code and try again.', 'my-custom-functions' ); ?>
                </p>
            </div>
        <?php
    endif;

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'My Custom Functions', 'my-custom-functions' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur Gareginyan</a>', 'my-custom-functions' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'my-custom-functions' ); ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily and safely add your custome functions (PHP code) to your website.', 'my-custom-functions' ); ?></p>
                        </div>
                    </div>

                    <div id="using" class="postbox">
                        <h3 class="title"><?php _e( 'Using', 'my-custom-functions' ); ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'To use, enter your custom functions, then click "Save Changes". It\'s that simple!', 'my-custom-functions' ); ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'my-custom-functions' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Got something to say? Need help?', 'my-custom-functions' ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com?subject=My Custom Functions">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'my-custom-functions' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'If you like this plugin and find it useful, please help me to make this plugin even better and keep it up-to-date.', 'my-custom-functions' ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('../img/btn_donateCC_LG.gif', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', 'my-custom-functions' ); ?></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END-SIDEBAR -->

            <!-- FORM -->
            <div class="has-sidebar sm-padded">
                <div id="post-body-content" class="has-sidebar-content">
                    <div class="meta-box-sortabless">

                        <form name="anarcho_cfunctions-form" action="options.php" method="post" enctype="multipart/form-data">
                            <?php settings_fields( 'anarcho_cfunctions_settings_group' ); ?>

                            <?php
                                // Declare variables
                                $options = get_option( 'anarcho_cfunctions_settings' );
                                $content = isset( $options['anarcho_cfunctions-content'] ) && !empty( $options['anarcho_cfunctions-content'] ) ? $options['anarcho_cfunctions-content'] : '/* Enter Your Custom Functions Here */';
                                $enable = isset( $options['enable'] ) && !empty( $options['enable'] ) && $options['enable'] == "on" ? 'checked' : ' ';
                            ?>
                            <div class="postbox">
                                <h3 class="title">
                                    <label for="anarcho_cfunctions_settings[anarcho_cfunctions-content]" ><?php _e( 'Functions (PHP code)', 'my-custom-functions' ); ?></label>
                                    <div class="trigger">
                                        <input type="checkbox" name="anarcho_cfunctions_settings[enable]" id="anarcho_cfunctions_settings[enable]" <?php echo $enable; ?> >
                                        <label for="anarcho_cfunctions_settings[enable]"></label>
                                    </div>
                                </h3>
                                <div class="inside">
                                    <textarea name="anarcho_cfunctions_settings[anarcho_cfunctions-content]" id="anarcho_cfunctions_settings[anarcho_cfunctions-content]" ><?php echo esc_attr( $content ); ?></textarea>
                                </div>
                            </div>

                            <?php submit_button( __( 'Save Changes', 'my-custom-functions' ), 'primary', 'submit', true ); ?>

                        </form>

                    </div>
                </div>
            </div>
            <!-- END-FORM -->

        </div>

	</div>
	<?php
}