<?php

/**
 * Created by PhpStorm.
 * User: tanhaipeng
 * Date: 2017/8/31
 * Time: 0:06
 */
class Account extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAccounts()
    {
        $arrAcc = array();
        $sql = 'SELECT DISTINCT account from wcms_account';
        $query = $this->db->query($sql);
        if ($query) {
            foreach ($query->result() as $row) {
                $arrAcc[] = $row->account;
            }
        }
        return $arrAcc;
    }

    public function insertAccounts()
    {

    }

    public function deleteAccounts()
    {

    }

    public function updateAccounts()
    {

    }

    /**
     * acquire access token
     * @param $account
     * @return bool
     */
    public function getAccessToken($account)
    {
        $sql = "SELECT DISTINCT access_token from wcms_account where account='{$account}'";
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return $query->result()[0]->access_token;
        } else {
            return false;
        }
    }

    /**
     * update access token
     * @param $account
     * @param $accessToken
     * @return mixed
     */
    public function updateAccessToken($account, $accessToken)
    {
        $sql = "update wcms_account set access_token='{$accessToken}' where account='{$account}'";
        return $this->db->query($sql);
    }

    public function getAppidSecret($account)
    {
        $sql = "SELECT DISTINCT appid,secret from wcms_account where account='{$account}'";
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return array('appid' => $query->result()[0]->appid,
                'secret' => $query->result()[0]->secret);
        } else {
            return false;
        }
    }
}