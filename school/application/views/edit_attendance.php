<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3><b> Edit Attendance</b></h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="row">
                    <div class="col-sm-1"></div> 
                    <div class="col-sm-10">
                        
                        <form action="<?php echo base_url() . 'index.php/attendance/edit_attendance/'. $this->uri->segment(3); ?>"
                            id="edit_Attendance_form">
                            <div class="form-group">
                                <label>Enter Status</label>
                                <input type="hidden" name="student_id" id="student_id" value="<?php echo $attendance[0]['student_id'] ?>">
                                <select class="form-control" required="required" name="status" id="status">
                                    <option <?php if($attendance[0]['status']=='Present'){echo "selected";}  ?>> Present </option>                                   
                                    <option <?php if($attendance[0]['status']=='Absent'){echo "selected";}   ?>>Absent  </option>                                   
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Select Date</label>
                                <input type="date" name="date" id="date" value="<?php echo $attendance[0]['date'] ?>"
                                    required="required" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Enter Remarks</label>
                                <textarea name="remarks" id="remarks"
                                    class="form-control"><?php echo $attendance[0]['remarks'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
