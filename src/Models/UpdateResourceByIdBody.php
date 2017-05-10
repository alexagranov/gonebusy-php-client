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
class UpdateResourceByIdBody implements JsonSerializable
{
    /**
     * Optional Capacity
     * @var integer|null $capacity public property
     */
    public $capacity;

    /**
     * Optional Description
     * @var string|null $description public property
     */
    public $description;

    /**
     * Optional Gender
     * @var string|null $gender public property
     */
    public $gender;

    /**
     * Resource Name
     * @var string|null $name public property
     */
    public $name;

    /**
     * When Resource is a Thing, the type Id
     * @maps thing_type_id
     * @var integer|null $thingTypeId public property
     */
    public $thingTypeId;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $capacity    Initialization value for $this->capacity
     * @param string  $description Initialization value for $this->description
     * @param string  $gender      Initialization value for $this->gender
     * @param string  $name        Initialization value for $this->name
     * @param integer $thingTypeId Initialization value for $this->thingTypeId
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->capacity    = func_get_arg(0);
            $this->description = func_get_arg(1);
            $this->gender      = func_get_arg(2);
            $this->name        = func_get_arg(3);
            $this->thingTypeId = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['capacity']      = $this->capacity;
        $json['description']   = $this->description;
        $json['gender']        = $this->gender;
        $json['name']          = $this->name;
        $json['thing_type_id'] = $this->thingTypeId;

        return $json;
    }
}
