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
class GetUsersResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var EntitiesUserResponse[]|null $users public property
     */
    public $users;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $users Initialization value for $this->users
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->users = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['users'] = $this->users;

        return $json;
    }
}
