<?php

use Carbon\Carbon;


define('ENCRYPT_METHOD', 'AES-256-CBC');
define('SECRET_KEY', 'live4ajvf11224vb');
define('SECRET_IV', 'liveaves2211bfhhj34hb');

/**
 * Order placed status will be ACTIVE = 1
 * Seller deliver order Order status will be DELIVERD = 2
 * Buyer Complete Order Order staus will be COMPLETED = 4
 * Buyer cancel and create dispute Order status will be DISPUTED = 5
 * Seller accept Buyer's (cancel and dispute request) Order status will be CANCELED = 7
 *
 * Buyer cancel request Order status will be ACTIVE = 1
 * Seller reject Buyer's (cancel and dispute request) Order status will be ACTIVE = 1
 * If delivery date exceeds then Order status will be ACTIVE = 1
 * On revision Order status will be 1
 */

const ACTIVE = 1;
const DELIVERED = 2;
const REVISION = 3;
const COMPLETED = 4;
const DISPUTED = 5;
const LATE = 6;
const CANCELED = 7;

if (!function_exists('customEncrypt')) {
    function customEncrypt($string)
    {
        // hash
        $key = hash('sha256', SECRET_KEY);
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', SECRET_IV), 0, 16);
        $output = openssl_encrypt($string, ENCRYPT_METHOD, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }
}


if (!function_exists('customDecrypt')) {

    function customDecrypt($string)
    {
        if (is_numeric($string)) {
            return $string;
        }

        // hash
        $key = hash('sha256', SECRET_KEY);
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', SECRET_IV), 0, 16);
        $output = openssl_decrypt(base64_decode($string), ENCRYPT_METHOD, $key, 0, $iv);
        return $output;
    }
}

if (!function_exists('logactivity')) {
    function logactivity($order, $user, $description, $type = null, $value = null, $action = null)
    {
        activity($order->orderNo)
            ->performedOn($order)
            ->causedBy($user)
            ->withProperties([
                'type' => $type,
                'value' => $value,
                'action' => $action
            ])
            ->log($description);
        return 1;
    }
}

if (!function_exists('dateFormat')) {
    function dateFormat($date)
    {
        return Carbon::parse($date)->format('Y,M,d');
    }
}

if (!function_exists('getOrderStatus')) {
    function getOrderStatus($order_status)
    {
        if ($order_status == ACTIVE) {
            return [
                'status' => "ACTIVE",
                'background' => "MediumSeaGreen",
            ];
        }
        if ($order_status == DELIVERED) {
            return [
                'status' => "DELIVERED",
                'background' => "Gray",
            ];
        }
        if ($order_status == COMPLETED) {
            return [
                'status' => "COMPLETED",
                'background' => "DodgerBlue",
            ];
        }
        if ($order_status == DISPUTED) {
            return [
                'status' => "DISPUTED",
                'background' => "Red",
            ];
        }
        if ($order_status == CANCELED) {
            return [
                'status' => "CANCELED",
                'background' => "Red",
            ];
        }
        if ($order_status == LATE) {
            return [
                'status' => "LATE",
                'background' => "Orange",
            ];
        }
        if ($order_status == REVISION) {
            return [
                'status' => "REVISION",
                'background' => "Orange",
            ];
        }
    }
}
