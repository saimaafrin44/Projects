<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    // check admin login
    public function checkAdminLogin($email, $password) {
        $query = $this->db->query("SELECT * FROM admins WHERE email='$email' AND password='$password'")->row();

        if($query && $query->id)
            return $query;
        return false;
    }

    public function getAdminById($id){
        $query = $this->db->query("SELECT * FROM admins WHERE id='$id'")->row();
        return $query;
    }

    //==================================================== Officer =====================================================//
    public function getInvestigationOfficers(){
        $result = $this->db->query("SELECT * FROM investigation_officer ORDER BY io_id DESC")->result();
        return $result;
    }
    
    public function createInvestigationOfficer() {
        $this->load->helper('security');

        $io_name = $this->input->post('io_name');
        $gender = $this->input->post('gender');
        $contact_no = $this->input->post('contact_no');
        $rank = $this->input->post('rank');
        $date_of_hire = $this->input->post('date_of_hire');
        

        $sql = "INSERT INTO investigation_officer (io_name, gender, contact_no, rank, date_of_hire) VALUES ('$io_name', '$gender', '$contact_no', '$rank', '$date_of_hire')";
        // insert into database
        $query = $this->db->query($sql);

        return TRUE;
    }

    public function assignInvestigationOfficer(){
        $this->load->helper('security');

        $io_id = $this->input->post('io_id');
        $fir_no = $this->input->post('fir_no');
        $other_details = $this->db->escape($this->input->post('other_details'));
        $case_status = $this->db->escape($this->input->post('case_status'));

        $sql = "INSERT INTO cases (io_id, fir_no, other_details, case_status) VALUES ('$io_id', '$fir_no', $other_details, $case_status)";
        // insert into database
        $query = $this->db->query($sql);
    }

    public function getInvestigationOfficer($id){
        $result = $this->db->query("SELECT * FROM investigation_officer WHERE io_id='$id'")->row();
        return $result;
    }

    public function updateInvestigationOfficer($id) {
        $this->load->helper('security');

        $io_name = $this->input->post('io_name');
        $gender = $this->input->post('gender');
        $contact_no = $this->input->post('contact_no');
        $rank = $this->input->post('rank');
        $date_of_hire = $this->input->post('date_of_hire');

        $sql = "UPDATE investigation_officer SET io_name= '$io_name', gender = '$gender', contact_no = '$contact_no', rank = '$rank', date_of_hire = '$date_of_hire' WHERE io_id='$id'";
        // insert into database
        $query = $this->db->query($sql);

        return TRUE;
    }

    public function deleteInvestigationOfficer($id){
        $this->db->query("DELETE FROM investigation_officer WHERE id='$id'");
        return TRUE;
    }
    //========================================================= end Officer ============================================//

    public function getFirList(){
        $result = $this->db->query("SELECT * FROM FIR ORDER BY FIR_no DESC")->result();
        return $result;
    }

    public function getPetitioner($id){
        $result = $this->db->query("SELECT * FROM petitioner WHERE petitioner_id='$id'")->row();
        return $result;
    }

    public function getVictim($id){
        $result = $this->db->query("SELECT * FROM victim WHERE victim_id='$id'")->row();
        return $result;
    }

    public function getAccuser($id){
        $result = $this->db->query("SELECT * FROM accused WHERE accused_id='$id'")->row();
        return $result;
    }

    public function getCases(){
        $result = $this->db->query("SELECT * FROM cases ORDER BY case_id DESC")->result();
        return $result;
    }
}