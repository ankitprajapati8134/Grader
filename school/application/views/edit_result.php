<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h2 class="text-center"><b>Edit Results</b></h2>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <form action="<?php echo base_url() . 'index.php/result/edit_result/' .$this->uri->segment(3) ?>" 
                                id="edit_result_form">
                            <div class="form-group">
                                <label>Select Student</label>
                                <select name="student" id="select_student" required="required" class="form-control">
                                    <option value="">Select</option>
                                    <?php  
                            foreach($all_student as $student) 
                            {
                                ?>
                                    <option <?php if($all_result[0]['student_id'] == $student['id'] ) { echo 'selected'; } ?> id="st_<?php echo $student['id']  ?>"
                                        data-val="<?php echo $student['class'] ?>"
                                        value="<?php echo $student['id']  ?>"><?php echo $student['name'];  ?></option>
                                    <?php
                            }
                        ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Exam</label>
                                <select name="exam" id="exam" required="required" class="form-control">
                                    <option value="">Select</option>
                                    <?php
                                    foreach($all_exam as $exam) 
                                    {
                                        ?>
                                        <option <?php if($all_result[0]['exam_name'] == $exam['title'] ) { echo 'selected'; } ?>><?php echo $exam['title']  ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Result</label>
                                <input type="text" name="result" value="<?php echo $all_result[0]['result']   ?>" required="required" id="result" class="form-control"
                                    placeholder="Result">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>