<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3>Attendance (1) </h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered example" style="width:100%">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Class Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $i=1;
                                foreach($classes as $class)
                                {
                                $all_students = $this->CM->select_data('student','id, class',array('class'=> $class['name']));
                                $main_all_count = 0;
                                $main_present_count = 0;
                                    foreach($all_students as $student) //it will return count of all students 
                                    {
                                        $all_count = sizeof($this->CM->select_data('attendance_manage','status',array('student_id'=>$student['id']))); 
                                        $all_count_present = sizeof($this->CM->select_data('attendance_manage','status',array('student_id'=>$student['id'],'status' =>'Present')));

                                        $main_all_count = $main_all_count + $all_count;
                                        $main_present_count = $main_present_count + $all_count_present;
                                    }   
                            ?>

                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $class['name']; ?></td>
                            <td>
                                <?php 
                                echo $main_all_count* $main_present_count /  100
                                 ?>%
                            </td>

                          
                            <td>
                                <a href="<?php echo base_url().'index.php/attendance/student_list/'.$class['id'] ?>"
                                    class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <?php
                                }
                                ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SNO</th>
                                <th>Class Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Add New Classes</h4>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url() . 'index.php/school/classes' ?>" id="add_class_form">
                    <div class="form-group">
                        <label>Enter Attendance Name</label>
                        <input type="text" name="name" required="required" id="name" class="form-control" placeholder="Enter Class Name">
                    </div>

                    <div class="form-group">
                        <label>Enter Attendance Duration</label>
                        <input type="text" name="Attendance_duration" required="required" id="Attendance_duration" class="form-control" placeholder="Enter Attendance Duration">
                    </div>

                    <div class="form-group">
                        <label>Enter Attendance Fees</label>
                        <input type="text" name="Attendance_fees" required="required" id="Attendance_fees" class="form-control" placeholder="Enter Attendance Fees">
                    </div>

                    <div class="form-group">
                        <label>Enter Attendance Started</label>
                        <input type="text" name="Attendance_started" required="required" id="Attendance_started" class="form-control" placeholder="Enter Attendance Started">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>