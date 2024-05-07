<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3><b> All Attendance</b><a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal"
                    data-target="#myModal">Add Attendance</a></h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered example" style="width:100%">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Remarks</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- display the content of database table inside form -->
                            <?php
                                $i=1;
                                foreach($all_attendance as $attend)  // $data['all_attendance] is showing the content of table of database from
                                                                    //file (Attendance.php)i.e. $data['all_attendance'] = $this->CM->select_data('attendance_manage', '*', array( 'student_id'=> $student_id));
                                {
                                    ?>
                            <tr>
                                <td><?php  echo $i  ?></td>
                                <td><?php  echo $attend['date']  ?></td>
                                <td><?php  echo $attend['status']  ?></td>
                                <td><?php  echo $attend['remarks']  ?></td>   

                                <td>
                                    <a class="btn btn-info"
                                        href="<?php echo base_url().'index.php/attendance/edit_attendance/'.$attend['id'] ?>">
                                        <i class="fa fa-pencil" aria-hidden="true"></i></a>
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
                                <th>Remarks</th>
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
                <h4 class="modal-title text-center">Add New Attendance</h4>
            </div>
            <div class="modal-body">
                <form
                    action="<?php echo base_url() . 'index.php/attendance/add_attendance/'. $this->uri->segment(3); ?>"
                    id="add_Attendance_form">
                    <div class="form-group">
                        <label>Enter Status</label>
                        <select class="form-control" required="required" name="status" id="status">
                            <option>Present</option>
                            <option>Absent</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Select Date</label>
                        <input type="date" name="date" id="date" required="required" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Enter Remarks</label>
                        <textarea name="remarks" id="remarks" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>