<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemasukan extends CI_Controller {
	function __construct(){
      parent::__construct();

      $this->load->model('m_pemasukan');
      $this->load->helper('html');
      $this->load->library('table','pagination'); 
      //$this->auth->restrict();
    }
	public function tambah_pemasukan()
	{
    $data['nampen'] = $this->m_pemasukan->view_nampen(($this->session->userdata('id_user')));
		$this->load->view('tambahpemasukan',$data);
	}
	public function simpan_pemasukan()
	{
		if(isset($_POST['submit'])){
			$data = array(
          'id_pemasukan'     => $this->input->post('id_pemasukan'),
          'id_user'     => $this->input->post('id_user'),
          'nominal'   => $this->input->post('nominal'),    
          'kategori'   => $this->input->post('kategori'),                                  
           'tanggal'       => $this->input->post('tanggal'),                                          
           'namapenyimpanan'         => $this->input->post('namapenyimpanan'),   
           'catatan'        => $this->input->post('catatan')
           );

            $hasil=$this->m_pemasukan->simpan_data_pemasukan($data);
            echo "<script> alert('Penambahan data pemasukan berhasil !');location='".base_url()."user'</script>";
		}else{
			echo  "<script> alert('data gagal Disimpan');location='".base_url()."pemasukan/tambah_pemasukan'</script>";
      }
	}

}
