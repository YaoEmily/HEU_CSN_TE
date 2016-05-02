<?php
//getall、autoload和logstate修改了代码
class faq extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('form', 'url'));
        // $this->load->library('excel');
        // $this->load->model('exammanage_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $state=$this->logstate->adminstate();
        if($state=='true'){             
            $data = array('title' => $this->Sys_model->getname(),'heading' => $this->Sys_model->getname());
            $this->load->view('manage/faq.php',$data);
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }
}