<?php
class m_teacher extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	public function get_teacher($slug = FALSE)
	{
	    if ($slug === FALSE)
	    {
	        $query = $this->db->get('teacher');
	        return $query->result_array();
	    }

	    $query = $this->db->get_where('teacher', array('id' => $slug));
	    return $query->row_array();
	}
}