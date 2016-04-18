<?php
require_once './application/libraries/Classes/PHPExcel/IOFactory.php';
class Upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('excel');
        $this->load->model('teachermanage_model');
        $this->load->model('exammanage_model');
    }

    public function index()
    {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function do_upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'xls|xlsx';
        $config['encrypt_name']		= TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
        	return 'false';
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            echo $this->upload->data('file_name');
        }
    }

    public function insertteacher(){
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
    }


    public function insertexam(){
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
    }


}
?>