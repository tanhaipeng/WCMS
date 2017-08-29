<?php

/**
 * Created by PhpStorm.
 * User: tanhaipeng
 * Date: 2017/8/29
 * Time: 20:53
 */
class Push extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function message()
    {
        $url = 'https://api.weixin.qq.com/cgi-bin/message/mass/preview?access_token=' . $this->config->item('access_token');
        $postArr = array(
            'touser' => 'oLu5f0zGLtwgIBDmk5A13BFRTKvw',
            'text' => array(
                'content' => '123344343',
            ),
            'msgtype' => 'text',
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, urldecode(json_encode($postArr)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);
        curl_close($ch);
        echo $res;
    }

    public function template()
    {

    }
}