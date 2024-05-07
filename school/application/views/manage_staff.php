<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
          <h3>Staff (<?php echo sizeof($staff) ?>) <a href="javascript:;" class="btn btn-success pull-right"
                data-toggle="modal" data-target="#myModal">Add New Staff</a></h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <!-- <?php echo"<pre>"; print_r($staff); ?> //Testing Purpose -->  
                    <table class="table table-striped table-bordered example" style="width:100%">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Name</th> 
                                <th>Father Name</th>
                                <th>Email</th>                            
                                <th>Mobile Number</th>
                                <th>DOB</th>
                                <th>Join Date</th>
                                <th>Experience</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                           $i=1;
                           foreach ($staff as $s1) 
                           {
                            ?>
                            <tr>
                                <td><?php  echo $i; ?></td>
                                <td><?php  echo $s1['name']; ?></td>
                                <td><?php  echo $s1['fname']; ?></td>
                                <td><?php  echo $s1['email']; ?></td>
                                <td><?php  echo $s1['mobile_no']; ?></td>
                                <td><?php  echo $s1['dob']; ?></td>
                                <td><?php  echo $s1['join_date']; ?></td>
                                <td><?php  echo $s1['exp']; ?></td>
                                <td><?php  echo $s1['payment']; ?></td>
                                <td>
                                <input type="checkbox" class="change_status" data-table="staff" value="1"  
                                        data-id="<?php echo $s1['id'] ?>" <?php if ($s1['status'] == 1) { echo "checked";} ?>
                                        name="status_<?php echo $s1['id'] ?>">Active
                                </td>
                                <td>
                                    <a href="<?php echo base_url().'index.php/staff/delete_staff/'. $s1['id'] ?>"
                                        class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <a href="<?php echo base_url().'index.php/staff/edit_staff/'. $s1['id'] ?>"
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
                                <th>Mobile Number</th>
                                <th>DOB</th>
                                <th>Join Date</th>
                                <th>Experience</th>
                                <th>Payment</th>
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
                <h4 class="modal-title text-center"><b>Add New Staff</b></h4>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url() . 'index.php/staff/manage_staff' ?>" id="add_staff_form">
                    <div class="form-group">
                        <label for="name">Enter Staff Name</label>
                        <input type="text" name="name" required="required" id="name" class="form-control"
                            placeholder="Enter Staff Name">
                    </div>

                    <div class="form-group">
                        <label for="fname">Enter Father Name</label>
                        <input type="text" name="fname" required="required" id="fname" class="form-control"
                            placeholder="Enter Father Name">
                    </div>

                    <div class="form-group">
                        <label for="fname">Enter Email </label>
                        <input type="email" name="email" required="required" id="email" class="form-control"
                            placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label for="fname">Enter Mobile No. </label>
                        <input type="number" name="mobile_no" required="required" id="mobile_no" class="form-control"
                            placeholder="Enter Mobile">
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
                        <label for="join_date">Enter Experience</label>
                        <input type="text" name="exp" required="required" id="exp" class="form-control"placeholder="Enter Experience">
                    </div>

                    <div class="form-group">
                        <label for="join_date">Enter Staff Payment</label>
                        <input type="text" name="payment" required="required" id="payment" class="form-control"placeholder="Enter Staff Payment">
                    </div>

                    <div class="form-group">
                        <label for="join_date">Enter Staff Other Information</label>
                        <textarea name="staff_other_information" class="form-control" id="staff_other_information"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>