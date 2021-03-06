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
class EntitiesThingTypeResponse implements JsonSerializable
{
    /**
     * id of Category
     * @var integer|null $id public property
     */
    public $id;

    /**
     * name of Category
     * @var string|null $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $id   Initialization value for $this->id
     * @param string  $name Initialization value for $this->name
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->id   = func_get_arg(0);
            $this->name = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']   = $this->id;
        $json['name'] = $this->name;

        return $json;
    }
}
