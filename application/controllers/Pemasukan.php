<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if($this->session->userdata('role')==NULL) {
			redirect('auth');
		}
    }

	public function index(){
        $username = $this->session->userdata('username');
        $role = $this->session->userdata('role');
        $this->db->from('transaksi');
        $this->db->where('jenis_transaksi', 'Pemasukan');
        if($role=='User') {
            $this->db->where('username', $username);
        }
       
        $this->db->order_by('tanggal', 'DESC');
        $pemasukan = $this->db->get()->result_array();
        $data = array(
            'pemasukan' => $pemasukan
        );
		$this->template->load('layout/template', 'pemasukan_index', array_merge($data));
	}

    public function simpan() {
        $data = array(
            'keterangan'        => $this->input->post('keterangan'),
            'nominal'           => $this->input->post('nominal'),
            'tanggal'           => $this->input->post('tanggal'),
            'username'          => $this->session->userdata('username'),
            'jenis_transaksi'   => 'Pemasukan'
        );
        $this->db->insert('transaksi', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Berhasil Menambahkan Pemasukan!</div>');
        redirect('pemasukan');
    }

    public function hapus($id) {
        $where = array('id_transaksi' => $id);
        $this->db->delete('transaksi', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Pemasukan Berhasil Dihapus</div>');
        redirect('pemasukan');
    }
}
