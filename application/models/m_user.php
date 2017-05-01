<?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
class M_user extends CI_Model{

	public function __construct(){
	  parent::__construct();
	}

	public function simpan_data_user($data){
   		$hasil=$this->db->insert('user', $data); 
		return $hasil;
	}
}