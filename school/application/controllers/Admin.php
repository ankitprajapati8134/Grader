<?php
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();  
        if(!$this->session->userdata('admin_session')) 
        {
            redirect(base_url());
        }
    }
    public function index() 
    { 
        $data['course_count'] = sizeof($this->CM->select_data('course','name'));
        $data['student_count'] = sizeof($this->CM->select_data('student','name'));
        $data['staff_count'] = sizeof($this->CM->select_data('staff','name'));
        $data['classes_count'] = sizeof($this->CM->select_data('classes','name'));

        $this->load->view('include/header');
        $this->load->view('home', $data);
        $this->load->view('include/footer');

    }
    public function category() {
        echo "Welcome to login";
    }

    public function change_status($tbl, $id)
    {
        //print_r($_POST);
        $this->db->where('id', $id);
        $res = $this->db->update($tbl, $_POST);
        if($res)
            echo 1;
        else
            echo 0;

    }

    function logout()
    {
        $this->session->unset_userdata('admin_session');
        redirect(base_url());
    }



}


?>