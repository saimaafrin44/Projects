<div class="row-fluid row-custom">
    <div class="grid simple">
        <div class="grid-title">
            <div class="row">
                <div class="col-md-9">
                    <h3>Victim</h3>
                </div>
            </div>
        </div>
        <div class="grid-body">
            <div class="col-md-12">
                <table class="table">
                    
                    <tbody>
                        
                        <tr>
                            <td width="200">Name</td>
                            <td><?php echo $victim->first_name.' '.$victim->middle_name.' '.$victim->last_name;?></td>
                        </tr>

                        <tr>
                            <td>Father's Name</td>
                            <td><?php echo $victim->father_name;?></td>
                        </tr>

                        <tr>
                            <td>Gender</td>
                            <td><?php echo $victim->gender;?></td>
                        </tr>

                        <tr>
                            <td>NID</td>
                            <td><?php echo $victim->nid;?></td>
                        </tr>
                        
                        <tr>
                            <td>Age</td>
                            <td><?php echo $victim->age;?></td>
                        </tr>

                        <tr>
                            <td>Contact No</td>
                            <td><?php echo $victim->contact_no;?></td>
                        </tr>

                        <tr>
                            <td>Victim Condition</td>
                            <td><?php echo $victim->victim_condition;?></td>
                        </tr>

                        <tr>
                            <td>State</td>
                            <td><?php echo $victim->state;?></td>
                        </tr>

                        <tr>
                            <td>City</td>
                            <td><?php echo $victim->city;?></td>
                        </tr>

                        <tr>
                            <td>Street No</td>
                            <td><?php echo $victim->street_no;?></td>
                        </tr>

                        <tr>
                            <td>House No</td>
                            <td><?php echo $victim->house_no;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>