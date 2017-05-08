<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}

    public function login_admin()
    {
        $this->load->view('loginadmin');
    }

	public function cek_login(){

		$data = array("user",
        $this->input->post('username'),
        $this->input->post('password'));
        
        $this->load->model('m_login');
        $record = $this->m_login->ceku($data);
        
        if($record==0){
            $this->index();
        }else{
            $this->session->set_userdata(array('username'=>$data[1]));
            redirect('user');
        }
	}

    public function cek_logina(){

        $data = array("user",
        $this->input->post('username'),
        $this->input->post('password'));
        
        $this->load->model('m_login');
        $record = $this->m_login->ceka($data);
        
        if($record==0){
            $this->index();
        }else{
            $this->session->set_userdata(array('username'=>$data[1]));
            redirect('admin');
        }
    }

	function logout(){
        $this->session->sess_destroy();;
        redirect('login');
    }
}
