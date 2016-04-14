<?php
//getall、autoload和logstate修改了代码
class normalinfo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('teachermanage_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
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

    public function getinfo(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $id=$_SESSION['id'];
            $allinfo=$this->teachermanage_model->info($id);
            $result = $allinfo->result();
            $data=array('data' => $allinfo->result());
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }

    public function updatepassword(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $id=$_SESSION['id'];
            $password=$this->input->post('password');
            if($this->teachermanage_model->updatepassword($id,$password)=='true'){
                $data=array('msg' => 'true');
            }
            else{
                $data=array('msg' => 'false');
            }
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }

    public function updatetel(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $id=$_SESSION['id'];
            $tel=$this->input->post('tel');
            $data=array('msg' =>$this->teachermanage_model->updatetel($id,$tel));
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }

    public function getnum(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $id=$_SESSION['id'];;
            $data=array('msg' =>$this->teachermanage_model->getnum($id));
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }
    }

}