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
		$query = $this->db->query("select * from teacher ");
		return $query;
	}
	public function delete(){
		$query = $this->db->query("update teacher set t_num=0");
		return $query;
	}

	public function setnew($date){
		$query = $this->db->query("update common set start='$date'");
		$year=(int)date('Y');
		$year=$year-1;
		$year="y".(string)$year;
		$query = $this->db->query("alter table teacher change  t_num $year int(11)");
		$query = $this->db->query("ALTER TABLE teacher ADD t_num int(11) not null default 0");
		return $query;
	}

	public function changenew($date){
		$query = $this->db->query("update common set start='$date'");
		return $query;
	}
}