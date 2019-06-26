<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JudulBukuModel extends CI_Model {
	var $table = "getdata";

	function getData(){
		return $this->db->get($this->table);

	}

	function tampil($IdBuku){
		return $this->db->where("idbuku",$IdBuku)->get($this->table);
	}

	
}
