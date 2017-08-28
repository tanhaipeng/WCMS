<?php
/**
 * Created by PhpStorm.
 * User: tanhaipeng
 * Date: 2017/8/28
 * Time: 下午7:38
 */

function srvAuth($token)
{
    $timestamp = $_GET['timestamp'];
    $nonce = $_GET['nonce'];
    $array = [$timestamp, $nonce, $token];
    sort($array);
    $timestr = sha1(implode('', $array));
    return $timestr;
}