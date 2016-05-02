<?php
require_once './application/libraries/Classes/PHPExcel.php';
require_once './application/libraries/Classes/PHPExcel/IOFactory.php';
class Output extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('excel');
        $this->load->model('teachermanage_model');
        $this->load->model('exammanage_model');
    }

	public function  test(){
		$getyear=$this->input->post('year');
		$year=(int)date('Y');
		if($year==(int)$getyear)
	    	$res=$this->teachermanage_model->output('t_num');
		else{
			$year="y".(string)$getyear;
			$res=$this->teachermanage_model->output($year);
		}



		//新建 
		ob_end_clean();
		$resultPHPExcel = new PHPExcel(); 
		//设置参数 
		//设值 
		$resultPHPExcel->getActiveSheet()->setCellValue('A1', '序号'); 
		$resultPHPExcel->getActiveSheet()->setCellValue('B1', '工号'); 
		$resultPHPExcel->getActiveSheet()->setCellValue('C1', '姓名'); 
		$resultPHPExcel->getActiveSheet()->setCellValue('D1', "监考次数($year 年)"); 
		$i = 2; 

		$data=$res->result_array();
		foreach($data as $item){ 
			$resultPHPExcel->getActiveSheet()->setCellValue('A' . $i, ($i-1)); 
			$resultPHPExcel->getActiveSheet()->setCellValue('B' . $i, $item['t_id']); 
			$resultPHPExcel->getActiveSheet()->setCellValue('C' . $i, $item['t_name']); 
			$resultPHPExcel->getActiveSheet()->setCellValue('D' . $i, $item['t_num']); 
			$i ++; 
		}
		//设置导出文件名 
		$outputFileName = 'total.xls'; 
		$xlsWriter = new PHPExcel_Writer_Excel5($resultPHPExcel); 
		//ob_start(); ob_flush(); 
		header("Content-Type: application/force-download"); 
		header("Content-Type: application/octet-stream"); 
		header("Content-Type: application/download"); 
		header('Content-Disposition:inline;filename="'.$outputFileName.'"'); 
		header("Content-Transfer-Encoding: binary"); 
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
		header("Pragma: no-cache"); 
		$xlsWriter->save( "php://output" );

	}

    


}
?>