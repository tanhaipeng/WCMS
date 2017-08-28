<?php
/**
 * Created by PhpStorm.
 * User: tanhaipeng
 * Date: 2017/8/28
 * Time: 下午7:26
 */

$token = 'tanhp';
$aeskey = 'kCfWpLvD0BQu9esP5yeR0LjjhexwrQN26vtV63zDpze';

$timestamp = $_GET['timestamp'];
$nonce = $_GET['nonce'];
$signature = $_GET['signature'];

$array = [$timestamp, $nonce, $token];
sort($array);
$timestr = sha1(implode('', $array));
if ($timestr == $signature) {
    echo $_GET['echostr'];
    die();
}


