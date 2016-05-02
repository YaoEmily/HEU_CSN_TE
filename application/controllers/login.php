<?php
class login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('check_model');
        $this->load->helper('url_helper');
        $this->load->helper('captcha');
        $this->load->library('session');
    }
    public function index(){
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $word= $this->input->post('word');
        if($id==null && $password==null) {
             $data = array('title' => '请登录','heading' =>  $this->Sys_model->getname(),'word' => "");  
             $this->load->view('templates/login.php',$data);
        }
        else{
             if($this->iftrue($word)=='true'){
                $this->log($id,$password);
             }
             else{
               $data = array('title' => '请登录','heading' =>  $this->Sys_model->getname(),'word' => "验证码错误");  
               $this->load->view('templates/login.php',$data);           
             }
        }
        
        
    }

    public function getpic(){
        ob_end_clean();
        $this->yan->doimg();
        $this->session->set_tempdata('word',  $this->yan->getCode(), 3000);
    }

    public function iftrue($word){
        if($word==$_SESSION['word']){
            return 'true';
        }
        else
            return 'false';
    }

    public function log($id,$password)
    {
        $this->check_model->check();

        $login= $this->login_model->getlog($id);
        if($login==NULL){
             $data = array('title' => '请登录','heading' =>  $this->Sys_model->getname(),'word' => "用户名错误");  
             $this->load->view('templates/login.php',$data); 
        }
        else if($password==$login['t_password']){
            if($login['t_power']=='1'){    //1为普通管理员
                $this->session->set_tempdata('usertype', '1', 3000);
                $this->session->set_tempdata('id', $login['t_id'], 3000);
                header("Location: http://localhost/exammanage"); 

            }
            else{                        //0为普通老师
               
               $this->session->set_tempdata('usertype', '0', 3000);
               $this->session->set_tempdata('id', $login['t_id'], 3000);
                header("Location: http://localhost/normal"); 
            }
        }
        else{
            $data = array('title' => '请登录','heading' =>  $this->Sys_model->getname(),'word' => "密码错误");        //密码错误处理方式
            $this->load->view('templates/login.php',$data);
        }
    }

}