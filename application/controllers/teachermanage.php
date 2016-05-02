<?php
require_once './application/libraries/Classes/PHPExcel/IOFactory.php';
//getall、autoload和logstate修改了代码
class teachermanage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('excel');
        $this->load->model('teachermanage_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }
    public function index(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $data = array('title' =>  $this->Sys_model->getname(),'heading' =>  $this->Sys_model->getname());
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/manage_menu.php',array('current' => 'teachermanage'));
            $this->load->view('manage/teachermanage.php');
            $this->load->view('templates/footer.php');
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }        
    }

    public function import(){
        $state=$this->logstate->adminstate();
        if($state=='true'){               
            $data = array('title' => '教师导入','heading' => '教师导入管理');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/manage_menu.php',array('current' => 'teachermanage'));
            $this->load->view('manage/teachermanage_import.php', array('error' => '请确认上传文件符合导入模版规范 ' , 'disabled' => 'disabled'));
            $this->load->view('templates/footer.php');
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }        
    }

    public function getpassword(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $id=$this->input->post('t_id');
            $password=$this->teachermanage_model->getpassword($id);
            $data=array('msg' => 'true','pas' => $password['t_password']);
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
            $this->output->set_status_header(401);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("err" => "401")));
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
            $this->output->set_status_header(401);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("err" => "401")));
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
            $this->output->set_status_header(401);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("err" => "401")));
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
            $this->output->set_status_header(401);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("err" => "401")));
        }
    }

    public function insertteacher(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $id=$this->input->post('id');
            $password=$this->input->post('password');
            $name=$this->input->post('name');
            $tel=$this->input->post('tel');
            if($this->teachermanage_model->idstate($id)=='0'){
                    $data=array('msg' => $this->teachermanage_model->insertteacher($id,$password,$name,$tel));

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
            }
            else{
                return $state;
            }
        }
        else{
            $this->output->set_status_header(401);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array("err" => "401")));
        }        
    }

    public function do_upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'xls|xlsx';
        $config['encrypt_name']     = TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
            $error = array('error' => $this->upload->display_errors(), 'disabled' => 'disabled');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/manage_menu.php',array('current' => 'teachermanage'));
            $this->load->view('manage/teachermanage_import.php', $error);
            $this->load->view('templates/footer.php');
        }
        else
        {
            // $data = array('upload_data' => $this->upload->data());
            $filename = $this->upload->data('file_name');
            // $this->load->view('upload_success', $data);
            $data = array('title' => '哈工程6系监考系统','heading' => '哈工程6系监考系统管理');
            $error = array('error' => "已成功上传并重命名文件名为:<span id='filename'>".$filename."</span>，请点击导入按钮完成导入操作，或重新选择文件重新上传",'disabled' => '');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/manage_menu.php',array('current' => 'teachermanage'));
            $this->load->view('manage/teachermanage_import.php', $error);
            $this->load->view('templates/footer.php');
        }
    }

    public function importteacher(){
        $filename=$this->input->get('filename');
        if (!file_exists("./uploads/".$filename)) {
            exit("not found success.xls.\n");
        }
        $reader = PHPExcel_IOFactory::createReader('Excel5'); //设置以Excel5格式(Excel97-2003工作簿)
        $PHPExcel = $reader->load("./uploads/".$filename); // 载入excel文件
        $sheet = $PHPExcel->getSheet(0); // 读取第一個工作表
        $highestRow = $sheet->getHighestRow(); // 取得总行数
         
        /** 循环读取每个单元格的数据 */
        for ($row = 1; $row <= $highestRow; $row++){//行数是以第1行开始
            $id=$sheet->getCell("A".$row)->getValue();
            $password=$sheet->getCell("A".$row)->getValue();
            $name=$sheet->getCell("B".$row)->getValue();
            $tel=$sheet->getCell("C".$row)->getValue();
            if($this->teachermanage_model->idstate($id)==0){
                $this->teachermanage_model->insertteacher($id,$password,$name,$tel);
            }
        }
        $success = 1;
        if($success) {
            $data=array('msg' => "success");
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
        else{
            $data=array('msg' => "fail");
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        }
    }

}