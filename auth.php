<?php
/**
 * Created by PhpStorm.
 * User: tanhaipeng
 * Date: 2017/8/28
 * Time: 下午7:26
 */

require_once 'config.php';
require_once 'lib/auth.php';

$signature = $_GET['signature'];
$timestr = srvAuth($token);

if ($timestr == $signature) {
    echo $_GET['echostr'];
    die();
}


