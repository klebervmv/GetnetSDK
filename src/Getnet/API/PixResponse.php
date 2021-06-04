<?php
/**
 * Created by PhpStorm.
 * User: Klebervmv
 * Date: 04-06-2021
 * Time: 16:30
 */

namespace Getnet\API;


class PixResponse extends BaseResponse
{

    public $payment_id;
    public $status;
    public $description;
    public $additional_data;
    public $transaction_id;
    public $qr_code;
    public $creation_date_qrcode;
    public $expiration_date_qrcode;
    public $psp_code;

    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getAdditionalData()
    {
        return $this->additional_data;
    }

    /**
     * @return mixed
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * @return mixed
     */
    public function getQrCode()
    {
        return $this->qr_code;
    }

    /**
     * @return mixed
     */
    public function getCreationDateQrcode()
    {
        return $this->creation_date_qrcode;
    }

    /**
     * @return mixed
     */
    public function getExpirationDateQrcode()
    {
        return $this->expiration_date_qrcode;
    }

    /**
     * @return mixed
     */
    public function getPspCode()
    {
        return $this->psp_code;
    }


}