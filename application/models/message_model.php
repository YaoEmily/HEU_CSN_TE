<?php
class message_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function getall(){
    	$date=date('Y-m-d');
    	$query = $this->db->query("select * from distribute where d_date>'$date' and d_state='1'");
		return $query;
    }
    public function getname($id){
    	$query = $this->db->query("select t_name from teacher where t_id='$id'");
		$temp=$query->row_array();
        $name=$temp['t_name'];
        return $name;
    }
    public function gettel($id){
    	$query = $this->db->query("select t_tel from teacher where t_id='$id'");
		$temp=$query->row_array();
        $tel=$temp['t_tel'];
        return $tel;
    }
}