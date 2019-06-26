<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JudulBukuCountroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('JudulBukuModel');
	
	}

	public function getData(){
		$response = $this->JudulBukuModel->getData()->result(); 
		$this->output
		->set_status_header(201) 
		->set_content_type('application/json') 
		->set_output(json_encode($response, JSON_PRETTY_PRINT))
		->_display();
		exit;
	}

		public function tampilPeng($IdBuku){
		$response = $this->JudulBukuModel->tampil($IdBuku)->row(); 
		$this->output
		->set_status_header(201)
		->set_output(json_encode($response, JSON_PRETTY_PRINT))
		->_display();
		exit;
	}

	

}