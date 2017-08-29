<?php

/**
 * Created by PhpStorm.
 * User: tanhaipeng
 * Date: 2017/8/29
 * Time: 21:16
 */
class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 创建菜单
     */
    public function create()
    {
        header('content-type:text/html;charset=utf-8');
        $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=' . $this->config->item('access_token');
        $postArr = array(
            'button' => array(
                array(
                    'type' => 'click',
                    'name' => urlencode('菜单一'),
                    'key' => 'itme1',
                ),
                array(
                    'type' => 'click',
                    'name' => urlencode('二级菜单'),
                    'sub_button' => array(
                        array(
                            'name' => urlencode('二级菜单'),
                            'type' => 'view',
                            'url' => 'http://www.baidu.com',
                        ),
                    ),
                ),
            ),
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

    public function test()
    {
        https://open.weixin.qq.com/connect/oauth2/authorize?appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect
    }
}