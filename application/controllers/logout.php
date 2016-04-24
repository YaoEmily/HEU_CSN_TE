<?php
class logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $state=$this->logstate->state();
        if($state=='true'){
            $this->session->sess_destroy();
        }   
        $this->load->view('templates/logout.php');
    }

}