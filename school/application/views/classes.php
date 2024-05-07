<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3>Classes (<?php echo sizeof($classes) ?>) <a href="javascript:;" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">Add New Class</a></h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered example" style="width:100%">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($classes as $cat) {
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $cat['name']; ?></td>
                                    <td><?php echo $cat['cat']; ?></td>
                                    <td><input type="checkbox" class="change_status" data-table="classes" value="1"  
                                        data-id="<?php echo $cat['id'] ?>"  <?php if ($cat['status'] == 1) { echo "checked";} ?>  
                                            name="status_<?php echo $cat['id'] ?>"></td>
                                    <td>
                                        <a href="<?php echo base_url().'index.php/school/delete_class/'. $cat['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        <a href="<?php echo base_url().'index.php/school/edit_class/'. $cat['id'] ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SNO</th>
                                <th>Name</th>
                                <th>Status</th>
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
                <h4 class="modal-title text-center">Add New Classes</h4>
            </div>
            <div class="modal-body">

                <form action="<?php echo base_url() . 'index.php/school/classes' ?>" id="add_class_form">
                    <div class="form-group">
                        <label>Enter Class Name</label>
                        <input type="text" name="name" required="required" id="name" class="form-control" placeholder="Enter Class Name">
                    </div>

                    <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control" required="required" name="cat" id="cat">
                            <option value="">Select</option>
                            <?php 
                             foreach($cats as $c1)
                             { 
                                ?>
                                <option><?php echo $c1['name'] ; ?></option>
                                <?php
                             }
                              ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>