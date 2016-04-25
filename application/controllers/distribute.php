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

    public function index(){
        $state=$this->logstate->adminstate();
        if($state=='true'){             
            $data = array('title' => $this->Sys_model->getname(),'heading' => $this->Sys_model->getname());
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/manage_menu.php',array('current' => 'distribute'));
            $this->load->view('manage/distribute.php');
            $this->load->view('templates/footer.php');
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }
    public function autodis(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $examinfo=$this->exammanage_model->examinfo();
            $result = $examinfo->result_array();
            foreach($result as $exam){
                if($exam['e_state']=='0'){
                    while($exam['e_teachernum']>0){
                        if($this->distribute_model->disteacher($exam['e_date'],$exam['e_stime'],$exam['e_etime'],$exam['e_room'],$exam['e_name'])!='false'){
                    	   $exam['e_teachernum']=$exam['e_teachernum']-1;
                           $this->distribute_model->updatenum($exam['e_date'],$exam['e_stime'],$exam['e_etime'],$exam['e_room'],$exam['e_name'],$exam['e_teachernum']);
                        }
                        else {
                            $this->output->set_status_header(200);
                            $this->output
                                ->set_content_type('application/json')
                                ->set_output(json_encode(array("err" => "true")));   
                            return true; 
                        }
                    }
                    $this->distribute_model->okstate($exam['e_date'],$exam['e_stime'],$exam['e_etime'],$exam['e_room'],$exam['e_name']);
                }
            }
            $this->output->set_status_header(200);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("err" => "false")));
            return false;
        }
        else{
            $this->output->set_status_header(401);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("err" => "401")));
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
            $id=$this->input->post('id');
            $res=$this->distribute_model->dis($date,$stime,$etime,$room,$name,$id);
            if($res=='num'){
                $data=array('msg' => "num");
            }
            else if($res=="true") {
                $data=array('msg' => "true");
            }

            else{
                $data=array('msg' => "exist");
            }
            
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            $this->output->set_status_header(401);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("err" => "401")));
        }
    }

    public function examstate(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $date=$this->input->post('date');
            $id=$this->input->post('id');
            $res=$this->distribute_model->examstate($date,$id);

            $data=array('msg' => $res);
            
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            $this->output->set_status_header(401);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("err" => "401")));
        }
    }
}
?>