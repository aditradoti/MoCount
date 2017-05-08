<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	function __construct(){
      parent::__construct();

      $this->load->model('m_user');
      $this->load->helper('html');
      $this->load->library('table','pagination'); 
      //$this->auth->restrict();
    }

  public function index()
  {
    $this->load->model('m_user');

    $data['user'] = $this->m_user->view_user();
    $data['userbaru'] = $this->m_user->view_user_baru();
    $this->load->view('berandaadmin', $data);
  }

}
