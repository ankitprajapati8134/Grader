<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3>Time Table(5)<a href="javascript:;" class="btn btn-primary pull-right" 
            data-toggle="modal" data-target="#myModal">Add New Time Table</a></h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered example" style="width:100%">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Exam Name</th>
                                <th>File</th>
                                <th>Created At</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                foreach($time_tables as $tt) 
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $i ; ?></td>
                                        <td><?php echo $tt['exam_id'] ; ?></td>
                                        <td><a target="_blank" href="<?php echo base_url() . 'uploads/time_table/'.$tt['time_table_file']  ?>" class="btn btn-info"><i class="fa fa-download"></i></a></td>
                                        <td><?php echo $tt['created_at'] ; ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'index.php/exam/delete_time_table/' .$tt['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            <a href="<?php echo base_url().'index.php/exam/edit_time_table/' .$tt['id'] ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>

                                        </td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SNO</th>
                                <th>Exam Name</th>
                                <th>File</th>
                                <th>Created At</th>
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
                <h4 class="modal-title text-center">Add New Time Table</h4>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url() . 'index.php/exam/add_time_table' ?>" id="add_time_table_form">
                    <div class="form-group">
                        <label>Select Exam </label>
                        <select class="form-control" required="required" name="exam_id">
                            <option value="">Select</option>
                            <?php

                             foreach($exams as $exam)
                             {
                                ?><option><?php echo $exam['title']  ?></option><?php
                             }

                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select File</label>
                        <input type="file" name="file" required="required" id="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>