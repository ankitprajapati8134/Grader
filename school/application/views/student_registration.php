<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <!-- This liine =>(<?php echo sizeof($students) ?> gives the count as soon the student increases)  -->
          <h3>Student (<?php echo sizeof($students) ?>) 
            <a href="javascript:;" class="btn btn-success pull-right mr-2" style="margin-right:2%;"
                data-toggle="modal" data-target="#myModal">Add New Student</a></h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered example" style="width:100%">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Email</th>                            
                                <th>School Category</th>
                                <th>Class Name</th>
                                <th>DOB</th>
                                <th>Join Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($students as $student) {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $student['name']; ?></td>
                                <td><?php echo $student['fname']; ?></td>
                                <td><?php echo $student['email']; ?></td>
                                <td><?php echo $student['category']; ?></td>
                                <td><?php echo $student['class']; ?></td>
                                <td><?php echo $student['dob']; ?></td>
                                <td><?php echo $student['join_date']; ?></td>
                                <td><input type="checkbox" class="change_status" data-table="student" value="1"  
                                        data-id="<?php echo $student['id'] ?>" <?php if ($student['status'] == 1) { echo "checked";} ?>
                                        name="status_<?php echo $student['id'] ?>">Active
                                </td>
                                <td>
                                    <a href="<?php echo base_url().'index.php/student/delete_student/'. $student['id'] ?>"
                                        class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <a href="<?php echo base_url().'index.php/student/edit_student/'. $student['id'] ?>"
                                        class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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
                                <th>Father Name</th>
                                <th>Email</th>                            
                                <th>School Category</th>
                                <th>Class Name</th>
                                <th>DOB</th>
                                <th>Join Date</th>
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
                <h4 class="modal-title text-center"><b>Add New Student</b></h4>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url() . 'index.php/student/student_registration' ?>" id="add_student_form">
                    <div class="form-group">
                        <label for="name">Enter Student Name</label>
                        <input type="text" name="name" required="required" id="sname" class="form-control"
                            placeholder="Enter Student Name">
                    </div>

                    <div class="form-group">
                        <label for="fname">Enter Father Name</label>
                        <input type="text" name="fname" required="required" id="fname" class="form-control"
                            placeholder="Enter Father Name">
                    </div>

                    <div class="form-group">
                        <label for="fname">Enter Email </label>
                        <input type="email" name="email" required="required" id="email_user" class="form-control"
                            placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label for="category">Enter Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value=""> Select</option>
                            <?php   
                            foreach ($all_category as $cat) {
                                ?>
                            <option><?php  echo $cat['name'];  ?></option>
                            <?php
                            }

                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="class">Enter Class</label>
                        <select name="class" class="form-control" id="class">
                            <option value=""> Select</option>
                            <?php   
                            foreach ($classes as $class) 
                            {
                                ?>
                            <option><?php  echo $class['name'];  ?></option>
                            <?php
                            }

                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="dob">Enter Student DOB</label>
                        <input type="date" name="dob" required="required" id="dob" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="join_date">Enter Join Date</label>
                        <input type="date" name="join_date" required="required" id="join_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>