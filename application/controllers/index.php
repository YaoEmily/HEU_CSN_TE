<?php
class index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('check_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }
    public function index(){
        if($this->logstate->normalstate()=='true'){
            header("Location: http://localhost/normal"); 
        }
        else if($this->logstate->adminstate()=='true'){
            header("Location: http://localhost/exammanage"); 
        }
        else {
            header("Location: http://localhost/login"); 
        }
    }
}