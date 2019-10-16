<?php
/**
 * Add GraphQL resolvers
 *
 * @package  Ricardo_Car_Headless_CMS
 */

// check if WPGraphQL plugin is active.
if ( function_exists( 'register_graphql_field' ) ) {
    // Add header menu resolver.
    require_once 'resolvers/header-menu.php';
}
