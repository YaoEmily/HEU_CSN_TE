<?php
class distribute_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    //从teacher按照监考次数取教师号，然后核对每一个教师号有没有与课程冲突的，没有的话就排上，然后在count+1
    public function disteacher($date,$stime,$etime,$room,$name){
        $start=$this->days->getstart();
    	$query = $this->db->query("select * from teacher order by num");
		$result = $query->result_array();
		foreach($result as $teacher){
            $can='true';
            $te=$teacher['t_id'];
            $class=$this->db->query("select * from class where id=$te");
            $every=$class->result_array();
            foreach($every as $class){
                $day=$this->days->getday($date,$start);
                if((string)$day==$class['c_day']){
                    $week=ceil($day/7);
                    if($class["week".$week]=='1'){
                        if($stime>$class['c_stime']&&$etime<$class['c_etime'])
                            $can='false';
                        else if($stime>$class['c_stime']&&$stime<$class['c_etime'])
                            $can='false';
                        else if($etime>$class['c_stime']&&$etime<$class['c_etime'])
                            $can='false';
                    }
                }                   
            }
            if($can=='true'){
                $te= $teacher['t_id'];
                $this->db->query("update teacher set t_num=t_num+1 where t_id= $te");
                
                $distribute = array(
                'd_date' => $date,
                'd_time' => $stime,
                'd_room' => $room,
                'd_ename'=>$name,
                'd_tid'=>$teacher['t_id'],
                'd_type'=>'0',
                'd_state'=>'0',
                'd_fdate'=>date('Y-m-d'),
                'd_ftime'=>date("H:i:s"),

                );
                return $this->db->insert('distribute', $distribute);
            }    
		}
        return 'false';
    }
    public function okstate($date,$stime,$etime,$room,$name){
        return $this->db->query("update exam set e_state='1' where e_date= $date and e_stime= $stime and e_etime= $etime and e_room= $room and e_name= $name");
    }

    public function updatenum($date,$stime,$etime,$room,$name,$num){
        return $this->db->query("update exam set e_teachernum= $num where e_date= $date and e_stime= $stime and e_etime= $etime and e_room= $room and e_name= $name");
    }

    public function dis($date,$time,$room,$ename,$tid){
        $this->db->query("update teacher set t_num=t_num+1 where t_id= $tid");
        $this->db->query("update exam set e_teachernum=e_teachernum-1 where e_date= $date and e_stime= $stime and e_etime= $etime and e_room= $room and e_name= $name");
        $distribute = array(
            'd_date' => $date,
            'd_time' => $time,
            'd_room' => $room,
            'd_ename'=>$ename,
            'd_tid'=>$id,
            'd_type'=>'0',
            'd_state'=>'0',
            'd_fdate'=>date('Y-m-d'),
            'd_ftime'=>date("H:i:s"),
            );
        return $this->db->insert('distribute', $distribute);
    }

}