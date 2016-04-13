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
	public function delete(){
		$query = $this->db->query("update teacher set t_num=0");
		return $query;
	}

	public function setnew($date){
		$query = $this->db->query("update common set start='$date'");
		return $query;
	}
}