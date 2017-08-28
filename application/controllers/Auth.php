<?php

/**
 * Created by PhpStorm.
 * User: tanhaipeng
 * Date: 2017/8/28
 * Time: 21:31
 */
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $token = $this->config->item('token');
        $signature = $this->input->get('signature');
        $timestr = $this->srvAuth($token);
        if ($signature == $timestr) {
            echo $this->input->get('echostr');
        }
    }

    private function srvAuth($token)
    {
        $timestamp = $this->input->get('timestamp');
        $nonce = $this->input->get('nonce');
        $array = [$timestamp, $nonce, $token];
        sort($array);
        $timestr = sha1(implode('', $array));
        return $timestr;
    }
}