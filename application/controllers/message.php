<?php
class message extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('messageli');
        $this->load->model('message_model');
    }
    
    public function sendall(){
        $state=$this->logstate->adminstate();
        if($state=='true'){   
            $success=0;
            $examinfo=$this->message_model->getall();
            $result = $examinfo->result_array();
            foreach($result as $dis){
                $id=$dis['d_tid'];
                $name    = $this->message_model->getname($id);
                $ename =$dis['d_ename'];
                $date   =$dis['d_date'];
                $stime  =$dis['d_time'];
                $room   =$dis['d_room'];
                $tel=$this->message_model->gettel($id);
                $data=$this->sendstart($name,$ename,$date,$stime,$room,$tel);
            }
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("msg" => "true")));
        }
        else{
            $this->output->set_status_header(401);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("err" => "401")));
        }
    }
    public function sendstart($name,$ename,$date,$stime,$room,$tel){
         $this->messageli->sendstart($name,$ename,$date,$stime,$room,$tel);
    }
    public function sendchoose(){
        $id=$this->input->post('d_tid');
        $name    = $this->message_model->getname($id);;
        $ename=$this->input->post('d_ename');
        $date=$this->input->post('d_date');
        $stime=$this->input->post('d_time');
        $room=$this->input->post('d_room');
         $tel=$this->message_model->gettel($id);
        $this->messageli->sendstart($name,$ename,$date,$stime,$room,$tel);
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("msg" => "true")));
    }
    public function sendend(){
        $name='马楷彭';
        $num='你就是个大煞笔！！！！！';
         $this->messageli->sendend($name,$num,$tel);
    }

}
?>