<?php
class all extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('all_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
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
            $allinfo=$this->all_model->delete();
        }
        else{
            return $state;
        }
    }

}