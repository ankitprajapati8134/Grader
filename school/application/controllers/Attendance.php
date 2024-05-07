<?php

class Attendance extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('admin_session')) 
        {
            redirect(base_url());
        }
    }

    public function index(){
        $data['classes'] = $this->CM->select_data('classes','*');
        $this->load->view('include/header');
        $this->load->view('attendance',$data);
        $this->load->view('include/footer');
    }
    function student_list($class_id)
    { 
        $classes = $this->CM->select_data('classes', 'name',array('id'=> $class_id));
       // print_r($classes[0]['name']);
        $data['student_list'] = $this->CM->select_data('student','name , id', array('class' => $classes[0]['name']));
        
        $this->load->view('include/header');
        $this->load->view('student_list',$data);
        $this->load->view('include/footer');
    }
    function add_attendance($student_id)
    {
        if($this->input->method() == 'post')
        {
            $_POST['student_id'] =$student_id;
            $res = $this->db->insert('attendance_manage', $_POST); 
            if( $res )
                echo 1;
            else
                echo 0;
        }
        else
        {
            $this ->db->order_by('id','desc');
            $data['all_attendance'] = $this->CM->select_data('attendance_manage', '*', array( 'student_id'=> $student_id)); // show the content of table by varible "all_attendance"
            $this->load->view('include/header');
            $this->load->view('add_attendance', $data);
            $this->load->view('include/footer');

        }       
    }
 
    //Edit or Update the Attendance
    function edit_attendance($id)
    {
            
        if($this->input->method() == 'post')
        { 
            $res = $this->CM->update_data('attendance_manage', $_POST, array( 'id'=> $id)); 
            if( $res )
                echo '1';
            else
                echo '0';
        }
        else
        {
            $data['attendance'] = $this->CM->select_data('attendance_manage', '*', array('id'=> $id)); // show the content of table by varible "all_attendance"
            $this->load->view('include/header');
            $this->load->view('edit_attendance', $data);
            $this->load->view('include/footer');
        }
    }    

}
?>