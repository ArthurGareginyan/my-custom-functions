<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

// Retrieve options from database and declare variables
$options = get_option( $plugin['settings'] . '_settings' );

// Make the "$options" array if the plugin options data in the database is not exist
if ( ! is_array( $options ) ) {
    $options = array();
}

$hidden_scrollto = !empty( $options['hidden_scrollto'] ) ? $options['hidden_scrollto'] : '0';

?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {

            // Scroll to previouse position
            var hidden_scrollto = <?php echo $hidden_scrollto; ?>;
            $(document).scrollTop(hidden_scrollto);

            // Update the value of the scroll position option
            $(window).scroll(function() {
                $('input:hidden.control-hidden.hidden_scrollto').val($(document).scrollTop());
            });
        });
    </script>
<?php

// Update the plugin options data in the database
if ( $hidden_scrollto != '0' ) {
    $options['hidden_scrollto'] = '0';
    update_option( $plugin['settings'] . '_settings', $options );
}
