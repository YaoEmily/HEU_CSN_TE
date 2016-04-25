<?php
class distribute_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    //从teacher按照监考次数取教师号，然后核对每一个教师号有没有与课程冲突的，没有的话就排上，然后在count+1
    public function disteacher($date,$stime,$etime,$room,$name){
        $start=$this->distribute_model->getstart();
    	$query = $this->db->query("select * from teacher where t_power='0' order by t_num ");
		$result = $query->result_array();
		foreach($result as $teacher){
            $can='true';
            $te=$teacher['t_id'];
            $class=$this->db->query("select * from class where id=$te");
            $every=$class->result_array();
            foreach($every as $class){
                $day=$this->days->getday($date,$start);
                $day=(int)$day;
                $day=$day+1;
                if(($day%7)==(int)$class['c_day']){
                    $week=ceil($day/7);
                    if($class["week".$week]=='1'){
                        if($stime>=$class['c_stime']&&$etime<=$class['c_etime'])
                            $can='false';
                        else if($stime>=$class['c_stime']&&$stime<=$class['c_etime'])
                            $can='false';
                        else if($etime>=$class['c_stime']&&$etime<=$class['c_etime'])
                            $can='false';
                    }
                }                   
            }
            if($this->distribute_model->examstate($date,$teacher['t_id'])=='hasexam'){
                $can='false';
            }
            if($can=='true'){
                $te= $teacher['t_id'];
                $distribute = array(
                'd_date' => $date,
                'd_time' => $stime,
                'd_room' => "$room",
                'd_ename'=>"$name",
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

    public function examstate($date,$tid){
        $query=$this->db->query("select * from distribute where d_type !='2' and d_tid = '$tid' and d_date='$date'");
        $num=$query->num_rows();
        if($num=='0'){
            return 'noexam';
        }
        else{
            return 'hasexam';
        }
    }


    public function okstate($date,$stime,$etime,$room,$name){
        return $this->db->query("update exam set e_state='1' where e_date= '$date' and e_stime= '$stime' and e_etime= '$etime' and e_room= '$room' and e_name= '$name'");
    }

    public function updatenum($date,$stime,$etime,$room,$name,$num){
        return $this->db->query("update exam set e_teachernum= $num where e_date= '$date' and e_stime= '$stime' and e_etime= '$etime' and e_room= '$room' and e_name= '$name'");
    }

    public function dis($date,$stime,$etime,$room,$ename,$tid){

        $query=$this->db->query("select e_teachernum from exam where e_date= '$date' and e_stime= '$stime' and e_etime= '$etime' and e_room= $room and e_name= '$ename'");
        $num=$query->row_array();
        if($num['e_teachernum']>0){

            $distribute = array(
                'd_date' => $date,
                'd_time' => $stime,
                'd_room' => $room,
                'd_ename'=>$ename,
                'd_tid'=>"$tid",
                'd_type'=>'0',
                'd_state'=>'0',
                'd_fdate'=>date('Y-m-d'),
                'd_ftime'=>date("H:i:s"),
                'd_reason'=>'0',
                'd_zid'=>'0',
                );
            $query=$this->db->insert('distribute', $distribute);
            if($query) {
                $this->db->query("update exam set e_teachernum=e_teachernum-1 where e_date= '$date' and e_stime= '$stime' and e_etime= '$etime' and e_room= $room and e_name= '$ename'");
                return "true";

            }
            // return $query;
        }
        else{
            $num='num';
            return $num;
        }

    }

    public function getstart(){
        $start=$this->db->query("select start from common");
        $time=$start->row_array();
        $start=$time['start'];
        return $start;
    }


    public function getall(){
        $query=$this->db->query("select * from distribute");
        return $query;
    }

}
?>