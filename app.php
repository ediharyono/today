<?php 
//APLIKASI INDUKAN
defined('BASEPATH') OR exit('No direct script access allowed');
class App extends CI_Controller {

public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('apps_homepage/apps_homepage_model_datatable','sk');
	}

public function aplikasi($aplikasi)

	{
	    $x_app = "siakad";
	//
		$db=$this->load->database('classroo_simakol');
        $cek = $this->db->query("SELECT * FROM apps_homepage WHERE x_app='".$x_app."' AND apps_group='".$aplikasi."'")->num_rows();
        if ($cek<=0) {
				redirect('error');	 
		}else {
	//
		$this->session->set_userdata('judul_aplikasi','');
		$this->session->set_userdata('induk_aplikasi',$aplikasi);
	//
		$data['center']='landing/surat_masuk_view_landing';			
		$this->load->view('dashboard/v_dashboard_uii',$data);
	//
		
	
	}
	}
	
		
}
