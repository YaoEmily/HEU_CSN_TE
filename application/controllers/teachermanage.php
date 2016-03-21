<?php
class teachermanage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('teachermanage_model');
        $this->load->library('logstate');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->logstate->adminstate();

    }
    public function index(){
        $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
        $this->load->view('templates/header.php',$data);
        $this->load->view('templates/manage_menu.php',array('current' => 'teachermanage'));
        $this->load->view('manage/teachermanage.php');
        $this->load->view('templates/footer.php');
    }
    public function getall(){
        $this->logstate->adminstate();
        $allinfo=$this->teachermanage_model->getall();
        $result = $allinfo->result();
        // foreach ($result as $key) {
        //     $key[""]
        // }
        $data=array('data' => $allinfo->result());
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
    public function deleteinfo()
    {
        $this->logstate->adminstate();
        $id=$this->input->input_stream('id');
        $this->teachermanage_model->delete($id);
    }
    public function updatetel(){
        $this->logstate->adminstate();
        $id=$this->input->input_stream('id');
        $tel=$this->input->input_stream('tel');
        $this->teachermanage_model->updatetel($id,$tel);
    }
    public function updatepassword(){
        $this->logstate->adminstate();
        $id=$this->input->input_stream('id');
        $password=$this->input->input_stream('password');
        $this->teachermanage_model->updatepassword($id,$password);
    }
}