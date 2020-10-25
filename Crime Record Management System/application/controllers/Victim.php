<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Victim extends CI_Controller 
{
	public $site_name = "Crime Research & Management System";
    public $victim = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('VictimModel', 'victimtModel');

        date_default_timezone_set('Asia/Dhaka');
    }

    public function index(){
        $data['title'] = $this->site_name.' | Home';

        $this->load->view('victim/partials/head',$data);
        $this->load->view('victim/partials/navbar',$data);
        $this->load->view('victim/home',$data);
        $this->load->view('victim/partials/bottom',$data);
    }

    //============================ FIR ==============================//
    public function createFirForm($error = NULL)
    {
        $data['title'] = $this->site_name.' | Signup';
        $data['error'] = $error;
        $this->load->view('victim/fir_form',$data);
    }
    public function submitFir(){
        // image upload if exists
        $filename = $_FILES['accused_photo']['name'];
        if(strlen($filename) > 4){
            $photo = $this->_imageUpload();
        }else{
            $photo = NULL;
        }
        
        $victim_id = $this->victimtModel->createVictim();
        $petitioner_id = $this->victimtModel->createPetitioner();
        $acuser_id = $this->victimtModel->createAcuser($photo);
        $this->victimtModel->createFir($victim_id, $petitioner_id, $acuser_id);

        redirect('/');
    }

    private function _imageUpload(){

        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = '*';
          
        $filename = $_FILES['accused_photo']['name'];
		$extension = pathinfo($filename, PATHINFO_EXTENSION);

        $new_name = time().'.'.$extension;
		$config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload('accused_photo')) {
            $error = array('error' => $this->upload->display_errors());
            return NULL;
        } else {
        	return $new_name;
        }
    }
    //=========================== end FIR ============================//
    
   

}
