<?php

$merchant_id="#";// merchant_id here
$order_id=uniqid();
$amount=2500;

// currency code 
$currency="LKR";
$merchant_secret="#";// merchany_secret here


$hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);

$array = [];

$array["merchant_id"] = $merchant_id;
$array["order_id"] = $order_id;
$array["amount"] = $amount;
$array["currency"] = $currency;
$array["merchant_secret"] = $merchant_secret;
$array["hash"] = $hash;

    // Array conver to JSON

    $json = json_encode($array);
    echo $json;

?>