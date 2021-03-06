<?php
/*
 * Gonebusy
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GonebusyLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CreateUserBody implements JsonSerializable
{
    /**
     * User's email address
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * Optional name for your Business/Organization
     * @maps business_name
     * @var string|null $businessName public property
     */
    public $businessName;

    /**
     * Optional website URL
     * @maps external_url
     * @var string|null $externalUrl public property
     */
    public $externalUrl;

    /**
     * Optional first name
     * @maps first_name
     * @var string|null $firstName public property
     */
    public $firstName;

    /**
     * Optional last name
     * @maps last_name
     * @var string|null $lastName public property
     */
    public $lastName;

    /**
     * Optional vanity url - ex: www.gonebusy.com/[permalink] - must be unique
     * @var string|null $permalink public property
     */
    public $permalink;

    /**
     * Optional timezone
     * @var string|null $timezone public property
     */
    public $timezone;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $email        Initialization value for $this->email
     * @param string $businessName Initialization value for $this->businessName
     * @param string $externalUrl  Initialization value for $this->externalUrl
     * @param string $firstName    Initialization value for $this->firstName
     * @param string $lastName     Initialization value for $this->lastName
     * @param string $permalink    Initialization value for $this->permalink
     * @param string $timezone     Initialization value for $this->timezone
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->email        = func_get_arg(0);
            $this->businessName = func_get_arg(1);
            $this->externalUrl  = func_get_arg(2);
            $this->firstName    = func_get_arg(3);
            $this->lastName     = func_get_arg(4);
            $this->permalink    = func_get_arg(5);
            $this->timezone     = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['email']         = $this->email;
        $json['business_name'] = $this->businessName;
        $json['external_url']  = $this->externalUrl;
        $json['first_name']    = $this->firstName;
        $json['last_name']     = $this->lastName;
        $json['permalink']     = $this->permalink;
        $json['timezone']      = $this->timezone;

        return $json;
    }
}
