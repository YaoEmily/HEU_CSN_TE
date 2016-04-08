<?php
//getall、autoload和logstate修改了代码
class teachermanage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('teachermanage_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        //$data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
        //$this->load->view('templates/header.php',$data);
        //$this->load->view('templates/manage_menu.php',array('current' => 'teachermanage'));
        //$this->load->view('manage/teachermanage.php');
        //$this->load->view('templates/footer.php');
    }

    public function getpassword(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $id=$this->input->get('t_id');
            $password=$this->teachermanage_model->getpassword($id);
            $data=array('msg' => 'true','pas' => $password['t_password']);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            return $state;
        }
    }

    public function getall(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $allinfo=$this->teachermanage_model->getall();
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

    public function deleteinfo()
    {
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $id=$this->input->post('id');
            $data=array('msg' => $this->teachermanage_model->delete($id));
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            return $state;
        }
    }
    public function updatetel(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $id=$this->input->post('id');
            $tel=$this->input->post('tel');
            $data=array('msg' =>$this->teachermanage_model->updatetel($id,$tel));
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            return $state;
        }
    }
    public function updatepassword(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $id=$this->input->post('t_id');
            $password=$this->input->post('t_password');
            if($this->teachermanage_model->updatepassword($id,$password)=='true'){
                $data=array('msg' => 'true');
            }
            else{
                $data=array('msg' => 'false');
            }
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            return $state;
        }
    }

    public function insertteacher(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $id=$this->input->get('id');
            $password=$this->input->get('password');
            $name=$this->input->get('name');
            $tel=$this->input->get('tel');
            if($this->teachermanage_model->idstate($id)=='0'){
                if($this->teachermanage_model->insertteacher($id,$password,$name,$tel)=='true'){
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
            return $state;
        }
    }
}