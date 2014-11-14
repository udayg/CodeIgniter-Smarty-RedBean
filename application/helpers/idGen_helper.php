<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('gen_id')) {

    function gen_id() {

        $rand_id = "";

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        for ($i = 0; $i < 36; $i++) {

            if ($i % 6 == 0 && $i != 36 && $i != 0) {
                $rand_id .= "-";
            }

            $rand_id .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $rand_id;
    }

}
