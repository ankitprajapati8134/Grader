<?php 
class Result extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('admin_session')) 
        {
            redirect(base_url());
        }
    }
    public function index()
    {
        
        if($this->input->method() == 'post')
        {
            // print_r($_POST); debugging purpose
            //now we will push the data of result in the database
            $res = $this->db->insert('results',$_POST);
            if($res)
            {
                echo '1';
            }
            else
            {
                echo '0';
            }
            
        }
        else
        {
            $data['all_student'] = $this->CM->select_data('student','id, name, class');

            $this->db->join('student','results.student_id = student.id');

            $data['results'] = $this->CM->select_data('results','results.*,student.name as sname'); // this code is used for showing all the database value to the table form in the PAGE.
            
            $this->load->view('include/header');
            $this->load->view('result', $data);
            $this->load->view('include/footer');
        }
    }

    function find_exams()
    {
        // print_r($_POST);
        $all_exams = $this->CM->select_data('exam','title',$_POST);
        //print_r($all_exams);
        echo "<option value=''>Select</option>";
        if($all_exams)
        {
            foreach($all_exams as $exam)
            {
                ?><option><?php echo $exam['title']; ?></option><?php
            }
        }
    }


    function edit_result($id)
    {

        if($this->input->method() == 'post')
        {
            $this->db-> where('id',$id);
            $res = $this->db->update('results', $_POST);
            if($res)
            {
                echo 1;
            }
            else
            {
                echo 0;
            }
        }
        else
        {
            $data['all_student'] = $this->CM->select_data('student','id, name, class');
        
             //Using JOIN to find the class of the Particular student
            $this->db->join('student','results.student_id = student.id');

             $data['all_result'] = $this->CM->select_data('results','results.* ,student.class',array('results.id' => $id)); 
            //    echo "<pre>";
            //    print_r($data['all_result']);
            //    die();

            $data['all_exam'] = $this->CM->select_data('exam','id, title',array('class' => $data['all_result'][0]['class']));
            
            $this->load->view('include/header');
            $this->load->view('edit_result', $data);
            $this->load->view('include/footer');
        }

        
    }


    function delete_result($id)
    {
        $this->db->where('id', $id);
        $res =  $this->db->delete('results');
        redirect(base_url() . 'index.php/result');
    }







}


?>