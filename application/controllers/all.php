<?php
class all extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('all_model');
        $this->load->model('Sys_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index(){
        $i=2016;
        $terms = array();
        for($i=2016;$i<=(int)date('Y');$i=$i+1){
            $terms[]="$i";
        }


        $state=$this->logstate->adminstate();
        if($state=='true'){

            if($year=$this->input->get('term'));
            else{
                $year=(string)date('Y');
            }
            $data = array('title' =>$this->Sys_model->getname(),'heading' => $this->Sys_model->getname());
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/manage_menu.php',array('current' => 'all'));
            $this->load->view('manage/all.php',array('term' => $year, "terms"=>$terms));
            $this->load->view('templates/footer.php');

        }
        else{
            return $state;
        }

    }


    public function select(){
        $year=$this->input->get('term');
        if((string)$year==(string)date('Y')){
            $this->getall();
        }
        else{
            $this->gethistory($year);
        }
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

     public function gethistory($year){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $allinfo=$this->all_model->gethistory($year);
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

    public function changenew(){
        $state=$this->logstate->adminstate();
        if($state='true'){
            $date=$this->input->post('date');
            if($this->all_model->changenew($date))
                $a='true';
            else
                $a='false';
            $data=array('data' => $a);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            return $state;
        }
    }


}