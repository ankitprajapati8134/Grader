<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3>Exams(<?php  echo sizeof($all_exam); ?>) <a href="javascript:;" class="btn btn-primary pull-right" 
            data-toggle="modal" data-target="#myModal">Add New Exam</a></h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered example" style="width:100%">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Exam Name</th>
                                <th>Start Date</th>
                                <th>Category</th>
                                <th>Class</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $i=1;
                            foreach($all_exam as $exam) 
                            {
                                ?>
                                <tr>                                
                                    <td><?php echo $i  ?></td>
                                    <td><?php echo $exam['title']  ?></td>
                                    <td><?php echo $exam['start_date']  ?></td>
                                    <td><?php echo $exam['category']  ?></td>
                                    <td><?php echo $exam['class']  ?></td>        
                                    <td><a href="<?php echo base_url().'index.php/exam/edit_exam/'. $exam['id'] ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a></td>                           
                                </tr>                      
                                <?php
                                $i++;
                            }
                            ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SNO</th>
                                <th>Exam Name</th>
                                <th>Start Date</th>
                                <th>Category</th>
                                <th>Class</th>
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
                <h4 class="modal-title text-center">Add New Exams</h4>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url() . 'index.php/exam/add_exam' ?>" id="add_exam_form">
                    <div class="form-group">
                        <label>Enter Exam Title</label>
                        <input type="text" name="title" required="required" id="title" class="form-control" placeholder="Enter Exam Title">
                    </div>
                    <div class="form-group">
                        <label>Select Start Date</label>
                        <input type="date" name="start_date" required="required" id="start_date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Select Category</label>
                        <select name="category" id="exam_category" class="form-control">
                            <option value="">Select</option>
                             <?php 
                              foreach($category as $cat)
                              {
                                ?>
                                <option><?php echo $cat['name'];  ?></option>
                                <?php
                              }
                            ?> 
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Select Class</label>
                        <select name="class" id="class" class="form-control">
                            <option value="">Select</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>