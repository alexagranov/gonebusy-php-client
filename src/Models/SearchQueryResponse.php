<?php
/*
 * GonebusyLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GonebusyLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class SearchQueryResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var EntitiesSearchResponse $results public property
     */
    public $results;

    /**
     * Constructor to set initial or default values of member properties
     * @param EntitiesSearchResponse $results Initialization value for $this->results
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->results = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['results'] = $this->results;

        return $json;
    }
}
