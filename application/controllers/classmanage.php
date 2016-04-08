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
            $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/teacher_menu.php',array('current' => 'classmanage'));
            $this->load->view('teacher/classmanage.php');
            $this->load->view('templates/footer.php');
        }
        else
        {
            return $state;
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
        else
        {
            return $state;
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
        else
        {
            return $state;
        }
    }
    public function updateclass(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $id=$_SESSION['id'];
            $name=$this->input->get('name');
            $day=$this->input->get('day');
            $stime=$this->input->get('stime');
            $etime=$this->input->get('etime');
            $a=$this->input->get('a');
            $b=$this->input->get('b');
            $c=$this->input->get('c');
            $d=$this->input->get('d');
            $e=$this->input->get('e');
            $f=$this->input->get('f');
            $g=$this->input->get('g');
            $h=$this->input->get('h');
            $i=$this->input->get('i');
            $j=$this->input->get('j');
            $k=$this->input->get('k');
            $l=$this->input->get('l');
            $m=$this->input->get('m');
            $n=$this->input->get('n');
            $o=$this->input->get('o');
			$p=$this->input->get('p');
			$q=$this->input->get('q');
			$r=$this->input->get('r');
			$s=$this->input->get('s');
			$t=$this->input->get('t');
			$u=$this->input->get('u');
			$v=$this->input->get('v');
			$w=$this->input->get('w');
			$x=$this->input->get('x');
			$y=$this->input->get('y');
            $data=array('msg' =>$this->classmanage_model->updateclass($id,$name,$day,$stime,$etime,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y));
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else
        {
            return $state;
        }
    }
    public function insertteacher(){
        $state=$this->logstate->normalstate();
        if($state=='true'){
            $id=$_SESSION['id'];
            $name=$this->input->get('name');
            $day=$this->input->get('day');
            $stime=$this->input->get('stime');
            $etime=$this->input->get('etime');
            $a=$this->input->get('a');
            $b=$this->input->get('b');
            $c=$this->input->get('c');
            $d=$this->input->get('d');
            $e=$this->input->get('e');
            $f=$this->input->get('f');
            $g=$this->input->get('g');
            $h=$this->input->get('h');
            $i=$this->input->get('i');
            $j=$this->input->get('j');
            $k=$this->input->get('k');
            $l=$this->input->get('l');
            $m=$this->input->get('m');
            $n=$this->input->get('n');
            $o=$this->input->get('o');
			$p=$this->input->get('p');
			$q=$this->input->get('q');
			$r=$this->input->get('r');
			$s=$this->input->get('s');
			$t=$this->input->get('t');
			$u=$this->input->get('u');
			$v=$this->input->get('v');
			$w=$this->input->get('w');
			$x=$this->input->get('x');
			$y=$this->input->get('y');
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
        else
        {
            return $state;
        }
    }
}