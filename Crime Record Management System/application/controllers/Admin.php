<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public $site_name = "Tourist";
    public $admin;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel', 'adminModel');
        $this->load->model('VictimModel', 'victimtModel');

        date_default_timezone_set('Asia/Dhaka');
    }

    //============================ Investigation Officer ==============================//
    public function dashboard($error = NULL)
    {
    	if(!$this->session->userdata('admin_logged_in')){
            redirect('admin/login');
        }
        $admin_id = $this->session->userdata('admin_logged_in')['id'];
        $this->admin = $this->adminModel->getAdminById($admin_id);

        $data['title'] = $this->site_name.' | Investigation Officer';
        $data['active'] = 'Officer';
        $data['admin'] = $this->admin;
        $data['error'] = $error;
        $data['officers'] = $this->adminModel->getInvestigationOfficers();
        
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/partials/navbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/partials/bottom', $data);
    }

    public function createInvestigationOfficer(){
        $this->adminModel->createInvestigationOfficer();
        redirect('admin');
    }

    public function editInvestigationOfficer($id = NULL){
    	if(!$this->session->userdata('admin_logged_in')){
            redirect('admin/login');
        }
        $admin_id = $this->session->userdata('admin_logged_in')['id'];
        $this->admin = $this->adminModel->getAdminById($admin_id);

        $data['title'] = $this->site_name.' | Officer';
        $data['active'] = 'tourist';
        $data['admin'] = $this->admin;
        $data['officer'] = $this->adminModel->getInvestigationOfficer($id);
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/partials/navbar', $data);
        $this->load->view('admin/edit_officer', $data);
        $this->load->view('admin/partials/bottom', $data);
    }

    public function updateInvestigationOfficer(){
    	if(!$this->session->userdata('admin_logged_in')){
            redirect('admin/login');
        }
        $this->adminModel->updateInvestigationOfficer($this->input->post('id'));
        redirect('admin');
    }


    //=========================== end Officer ============================//
    
    //============================ FIR===============================//
    public function firList($error = NULL){
    	if(!$this->session->userdata('admin_logged_in')){
            redirect('admin/login');
        }
        $admin_id = $this->session->userdata('admin_logged_in')['id'];
        $this->admin = $this->adminModel->getAdminById($admin_id);

        $data['title'] = $this->site_name.' | FIR List';
        $data['active'] = 'fir';
        $data['admin'] = $this->admin;
        $data['error'] = $error;
        $data['firs'] = $this->adminModel->getFirList();
        $data['officers'] = $this->adminModel->getInvestigationOfficers();
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/partials/navbar', $data);
        $this->load->view('admin/fir', $data);
        $this->load->view('admin/partials/bottom', $data);
    }

    public function getPetitioner($id = NULL){
        if(!$this->session->userdata('admin_logged_in')){
            redirect('admin/login');
        }
        $admin_id = $this->session->userdata('admin_logged_in')['id'];
        $this->admin = $this->adminModel->getAdminById($admin_id);

        $data['title'] = $this->site_name.' | Petitioner';
        $data['active'] = 'fir';
        $data['admin'] = $this->admin;
        $data['petitioner'] = $this->adminModel->getPetitioner($id);
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/partials/navbar', $data);
        $this->load->view('admin/petitioner', $data);
        $this->load->view('admin/partials/bottom', $data);
    }

    public function getVictim($id = NULL){
        if(!$this->session->userdata('admin_logged_in')){
            redirect('admin/login');
        }
        $admin_id = $this->session->userdata('admin_logged_in')['id'];
        $this->admin = $this->adminModel->getAdminById($admin_id);

        $data['title'] = $this->site_name.' | Victim';
        $data['active'] = 'fir';
        $data['admin'] = $this->admin;
        $data['victim'] = $this->adminModel->getVictim($id);
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/partials/navbar', $data);
        $this->load->view('admin/victim', $data);
        $this->load->view('admin/partials/bottom', $data);
    }

    public function getAccuser($id = NULL){
        if(!$this->session->userdata('admin_logged_in')){
            redirect('admin/login');
        }
        $admin_id = $this->session->userdata('admin_logged_in')['id'];
        $this->admin = $this->adminModel->getAdminById($admin_id);

        $data['title'] = $this->site_name.' | Accuser';
        $data['active'] = 'fir';
        $data['admin'] = $this->admin;
        $data['accuser'] = $this->adminModel->getAccuser($id);
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/partials/navbar', $data);
        $this->load->view('admin/accuser', $data);
        $this->load->view('admin/partials/bottom', $data);
    }

    public function assignInvestigationOfficer(){
        $this->adminModel->assignInvestigationOfficer();
        redirect('admin/fir');
    }

    public function caseList(){
    	if(!$this->session->userdata('admin_logged_in')){
            redirect('admin/login');
        }
        $admin_id = $this->session->userdata('admin_logged_in')['id'];
        $this->admin = $this->adminModel->getAdminById($admin_id);

        $data['title'] = $this->site_name.' | Case List';
        $data['active'] = 'case';
        $data['admin'] = $this->admin;
        $data['cases'] = $this->adminModel->getCases();
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/partials/navbar', $data);
        $this->load->view('admin/case', $data);
        $this->load->view('admin/partials/bottom', $data);
    }

    //========================== end FIR =============================//

    public function getlogin($error = ''){
    	if($this->session->userdata('admin_logged_in')){
            redirect('admin');
        }
    	$data['title'] = $this->site_name.' | Admin Panel | Login';
    	$data['error'] = $error;
		$this->load->view('admin/login',$data);
    }

    public function postLogin(){
    	$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
        $result = $this->adminModel->checkAdminLogin($email, $password);
		if($result) {
                $data = array(
                    'id' => $result->id,
                    'name' => $result->name,
                    'email' => $result->email
                );
                $this->session->set_userdata('admin_logged_in', $data);
            redirect('admin');
		} else {
			$this->getlogin("Wrong email or password");
		}
    }

    public function logout(){
        $this->session->unset_userdata('admin_logged_in');
        return redirect('admin');
    }
    
}
	