<div class="row-fluid row-custom">
    
    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-9">
                    <h3>Case List</h3>
                </div>
            </div>
        </div>
        <div class="grid-body">
            <div class="col-md-12">
                <table class="table datatable">
                    <thead>
                        <th>ID</th>
                        <th>FIR ID</th>
                        <th>Investigation Officer</th>
                        <th>Other Details</th>
                        <th>Case Status</th>
                    </thead>
                    <tbody>
                        <?php foreach ($cases as $case):?>
                            <tr>
                                <td><?php echo $case->case_id;?></td>
                                <td><?php echo $case->fir_no;?></td>
                                <td>
                                    <?php 
                                        $result = $this->db->query("SELECT * FROM investigation_officer WHERE io_id='$case->io_id'")->row();
                                        
                                    ?>
                                    <?php echo $result->io_name;?>
                                </td>
                                <td><?php echo $case->other_details;?></td>
                                <td><?php echo $case->case_status;?></td>
                                
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>