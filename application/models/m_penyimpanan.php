<?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
class M_penyimpanan extends CI_Model{

	public function __construct(){
	  parent::__construct();
	}

	public function simpan_data_penyimpanan($data){
   		$hasil=$this->db->insert('penyimpanan', $data); 
		return $hasil;
	}
	public function view_all($id)
	{
		$this->db->where('id_user', $id);
		$ret = $this->db->get('penyimpanan');
		return $ret->result();
	}

	
}