<?php
//getall、autoload和logstate修改了代码
class setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('setting_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $state=$this->logstate->adminstate();
        if($state=='true'){        
            $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/setting_menu.php',array('current' => 'index'));
            $this->load->view('manage/setting.php');
            $this->load->view('templates/footer.php');
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }
    public function base(){
        $state=$this->logstate->adminstate();
        if($state=='true'){        
            $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/setting_menu.php',array('current' => 'base'));
            $this->load->view('manage/setting_base.php',array('current' => '哈工程6系监考系统管理'));
            $this->load->view('templates/footer.php');
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }
    public function term(){
        $state=$this->logstate->adminstate();
        if($state=='true'){        
            $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/setting_menu.php',array('current' => 'term'));
            $this->load->view('manage/setting_term.php');
            $this->load->view('templates/footer.php');
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }
}