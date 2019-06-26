<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahDataCountroller extends CI_Controller {

	public function __construct(){ 
		parent::__construct();
		$this->load->model('TambahData');
	
	}

	public function TambahData(){
		parse_str(file_get_contents('php://input'), $inData);
		$this->TambahData->Tambah($inData);

		$response = array('info' => 'Data sudah Tersimpan' );

		$this->output
					->set_status_header(201)
					->set_content_type('aplication/json')
					->set_output(json_encode($response, JSON_PRETTY_PRINT))
					->_display();
		exit;


	}

	public function NoOto(){
		$response = $this->TambahData->NoOto()->row();
		


		$this	->output
				->set_status_header(202)
				->set_content_type('aplication/json')
				->set_output(json_encode($response, JSON_PRETTY_PRINT))
				->_display();
		exit;
	}



}