<?php
/**
 * Redirect frontend requests to REST API.
 *
 * @package  Ricardo_Car_Headless_CMS
 */

// Redirect individual posts to the REST API endpoint.
if ( is_singular() ) {
    header(
        sprintf(
            'Location: ' . get_home_url() . '/wp-json/wp/v2/%s/%s',
            get_post_type_object( get_post_type() )->rest_base,
            get_post()->ID
        )
    );
} else {
    header( 'Location: ' . get_home_url() . '/wp-json/' );
}
