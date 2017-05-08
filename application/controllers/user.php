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
           'password'         => md5($this->input->post('password')),
           'jenisuser'         => '0'
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

  public function home(){
    $this->index();
  }

  // untuk hapus
    function konfirm_hapus($id_user)
  {
    echo "<script>

    var txt;
    var r = confirm('Tekan OK untuk menghapus !');
    if (r == true) {
        window.location.href = '".base_url()."user/hapus_user/".$id_user."';

    } else {
      window.location.href = '".base_url()."user/tampil_semua';
    }
    
</script>";
    //$data_user['datauser']=$this->m_user->konfirm_hapus($id_user);
    //$this->load->view('konfirmhapususer',$data_user);
  }
  function hapus_user($id_user)
  {
    $hasil=$this->m_user->hapus_data_user($id_user);
     if ($hasil){
    echo "<script> alert('data berhasil Dihapus');location='".base_url()."admin'</script>";
   }else{
    echo  "<script> alert('data gagal Dihapus');location='".base_url()."admin'</script>";
   }
    redirect('admin');
  }

  function terima_user($id_user){
  $this->m_user->terima($id_user); 
  redirect('admin');
  }
}
