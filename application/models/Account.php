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
}