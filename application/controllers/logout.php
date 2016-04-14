<?php
class classmanage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/teacher_menu.php',array('current' => 'classmanage'));
            $this->load->view('teacher/classmanage.php');
            $this->load->view('templates/footer.php');
        }
        else
        {
            return $state;
        }
    }


    public function destory(){
    	$this->session->sess_destroy();
    }

}