<?php
class classmanage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('classmanage_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $data = array('title' => $this->Sys_model->getname(),'heading' => $this->Sys_model->getname());
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/teacher_menu.php',array('current' => 'classmanage'));
            $this->load->view('teacher/classmanage.php');
            $this->load->view('templates/footer.php');
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }

    public function getclass(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $id=$_SESSION['id'];
            $classinfo=$this->classmanage_model->getclass($id);
            $data=array('data' => $classinfo->result_array());
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

    public function deleteclass()
    {
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $id=$_SESSION['id'];
            $name=$this->input->post('name');
            $day=$this->input->post('day');
            $stime=$this->input->post('stime');
            $etime=$this->input->post('etime');
            $data=array('msg' => $this->classmanage_model->delete($id,$name,$day,$stime,$etime));
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
    public function updateclass(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $id=$_SESSION['id'];
            $name=$this->input->post('name');
            $day=$this->input->post('day');
            $stime=$this->input->post('stime');
            $etime=$this->input->post('etime');
            $a=$this->input->post('a');
            $b=$this->input->post('b');
            $c=$this->input->post('c');
            $d=$this->input->post('d');
            $e=$this->input->post('e');
            $f=$this->input->post('f');
            $g=$this->input->post('g');
            $h=$this->input->post('h');
            $i=$this->input->post('i');
            $j=$this->input->post('j');
            $k=$this->input->post('k');
            $l=$this->input->post('l');
            $m=$this->input->post('m');
            $n=$this->input->post('n');
            $o=$this->input->post('o');
			$p=$this->input->post('p');
			$q=$this->input->post('q');
			$r=$this->input->post('r');
			$s=$this->input->post('s');
			$t=$this->input->post('t');
			$u=$this->input->post('u');
			$v=$this->input->post('v');
			$w=$this->input->post('w');
			$x=$this->input->post('x');
			$y=$this->input->post('y');
            $data=array('msg' =>$this->classmanage_model->updateclass($id,$name,$day,$stime,$etime,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y));
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
    public function insertteacher(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $id=$_SESSION['id'];
            $name=$this->input->post('name');
            $day=$this->input->post('day');
            $stime=$this->input->post('stime');
            $etime=$this->input->post('etime');
            $a=$this->input->post('a');
            $b=$this->input->post('b');
            $c=$this->input->post('c');
            $d=$this->input->post('d');
            $e=$this->input->post('e');
            $f=$this->input->post('f');
            $g=$this->input->post('g');
            $h=$this->input->post('h');
            $i=$this->input->post('i');
            $j=$this->input->post('j');
            $k=$this->input->post('k');
            $l=$this->input->post('l');
            $m=$this->input->post('m');
            $n=$this->input->post('n');
            $o=$this->input->post('o');
			$p=$this->input->post('p');
			$q=$this->input->post('q');
			$r=$this->input->post('r');
			$s=$this->input->post('s');
			$t=$this->input->post('t');
			$u=$this->input->post('u');
			$v=$this->input->post('v');
			$w=$this->input->post('w');
			$x=$this->input->post('x');
			$y=$this->input->post('y');
            if($this->classmanage_model->classstate($id,$name,$day,$stime,$etime)=='0'){
                if($this->classmanage_model->insertclass($id,$name,$day,$stime,$etime,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y)=='true'){
                    $data=array('msg' => 'true');
                }
            }
            else{
                $data=array('msg' => 'false');
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
}