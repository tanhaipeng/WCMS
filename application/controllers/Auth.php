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

        /*
        if (strtolower($postObj->MsgType) == 'text') {
            $toUser = $postObj->FromUserName;
            $fromUser = $postObj->ToUserName;
            $time = time();
            $msgType = 'text';
            $template = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[%s]]></MsgType>
                            <Content><![CDATA[%s]]></Content>
                            </xml>";
            switch ($postObj->Content) {
                case "1":
                    $content = 'replay tanhp1';
                    break;
                case "2":
                    $content = 'replay tanhp1';
                    break;
                case "3":
                    $content = "<a href='www.baidu.com'>百度</a>";
                    break;
                default:
                    $content = '输入非法';
            }
            echo sprintf($template, $toUser, $fromUser, $time, $msgType, $content);
        }
        */
        if (strtolower($postObj->MsgType) == 'text') {
            $toUser = $postObj->FromUserName;
            $fromUser = $postObj->ToUserName;
            $time = time();
            $msgType = 'news';
            $array = [array(
                'title' => 'imooc',
                'description' => 'description',
                'picurl' => 'http://h.hiphotos.baidu.com/image/pic/item/8718367adab44aeda9f1f424ba1c8701a08bfbb7.jpg',
                'url' => 'www.baidu.com',
            ), array(
                'title' => 'imooc',
                'description' => 'description',
                'picurl' => 'http://h.hiphotos.baidu.com/image/pic/item/8718367adab44aeda9f1f424ba1c8701a08bfbb7.jpg',
                'url' => 'www.baidu.com',
            )];
            if ($postObj->Content == 'tuwen') {
                $template = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%d</CreateTime>
                            <MsgType><![CDATA[%s]]></MsgType>
                            <ArticleCount>%d</ArticleCount>
                            <Articles>";
                foreach ($array as $k => $v) {
                    $template .= "<item>
                                <Title><![CDATA[{$v['title']}]]></Title> 
                                <Description><![CDATA[{$v['description']}]]></Description>
                                <PicUrl><![CDATA[{$v['picurl']}]]></PicUrl>
                                <Url><![CDATA[{$v['url']}]]></Url>
                                </item>";
                }
                $template .= "</Articles>
                            </xml>";


                echo sprintf($template, $toUser, $fromUser, $time, $msgType, count($array));
            }
        }
    }
}