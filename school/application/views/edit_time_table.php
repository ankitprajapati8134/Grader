<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3 class="text-center"><b>Edit Time Table()</b></h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <form action="<?php echo base_url() . 'index.php/exam/edit_time_table/'.$time_table[0]['id'] ?>"
                            id="edit_time_table_form">
                            <div class="form-group">
                                <label>Select Exam </label>
                                <select class="form-control"  name="exam_id">
                                    <option value="">Select</option>
                                    <?php

                             foreach($exams as $exam)
                             {
                                ?><option <?php if($time_table[0]['exam_id']== $exam['title']) {echo "selected"; }  ?>><?php echo $exam['title']  ?></option><?php
                             }

                            ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select File</label>
                                <input type="file" name="file"  id="file" class="form-control">
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