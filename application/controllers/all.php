<?php
class all extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('all_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index(){
        $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/manage_menu.php',array('current' => 'all'));
        $this->load->view('manage/all.php');
        $this->load->view('templates/footer.php');
    }


    public function getall(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $allinfo=$this->all_model->getall();
            $result = $allinfo->result();
            $data=array('data' => $allinfo->result());
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            return $state;
        }
    }
    public function deleteall(){
        $state=$this->logstate->adminstate();
        if($state='true'){
            $data=array('msg' => $this->all_model->delete());
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            return $state;
        }
    }

    public function setnew(){
        $state=$this->logstate->adminstate();
        if($state='true'){
            $date=$this->input->post('date');
            $data=array('msg' => $this->all_model->setnew($date));
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            return $state;
        }
    }

}