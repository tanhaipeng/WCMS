<?php

/**
 * Created by PhpStorm.
 * User: tanhaipeng
 * Date: 2017/8/28
 * Time: 23:26
 */
class Admin extends CI_Controller
{
    private $assets;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Account');
        $this->assets = $this->config->item('assets_path');
    }

    public function index()
    {
        $data = array(
            'assets' => $this->assets,
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer', $data);
    }

    public function pmsg()
    {
        $accounts = $this->Account->getAccounts();
        $data = array(
            'assets' => $this->assets,
            'accounts' => $accounts,
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pmsg', $data);
        $this->load->view('admin/footer', $data);
    }

    public function wacc()
    {
        $pn = $this->Account->getPageNumber(10);
        $detail = $this->Account->getAccountDetail(0, 10);
        $data = array(
            'assets' => $this->assets,
            'pn' => $pn[0],
            'total' => $pn[1],
            'detail' => $detail,
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/wacc', $data);
        $this->load->view('admin/footer', $data);
    }
}