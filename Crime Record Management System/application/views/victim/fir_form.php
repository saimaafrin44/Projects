<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title;?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/users/css/bootstrap.min.css');?>" >
        <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/users/css/app.css');?>" >
    </head>
    <body>
        <div class="container">
            <div class="row well">
                <h3 class="text-center text-info">Create FIR</h3>
                <hr>
                <form action="<?php echo base_url('fir/submit');?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <h3 class="text-center text-warning">Victim Information</h3>
                        <hr>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="middle_name">Middle Name:</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="father_name">Father's Name:</label>
                                <input type="text" class="form-control" id="father_name" name="father_name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nid">NID/Birth Certificate No:</label>
                                <input type="text" class="form-control" id="nid" name="nid" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="contact_no">Contact No:</label>
                                <input type="text" class="form-control" id="contact_no" name="contact_no" required>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="state">State:</label>
                                <input type="text" class="form-control" id="state" name="state">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="street_no">Street No:</label>
                                <input type="text" class="form-control" id="street_no" name="street_no">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="house_no">House No:</label>
                                <input type="text" class="form-control" id="house_no" name="house_no">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="victim_condition">Victim Condition:</label>
                                <textarea class="form-control" id="victim_condition" name="victim_condition" rows="4" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h3 class="text-center text-warning">Petitioner Information</h3>
                        <hr>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label><input type="checkbox" id="check" name="same_as_victim" value="checked"> Same as Victim</label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label for="p_information">Customize Petitioner Information</label>
                                <select name="p_information" id="p_information" class="form-control">
                                    <option value="0">Same as Victim Information</option>
                                    <option value="1">Customize</option>
                                </select>
                            </div>
                        </div>
                        <hr> -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_first_name">First Name:</label>
                                <input type="text" class="form-control" id="p_first_name" name="p_first_name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_middle_name">Middle Name:</label>
                                <input type="text" class="form-control" id="p_middle_name" name="p_middle_name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_last_name">Last Name:</label>
                                <input type="text" class="form-control" id="p_last_name" name="p_last_name" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_father_name">Father's Name:</label>
                                <input type="text" class="form-control" id="p_father_name" name="p_father_name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_nid">NID/Birth Certificate No:</label>
                                <input type="text" class="form-control" id="p_nid" name="p_nid" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select name="p_gender" id="p_gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_age">Age</label>
                                <input type="number" class="form-control" id="p_age" name="p_age" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_contact_no">Contact No:</label>
                                <input type="text" class="form-control" id="p_contact_no" name="o_contact_no" required>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_state">State:</label>
                                <input type="text" class="form-control" id="p_state" name="p_state">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_city">City:</label>
                                <input type="text" class="form-control" id="p_city" name="p_city" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_street_no">Street No:</label>
                                <input type="text" class="form-control" id="p_street_no" name="p_street_no">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="p_house_no">House No:</label>
                                <input type="text" class="form-control" id="p_house_no" name="p_house_no">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h3 class="text-center text-warning">Accused Information</h3>
                        <hr>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="accused_name">Full Name:</label>
                                <input type="text" class="form-control" id="accused_name" name="accused_name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="accused_gender">Gender:</label>
                                <select name="accused_gender" id="accused_gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="accused_age">Age</label>
                                <input type="number" class="form-control" id="accused_age" name="accused_age" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="accused_contact_no">Contact No:</label>
                                <input type="text" class="form-control" id="accused_contact_no" name="accused_contact_no" required>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="accused_state">State:</label>
                                <input type="text" class="form-control" id="accused_state" name="accused_state">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="accused_city">City:</label>
                                <input type="text" class="form-control" id="accused_city" name="accused_city" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="accused_street_no">Street No:</label>
                                <input type="text" class="form-control" id="accused_street_no" name="accused_street_no">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="accused_house_no">House No:</label>
                                <input type="text" class="form-control" id="accused_house_no" name="accused_house_no">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="accused_photo">Photo:</label>
                                <input type="file" class="form-control" id="accused_photo" name="accused_photo">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h3 class="text-center text-warning">FIR Information</h3>
                        <hr>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_incident">Date of Incident:</label>
                                <input type="date" class="form-control" id="date_incident" name="date_incident" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="time_incident">Time of Incident:</label>
                                <input type="time" class="form-control" id="time_incident" name="time_incident" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="place_incident">Place of Incident:</label>
                                <textarea class="form-control" id="place_incident" name="place_incident" rows="4" required></textarea>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/users/js/bootstrap.min.js');?>"></script>
        <script>
            $('#check').on('change', function(){
                if($("#check").is(':checked')){
                    $('#p_first_name').val($('#first_name').val());
                    $('#p_middle_name').val($('#middle_name').val());
                    $('#p_last_name').val($('#last_name').val());
                    $('#p_father_name').val($('#father_name').val());
                    $('#p_nid').val($('#nid').val());
                    $('#p_gender option[value="'+$('#gender').val()+'"]').prop("selected", true);
                    $('#p_age').val($('#age').val());
                    $('#p_contact_no').val($('#contact_no').val());
                    $('#p_state').val($('#state').val());
                    $('#p_city').val($('#city').val());
                    $('#p_street_no').val($('#street_no').val());
                    $('#p_house_no').val($('#house_no').val());
                }else{
                    alert("Not Checked");
                }
            })
        </script>
    </body>
</html>