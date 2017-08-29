<?php

/**
 * Created by PhpStorm.
 * User: tanhaipeng
 * Date: 2017/8/28
 * Time: 22:40
 */
class Reply extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取Token(有效期2小时，每天2000次)
     * @param $appid
     * @param $secret
     * @return bool
     */
    public function getWxToken($appid, $secret)
    {
        $param = array(
            'appid' => $this->config->item('appid'),
            'secret' => $this->config->item('secret'),
        );
        $api = $this->config->item('token_api') . '&' . http_build_query($param);
        $res = json_encode(file_get_contents($api, true));
        if ($res != false && isset($res['access_token'])) {
            return $res['access_token'];
        }
        return false;
    }

    /**
     * 获取微信服务器地址
     * @param $token
     * @return bool
     */
    public function getWxIp($token)
    {
        $api = $this->config->item('server_api') . $token;
        $res = json_encode(file_get_contents($api, true));
        if ($res != false && isset($res['ip_list'])) {
            return $res['ip_list'];
        }
        return false;
    }

}