<?php
//getall、autoload和logstate修改了代码
class distribute extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('distribute_model');
        $this->load->model('exammanage_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function autodis(){
        if($this->logstate->adminstate()=='true'){
            $examinfo=$this->exammanage_model->examinfo();
            $result = $examinfo->result_array();
            foreach($result as $exam){
                if($exam['e_state']=='0'){
                    while($exam['e_teachernum']>0){
                        if($this->distribute_model->disteacher($exam['e_date'],$exam['e_stime'],$exam['e_etime'],$exam['e_room'],$exam['e_name'])!='false'){
                    	   $exam['e_teachernum']=$exam['e_teachernum']-1;
                           $this->distribute_model->updatenum($exam['e_date'],$exam['e_stime'],$exam['e_etime'],$exam['e_room'],$exam['e_name'],$exam['e_teachernum']);
                        }
                        else 
                            return 'false';
                    }
                    $this->distribute_model->okstate($exam['e_date'],$exam['e_stime'],$exam['e_etime'],$exam['e_room'],$exam['e_name']);

                }
            }
            return 'true';
        }
    }
    public function dis(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $date=$this->input->post('date');
            $stime=$this->input->post('stime');
            $etime=$this->input->post('etime');
            $room=$this->input->post('room');
            $name=$this->input->post('name');
            $this->distribute_model->dis($date,$stime,$etime,$room,$name)
        }
        else{
            return $state;
        }
    }
}