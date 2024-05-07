<?php
class Staff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('admin_session')) 
        {
            redirect(base_url());
        }
    }

    public function manage_staff()
    {

        if ($this->input->method() == 'post') {
            //Insert the data in database
            $res = $this->db->insert('staff', $_POST);
            if ($res) {
                echo 1;
            } else {
                echo 0;
            }

            //print_r($_POST); testing purpose , for debugging
        } else {
            $data['staff'] = $this->CM->select_data('staff', '*');
            $this->load->view('include/header');
            $this->load->view('manage_staff', $data);
            $this->load->view('include/footer');
        }
    }

    function edit_staff($id)
    {
        //echo $id; testing purpose
        if ($this->input->method() == 'post') {
            //print_r($_POST);
            $this->db->where('id', $id);
            $res = $this->db->update('staff', $_POST);
            if ($res) {
                echo '1'; // If data is inserted then echo 1
            } else {
                echo '0'; // If data is not inserted then echo 0
            }
        } else {
            $data['staff'] = $this->CM->select_data('staff', '*', array('id' => $id));
            // print_r($data['staff']);             
            $this->load->view('include/header');
            $this->load->view('edit_staff', $data);
            $this->load->view('include/footer');
        }
    }

    function delete_staff($id)
    {
        //echo $id;
        $this->db->where('id', $id);
        $this->db->delete('staff');
        redirect(base_url().'index.php/staff/manage_staff');
    }

}
