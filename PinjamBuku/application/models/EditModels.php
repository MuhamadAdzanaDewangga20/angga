<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EditModels extends CI_Model {
	var	$tabel = "transaksi"; 

	function ubahData()
	{	
		$data= array(
			'IdTeransaksi'=> $this->input->post('NoTransaksiUba', true), 
			'IdBuku'=> $this->input->post('JudulBukuUbah', true), 
			'TglTransaksi'=> $this->input->post('TanggalPinjam', true), 
			'LamaPinjam'=> $this->input->post('LamaPinjamUbah', true),
			'Status'=> $this->input->post('StatusUbah', true),
			);
		$id = $this->input->post('NoTransaksiUba');

		$this->db->where('IdTeransaksi',$id);
		$this->db->update($this->tabel, $data);

	}


}