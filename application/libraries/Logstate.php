
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logstate {

    public function adminstate()
    {
        if(isset($_SESSION['usertype'])){
            if($_SESSION['usertype']=='0'){
                echo '无权限';
            	return 'nopower';
            }
            return 'true';
        }
        else{
            return 'needlog';
        }
    }

    public function normalstate(){
        if(isset($_SESSION['usertype'])){
            if($_SESSION['usertype']=='1'){
                echo '无权限';
                return 'nopower';
            }
            return 'true';
        }
        else{
            return 'needlog';
        }
    }


    public function state(){
        if(isset($_SESSION['usertype'])){
            return 'true';
        }
        else{
            return 'false';
        }
    }
}