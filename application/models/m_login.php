<?php if(!defined('BASEPATH')) exit('Keluar dari sistem');
class M_login extends CI_Model{

	public function __construct(){
	  parent::__construct();
	}

	function ceku($data){
		$data[2] = md5($data[2]);
        $datas = $this->db->query("SELECT * FROM user WHERE username='$data[1]' and password= '$data[2]' and `jenisuser` = 'user'");
        // return $datas->num_rows();

        if ($datas->num_rows() > 0)
        {
            $user = $datas->row();
 
            $session = array(
                'logged_in' => 1,
                'id_user' => $user->id_user,
                'namalengkap' => $user->namalengkap,
                'username' => $user->username,
                'password'=>$user->password,      
                'jenisuser'=>$user->jenisuser      
            );
            $this->session->set_userdata($session);

            return true;
        }
        else
        {
            $this->session->set_flashdata('notification', 'Username dan Password tidak cocok');
            return false;
        }
	}

    function ceka($data){
        $data[2] = md5($data[2]);
        $datas = $this->db->query("SELECT * FROM user WHERE username='$data[1]' and password= '$data[2]' and `jenisuser` = 'admin'");
        // return $datas->num_rows();

        if ($datas->num_rows() > 0)
        {
            $user = $datas->row();
 
            $session = array(
                'logged_in' => 1,
                'id_user' => $user->id_user,
                'namalengkap' => $user->namalengkap,
                'username' => $user->username,
                'password'=>$user->password,      
                'jenisuser'=>$user->jenisuser      
            );
            $this->session->set_userdata($session);

            return true;
        }
        else
        {
            $this->session->set_flashdata('notification', 'Username dan Password tidak cocok');
            return false;
        }
    }
}