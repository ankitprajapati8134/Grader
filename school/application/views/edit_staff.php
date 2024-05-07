<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h1 class="text-center">Edit Staff</h1>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <form action="<?php echo base_url() . 'index.php/staff/edit_staff/'. $staff[0]['id'] ?>" id="edit_staff_form">
                            <div class="form-group">
                                <label for="name">Enter Staff Name</label>
                                <input type="text" name="name" required="required" id="name" value="<?php echo $staff[0]['name'] ?>" 
                                    class="form-control" placeholder="Enter Staff Name">
                            </div>

                            <div class="form-group">
                                <label for="fname">Enter Father Name</label>
                                <input type="text" name="fname" required="required" id="fname" value="<?php echo $staff[0]['fname'] ?>" class="form-control"
                                    placeholder="Enter Father Name">
                            </div>

                            <div class="form-group">
                                <label for="fname">Enter Email </label>
                                <input type="email" name="email" required="required" id="email" value="<?php echo $staff[0]['email'] ?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>

                            <div class="form-group">
                                <label for="fname">Enter Mobile No. </label>
                                <input type="number" name="mobile_no" required="required" id="mobile_no" value="<?php echo $staff[0]['mobile_no'] ?>"
                                    class="form-control" placeholder="Enter Mobile">
                            </div>

                            <div class="form-group">
                                <label for="dob">Enter Student DOB</label>
                                <input type="date" name="dob" required="required" id="dob" value="<?php echo $staff[0]['dob'] ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="join_date">Enter Join Date</label>
                                <input type="date" name="join_date" value="<?php echo $staff[0]['join_date'] ?>" required="required" id="join_date"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="join_date">Enter Experience</label>
                                <input type="text" name="exp" required="required" id="exp" value="<?php echo $staff[0]['exp'] ?>" class="form-control"
                                    placeholder="Enter Experience">
                            </div>

                            <div class="form-group">
                                <label for="join_date">Enter Staff Payment</label>
                                <input type="text" name="payment" required="required" id="payment" value="<?php echo $staff[0]['payment'] ?>" class="form-control"
                                    placeholder="Enter Staff Payment">
                            </div>

                            <div class="form-group">
                                <label for="join_date">Enter Staff Other Information</label>
                                <textarea name="staff_other_information" class="form-control" 
                                    id="staff_other_information"><?php echo $staff[0]['staff_other_information'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>

                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>