<?php
//getall、autoload和logstate修改了代码
class exammanage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('exammanage_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/manage_menu.php',array('current' => 'exammanage'));
        $this->load->view('manage/exammanage.php');
        $this->load->view('templates/footer.php');
    }

    public function import(){
        $data = array('title' => '考试导入','heading' => '考试导入管理');
        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/manage_menu.php',array('current' => 'exammanage'));
        $this->load->view('manage/exammanage_import.php');
        $this->load->view('templates/footer.php');
    }

    public function examinfo(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $examinfo=$this->exammanage_model->examinfo();
            $result = $examinfo->result();
            $data=array('data' => $examinfo->result());
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            return $state;
        }
    }

    public function deleteexam()
    {
         $state=$this->logstate->adminstate();
        if($state=='true'){
            $date=$this->input->post('date');
            $stime=$this->input->post('stime');
            $etime=$this->input->post('etime');
            $room=$this->input->post('room');
            $name=$this->input->post('name');
            $data=array('msg' => $this->exammanage_model->delete($date,$stime,$etime,$room,$name));
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            return $state;
        }
    }
    public function insertexam(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $date=$this->input->post('date');
            $stime=$this->input->post('stime');
            $etime=$this->input->post('etime');
            $room=$this->input->post('room');
            $name=$this->input->post('name');
            $class=$this->input->post('class');
            $teachernum=(int)$this->input->post('teachernum');
            $state=$this->input->post('state');
            if($this->exammanage_model->examstate($date,$stime,$etime,$room,$name)=='0'){
                if($this->exammanage_model->insertexam($date,$stime,$etime,$room,$name,$class,$teachernum,$state)=='true'){
                    $data=array('msg' => 'true');
                }
            }
            else{
                $data=array('msg' => 'false');
            }
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            return $state;
        }
    }


}