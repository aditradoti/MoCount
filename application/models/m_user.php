<?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
class M_user extends CI_Model{

	public function __construct(){
	  parent::__construct();
	}

	public function simpan_data_user($data){
   		$hasil=$this->db->insert('user', $data); 
		return $hasil;
	}

	public function view_user_baru()
	{
		$this->db->where('jenisuser', '0');
		$ret = $this->db->get('user');
		return $ret->result();
	}

	public function view_user()
	{
		$ret = $this->db->get('user');
		return $ret->result();
	}

	public function hapus_data_user($id_user)
	{
	  $this->db->where('id_user', $id_user);
	  $hasil=$this->db->delete('user');
	  return $hasil;

	}

	public function terima($id_user)
	{
		$this->db->where('id_user',$id_user);
   		$hasil=$this->db->update('user',array('jenisuser'=>'user') ); 
		
	}
}