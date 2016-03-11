<?php
class Teacher extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_teacher');
        $this->load->helper('url_helper');
        $this->load->helper('date');
    }

    public function index()
    {
        $teacher['all'] = $this->m_teacher->get_teacher();
        $teacher['title'] = "老师信息";

        $this->load->view('templates/header', $teacher);
        $this->load->view('teacher/index', $teacher);
        $this->load->view('templates/footer');
    }

    public function search($slug = NULL)
    {
        $teacher['someone'] = $this->m_teacher->get_teacher($slug);
        $teacher['title'] = $teacher['someone']['id'];

        $this->load->view('templates/header', $teacher);
        $this->load->view('teacher/view', $teacher);
        $this->load->view('templates/footer');
    }
    public function t(){
        $datestring = '%Y-%m-%d %h:%i:%s';
        $time = time();
        echo mdate($datestring, $time);
    }

}