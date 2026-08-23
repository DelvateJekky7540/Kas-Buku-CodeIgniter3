<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('login');
	}

    public function login() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user')->where('username', $username);
        $user = $this->db->get()->row();
        if($user == NULL) {
            $this->session->set_flashdata('alert', '<div class="text-danger">Username Tidak Ditemukan</div>');
            redirect('auth');
        } else if($user->password == $password) {
            $data = array(
                'username' => $user->username,
                'nama'     => $user->nama,
                'role'     => $user->role,
                'id'       => $user->id,
            );
            $this->session->set_userdata($data);
            redirect('home');
        } else {
            $this->session->set_flashdata('alert', '<div class="text-danger">Password Salah</div>');
            redirect('auth');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
