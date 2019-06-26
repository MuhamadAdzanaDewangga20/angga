<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahData extends CI_Model {
	var	$tabel = "transaksi"; 

	function Tambah($inData)
	{	
		$val= array(
			'IdTeransaksi'=> $inData['NoTransaksi'], 
			'IdBuku'=> $inData['JudulBuku'], 
			'TglTransaksi'=>date("Y/m/d"), 
			'LamaPinjam'=>$inData['LamaPinjam'],
			'Status'=>$inData['Status'],
			);
		$this->db->insert($this->tabel, $val);

	}

	function NoOto(){
		return  $this->db->get("no");
	}
}

