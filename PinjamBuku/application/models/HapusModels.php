<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HapusModels extends CI_Model {


	function HapusData($Hapus){
		$this->db->delete('transaksi', array('idteransaksi' => $Hapus));
	}
}