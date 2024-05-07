<?php

class School extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('admin_session')) 
        {
            redirect(base_url());
        }
    }
    public function category()
    {

        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Category Name', 'required');
            if ($this->form_validation->run() == FALSE) {
                echo "Something went wrong!, Please Try Again.";
            } else {
                $resp = $this->db->insert('category', $_POST);
                if ($resp) {
                    echo "1";
                } else {
                    echo "Category not added";
                }
            }
        } else {
            $data['all_category'] = $this->CM->select_data('category', '*');
            $this->load->view('include/header');
            $this->load->view('category', $data);
            $this->load->view('include/footer');
        }
    }
    function delete_category($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');
        redirect(base_url() . 'index.php/school/category');
    }




    function edit_category($id)
    {
        if ($this->input->method() == 'post') {
            //Insert the data
            $resp = $this->CM->update_data('category', $_POST, array('id' => $id));
            if ($resp) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
            $data['cat_info'] = $this->CM->select_data('category', '*', array('id' => $id));
            $this->load->view('include/header');
            $this->load->view('edit_category', $data);
            $this->load->view('include/footer');
        }
    }



    //Function for classes

    function classes(){
        if($this->input->method() == 'post') {
             //Insert the data
            $res = $this->db->insert('classes',$_POST);
            if($res){
                echo 1;
            }else{
                echo 'Class Not Added'; 
            }

        }else{
            $data['classes'] = $this->CM->select_data('classes', '*');
            $data['cats'] = $this->CM->select_data('category', '*', array('status' => '1'));
            $this->load->view('include/header');
            $this->load->view('classes', $data);
            $this->load->view('include/footer');

        }
            
    }

    function delete_class($id){
        $this->db->where('id', $id);
        $this->db->delete('classes');
        redirect(base_url() . 'index.php/school/classes');
    }

    function edit_class($id)
    {
       

        if ($this->input->method() == 'post') {
         //   Update the data
            $res = $this->CM->update_data('classes', $_POST, array('id' => $id));
            if ($res) {
                echo 1;
            } else {
                echo 0;
            }
            // print_r($_POST);
        } else {
            //Update the data by this query
            $data['classes'] = $this->CM->select_data('classes', '*', array('id' => $id));
            $data['cats'] = $this->CM->select_data('category', '*', array('status' => '1'));
            $this->load->view('include/header');
            $this->load->view('edit_classes', $data);
            $this->load->view('include/footer');
        }
    }

    function course()
    {
        if($this->input->method() == 'post')
        {
            $res =$this->db->insert('course', $_POST);
            if( $res ) 
            {
                echo 1;
            }
            else
            {
                echo "Course Not Added";
            }
        }
        else
        {
            $this->db->order_by('id','desc');
            $data['course'] = $this->CM->select_data('course', '*');        
            $this->load->view('include/header');
            $this->load->view('course',$data);
            $this->load->view('include/footer');
        }
    }

    function delete_course($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('course');
        redirect(base_url().'index.php/school/course/');
    }

    function edit_course($id)
    {
        if($this->input->method() == 'post')
        {
            $res = $this->CM->update_data('course', $_POST, array('id'=> $id));
            if( $res )
            {
                echo "1";
            }
            else
            {
                echo "0";
            }
        }
        else{
            $data['course'] = $this->CM->select_data('course', '*', array('id' => $id));
            $this->load->view('include/header');
            $this->load->view('edit_course', $data);
            $this->load->view('include/footer');
        }
    }

}
?>