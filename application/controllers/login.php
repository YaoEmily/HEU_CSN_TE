<?php
class login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('check_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }
    public function index(){
        $data = array('title' => '请登录','heading' => '哈工程6系监考系统管理');
        $this->load->view('templates/login.html',$data);
    }
    public function log()
    {
        $this->check_model->check();
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $login= $this->login_model->getlog($id);
        if($login==NULL){
            echo '没有这个用户';
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
            echo '帐号或密码错误';     //密码错误处理方式
        }
    }

}