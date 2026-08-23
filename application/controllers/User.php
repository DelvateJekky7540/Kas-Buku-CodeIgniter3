<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');

        if($this->session->userdata('role')!='Admin') {
			redirect('home');
		}
    }

    public function index() {
        $this->db->select('*')->from('user');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();
        $data = array('user' => $user);
        $this->template->load('layout/template', 'user_index', $data);
        // $this->load->view('user_index', $data);
    }

    public function tambah() {
        $this->template->load('layout/template', 'user_tambah');
    }

    public function simpan() {
        $username = $this->input->post('username');
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->result_array();
        if($cek<>NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Username Sudah Digunakan!</div>');
            redirect('user');
        }

        $this->User_model->simpan();
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Berhasil!</div>');
        redirect('user');
    }

    public function edit($id) {
        $this->db->select('*')->from('user');
        $this->db->where('id', $id);
        $user = $this->db->get()->result_array();
        $data = array('user' => $user);
        $this->template->load('layout/template', 'user_edit', $data);
    }

    public function update() {
        $this->User_model->update();
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">User Berhasil Diperbaharui!</div>');
        redirect('user');
    }

    public function hapus($id) {
        $where = array('id' => $id);
        $this->db->delete('user', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">User Berhasil Dihapus</div>');
        redirect('user');
    }
}