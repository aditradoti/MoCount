<?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
class M_keinginan extends CI_Model{

	public function __construct(){
	  parent::__construct();
	}

	public function simpan_data_keinginan($data){
   		$hasil=$this->db->insert('keinginan', $data); 
		return $hasil;
	}

	public function view_all($id)
	{
		$this->db->where('id_user', $id);
		$ret = $this->db->get('keinginan');
		return $ret->result();
	}
}