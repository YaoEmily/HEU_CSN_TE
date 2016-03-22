<?php
//getall、autoload和logstate修改了代码
class teachermanage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('teachermanage_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $this->load->view('templates/header.php');
        $this->load->view('templates/login.html');
        $this->load->view('templates/footer.php');
    }
    public function getall(){
        if($this->logstate->adminstate()=='true'){
            $allinfo=$this->teachermanage_model->getall();
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($allinfo->result()));
        }
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