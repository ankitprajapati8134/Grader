<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h1 class="text-center">Edit Student</h1>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                    <form action="<?php echo base_url() . 'index.php/student/edit_student/'. $student_data['id'] ?>" id="edit_student_form">
                        <div class="form-group">
                            <label for="name">Enter Student Name</label>
                            <input type="text" name="name" required="required"   value="<?php echo $student_data['name']  ?>" id="sname" class="form-control"
                                placeholder="Enter Student Name">
                        </div>

                        <div class="form-group">
                            <label for="fname">Enter Father Name</label>
                            <input type="text" name="fname" required="required" value="<?php echo $student_data['fname']  ?>" id="fname" class="form-control"
                                placeholder="Enter Father Name">
                        </div>

                        <div class="form-group">
                            <label for="fname">Enter Email </label>
                            <input type="email" name="email" required="required" value="<?php echo $student_data['email']  ?>" id="email_user" class="form-control"
                                placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label for="category">Enter Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value=""> Select</option>
                                <?php   
                            foreach ($all_category as $cat) {
                                ?>
                                <option <?php if($student_data['category'] == $cat['name']) {echo "Selected";}  ?>><?php  echo $cat['name'];  ?></option>
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
                                <option <?php if($student_data['class'] == $class['name']) {echo "selected";}  ?>><?php  echo $class['name'];  ?></option>
                                <?php
                            }

                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="dob">Enter Student DOB</label>
                            <input type="date" name="dob" required="required" value="<?php echo $student_data['dob']  ?>" id="dob" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="join_date">Enter Join Date</label>
                            <input type="date" name="join_date" required="required" value="<?php echo $student_data['join_date']  ?>" id="join_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-2"></div>
                
                </div>
            </div>
        </div>
    </div>
</div>