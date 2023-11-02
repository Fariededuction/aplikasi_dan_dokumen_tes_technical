<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
 public	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('Login');
            redirect($url);
		};
	
		$this->load->model('Produk_model');
	
	}


	public function index()
	{
		$data['totalbarang']=$this->Produk_model->count_all();
		$this->load->view('View_dashboard',$data);
	}

	


}
