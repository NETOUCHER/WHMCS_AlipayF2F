<?php

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

use Illuminate\Database\Capsule\Manager as Capsule;


function alipay_full_MetaData() {
    return array(
    'DisplayName' => 'Pay via Alipay',
    'APIVersion' => '1.1', // Use API Version 1.1
    );
}

function alipay_full_config() {
    require_once __DIR__ ."/class/alipay_full/config_gen.php";
    $config = new alipayfull_config();
    return $config->get_configuration();
}

function alipay_full_link($params)
{
    require_once __DIR__ ."/class/alipay_full/link_gen.php";
    $link = new alipayfull_link();
    return $link->get_paylink($params);
}

function alipay_refund_f2fpay($params)
{
    require_once __DIR__ . "/class/alipay_full/link_gen.php";
    $link = new alipayfull_link();
    return $link->refund_f2fpay($params);
}