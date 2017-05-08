<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keinginan extends CI_Controller {
	function __construct(){
      parent::__construct();

      $this->load->model('m_keinginan');
      $this->load->helper('html');
      $this->load->library('table','pagination'); 
      //$this->auth->restrict();
    }
	public function tambah_keinginan()
	{
		$this->load->view('tambahkeinginan');
	}
	public function simpan_keinginan()
	{
		if(isset($_POST['submit'])){
			$data = array(
          'id_keinginan'     => $this->input->post('id_keinginan'), 
          'id_user'     => $this->input->post('id_user'), 
          'nominal'   => $this->input->post('nominal'),                                              
           'namapenyimpanan'         => $this->input->post('namapenyimpanan'),   
           'cicilan'        => $this->input->post('cicilan'),
           'saran'        => $this->input->post('saran')
           );

            $hasil=$this->m_keinginan->simpan_data_keinginan($data);
            echo "<script> alert('Penambahan data keinginan berhasil !');location='".base_url()."user'</script>";
		}else{
			echo  "<script> alert('data gagal Disimpan');location='".base_url()."keinginan/tambah_keinginan'</script>";
      }
	}
  public function showSaran($q, $nominal){
    $pembagi = 0;
    switch($q){
      case "Mingguan":
        $pembagi = 7;
        break;
      case "Bulanan":
        $pembagi = 30;
        break;
      case "Tahunan":
        $pembagi = 364;
        break;
    }
    echo "
          <label>Saran :</label>
          <textarea class='form-control' name='saran'>"; 
    echo "Menabung ".($nominal/$pembagi)."/hari </textarea>";
  }
}
