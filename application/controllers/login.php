<?php
class login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('url_helper');
    }
    public function index($id)
    {
        $password='123456';
        $login= $this->login_model->getlog($id);
        if($password==$login['t_password']){
            if($login['t_power']==1)    //1为普通管理员
                echo '管理员';
            else                        //0为普通老师
                echo '普通老师';
        }
        else{
            $this->load->view('errors/html/error_general.php');     //密码错误处理方式
        }
    }
 

}