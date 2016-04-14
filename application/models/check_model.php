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
    }
}
?>