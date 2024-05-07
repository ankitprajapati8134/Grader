<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3><b>Attendance (1) </b></h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered example" style="width:100%">
                        <thead>
                            <tr>
                                <th>SNO</th>                               
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                                foreach($student_list as $student)
                                {
                                    $all_count = sizeof($this->CM->select_data('attendance_manage','status',array('student_id'=>$student['id']))); // This will give total number of count of days of a student
                                    $all_count_present = sizeof($this->CM->select_data('attendance_manage','status',array('student_id'=>$student['id'],'status' =>'Present'))); // This will give total number count of days of a student on which he/she is Present

                            ?>

                        <tr>
                            <td><?php echo $i; ?></td>
                            
                            <td><?php echo $student['name']; ?></td>
                            <td><?php echo  $all_count * $all_count_present  / 100; ?>%</td>
                            <td>
                                 <a href="<?php echo base_url().'index.php/attendance/add_attendance/'.$student['id'] ?>"
                                    class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                            <?php
                            $i++;
                              }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SNO</th>                               
                                <th>Name</th>
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