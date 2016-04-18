<?php
class login_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	public function getlog($id)
	{
	    $query = $this->db->get_where('teacher', array('t_id' => "$id"));
	    return $query->row_array();
	}
}