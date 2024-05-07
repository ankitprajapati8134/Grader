<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3>Result</h3>
            <div style="padding-top:20px; padding-left: 10px; padding-right: 20px;">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered example" style="width:100%">
                        <thead>
                            <tr>
                                <th>SNO</th>
                                <th>Exam Name</th>
                                <th>Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1; 
                            foreach($results as $result) 
                            {
                                ?>
                            <tr>
                                <td><?php echo $i;  ?></td>
                                <td><?php echo $result['exam_name'];  ?></td>
                                <td><?php echo $result['result'];  ?></td>


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
                                <th>Result</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>