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
class UpdatePricingModelByIdResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps pricing_model
     * @var EntitiesPricingModelResponse|null $pricingModel public property
     */
    public $pricingModel;

    /**
     * Constructor to set initial or default values of member properties
     * @param EntitiesPricingModelResponse $pricingModel Initialization value for $this->pricingModel
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->pricingModel = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['pricing_model'] = $this->pricingModel;

        return $json;
    }
}
