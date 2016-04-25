<?php
//getall、autoload和logstate修改了代码
class pushmanage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('distribute_model');
        $this->load->helper('url_helper');
        $this->load->library('session');


    }
    public function index(){
        $state=$this->logstate->adminstate();
        if($state=='true'){           
            $data = array('title' =>  $this->Sys_model->getname(),'heading' =>  $this->Sys_model->getname());
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/manage_menu.php',array('current' => 'pushmanage'));
            $this->load->view('manage/pushmanage.php');
            $this->load->view('templates/footer.php');
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }        
    }

    public function getall(){
            $allinfo=$this->distribute_model->getall();
            $result = $allinfo->result();
            $data=array('data' => $allinfo->result());
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
    }


}