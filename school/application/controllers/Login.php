<?php
class Login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('admin_session')) 
        {
            redirect(base_url().'index.php/admin');
        }
        
        if($this->session->userdata('user_session')) 
        {
            redirect(base_url().'index.php/student_account');
        }
    }
    public function index()
    {
        if($this->input->method() == 'post')
        {
            
            $_POST['password'] = md5($_POST['password']);
           // print_r($_POST); 
            $res = $this->CM->select_data('student', 'id, name, type', $_POST);
            if($res)
            {
                // print_r($res);
                if($res[0]['type'] == 1)
                {
                    $this->session->set_userdata('admin_session', $res);
                    echo 1;
                }
                else
                {
                    $this->session->set_userdata('user_session', $res);
                    echo 2;
                }
            }
            else
            {  
                echo 0;
            }
        }
        else
        {
            $this->load->view('login');
        }
    }


}


?>