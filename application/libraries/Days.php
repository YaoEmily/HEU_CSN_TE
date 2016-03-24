<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Days {

	public function getday($Date_1,$Date_2){
	    $Date_List_a1=explode("-",$Date_1);

	    $Date_List_a2=explode("-",$Date_2);

	    $d1=mktime(0,0,0,$Date_List_a1[1],$Date_List_a1[2],$Date_List_a1[0]);

	    $d2=mktime(0,0,0,$Date_List_a2[1],$Date_List_a2[2],$Date_List_a2[0]);

	    $Days=round(($d1-$d2)/3600/24);

	    return $Days;
	}
	public function getstart(){
		$this->load->database();
		$start=$this->db->query("select start from common");
        $time=$start->row_array();
        $start=$time['start'];
	}
}