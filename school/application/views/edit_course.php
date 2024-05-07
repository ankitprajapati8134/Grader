<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h1 class="text-center">Edit Course</h1>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
            <div class="row">
                <div class="col-sm-3"></div>                                           
                 <!-- $cat_info[0]['id'] method="post"-->
                <form action="<?php echo base_url(). 'index.php/school/edit_course/'. $course[0]['id'] ?>" id="update_course" >
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Enter Course Name</label>
                        <input type="text" name="name" id="name" value="<?php echo $course[0]['name']; ?>" placeholder="Enter Course Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label>Enter Course Duration</label>
                        <input type="text" name="course_duration" id="course_duration" value="<?php echo $course[0]['duration']; ?>" required="required"  class="form-control" placeholder="Enter Course Duration">                       
                    </div>

                    <div class="form-group">
                        <label>Enter Course Fees</label>
                        <input type="text" name="course_fees" id="course_fees" value="<?php echo $course[0]['fees']; ?>" required="required"  class="form-control" placeholder="Enter Course Fees">                       
                    </div>

                    <div class="form-group">
                        <label>Enter Course Started</label>
                        <input type="text" name="course_started" id="course_started" value="<?php echo $course[0]['started']; ?>" required="required"  class="form-control" placeholder="Enter Course Started">                       
                    </div>

                    <div class="form-group">
                        <input class="btn btn-outline-primary" type="submit" value="Update" />                   
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>