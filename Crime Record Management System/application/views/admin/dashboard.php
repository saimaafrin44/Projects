<div class="row-fluid row-custom">
    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-9">
                    <h3>Add New Investigation Officer</h3>
                </div>
                
                <div class="dropdown pull-right" style="margin-top: 5px;">
                    <button id="create-new" class="btn btn-default btn-sm"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="grid-body collapse <?php if(validation_errors()) echo 'in'; ?>" id="create-form">
            <div class="col-md-10 col-md-offset-1">
                <form action="<?php echo base_url('admin/investigation/officer/create');?>" class="form-horizontal" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="io_name">Full Name</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="io_name" placeholder="Enter Full Name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="gender">Gender</label>
                        </div>
                        <div class="col-md-10">
                            <select name="gender" id="gender" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="contact_no">Contact Number</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="contact_no" placeholder="01512345678">
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="col-md-2">
                            <label for="rank">Rank</label>
                        </div>
                        <div class="col-md-10">
                            <select name="rank" id="rank" class="form-control">
                                <option value="0">Officer In Charge</option>
                                <option value="1">SI</option>
                                <option value="2">ASP</option>
                                <option value="3">ACP</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="name">Date Of Hire</label>
                        </div>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="date_of_hire" placeholder="">
                        </div>
                    </div>
                    
                    <div class="text-right">
                        <input type="submit" class="btn btn-info" value="Create Officer">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-9">
                    <h3>Investigation Officer List</h3>
                </div>
            </div>
        </div>
        <div class="grid-body">
            <div class="col-md-12">
                <table class="table datatable">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Contact No.</th>
                        <th>Rank</th>
                        <th>Date Of Hire</th>
                        <th width="120"><i class="fa fa-cog" aria-hidden="true"></i></th>
                    </thead>
                    <tbody>
                        <?php foreach ($officers as $officer):?>
                            <tr>
                                <td><?php echo $officer->io_id;?></td>
                                <td><?php echo $officer->io_name;?></td>
                                <td><?php echo $officer->gender;?></td>
                                <td><?php echo $officer->contact_no;?></td>
                                <td>
                                    <?php 
                                        if($officer->rank == 0):
                                            echo "Officer In Charge";
                                        elseif($officer->rank == 1): 
                                            echo "SI";
                                        elseif($officer->rank == 2): 
                                            echo "ASP";
                                        elseif($officer->rank == 3): 
                                            echo "ACP";
                                        endif;
                                    ?>
                                </td>
                                <td><?php echo $officer->date_of_hire;?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/investigation/officer/edit/'.$officer->io_id);?>" class="btn btn-default btn-xs" title="edit"><i class="fa fa-pencil"></i></a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>