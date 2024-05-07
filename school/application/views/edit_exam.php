<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h1 class="text-center">Edit Exam</h1>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                <div class="col-sm-1"></div> 
                    <div class="col-sm-10">
                <form action="<?php echo base_url() . 'index.php/exam/edit_exam/'.$exam['id'] ?>" id="update_exam_form">
                    <div class="form-group">
                        <label>Enter Exam Title</label>
                        <input type="text" name="title" value="<?php echo $exam['title']  ?>" required="required" id="title" class="form-control" placeholder="Enter Exam Title">
                    </div>
                    <div class="form-group">
                        <label>Select Start Date</label>
                        <input type="date" name="start_date" value="<?php echo $exam['start_date']  ?>" required="required" id="start_date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Select Category</label>
                        <select name="category" id="exam_category" class="form-control">
                            <option value="">Select</option>
                             <?php 
                              foreach($category as $cat)
                              {
                                ?>
                                <option <?php if($exam['category'] == $cat['name']){ echo "Selected";} ?>>
                                <?php  echo $cat['name'];  ?></option>
                                <?php
                              }
                            ?> 
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Select Class</label>
                        <select name="class" id="class" class="form-control">
                            <option value="">Select</option>
                            <?php
                            foreach($classes as $class)
                            {
                                ?><option <?php if($exam['class'] == $class['name']) {echo "selected";} ?>>
                                <?php echo $class['name']  ?> </option>
                                <?php 
                            }
                            ?>
                        </select>
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