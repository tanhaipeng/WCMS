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
        $timestr = $this->auth($token);
        $echostr = $this->input->get('echostr');
        if ($signature == $timestr && $echostr) {
            echo $echostr;
        } else {
            $this->recv();
        }
    }

    private function auth($token)
    {
        $timestamp = $this->input->get('timestamp');
        $nonce = $this->input->get('nonce');
        $array = [$timestamp, $nonce, $token];
        sort($array);
        $timestr = sha1(implode('', $array));
        return $timestr;
    }

    public function test()
    {
        echo 'test';
    }

    public function recv()
    {
        // 接收消息
        $postStr = $GLOBALS['HTTP_RAW_POST_DATA'];
        // 处理消息
        $postObj = simplexml_load_string($postStr);
        if (strtolower($postObj->MsgType) == 'event') {
            if ($postObj->Event == 'subscribe') {
                // 回复消息
                $toUser = $postObj->FromUserName;
                $fromUser = $postObj->ToUserName;
                $time = time();
                $msgType = 'text';
                $content = 'welcome';
                $template = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[%s]]></MsgType>
                            <Content><![CDATA[%s]]></Content>
                            </xml>";
                $info = sprintf($template, $toUser, $fromUser, $time, $msgType, $content);
                echo $info;
            }
        }
    }
}