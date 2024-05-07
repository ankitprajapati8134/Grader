<?php
class Exam extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('admin_session')) 
        {
            redirect(base_url());
        }
    }
    public function add_exam()
    {
        if($this->input->method() == 'post')
        {
            //print_r($_POST);
            //Insert the data into database
            $res= $this->db->insert('exam', $_POST);
            if($res)
                echo '1';
            else
                echo '0';   

        }
        else
        {
            $data['category'] = $this->CM->select_data('category','*', array('status' => '1'));
            $data ['all_exam'] = $this->CM->select_data('exam','*');
            $this->load->view('include/header');
            $this->load->view('add_exam', $data);
            $this->load->view('include/footer');
        }
       
    }
    function find_class()  
    {
       
        $class = $this->CM->select_data('classes','name', $_POST);
        if($class)
        {
            echo "<option value = ''>Select</option>";
            foreach($class as $c1)
            {
                ?><option><?php echo $c1['name']  ?></option><?php
            }
        }
        else
        {
            echo "<option value = ''>Select</option>";
        }
    }

    function edit_exam($id)
    {
        if($this->input-> method() == "post")
        {
            $res = $this->CM->update_data('exam', $_POST, array('id'=> $id));
            if($res)
                echo 1;
            else
                echo 0;
        }
        else
        {        
            $data['exam'] = $this->CM->select_data('exam','*', array('id'=> $id))[0];
            // echo "<pre>";
            // print_r( $exam );
            $data['category'] = $this->CM->select_data('category','*', array('status' => '1'));
            $data['classes'] = $this->CM->select_data('classes','*', array('cat' => $data['exam']['category']));
            $this->load->view('include/header');
            $this->load->view('edit_exam', $data);
            $this->load->view('include/footer');
        }

    }

    function add_time_table()
    {
        if($this->input->method() == 'post')
        {
            
            // echo "<pre>";
            // print_r($_POST);
            // echo "<pre>";
            // print_r($_FILES);
          $file_data = $this->file_lib->upload_image('uploads/time_table/','file', 'PDF|JPG|PNG|JPEG|jpg|png|jpeg|PDF');
          echo "<pre>";
         // print_r($file_data);
         if($file_data)
         {
            //$_POST['file'] = $file_data['file_name'];
            //print_r($_POST);
            $_POST['time_table_file'] = $file_data['file_name'];
            $res = $this->db->insert('exam_time_table', $_POST);
            if($res)
                echo '1';
            else
                echo '0';
         }
         else
         {
            echo '2';
         }

        }
        else
        {
            $data['exams'] = $this->CM->select_data('exam','*',array('status'=> '1')); // all exams status will come inside the data variable
            $data['time_tables'] = $this->CM->select_data('exam_time_table','*');
            $this->load->view('include/header');
            $this->load->view('add_time_table',$data);
            $this->load->view('include/footer');
        }
       
    }

    function edit_time_table($id)
    {
        if($this->input->method() == 'post')
        {
            $count =0;
            if($_FILES['file']['name']!='')
            {
                $file_data = $this->file_lib->upload_image('uploads/time_table/','file', 'PDF|JPG|PNG|JPEG|jpg|png|jpeg|PDF');
               if($file_data)
               {
                 $_POST['time_table_file'] = $file_data['file_name'];
               }
               else
               {
                $count =1;
               }

            }
        
         if($count == 0)
         {
            $this->db->where('id',$id);
            $res = $this->db->update('exam_time_table', $_POST);
            if($res)
                echo '1';
            else
                echo '0';
            
         }
         else
         {
            echo '2';
         }

        }
        else
        {
            $data['exams'] = $this->CM->select_data('exam','*',array('status'=> '1')); // all exams status will come inside the data variable
            $data['time_table'] = $this->CM->select_data('exam_time_table','*',array('id'=>$id));
            $this->load->view('include/header');
            $this->load->view('edit_time_table',$data);
            $this->load->view('include/footer');
        }
       
    }

function delete_time_table($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('exam_time_table');
        redirect(base_url() . 'index.php/exam/add_time_table');
    }


}


?>
