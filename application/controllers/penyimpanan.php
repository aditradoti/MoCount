<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penyimpanan extends CI_Controller {
	function __construct(){
      parent::__construct();

      $this->load->model('m_penyimpanan');
      $this->load->helper('html');
      $this->load->library('table','pagination'); 
      //$this->auth->restrict();
    }
	public function tambah_penyimpanan()
	{
		$this->load->view('tambahpenyimpanan');
	}
	public function simpan_penyimpanan()
	{
		if(isset($_POST['submit'])){
			$data = array(
          'id_penyimpanan'     => $this->input->post('id_penyimpanan'),
          'id_user'   => $this->input->post('id_user'),                                           
           'namapenyimpanan'         => $this->input->post('namapenyimpanan')
           );

            $hasil=$this->m_penyimpanan->simpan_data_penyimpanan($data);
            echo "<script> alert('Penambahan jenis penyimpanan berhasil !');location='".base_url()."user'</script>";
		}else{
			echo  "<script> alert('data gagal Disimpan');location='".base_url()."penyimpanan/tambah_penyimpanan'</script>";
      }
	}
}
