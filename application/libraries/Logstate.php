
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logstate {

    public function adminstate()
    {
        if($_SESSION['usertype']==null){
       		$this->load->view('templates/header.php');
        	$this->load->view('templates/login.html');
        	$this->load->view('templates/footer.php');
        }
        if($_SESSION['usertype']=='0'){
            echo '无权限';
        	return 'false';
        }
        return 'true';
    }
}