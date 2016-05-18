<?php
//getall、autoload和logstate修改了代码
class setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $state=$this->logstate->adminstate();
        if($state=='true'){        
            $data = array('title' =>  $this->Sys_model->getname(),'heading' =>  $this->Sys_model->getname());
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
            $data = array('title' =>  $this->Sys_model->getname(),'heading' =>  $this->Sys_model->getname());
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/setting_menu.php',array('current' => 'base'));
            $this->load->view('manage/setting_base.php',array('current' => $this->Sys_model->getname()));
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
            $data = array('title' =>  $this->Sys_model->getname(),'heading' =>  $this->Sys_model->getname());
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/setting_menu.php',array('current' => 'term'));
            $this->load->view('manage/setting_term.php',array('date' => $this->Sys_model->getdate()));
            $this->load->view('templates/footer.php');
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }

    public function changename(){
        $state=$this->logstate->adminstate();
        if($state=='true'){        
            $name = $this->input->post('name');
            if($this->Sys_model->changename($name))
                $a='true';
            else
                $a='false';
            $data=array('data' => $a);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            $this->output->set_status_header(401);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("err" => "401")));
        }
    }


}