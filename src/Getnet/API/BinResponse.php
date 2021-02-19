<?php

/**
 * Description of BinResponse
 * Date: 09/11/2020
 * @author klebertonvilela
 */

namespace Getnet\API;
/**
 * Class BinResponse
 * @package Getnet\API
 */
class BinResponse extends BaseResponse {

    public $status; // NOT_FOUND | OK
    public $brand;
    public $country;
    public $type;

    function getStatus() {
        return $this->status;
    }

    function getBrand() {
        return $this->brand;
    }

    function getCountry() {
        return $this->country;
    }

    function getType() {
        return $this->type;
    }
    

}
