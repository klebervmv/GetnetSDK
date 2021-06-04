<?php

namespace Getnet\API;
/**
 * Created by PhpStorm.
 * User: Klebervmv
 * Date: 04-06-2021
 * Time: 16:43
 */
include "../vendor/autoload.php";

$getNet = new Getnet("c076e924-a3fe-492d-a41f-1f8de48fb4b1", "bc097a2f-28e0-43ce-be92-d846253ba748", "SANDBOX");
$transaction = new Transaction();
$transaction->setSellerId("1955a180-2fa5-4b65-8790-2ba4182a94cb");
$transaction->setCurrency("BRL");
$transaction->setAmount("1000");
$transaction->Pix()
    ->setOrderId("0458")
    ->setCustomerId("1974");

$response = $getNet->Pix($transaction);
var_dump($response);


