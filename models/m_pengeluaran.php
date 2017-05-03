<?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
class M_pengeluaran extends CI_Model{

	public function __construct(){
	  parent::__construct();
	}

	public function simpan_data_pengeluaran($data){
   		$hasil=$this->db->insert('pengeluaran', $data); 
		return $hasil;
	}

	public function view_all($id)
	{
		$this->db->where('id_user', $id);
		$ret = $this->db->get('pengeluaran');
		return $ret->result();
	}
}