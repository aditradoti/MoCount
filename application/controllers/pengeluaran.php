<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengeluaran extends CI_Controller {
	function __construct(){
      parent::__construct();

      $this->load->model('m_pengeluaran');
      $this->load->helper('html');
      $this->load->library('table','pagination'); 
      //$this->auth->restrict();
    }
	public function tambah_pengeluaran()
	{
		$this->load->view('tambahpengeluaran');
	}
	public function simpan_pengeluaran()
	{
		if(isset($_POST['submit'])){
			$data = array(
          'id_pengeluaran'     => $this->input->post('id_pengeluaran'),
          'id_user'     => $this->input->post('id_user'),
          'nominal'   => $this->input->post('nominal'),    
          'kategori'   => $this->input->post('kategori'),                                  
           'tanggal'       => $this->input->post('tanggal'),                                          
           'namapenyimpanan'         => $this->input->post('namapenyimpanan'),   
           'catatan'        => $this->input->post('catatan')
           );

            $hasil=$this->m_pengeluaran->simpan_data_pengeluaran($data);
            echo "<script> alert('Penambahan data pengeluaran berhasil !');location='".base_url()."user'</script>";
		}else{
			echo  "<script> alert('data gagal Disimpan');location='".base_url()."pengeluaran/tambah_pengeluaran'</script>";
      }
	}
}
