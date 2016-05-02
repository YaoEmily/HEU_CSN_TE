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
             $data = array('title' => '请登录','heading' =>  $this->Sys_model->getname());  
             $this->load->view('templates/login.html',$data);
        }
        else{
            if($this->iftrue($word)=='true'){
                $this->log($id,$password);
            }
            else{
                $data = array('title' => '请登录','heading' =>  $this->Sys_model->getname(),'word' => "验证码错误");  
                $this->load->view('templates/login.html',$data);           
            }
        }
        
        
    }

    public function getpic(){
        $vals = array(
            'word'      => 'Random word',
            'img_path'  => './captcha/',
            'img_url'   => 'http://example.com/captcha/',
            'font_path' => './path/to/fonts/texb.ttf',
            'img_width' => '150',
            'img_height'    => 30,
            'expiration'    => 7200,
            'word_length'   => 8,
            'font_size' => 16,
            'img_id'    => 'Imageid',
            'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors'    => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );
        Header("Content-type: image/png");
        $cap = create_captcha($vals);
        $this->session->set_tempdata('word', $cap['word'], 3000);
        echo $cap['image'];
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
             $this->load->view('templates/login.html',$data); 
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
            $this->load->view('templates/login.html',$data);
        }
    }

}