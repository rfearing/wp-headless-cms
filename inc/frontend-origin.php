<?php
/**
 * Frontend origin helper function.
 *
 * @package  Ricardo_Car_Headless_CMS
 */

/**
 * Gather the front end origin
 * @return str Frontend origin URL, i.e., http://localhost:3000.
 */
function get_frontend_origin() {
    $client = getenv('CLIENT_ORIGIN');
    $client = $client ? $client : 'http://localhost:3000';
    return $client;
}
