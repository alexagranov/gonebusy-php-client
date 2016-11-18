<?php 
/*
 * Gonebusy
 *
 * This file was automatically generated for GoneBusy Inc. by APIMATIC v2.0 ( https://apimatic.io ) on 11/18/2016
 */

namespace GonebusyLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class GetCategoriesResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var EntitiesCategoryResponse[] $categories public property
     */
    public $categories;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $categories   Initialization value for the property $this->categories
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->categories = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['categories'] = $this->categories;

        return $json;
    }
}