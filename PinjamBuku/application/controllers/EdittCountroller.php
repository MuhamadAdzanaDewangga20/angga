<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EdittCountroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('EditModels');
	}

		public function Ubah(){

		$response = $this->EditModels->ubahData();

		$this->output
					->set_status_header(201)
					->set_content_type('aplication/json')
					->set_output(json_encode($response, JSON_PRETTY_PRINT))
					->_display();
		exit;

	}

}
