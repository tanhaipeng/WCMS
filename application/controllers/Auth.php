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
        $this->load->model('Reply');
    }

    /**
     * 开发者授权&用户每次发送消息调用
     */
    public function index()
    {
        $token = $this->config->item('token');
        $signature = $this->input->get('signature');
        $timestr = $this->auth($token);
        $echostr = $this->input->get('echostr');
        if ($signature == $timestr && $echostr) {
            echo $echostr;
        } else {
            $this->recv();
        }
    }

    /**
     * 授权校验
     * @param $token
     * @return string
     */
    private function auth($token)
    {
        $timestamp = $this->input->get('timestamp');
        $nonce = $this->input->get('nonce');
        $array = [$timestamp, $nonce, $token];
        sort($array);
        $timestr = sha1(implode('', $array));
        return $timestr;
    }

    /**
     * for test
     */
    public function test()
    {
        echo 'test';
    }

    /**
     * 接收消息处理
     */
    public function recv()
    {
        // 接收消息
        $postStr = $GLOBALS['HTTP_RAW_POST_DATA'];
        // 处理消息
        $postObj = simplexml_load_string($postStr);
        // 分发消息
        switch (strtolower($postObj->MsgType)) {
            case 'event':
                $info = $this->Reply->handleEventMsg($postObj);
                if ($info) {
                    echo $info;
                }
                break;
            case 'text':
                $info = $this->Reply->handleTextMsg($postObj);
                if ($info) {
                    echo $info;
                }
                break;
            default:
                break;
        }
    }
}