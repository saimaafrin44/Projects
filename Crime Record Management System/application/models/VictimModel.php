<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class VictimModel extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    //==================================================== Victim =====================================================//

    public function getVictim($id){
        $result = $this->db->query("SELECT * FROM tourists WHERE id='$id'")->row();
        return $result;
    }

    public function createVictim() 
    {
        $this->load->helper('security');
        // victim information insert into database
        $first_name = $this->input->post('first_name');
        $middle_name = $this->input->post('middle_name');
        $last_name = $this->input->post('last_name');
        $father_name= $this->input->post('father_name');
        $nid = $this->input->post('nid');
        $gender = $this->input->post('gender');
        $age = $this->input->post('age');
        $contact_no = $this->input->post('contact_no');
        $victim_condition = $this->db->escape($this->input->post('victim_condition'));
        $state = $this->input->post('state');
        $city = $this->input->post('city');
        $street_no = $this->input->post('street_no');
        $house_no = $this->input->post('house_no');
        

        $sql = "INSERT INTO victim (first_name, middle_name, last_name, father_name, nid, gender, age, contact_no, victim_condition, state, city, street_no, house_no) VALUES ('$first_name', '$middle_name', '$last_name', '$father_name', '$nid', '$gender', '$age', '$contact_no', $victim_condition, '$state', '$city', '$street_no', '$house_no')";
        // insert into database
        $query = $this->db->query($sql);
        
        return $this->db->order_by('victim_id', 'desc')->get('victim')->row()->victim_id;
    }

    public function createPetitioner(){
        $this->load->helper('security');

        // petitioner information insert into database
        $first_name = $this->input->post('p_first_name');
        $middle_name = $this->input->post('p_middle_name');
        $last_name = $this->input->post('p_last_name');
        $father_name= $this->input->post('p_father_name');
        $nid = $this->input->post('p_nid');
        $gender = $this->input->post('p_gender');
        $age = $this->input->post('p_age');
        $contact_no = $this->input->post('p_contact_no');
        $state = $this->input->post('p_state');
        $city = $this->input->post('p_city');
        $street_no = $this->input->post('p_street_no');
        $house_no = $this->input->post('p_house_no');
        

        $sql = "INSERT INTO petitioner (first_name, middle_name, last_name, father_name, nid, gender, age, contact_no, state, city, street_no, house_no) VALUES ('$first_name', '$middle_name', '$last_name', '$father_name', '$nid', '$gender', '$age', '$contact_no', '$state', '$city', '$street_no', '$house_no')";
        // insert into database
        $query = $this->db->query($sql);
        
        return $this->db->order_by('petitioner_id', 'desc')->get('petitioner')->row()->petitioner_id;
    }

    public function createAcuser($photo = NULL){
        $this->load->helper('security');

        // acuser information insert into database
        $accused_name = $this->input->post('accused_name');
        $gender = $this->input->post('accused_gender');
        $age = $this->input->post('accused_age');
        $status= $this->db->escape($this->input->post('accused_status'));
        $contact_no = $this->input->post('accused_contact_no');
        $state = $this->input->post('accused_state');
        $city = $this->input->post('accused_city');
        $street_no = $this->input->post('accused_street_no');
        $house_no = $this->input->post('accused_house_no');
        $photo = $photo;
        

        $sql = "INSERT INTO accused (accused_name, gender, age, status, contact_no, state, city, street_no, house_no, photo) VALUES ('$accused_name', '$gender', '$age', $status, '$contact_no', '$state', '$city', '$street_no', '$house_no', '$photo')";
        // insert into database
        $query = $this->db->query($sql);
        
        return $this->db->order_by('accused_id', 'desc')->get('accused')->row()->accused_id;
    }

    public function createFir($victim_id, $petitioner_id, $acuser_id){
        $this->load->helper('security');

        $petitioner_id = $petitioner_id;
        $victim_id = $victim_id;
        $date_file = date("Y-m-d");
        $date_incident= $this->input->post('date_incident');
        $time_incident = $this->input->post('time_incident');
        $place_incident = $this->db->escape($this->input->post('place_incident'));
        $accused_id = $acuser_id;

        $sql = "INSERT INTO FIR (petitioner_id, victim_id, date_file, date_incident, time_incident, place_incident, accused_id) VALUES ('$petitioner_id', '$victim_id', '$date_file', '$date_incident', '$time_incident', $place_incident, '$accused_id')";
        // insert into database
        $query = $this->db->query($sql);
        
        return TRUE;
    }

    public function updateTourist($id, $image) 
    {
        $this->load->helper('security');

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $nationality = $this->input->post('nationality');
        $birthday = $this->input->post('birthday');
        $birth_place = $this->input->post('birth_place');
        $passport_no = $this->input->post('passport_no');
        $visa_no = $this->input->post('visa_no');
        $passport_expire = $this->input->post('passport_expire');
        $visa_expire = $this->input->post('visa_expire');
        $purpose = $this->input->post('purpose');
        $password = '12345';
        if($this->input->post('password')){
            $password = $this->input->post('password');
        }

        $sql = "UPDATE tourists SET fname= '$fname', lname = '$lname', nationality = '$nationality', birthday = '$birthday', birth_place = '$birth_place', passport_no = '$passport_no', visa_no = '$visa_no', passport_expire = '$passport_expire', visa_expire = '$visa_expire', purpose = '$purpose', password = '$password', image = '$image' WHERE id='$id'";
        // insert into database
        $query = $this->db->query($sql);

        return TRUE;
    }
    //========================================================= end Tourist ============================================//

}
