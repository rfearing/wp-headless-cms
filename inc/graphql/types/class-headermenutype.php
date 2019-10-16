<?php
/**
 * Header Menu Type used for GraphQL.
 *
 * @package Ricardo_Car_Headless_CMS
 */

use \WPGraphQL\Types;
use \WPGraphQL\Type\WPObjectType;

/**
 * Header menu type class that extends WPObjectType
 */
class HeaderMenuType extends WPObjectType {
    /**
     * Graphql Fields
     *
     * @var $fields HeaderMenuType fields
     */
    private static $fields;

    /**
     * Constructor
     */
    public function __construct() {
        $config = [
            'name'        => 'HeaderMenuType',
            'fields'      => self::fields(),
            'description' => __( 'Header Menu', 'rfearing-headless-wp' ),
        ];
        parent::__construct( $config );
    }

    /**
     * Fields generator
     */
    protected static function fields() {
        if ( null === self::$fields ) {
            self::$fields = function () {
                $fields = [
                    'label' => [
                        'type'        => Types::string(),
                        'description' => __( 'The URL label', 'rfearing-headless-wp' ),
                    ],
                    'url'   => [
                        'type'        => Types::string(),
                        'description' => __( 'The URL', 'rfearing-headless-wp' ),
                    ],
                    'type'  => [
                        'type'        => Types::string(),
                        'description' => __( 'internal or external', 'rfearing-headless-wp' ),
                    ],
                ];
                return self::prepare_fields( $fields, 'HeaderMenuType' );
            };
        }
        return ! empty( self::$fields ) ? self::$fields : null;
    }
}
