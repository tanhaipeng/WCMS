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
        $this->load->model('Reply');
        $this->load->model('Account');
    }

    /**
     * execute push
     */
    public function exec()
    {
        $arrAcc = array('tan_haipeng', 'tan_haipeng', 'tan_haipeng');
        $content = "123456";
        foreach ($arrAcc as $acc) {
            $token = $this->Account->getAccessToken($acc);
            if ($token) {
                $fans = $this->Reply->getFansList($token);
                if ($fans == false) {
                    $info = $this->Account->getAppidSecret($acc);
                    $token = $this->Reply->getWxToken($info['appid'], $info['secret']);
                    if ($token) {
                        $this->Account->updateAccessToken($acc, $token);
                        $fans = $this->Reply->getFansList($token);
                        if ($fans) {
                            foreach ($fans as $user) {
                                $this->Reply->pushTextMsg($token, $user, $content);
                            }
                        }
                    }
                } else {
                    foreach ($fans as $user) {
                        $this->Reply->pushTextMsg($token, $user, $content);
                    }
                }
            }
        }
    }
}