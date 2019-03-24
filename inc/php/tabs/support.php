<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Support Us Tab Content
 */
?>
    <div class="postbox">
        <h3 class="title"><?php _e( 'Support Us', $plugin['text'] ); ?></h3>
        <div class="inside">
            <span class="image-with-button pull-left">
                <img src="<?php echo $plugin['url'] . 'inc/img/thanks.png'; ?>" alt="Thanks!">
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                    <span class="btn-label">
                        <img src="<?php echo $plugin['url'] . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                    </span>
                    <?php _e( 'Donate with PayPal', $plugin['text'] ); ?>
                </a>
            </span>
            <p>
                <?php _e( 'Hello!', $plugin['text'] ); ?>
                <?php
                    printf(
                        __( 'My name is %s Arthur %s, I\'m the founder of %s Space X-Chimp %s, which unites a small international team of young people.', $plugin['text'] ),
                        '<a href="https://www.instagram.com/arthur_gareginyan/" target="_blank">',
                        '</a>',
                        '<a href="https://www.spacexchimp.com" target="_blank">',
                        '</a>'
                    );
                ?>
            </p>
            <p>
                <?php _e( 'Our intention is to create projects that will make this world a better place.', $plugin['text'] ); ?>
                <?php _e( 'Our motto is - «Follow your dreams and don’t give up».', $plugin['text'] ); ?>
                <?php _e( 'We are really passionate about our work, we like what we are doing and hope that you will be enriched by our projects too.', $plugin['text'] ); ?>
            </p>
            <p>
                <?php _e( 'We spend a lot of time and effort trying to make sure that the themes, plugins and other things we build are useful, and the ultimate proof of that for us is that you actually want to use them.', $plugin['text'] ); ?>
                <?php _e( 'But we are an independent developers, without a regular income, so every little contribution helps to cover our costs and allows us to spend more time creating things for awesome people like you to enjoy.', $plugin['text'] ); ?>
            </p>
            <p>
                <?php _e( 'If you appreciate our work, you can buy us a cup of coffee!', $plugin['text'] ); ?>
            </p>
            <p>
                <?php _e( 'Thank you for your support!', $plugin['text'] ); ?>
            </p>
        </div>
    </div>
<?php
