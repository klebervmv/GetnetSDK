<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Getnet\API;

/**
 * Description of SaveCardResponse
 *
 * @author klebertonvilela
 */
class SaveCardResponse extends BaseResponse {

    public $card_id;
    public $number_token;
    public $expiration_month;
    public $expiration_year;
    public $brand;
    public $status;
    public $customer_id;
    public $last_four_digits;

    /**
     * 
     * @return string
     */
    function getCardId(): string {
        return $this->card_id;
    }

    /**
     * 
     * @return string
     */
    function getNumberToken(): string {
        return $this->number_token;
    }

    /**
     * 
     * @return string
     */
    function getCard_id(): string {
        return $this->card_id;
    }

    /**
     * 
     * @return string
     */
    function getNumber_token(): string {
        return $this->number_token;
    }

    /**
     * 
     * @return string
     */
    function getExpiration_month(): string {
        return $this->expiration_month;
    }

    /**
     * 
     * @return string
     */
    function getExpiration_year(): string {
        return $this->expiration_year;
    }

    /**
     * 
     * @return string
     */
    function getBrand(): string {
        return $this->brand;
    }

    /**
     * 
     * @return string
     */
    function getCustomer_id(): string {
        return $this->customer_id;
    }

    /**
     * 
     * @return string
     */
    function getLast_four(): string {
        return $this->last_four_digits;
    }

}
