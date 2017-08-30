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
        $this->assets = $this->config->item('assets_path');
        parent::__construct();
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
}