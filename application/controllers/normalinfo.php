<?php
//getall、autoload和logstate修改了代码
class normalinfo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('normalinfo_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/manage_menu.php',array('current' => 'teachermanage'));
        $this->load->view('manage/teachermanage.php');
        $this->load->view('templates/footer.php');
    }


}