<?php
class all_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	public function getall()
	{
	    
	    $query = $this->db->query("select * from teacher ");
		return $query;
	}

	public function gethistory($year){
		$query = $this->db->query("select t_id,$year from teacher ");
		return $query;
	}
	public function delete(){
		$query = $this->db->query("update teacher set t_num=0");
		return $query;
	}

	public function setnew($date){
		$query = $this->db->query("update common set start='$date'");
		$year=date('Y');
		$year="y".$year;
		$query = $this->db->query("alter table teacher change  t_num $year int(11)");
		$query = $this->db->query("ALTER TABLE teacher ADD t_num int(11) default 0");
		return $query;
	}
}