<?php

class Student_account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('user_session')) 
        {
            redirect(base_url());
        }
    }

    public function index()
    {
    

        $this->load->view('student_account/include/header');
        $this->load->view('student_account/dashboard');
        $this->load->view('student_account/include/footer');

    }

    public function time_table()
    {
        $session_info= $this->session->userdata('user_session');
        $user_info = $this->CM->select_data('student','class',array('id'=>$session_info[0]['id']));
        // print_r($user_info);
        $exam_info = $this->CM->select_data('exam','exam.title',array('exam.class' =>$user_info[0]['class']));
        // print_r($exam_info);

        $this->load->view('student_account/include/header');
        $this->load->view('student_account/time_table',['exam_info'=>$exam_info]);
        $this->load->view('student_account/include/footer');
    }

    function result()
    {
        $session_info= $this->session->userdata('user_session');
        $result = $this->CM->select_data('results','*' ,array('student_id'=>$session_info[0]['id']));
        $this->load->view('student_account/include/header',['results' => $result]);
        $this->load->view('student_account/result');
        $this->load->view('student_account/include/footer');
    }

    function profile()
    {
        $session_info= $this->session->userdata('user_session'); //this will give student id from the database
        $student_info = $this->CM->select_data('student','*', array('id'=>$session_info[0]['id']));
        $this->load->view('student_account/include/header');
        $this->load->view('student_account/profile',['student_info' =>$student_info]);
        $this->load->view('student_account/include/footer');   
    }

    public function logout()
    {
        $this->session->unset_userdata('user_session');
        redirect(base_url());
    }
}

?>