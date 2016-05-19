<?php
class exammanage_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	public function examinfo()
	{
	    $query = $this->db->query("select * from exam where e_teachernum>0");
		return $query;
	}
	public function delete($date,$stime,$etime,$room,$name){
		$query = $this->db->query("delete from exam where  e_date='$date' and e_stime='$stime' and e_etime='$etime' and e_room='$room' and e_name='$name'");
		return $query;
	}

	public function examstate($date,$stime,$etime,$room,$name){
		$query = $this->db->query("select e_class from exam where e_date='$date' and e_stime='$stime' and e_etime='$etime' and e_room='$room' and e_name='$name'");
		return $query->num_rows();
	}

	public function insertexam($date,$stime,$etime,$room,$name,$class,$teachernum,$state){
		$teacher = array(
        'e_date' => "$date",
        'e_stime'=>"$stime",
        'e_etime'=>"$etime",
        'e_room' => "$room",
        'e_name' => "$name",
        'e_class'=>"$class",
        'e_teachernum'=>$teachernum,
        'e_state'=>$state,
    	);
    	return $this->db->insert('exam', $teacher);
	}
}