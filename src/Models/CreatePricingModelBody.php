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
class CreatePricingModelBody implements JsonSerializable {
    /**
     * PricingModel Name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Type of PricingModel
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * 3 Letter ISO Currency Code
     * @var string $currency public property
     */
    public $currency;

    /**
     * Optional Notes Field
     * @var string $notes public property
     */
    public $notes;

    /**
     * Price
     * @var double $price public property
     */
    public $price;

    /**
     * Create a PricingModel for this User Id.  You must be authorized to manage this User Id.
     * @maps user_id
     * @var integer $userId public property
     */
    public $userId;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $name       Initialization value for the property $this->name    
     * @param   string            $type       Initialization value for the property $this->type    
     * @param   string            $currency   Initialization value for the property $this->currency
     * @param   string            $notes      Initialization value for the property $this->notes   
     * @param   double            $price      Initialization value for the property $this->price   
     * @param   integer           $userId     Initialization value for the property $this->userId  
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->name     = func_get_arg(0);
            $this->type     = func_get_arg(1);
            $this->currency = func_get_arg(2);
            $this->notes    = func_get_arg(3);
            $this->price    = func_get_arg(4);
            $this->userId   = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']     = $this->name;
        $json['type']     = $this->type;
        $json['currency'] = $this->currency;
        $json['notes']    = $this->notes;
        $json['price']    = $this->price;
        $json['user_id']  = $this->userId;

        return $json;
    }
}