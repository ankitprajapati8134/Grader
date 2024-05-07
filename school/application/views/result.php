<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3>Results(<?php echo sizeof($results) ?>) <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal"
                    data-target="#myModal">Add New Result</a></h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered example" style="width:100%">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Student</th>
                                <th>Exam</th>
                                <th>Result</th>
                                <th>Created At</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $i=1;
                            foreach($results as $result) 
                            {
                                ?>
                                <tr>
                                    <td><?php echo $i  ?></td>
                                    <td><?php echo $result['sname']  ?></td>
                                    <td><?php echo $result['exam_name']  ?></td>
                                    <td><?php echo $result['result']  ?></td>
                                    <td><?php echo $result['created_at']  ?></td>
                                    <td>
                                        <a href="<?php echo base_url().'index.php/result/delete_result/' .$result['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="<?php echo base_url().'index.php/result/edit_result/' .$result['id'] ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SNO</th>
                                <th>Student</th>
                                <th>Exam</th>
                                <th>Result</th>
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
                <h4 class="modal-title text-center">Add New Results</h4>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url() . 'index.php/result/' ?>" id="add_result_form">
                    <div class="form-group">
                        <label>Select Student</label>
                        <select name="student" id="select_student" required="required" class="form-control">
                            <option value="">Select</option>
                            <?php  
                            foreach($all_student as $student) 
                            {
                                ?>
                            <option id="st_<?php echo $student['id']  ?>" data-val="<?php echo $student['class'] ?>" value="<?php echo $student['id']  ?>"><?php echo $student['name'];  ?></option>
                            <?php
                            }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select Exam</label>
                        <select name="exam" id="exam" required="required" class="form-control">
                            <option value="">Select</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Result</label>
                        <input type="text" name="result" required="required" id="result" class="form-control" placeholder="Result">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>