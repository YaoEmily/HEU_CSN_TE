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
		return $query->row_array();
	}
	public function insertteacher($id,$password,$name,$tel){
		$teacher = array(
        't_id' => $id,
        't_password' => $password,
        't_name' => $name,
        't_tel'=>$tel,
        't_power'=>'0',
    	);
    	return $this->db->insert('teacher', $teacher);
	}
}