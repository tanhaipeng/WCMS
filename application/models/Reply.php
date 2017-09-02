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
            'appid' => $appid,
            'secret' => $secret,
        );
        $api = $this->config->item('token_api') . '&' . http_build_query($param);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = json_decode(curl_exec($ch), true);
        if ($res != false && isset($res['access_token'])) {
            return $res['access_token'];
        }
        return false;
    }

    /**
     * 获取关注者列表
     * @param $access_token
     * @return array
     */
    public function getFansList($access_token)
    {
        $api = $this->config->item('fans_api') . $access_token;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = json_decode(curl_exec($ch), true);
        if ($res != false && isset($res['total'])) {
            return $res['data']['openid'];
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
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = json_decode(curl_exec($ch), true);
        if ($res != false && isset($res['ip_list'])) {
            return $res['ip_list'];
        }
        return false;
    }

    /**
     * 处理event消息
     * @param $postObj
     * @return string
     */
    public function handleEventMsg($postObj)
    {
        // 订阅事件
        if ($postObj->Event == 'subscribe') {
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
            return $info;
        }
        return false;
    }

    /**
     * 处理text消息
     * @param $postObj
     * @return string
     */
    public function handleTextMsg($postObj)
    {
        $key = $postObj->Content;
        if ($key) {
            $info = $this->getDbInfo($key);
            if ($info['type'] == 'text') {
                $this->getTextMsg($info);
            }
            if ($info['type'] == 'image') {
                $this->getImgMsg($info);
            }
        }
    }

    /**
     * 封装文本消息
     * @param $postObj
     * @return string
     */
    private function getTextMsg($postObj)
    {
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
        return sprintf($template, $toUser, $fromUser, $time, $msgType, $content);
    }

    /**
     * 封装图文消息
     * @param $postObj
     * @return string
     */
    private function getImgMsg($postObj)
    {
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
            return sprintf($template, $toUser, $fromUser, $time, $msgType, count($array));
        }
    }

    /**
     * 从数据库获取消息
     * @param $key
     */
    private function getDbInfo($key)
    {

    }

    /**
     * push text message
     * @param $access_token
     * @param $touser
     * @param $content
     */
    public function pushTextMsg($access_token, $touser, $content)
    {
        $url = $this->config->item('push_api') . $access_token;
        $postArr = array(
            'touser' => $touser,
            'text' => array(
                'content' => $content,
            ),
            'msgtype' => 'text',
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, urldecode(json_encode($postArr)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
        curl_close($ch);
    }
}