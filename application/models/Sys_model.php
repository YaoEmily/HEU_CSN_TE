<?php

class Sys_model extends CI_Model {
	public function getname()
	{
	    $this->load->database();
	    $query = $this->db->query("select * from sysname ");
	    $time=$query->row_array();
        $name=$time['name'];
        return $name;
	}

	public function changename($name){
		$this->load->database();
		$query = $this->db->query("update sysname set name='$name'");
		return $query;
	}

	public function getdate(){
		$this->load->database();
	    $query = $this->db->query("select * from common ");
	    $time=$query->row_array();
        $date=$time['start'];
        return $date;
	}

}