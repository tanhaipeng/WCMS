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
    private $ts;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Account');
        $this->assets = $this->config->item('assets_path');
        $this->ts = strval(time());
    }

    public function index()
    {
        if ($this->session->has_userdata('login_status') == false) {
            header("Location: /wx/index.php/admin/login");
            exit;
        }
        $data = array(
            'assets' => $this->assets,
            'ts' => $this->ts,
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer', $data);
    }

    public function pmsg()
    {
        if ($this->session->has_userdata('login_status') == false) {
            header("Location: /wx/index.php/admin/login");
            exit;
        }
        $accounts = $this->Account->getAccounts();
        $data = array(
            'assets' => $this->assets,
            'accounts' => $accounts,
            'ts' => $this->ts,
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pmsg', $data);
        $this->load->view('admin/footer', $data);
    }

    public function wacc()
    {
        if ($this->session->has_userdata('login_status') == false) {
            header("Location: /wx/index.php/admin/login");
            exit;
        }
        // 分页大小
        $pg = $this->input->get('pg');
        // 分页数
        $pn = $this->Account->getPageNumber(10);
        // 获取指定分页数据
        if ($pg == "") {
            $detail = $this->Account->getAccountDetail(0, 10);
        } else {
            $detail = $this->Account->getAccountDetail(intval($pg), 10);
        }
        $data = array(
            'assets' => $this->assets,
            'pn' => $pn[0],
            'total' => $pn[1],
            'detail' => $detail,
            'ts' => $this->ts,
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/wacc', $data);
        $this->load->view('admin/footer', $data);
    }

    public function login()
    {
        $data = array(
            'assets' => $this->assets,
            'ts' => $this->ts,
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/login', $data);
        $this->load->view('admin/footer', $data);
    }

    public function forget()
    {
        $data = array(
            'assets' => $this->assets,
            'ts' => $this->ts,
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/forget', $data);
        $this->load->view('admin/footer', $data);
    }

    public function delacc()
    {
        $account = $this->input->post('acc');
        if ($account) {
            $this->Account->deleteAccounts($account);
        }
    }
}