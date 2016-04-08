
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logstate {

    public function adminstate()
    {
        if($_SESSION['usertype']==null){
            return 'needlog';
        }
        if($_SESSION['usertype']=='0'){
            echo '无权限';
        	return 'nopower';
        }
        return 'true';
    }

    public function normalstate(){
        if($_SESSION['usertype']==null){
            return 'needlog';
        }
        if($_SESSION['usertype']=='1'){
            echo '无权限';
            return 'nopower';
        }
        return 'true';
    }
}