<?php
class classmanage_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	public function getclass($id)
	{
	    
	    $query = $this->db->query("select * from class where id= ".$id);
		return $query;
	}
	public function delete($id,$name,$day,$stime,$etime){
		$query = $this->db->query("delete from class where  id =".$id." and c_name = ".$name." and c_day =".$day."and c_stime= ".$stime."and c_etime=".$etime);
		return $query;
	}
	public function classstate($id,$name,$day,$stime,$etime){
		$query = $this->db->query("select c_name from class where id =".$id." and c_name = ".$name." and c_day =".$day."and c_stime= ".$stime."and c_etime=".$etime);
		return $query->num_rows();
	}

	public function insertclass($id,$name,$day,$stime,$etime,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y){
		$classinfo = array(
        'id' => $id,
        'c_name' => $name,
        'c_day' => $day,
        'c_stime'=>$stime,
        'c_etime'=>$etime,
        'week1'=>$a,
        'week2'=>$b,
        'week3'=>$c,
        'week4'=>$d,
        'week5'=>$e,
        'week6'=>$f,
        'week7'=>$g,
        'week8'=>$h,
        'week9'=>$i,
        'week10'=>$j,
        'week11'=>$k,
        'week12'=>$l,
        'week13'=>$m,
        'week14'=>$n,
        'week15'=>$o,
        'week16'=>$p,
        'week17'=>$q,
        'week18'=>$r,
        'week19'=>$s,
        'week20'=>$t,
        'week21'=>$u,
        'week22'=>$v,
        'week23'=>$w,
        'week24'=>$x,
        'week25'=>$y,
    	);
    	return $this->db->insert('class', $classinfo);
	}
	
	public function updateclass($id,$name,$day,$stime,$etime,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y){
		$query = $this->db->query("delete from class where  id =".$id." and c_name = ".$name." and c_day =".$day."and c_stime= ".$stime."and c_etime=".$etime);
		$classinfo = array(
        'id' => $id,
        'c_name' => $name,
        'c_day' => $day,
        'c_stime'=>$stime,
        'c_etime'=>$etime,
        'week1'=>$a,
        'week2'=>$b,
        'week3'=>$c,
        'week4'=>$d,
        'week5'=>$e,
        'week6'=>$f,
        'week7'=>$g,
        'week8'=>$h,
        'week9'=>$i,
        'week10'=>$j,
        'week11'=>$k,
        'week12'=>$l,
        'week13'=>$m,
        'week14'=>$n,
        'week15'=>$o,
        'week16'=>$p,
        'week17'=>$q,
        'week18'=>$r,
        'week19'=>$s,
        'week20'=>$t,
        'week21'=>$u,
        'week22'=>$v,
        'week23'=>$w,
        'week24'=>$x,
        'week25'=>$y,
    	);
    	return $this->db->insert('class', $classinfo);
	}
}