<?php
/**
 * Created by PhpStorm.
 * User: remini
 * Date: 2018/10/11
 * Time: 8:40 AM
 */

defined('LOCK') or exit('Access Invalid!');

class APIResult
{
    public $err = 0;
    public $err_msg = "";
    public $result = null;
}