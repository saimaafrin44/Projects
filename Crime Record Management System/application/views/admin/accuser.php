<div class="row-fluid row-custom">
    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-9">
                    <h3>accuser</h3>
                </div>
            </div>
        </div>
        <div class="grid-body">
            <div class="col-md-12">
                <table class="table">
                    
                    <tbody>
                        
                        <tr>
                            <td width="200">Name</td>
                            <td><?php echo $accuser->accused_name;?></td>
                        </tr>

                        <?php if($accuser->lockup_id):?>
                        <tr>
                            <td>Lockup Status</td>
                            <td>Arrested</td>
                        </tr>
                        <?php endif;?>
                        <tr>
                            <td>Gender</td>
                            <td><?php echo $accuser->gender;?></td>
                        </tr>

                        <tr>
                            <td>Age</td>
                            <td><?php echo $accuser->age;?></td>
                        </tr>

                        <tr>
                            <td>Contact No</td>
                            <td><?php echo $accuser->contact_no;?></td>
                        </tr>

                        <tr>
                            <td>Status</td>
                            <td><?php echo $accuser->status;?></td>
                        </tr>

                        <tr>
                            <td>State</td>
                            <td><?php echo $accuser->state;?></td>
                        </tr>

                        <tr>
                            <td>City</td>
                            <td><?php echo $accuser->city;?></td>
                        </tr>

                        <tr>
                            <td>Street No</td>
                            <td><?php echo $accuser->street_no;?></td>
                        </tr>

                        <tr>
                            <td>House No</td>
                            <td><?php echo $accuser->house_no;?></td>
                        </tr>

                        <tr>
                            <td>Photo</td>
                            <td><img src="<?php echo base_url('assets/img/'.$accuser->photo);?>" width="200" class="img img-responsive" alt=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>