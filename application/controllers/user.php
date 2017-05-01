<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	function __construct(){
      parent::__construct();

      $this->load->model('m_user');
      $this->load->helper('html');
      $this->load->library('table','pagination'); 
      //$this->auth->restrict();
    }
	public function tambah_user()
	{
		$this->load->view('register');
	}
	public function simpan_user()
	{
		if(isset($_POST['submit'])){
			$data = array(
          'id_user'     => $this->input->post('id_user'),
          'namalengkap'     => $this->input->post('namalengkap'),
          'username'   => $this->input->post('username'),                                              
           'password'         => md5($this->input->post('password'))
           );

            $hasil=$this->m_user->simpan_data_user($data);
            echo "<script> alert('Proses mendaftar telah berhasil');location='".base_url()."login'</script>";
		}else{
			echo  "<script> alert('data gagal Disimpan');location='".base_url()."user/tambah_user'</script>";
      }
	}

  public function index()
  {
    $this->load->model('m_pemasukan');
    $this->load->model('m_pengeluaran');
    $this->load->model('m_keinginan');
    $id = $this->session->userdata('id_user');

    $data['pemasukan'] = $this->m_pemasukan->view_all($id);
    $data['pengeluaran'] = $this->m_pengeluaran->view_all($id);
    $data['keinginan'] = $this->m_keinginan->view_all($id);
    $this->load->view('beranda', $data);
  }
}
