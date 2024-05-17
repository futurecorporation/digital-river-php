<?php
/**
 * CustomerType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Digital River API Reference
 *
 * removed by liao, too long
 *
 * The version of the OpenAPI document: 2024
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalRiver\ApiSdk\Model;
use \DigitalRiver\ApiSdk\ObjectSerializer;

/**
 * CustomerType Class Doc Comment
 *
 * @category Class
 * @description The type of customer.
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerType
{
    /**
     * Possible values of this enum
     */
    public const BUSINESS = 'business';

    public const INDIVIDUAL = 'individual';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUSINESS,
            self::INDIVIDUAL
        ];
    }
}


