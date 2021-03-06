<?php
Class System extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('system_model');
    }
    function index()
    {
        $input = array();
        $list = $this->system_model->get_list($input);
        $this->data['list'] = $list;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/system/index';
        $this->load->view('admin/main', $this->data);
    }
    function add()
    {

        if (isset($_POST['addnews'])) {
            $file_name = $_FILES['images']['name'];
            $file_name_lvlvip = $_FILES['images1lvlvip']['name'];
            $file_name_lvl2vip = $_FILES['images2lvlvip']['name'];
            $file_name_benefit1 = $_FILES['images1Benefit']['name'];
            $file_name_benefit2 = $_FILES['images2Benefit']['name'];
            $file_name_benefit3 = $_FILES['images3Benefit']['name'];
            $file_name_benefit4 = $_FILES['images4Benefit']['name'];
            $file_size = $_FILES['images']['size'];
            $file_tmp = $_FILES['images']['tmp_name'];
            $file_tmp_lvlvip = $_FILES['images1lvlvip']['tmp_name'];
            $file_tmp_lvl2vip = $_FILES['images2lvlvip']['tmp_name'];
            $file_tmp_benefit1 = $_FILES['images1Benefit']['tmp_name'];
            $file_tmp_benefit2  = $_FILES['images2Benefit']['tmp_name'];
            $file_tmp_benefit3  = $_FILES['images3Benefit']['tmp_name'];
            $file_tmp_benefit4  = $_FILES['images4Benefit']['tmp_name'];

            $file_ext = strtolower(end(explode('.', $_FILES['images']['name'])));
            $expensions = array("jpeg", "jpg", "png");
            if (in_array($file_ext, $expensions) === false) {
                $this->session->set_flashdata('message', 'Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.');
            }
            if ($file_size > 2097152) {
                $this->session->set_flashdata('message', 'Kích cỡ file nên là 2 MB');
            }
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "public/uploads/adv/" . $file_name);
                move_uploaded_file($file_tmp_lvlvip, "public/uploads/adv/" . $file_name_lvlvip);
                move_uploaded_file($file_tmp_lvl2vip, "public/uploads/adv/" . $file_name_lvl2vip);
                move_uploaded_file($file_tmp_benefit1, "public/uploads/adv/" . $file_name_benefit1);
                move_uploaded_file($file_tmp_benefit2, "public/uploads/adv/" . $file_name_benefit2);
                move_uploaded_file($file_tmp_benefit3, "public/uploads/adv/" . $file_name_benefit3);
                move_uploaded_file($file_tmp_benefit4, "public/uploads/adv/" . $file_name_benefit4);
            }
            $data = array(
                'linkface' => $this->input->post('linkface'),
                'linkgoogle' => $this->input->post('linkgoogle'),
                'linkyoutube' => $this->input->post('linkyoutube'),
                'linkblog' => $this->input->post('linkblog'),
                'linktwiter' => $this->input->post('linktwiter'),
                'codeGA' => $this->input->post('codeGa'),
                'titlePage' => $this->input->post('titlepage'),
                'keyword' => $this->input->post('keyword'),
                'metadescription'=> $this->input->post('metadesc'),
                'contact'=> $this->input->post('contact'),
                'h1' => $this->input->post('txth1'),
                'images'=>$_FILES["images"]["name"],
                'linklogin' => $this->input->post('linklogin'),
		         'sign' => $this->input->post('sign'),
                 'ispopup' => $this->input->post('ispopup'),
                 'linkpopup' => $this->input->post('linkpopup'),
                 'TitleLevelVip' => $this->input->post('titleLevelvip'),
                 'ContentLevelVip' => $this->input->post('contentLevelvip'),
                 'Images1LevelVip' => $_FILES["images1lvlvip"]["name"],
                 'Images2LevelVip' => $_FILES["images2lvlvip"]["name"],
                 'TitleBenefit' => $this->input->post('titlebenefit'),
                 'ContentBenefit' => $this->input->post('contentbenefit'),
                 'Images1Benefit' =>  $_FILES["images1Benefit"]["name"],
                 'Images2Benefit' =>  $_FILES["images2Benefit"]["name"],
                 'Images3Benefit' =>  $_FILES["images3Benefit"]["name"],
                 'Images4Benefit' => $_FILES["images4Benefit"]["name"],
                 'TextImages1Benefit' => $this->input->post('title1benefit'),
                 'TextImages2Benefit' => $this->input->post('title2benefit'),
                 'TextImages3Benefit' => $this->input->post('title3benefit'),
                 'TextImages4Benefit' => $this->input->post('title4benefit')

            );
            if ($this->system_model->create($data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm mới thành công</label>');
                redirect(admin_url('system'));
            } else {
                $this->session->set_flashdata('message', 'Thêm mới không thành công');
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/system/add';
        $this->load->view('admin/main', $this->data);
    }
    function edit(){
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $info = $this->system_model->get_info($id);
        $this->data['info'] = $info;
        if (isset($_POST['addnews'])) {
            $file_name = $_FILES['images']['name'];
             $file_name_lvlvip = $_FILES['images1lvlvip']['name'];
            $file_name_lvl2vip = $_FILES['images2lvlvip']['name'];
            $file_name_benefit1 = $_FILES['images1Benefit']['name'];
            $file_name_benefit2 = $_FILES['images2Benefit']['name'];
            $file_name_benefit3 = $_FILES['images3Benefit']['name'];
            $file_name_benefit4 = $_FILES['images4Benefit']['name'];
            $file_size = $_FILES['images']['size'];
            $file_tmp = $_FILES['images']['tmp_name'];
            $file_tmp_lvlvip = $_FILES['images1lvlvip']['tmp_name'];
            $file_tmp_lvl2vip = $_FILES['images2lvlvip']['tmp_name'];
            $file_tmp_benefit1 = $_FILES['images1Benefit']['tmp_name'];
            $file_tmp_benefit2  = $_FILES['images2Benefit']['tmp_name'];
            $file_tmp_benefit3  = $_FILES['images3Benefit']['tmp_name'];
            $file_tmp_benefit4  = $_FILES['images4Benefit']['tmp_name'];
            $file_ext = strtolower(end(explode('.', $_FILES['images']['name'])));
            $expensions = array("jpeg", "jpg", "png");
            if (in_array($file_ext, $expensions) === false) {
                $this->session->set_flashdata('message', 'Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.');
            }
            if ($file_size > 2097152) {
                $this->session->set_flashdata('message', 'Kích cỡ file nên là 2 MB');
            }
                if ($_FILES['images']['name'] != "") {
                        $images =  array('images' => $_FILES['images']['name']);
                       }
                else{
                        $images= array('images' => $this->input->post('imagevalue'));
                    }
                if ($_FILES['images1lvlvip']['name'] != "") {
                        $Images1LevelVip = array('Images1LevelVip' => $_FILES['images1lvlvip']['name']);
                       }
                else{
                        $Images1LevelVip = array('Images1LevelVip' => $this->input->post('imagevaluelvlvip'));
                       }
                if ($_FILES['images2lvlvip']['name'] != "") {
                        $Images2LevelVip = array('Images2LevelVip' =>  $_FILES['images2lvlvip']['name']);
                       }
                else{
                          $Images2LevelVip = array('Images2LevelVip' => $this->input->post('imagevaluelvl2vip'));
                       }
                     
                if ($_FILES['images1Benefit']['name'] != "") {
                        $Images1Benefit = array('Images1Benefit' =>  $_FILES['images1Benefit']['name']);
                       }
                else{
                         $Images1Benefit = array('Images1Benefit' => $this->input->post('imagevaluebenefit1'));
                       }
               if ($_FILES['images2Benefit']['name'] != "") {
                        $Images2Benefit = array('Images2Benefit' => $_FILES['images2Benefit']['name']);
                       }
                else{
                         $Images2Benefit = array('Images2Benefit' => $this->input->post('imagevaluebenefit2'));
                       }
                if ($_FILES['images3Benefit']['name'] != "") {
                        $Images3Benefit = array('Images3Benefit' => $_FILES['images3Benefit']['name']);
                       }
                else{
                         $Images3Benefit = array('Images3Benefit' => $this->input->post('imagevaluebenefit3'));
                       }
                if ($_FILES['images4Benefit']['name'] != "") {
                        $Images4Benefit = array('Images4Benefit' => $_FILES['images4Benefit']['name']);
                       }
                else{
                         $Images4Benefit = array('Images4Benefit' => $this->input->post('imagevaluebenefit4'));
                    }
                $data = array(
                    'linkface' => $this->input->post('linkface'),
                    'linkgoogle' => $this->input->post('linkgoogle'),
                    'linkyoutube' => $this->input->post('linkyoutube'),
                    'linkblog' => $this->input->post('linkblog'),
                    'linktwiter' => $this->input->post('linktwiter'),
                    'codeGA' => $this->input->post('codeGa'),
                    'titlePage' => $this->input->post('titlepage'),
                    'keyword' => $this->input->post('keyword'),
                    'metadescription' => $this->input->post('metadesc'),
                    'contact' => $this->input->post('contact'),
                    'h1' => $this->input->post('txth1'),
                    'linklogin' => $this->input->post('linklogin'),
        		    'sign' => $this->input->post('sign'),
                     'ispopup' => $this->input->post('ispopup'),
                     'linkpopup' => $this->input->post('linkpopup'),
                     'TitleLevelVip' => $this->input->post('titleLevelvip'),
                     'ContentLevelVip' => $this->input->post('contentLevelvip'),
                     'TextImages1Benefit' => $this->input->post('title1benefit'),
                     'TextImages2Benefit' => $this->input->post('title2benefit'),
                     'TextImages3Benefit' => $this->input->post('title3benefit'),
                     'TextImages4Benefit' => $this->input->post('title4benefit'),
                     'TitleBenefit' => $this->input->post('titlebenefit'),
                     'ContentBenefit' => $this->input->post('contentbenefit'),
                );
                 $data1=array_merge($data,$images, $Images1LevelVip, $Images2LevelVip,$Images1Benefit,$Images2Benefit,$Images3Benefit,$Images4Benefit);
                move_uploaded_file($file_tmp, "public/uploads/adv/" . $file_name);
                if ($this->system_model->update($id, $data1)) {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật thành công</label>');
                    redirect(admin_url('system'));
                } else {
                    $this->session->set_flashdata('message', 'Cập nhật không thành công');
                }
            
            
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/system/edit';
        $this->load->view('admin/main', $this->data);
    }
    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->system_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại bản ghi này');
            redirect(admin_url('system'));
        }
        //thuc hiện xóa
        $this->system_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('system'));
    }
}
