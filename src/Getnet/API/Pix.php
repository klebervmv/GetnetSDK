<?php


namespace Getnet\API;


class Pix implements \JsonSerializable
{

    private $order_id;
    private $customer_id;

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param string $order_id
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param string $customer_id
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
        return $this;
    }
}