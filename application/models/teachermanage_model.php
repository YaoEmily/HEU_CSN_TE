<?php
class teachermanage_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	public function getall()
	{
	    
	    $query = $this->db->query("select t_id,t_name,t_tel from teacher ");
		return $query;
	}
	public function delete($id){
		$query = $this->db->query("delete from teacher where  t_id =".$id);
		return $query;
	}
	public function updatetel($id,$tel){
		$query = $this->db->query("update teacher set t_tel = ".$tel." where t_id = ".$id);
		return $query;
	}
	public function updatepassword($id,$password){
		$query = $this->db->query("update teacher set t_password = ".$password." where t_id = ".$id);
		return $query;
	}
	public function getpassword($id){
		$query = $this->db->query("select t_password from teacher where t_id = ".$id);
		return $query;
	}
}