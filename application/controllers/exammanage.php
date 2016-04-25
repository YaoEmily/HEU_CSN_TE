<?php
//getall、autoload和logstate修改了代码
class exammanage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('excel');
        $this->load->model('exammanage_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }
    public function index(){
        $state=$this->logstate->adminstate();
        if($state=='true'){             
            $data = array('title' => $this->Sys_model->getname(),'heading' => $this->Sys_model->getname());
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/manage_menu.php',array('current' => 'exammanage'));
            $this->load->view('manage/exammanage.php');
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
            $data = array('title' => '考试导入','heading' => '考试导入管理');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/manage_menu.php',array('current' => 'exammanage'));
            $this->load->view('manage/exammanage_import.php', array('error' => ' ' , 'disabled' => 'disabled'));
            $this->load->view('templates/footer.php');
        }
        else{
            $this->output->set_status_header(401);
            $this->load->view('errors/401.php');
        }
    }

    public function examinfo(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $examinfo=$this->exammanage_model->examinfo();
            $result = $examinfo->result();
            $data=array('data' => $examinfo->result());
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

    public function deleteexam()
    {
         $state=$this->logstate->adminstate();
        if($state=='true'){
            $date=$this->input->post('date');
            $stime=$this->input->post('stime');
            $etime=$this->input->post('etime');
            $room=$this->input->post('room');
            $name=$this->input->post('name');
            $data=array('msg' => $this->exammanage_model->delete($date,$stime,$etime,$room,$name));
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
    public function insertexam(){
        $state=$this->logstate->adminstate();
        if($state=='true'){
            $date=$this->input->post('date');
            $stime=$this->input->post('stime');
            $etime=$this->input->post('etime');
            $room=$this->input->post('room');
            $name=$this->input->post('name');
            $class=$this->input->post('class');
            $teachernum=(int)$this->input->post('teachernum');
            $state=$this->input->post('state');
            if($this->exammanage_model->examstate($date,$stime,$etime,$room,$name)=='0'){
                if($this->exammanage_model->insertexam($date,$stime,$etime,$room,$name,$class,$teachernum,$state)=='true'){
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

   public function do_upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'xls|xlsx';
        $config['encrypt_name']     = TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $data = array('title' => '考试导入','heading' => '考试导入管理');
            $error = array('error' => $this->upload->display_errors(), 'disabled' => 'disabled');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/manage_menu.php',array('current' => 'exammanage'));
            $this->load->view('manage/exammanage_import.php', $error);
            $this->load->view('templates/footer.php');
        }
        else
        {
            // $data = array('upload_data' => $this->upload->data());
            $filename = $this->upload->data('file_name');
            // $this->load->view('upload_success', $data);
            $data = array('title' => '考试导入','heading' => '考试导入管理');
            $error = array('error' => "已成功上传并重命名文件名为:<span id='filename'>".$filename."</span>，请点击导入按钮完成导入操作，或重新选择文件重新上传",'disabled' => '');
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/manage_menu.php',array('current' => 'exammanage'));
            $this->load->view('manage/exammanage_import.php', $error);
            $this->load->view('templates/footer.php');
        }
    }

    public function importexam(){
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
            $a = $sheet->getCell("A".$row)->getValue();
            $b = explode("日", $a);
            $date=$b[0];
            $temp=  explode("年", $date);
            $n=$temp[0];
            $temp=explode("月", $temp[1]);
            $y=$temp[0];
            $r=$temp[1];
            $c = explode("－", $b[1] );
            $date=$n."-".$y."-".$r;
            $stime=$c[0];
            $etime=$c[1];
            $stime=str_replace("：",":",$stime);
            $etime=str_replace("：",":",$etime);
            $room=$sheet->getCell("F".$row)->getValue();
            $name=$sheet->getCell("C".$row)->getValue();
            $class=$sheet->getCell("D".$row)->getValue();
            $teachernum=$sheet->getCell("G".$row)->getValue();
            $state='0';
            if($this->exammanage_model->examstate($date,$stime,$etime,$room,$name)==0){
                $this->exammanage_model->insertexam($date,$stime,$etime,$room,$name,$class,$teachernum,$state);
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