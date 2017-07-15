<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller
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
            $this->data['meta_title'] = "Hồ sơ vip";
            $this->data['meta_keyword'] = $item->keyword;
            $this->data['meta_description'] = $item->metaDescription;
        }
         $username = $this->session->userdata('infouser');
        $this->data['username']= $username ;
        $this->data['temp'] = 'site/Profile/index';
        $this->load->view('site/main', $this->data);

    }
}