<?php

defined('LOCK') or exit('Access Invalid!');

include_once("core/utils.php");
include_once("config.php");

function get_token(){
    return get_argument("token");
}

function check_authority(){
    if (!APP_KEY) {
        return true;
    }
    return get_token() == APP_KEY;
}
