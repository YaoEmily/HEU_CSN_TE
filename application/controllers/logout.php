<?php
class logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $this->session->sess_destroy();
            $this->load->view('templates/logout.php');
        }
        else
        {
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }

    }

}