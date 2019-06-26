<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HapusControler extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('HapusModels');
	
	}
		public function HapusData($Hapus){
		$response = $this->HapusModels->HapusData($Hapus); 
		$this->output
		->set_status_header(201)
		->set_output(json_encode($response, JSON_PRETTY_PRINT))
		->_display();
		exit;
	}

	

}