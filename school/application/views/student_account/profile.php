<style type="text/css">
.data_block {
    height: 50px;
    line-height: 50px;
    padding-left: 17px;
}
</style>


<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3><?php echo $student_info[0]['name']  ?></h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="data_block">
                                <p><b>Name</b> : <?php echo $student_info[0]['name']  ?></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="class_block">
                                <p><b>Father's Name</b> : <?php echo $student_info[0]['fname']  ?></p>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="data_block">
                                <p><b>Email</b> : <?php echo $student_info[0]['email']  ?></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="data_block">
                                <p><b>Category</b> : <?php echo $student_info[0]['category']  ?></p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="data_block">
                                <p><b>Class</b> : <?php echo $student_info[0]['class']  ?></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="data_block">
                                <p><b>DOB</b> : <?php echo $student_info[0]['dob']  ?></p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="data_block">
                                <p><b>Join_Date</b> : <?php echo $student_info[0]['join_date']  ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>