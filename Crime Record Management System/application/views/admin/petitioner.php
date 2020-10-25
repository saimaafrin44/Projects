<div class="row-fluid row-custom">
    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-9">
                    <h3>Petitioner</h3>
                </div>
            </div>
        </div>
        <style>
            tr{
                padding: 20px auto;
            }
        </style>
        <div class="grid-body">
            <div class="col-md-12">
                <table class="table">
                    
                    <tbody>
                        
                        <tr>
                            <td width="200">Name</td>
                            <td><?php echo $petitioner->first_name.' '.$petitioner->middle_name.' '.$petitioner->last_name;?></td>
                        </tr>

                        <tr>
                            <td>Father's Name</td>
                            <td><?php echo $petitioner->father_name;?></td>
                        </tr>

                        <tr>
                            <td>Gender</td>
                            <td><?php echo $petitioner->gender;?></td>
                        </tr>

                        <tr>
                            <td>NID</td>
                            <td><?php echo $petitioner->nid;?></td>
                        </tr>
                        
                        <tr>
                            <td>Age</td>
                            <td><?php echo $petitioner->age;?></td>
                        </tr>

                        <tr>
                            <td>Contact No</td>
                            <td><?php echo $petitioner->contact_no;?></td>
                        </tr>

                        <tr>
                            <td>State</td>
                            <td><?php echo $petitioner->state;?></td>
                        </tr>

                        <tr>
                            <td>City</td>
                            <td><?php echo $petitioner->city;?></td>
                        </tr>

                        <tr>
                            <td>Street No</td>
                            <td><?php echo $petitioner->street_no;?></td>
                        </tr>

                        <tr>
                            <td>House No</td>
                            <td><?php echo $petitioner->house_no;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>