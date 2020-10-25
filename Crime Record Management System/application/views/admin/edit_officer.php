<div class="row-fluid row-custom">

    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-5">
                    <h3>Edit Tourist</h3>
                </div>
            </div>
        </div>
        <div class="grid-body">
            <div class="col-md-10 col-md-offset-1">
                <form action="<?php echo base_url('admin/investigation/officer/update');?>" class="form-horizontal" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="id" value="<?php echo $officer->io_id;?>">
                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="io_name">Full Name</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="io_name" value="<?php echo $officer->io_name;?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="gender">Gender</label>
                        </div>
                        <div class="col-md-10">
                            <select name="gender" id="gender" class="form-control">
                                <option <?php ($officer->gender == 'Male')? 'selected':'';?> value="Male">Male</option>
                                <option <?php ($officer->gender == 'Female')? 'selected':'';?> value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="contact_no">Contact Number</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="contact_no" value="<?php echo $officer->contact_no;?>" placeholder="01512345678">
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="col-md-2">
                            <label for="rank">Rank</label>
                        </div>
                        <div class="col-md-10">
                            <select name="rank" id="rank" class="form-control">
                                <option <?php echo ($officer->rank == 0)? 'selected':'';?> value="0">Officer In Charge</option>
                                <option <?php echo ($officer->rank == 1)? 'selected':'';?> value="1">SI</option>
                                <option <?php echo ($officer->rank == 2)? 'selected':'';?> value="2">ASP</option>
                                <option <?php echo ($officer->rank == 3)? 'selected':'';?> value="3">ACP</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Date Of Hire</label>
                        </div>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="date_of_hire" value="<?php echo date('Y-m-d', strtotime($officer->date_of_hire));?>" placeholder="">
                        </div>
                    </div>
                    <div class="text-right">
                        <input type="submit" class="btn btn-info" value="Update Officer">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>