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
        $this->logstate->adminstate();
        $allinfo=$this->teachermanage_model->getall();
        foreach ($allinfo->result() as $row)
        {
            echo $row->t_id;
            echo $row->t_name;
            echo $row->t_tel;
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