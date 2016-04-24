<?php
//postall、autoload和logstate修改了代码
class normalexam extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('normalexam_model');
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


    public function getall(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $id=$_SESSION['id'];
            $allinfo=$this->normalexam_model->getall($id);
            $result = $allinfo->result();
            $data=array('data' => $allinfo->result());
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

    public function teacher(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $allinfo=$this->normalexam_model->teacher();
            $result = $allinfo->result();
            $data=array('data' => $allinfo->result());
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

    public function accept(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $date=$this->input->post('date');
            $time=$this->input->post('time');
            $room=$this->input->post('room');
            $ename=$this->input->post('ename');
            $id=$_SESSION['id'];
            $data=array('msg' =>$this->normalexam_model->accept($date,$time,$room,$ename,$id));
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


    public function refuse(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $date=$this->input->post('date');
            $time=$this->input->post('time');
            $room=$this->input->post('room');
            $ename=$this->input->post('ename');
            $id=$_SESSION['id'];
            $data=array('msg' =>$this->normalexam_model->refuse($date,$time,$room,$ename,$id));
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

    public function change(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $date=$this->input->post('date');
            $time=$this->input->post('time');
            $room=$this->input->post('room');
            $ename=$this->input->post('ename');
            $id=$_SESSION['id'];
            $zid=$this->input->post('zid');
            $reason=$this->input->post('reason');
            $data=array('msg' =>$this->normalexam_model->change($date,$time,$room,$ename,$id,$zid,$reason));
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