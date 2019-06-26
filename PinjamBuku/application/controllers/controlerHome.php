<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class controlerHome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('transaksiModal');
	}


	public function index(){
		$this->load->view('Home');
	}


	public function getData(){
		$response = $this->transaksiModal->getData()->result();
		


		$this	->output
				->set_status_header(202)
				->set_content_type('aplication/json')
				->set_output(json_encode($response, JSON_PRETTY_PRINT))
				->_display();
		exit;
	}

		public function tampilEdit($Tamp){
		$response = $this->transaksiModal->tampilEdit($Tamp)->row(); 
		$this->output
		->set_status_header(201)
		->set_output(json_encode($response, JSON_PRETTY_PRINT))
		->_display();
		exit;
	}


	public function cariData($CariD){
		$response = $this->transaksiModal->cariData($CariD)->result(); 		
		$this->output
		->set_status_header(201)
		->set_output(json_encode($response, JSON_PRETTY_PRINT))
		->_display();
		exit;
	}
	

}
