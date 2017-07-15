<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vip extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('system_model');
    }
    function index(){
        $listsys = $this->system_model->get_list();
        foreach($listsys as $item)
        {
            $this->data['meta_title'] = "Đặc quyền vip";
            $this->data['meta_keyword'] = $item->keyword;
            $this->data['meta_description'] = $item->metaDescription;
        }
        $this->data['temp'] = 'site/vip/index';
        $this->load->view('site/main', $this->data);

    }
}