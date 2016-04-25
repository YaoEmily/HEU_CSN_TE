<?php
class check_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function check(){
    	$query = $this->db->query("select * from distribute where d_state='0'");
		$result = $query->result_array();
		foreach($result as $dis){
			$d_date=$dis['d_date'];
			$d_time=$dis['d_time'];
			$d_room=$dis['d_room'];
			$d_ename=$dis['d_ename'];
			$d_tid=$dis['d_tid'];
			$d_type=$dis['d_type'];
			$d_state=$dis['d_state'];
			if(date('Y-m-d')>=$d_date){
				if($d_type=='0'){
					$query = $this->db->query("update distribute set d_state='1' where d_date='$d_date' and d_time='$d_time' and d_room='$d_room' and d_ename='$d_ename' and d_tid= '$d_tid'");
				}
				else if($d_type=='1'){
					$query= $this->db->query("update distribute set d_state='2' where d_date='$d_date' and d_time='$d_time' and d_room='$d_room' and d_ename='$d_ename' and d_tid= '$d_tid'");
					$query= $this->db->query("update distribute set d_state='1',d_type='0' where d_date='$d_date' and d_time='$d_time' and d_room='$d_room' and d_ename='$d_ename' and d_tid= '$d_zid'");
				}
			}
		}


		$query = $this->db->query("select * from exam where e_teachernum>0");
		$result = $query->result_array();
		foreach($result as $exam){
			$e_date=$exam['e_date'];
			$e_stime=$exam['e_stime'];
			$e_etime=$exam['e_etime'];
			$e_room=$exam['e_room'];
			$e_name=$exam['e_name'];
			if(date('Y-m-d')>=$e_date){
				$query = $this->db->query("update exam set e_teachernum=0 where e_date='$e_date' and e_stime='$e_stime' and e_etime='$e_etime' and e_room='$e_room' and e_name='$e_name'");
			}
		}


    }
}
?>