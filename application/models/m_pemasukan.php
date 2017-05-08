<?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
class M_pemasukan extends CI_Model{

	public function __construct(){
	  parent::__construct();
	}

	public function simpan_data_pemasukan($data){
   		$hasil=$this->db->insert('pemasukan', $data); 
		return $hasil;
	}
	public function view_all($id)
	{
		$this->db->where('id_user', $id);
		$ret = $this->db->get('pemasukan');
		return $ret->result();
	}

	public function view_nampen($id)
	{
		$this->db->where('id_user', $id);
		$ret = $this->db->get('penyimpanan');
		return $ret->result_array();
	}
}