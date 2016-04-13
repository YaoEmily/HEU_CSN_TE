<?php
//getall、autoload和logstate修改了代码
class normal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('normal_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/teacher_menu.php',array('current' => 'normal'));
        $this->load->view('teacher/normal.php');
        $this->load->view('templates/footer.php');
    }

    public function classmanage(){
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
            // show_401($page = 'application/views/errors/401.php', $log_error = TRUE);
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }

    public function exammanage() {
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/teacher_menu.php',array('current' => 'exammanage'));
            $this->load->view('teacher/exammanage.php');
            $this->load->view('templates/footer.php');
        }
        else
        {
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }        
    }
}