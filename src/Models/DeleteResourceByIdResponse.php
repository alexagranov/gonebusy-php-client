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
class DeleteResourceByIdResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var EntitiesResourceResponse|null $resource public property
     */
    public $resource;

    /**
     * Constructor to set initial or default values of member properties
     * @param EntitiesResourceResponse $resource Initialization value for $this->resource
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->resource = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['resource'] = $this->resource;

        return $json;
    }
}
