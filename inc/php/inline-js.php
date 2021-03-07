<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

// Put the value of the plugin options into an array for easier access
$options = spacexchimp_p001_options();

?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {

            // Scroll to previouse position
            var hidden_scrollto = <?php echo $options['hidden_scrollto']; ?>;
            $(document).scrollTop(hidden_scrollto);

            // Update the value of the scroll position option
            $(window).scroll(function() {
                $('input:hidden.control-hidden.hidden_scrollto').val($(document).scrollTop());
            });
        });
    </script>
<?php

// Update the plugin options data in the database
if ( $options['hidden_scrollto'] != '0' ) {
    $options['hidden_scrollto'] = '0';
    update_option( $plugin['settings'] . '_settings', $options );
}
