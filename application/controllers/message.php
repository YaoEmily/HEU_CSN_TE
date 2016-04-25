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
    public function index(){
        $data = array('title' => '请登录','heading' =>  $this->Sys_model->getname());
        $this->load->view('templates/login.html',$data);
    }
    
    public function sendall(){
        
        $examinfo=$this->message_model->getall();
        $result = $examinfo->result_array();
        foreach($result as $dis){
            $id=$dis['d_tid'];
            $name    = $this->message_model->getname($id);
            $ename ='数据结构';
            $date   =$dis['d_date'];
            $stime  =$dis['d_time'];
            $room   =$dis['d_room'];
            $tel=$this->message_model->gettel($id);
            $data=array('data' =>$this->sendstart($name,$ename,$date,$stime,$room,$tel));
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
    }
    public function sendstart($name,$ename,$date,$stime,$room,$tel){
         $this->messageli->sendstart($name,$ename,$date,$stime,$room,$tel);
    }

    public function sendend(){
        $name='马楷彭';
        $num='你就是个大煞笔！！！！！';
         $this->messageli->sendend($name,$num,$tel);
    }

}
?>