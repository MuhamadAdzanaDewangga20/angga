<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class transaksiModal extends CI_Model {

	public function getData()
	{
		return $this->db->query("select * from TampilData order by idteransaksi asc");

	}

	function tampilEdit($Tamp){
		return $this->db->where("idteransaksi",$Tamp)->get('transaksi');
	}

	function cariData($CariD){
		if ($CariD =='0')  {
			return $this->db->query("select * from TampilData order by idteransaksi asc");

		}else{
		 return $this->db->or_like('judulbuku',$CariD)
		 					->or_like('namapengarang',$CariD)
							->get("TampilData");
		}
	}
	

}