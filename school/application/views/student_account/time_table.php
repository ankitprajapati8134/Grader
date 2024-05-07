<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3>Time Table</h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">

                    <table class="table table-striped table-bordered example" style="width:100%">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Exam Name</th>
                                <th class="pull-left">Download</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            foreach ($exam_info as $ei)
                             {
                                $time_table = $this->CM->select_data('exam_time_table',
                                    'time_table_file',array('exam_id'=> $ei['title']));
                                
                                if($time_table)
                                {
                                ?>
                            <tr>
                                <td><?php echo $i;  ?></td>
                                <td><?php echo $ei['title'];  ?></td>
                                <td><a target="_blank" href="<?php echo base_url().'uploads/time_table/'.$time_table[0]['time_table_file']  ?>"
                                        class="btn btn-info pull-left"><i class="fa fa-download"></i></a></td>
                            </tr>
                            <?php
                                $i++;   
                            }
                        }
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SNO</th>
                                <th>Exam Name</th>
                                <th>Download</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>