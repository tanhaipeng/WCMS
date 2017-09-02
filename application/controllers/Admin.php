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
        $this->load->library('session');
        $this->load->model('Account');
        $this->assets = $this->config->item('assets_path');
    }

    public function index()
    {
        if ($this->session->has_userdata('login_status') == false) {
            header("Location: /wx/index.php/admin/login");
            exit;
        }
        $data = array(
            'assets' => $this->assets,
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
        $pg = $this->input->get('pg');
        $pn = $this->Account->getPageNumber(10);
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
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/wacc', $data);
        $this->load->view('admin/footer', $data);
    }

    public function login()
    {
        $data = array(
            'assets' => $this->assets,
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/login', $data);
        $this->load->view('admin/footer', $data);
    }

    public function forget()
    {
        $data = array(
            'assets' => $this->assets,
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/forget', $data);
        $this->load->view('admin/footer', $data);
    }
}