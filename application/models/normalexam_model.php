<?php
class normalexam_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	public function getall($id)
	{
	    
	    $query = $this->db->query("select * from distribute where d_tid=$id");
		return $query;
	}

	public function teacher()
	{
	    
	    $query = $this->db->query("select t_id,t_name from teacher");
		return $query;
	}

	public function accept($date,$time,$room,$ename,$id)
	{
	    $this->db->query("update teacher set t_num=t_num+1 where t_id= $id");
	    $query = $this->db->query("update distribute set d_state = '1' where d_date='$date' and d_time='$time' and d_room= '$room' and d_ename= '$ename' and d_tid= '$id'");
		return $query;
	}


	public function refuse($date,$time,$room,$ename,$id)
	{
	    $this->db->query("update distribute set d_state = '2' where d_date='$date' and d_time='$time' and d_room= $room and d_ename= '$ename' and d_tid= $id");
	    $query=$this->db->query("select d_zid from distribute where d_date='$date' and d_time='$time' and d_room= $room and d_ename= '$ename' and d_tid= $id");
		$newid=$query->row_array();
	    $query=$this->db->query("update distribute set d_state = '0',d_type = '0' where d_date='$date' and d_time='$time' and d_room= $room and d_ename= '$ename' and d_tid=".$newid['d_zid']);
	    return $query;
	}

	public function change($date,$time,$room,$ename,$id,$zid,$reason)
	{
	    $this->db->query("update distribute set d_type='2',d_state = '0' where d_date='$date' and d_time='$time' and d_room= $room and d_ename= '$ename' and d_tid= $id");
        $distribute = array(
            'd_date' => $date,
            'd_time' => $time,
            'd_room' => $room,
            'd_ename'=>$ename,
            'd_tid'=>$zid,
            'd_type'=>'1',
            'd_state'=>'0',
            'd_fdate'=>date('Y-m-d'),
            'd_ftime'=>date("H:i:s"),
            'd_reason'=>"$reason",
            'd_zid'=>$id,
            );
        return $this->db->insert('distribute', $distribute);
	}

}

