<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {

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
        $this->db->where('jenis_transaksi', 'Pengeluaran');
        if($role=='User') {
            $this->db->where('username', $username);
        }
       
        $this->db->order_by('tanggal', 'DESC');
        $pengeluaran = $this->db->get()->result_array();
        $data = array(
            'pengeluaran' => $pengeluaran
        );
		$this->template->load('layout/template', 'pengeluaran_index', array_merge($data));
	}

    public function simpan() {
        $data = array(
            'keterangan'        => $this->input->post('keterangan'),
            'nominal'           => $this->input->post('nominal'),
            'tanggal'           => $this->input->post('tanggal'),
            'username'          => $this->session->userdata('username'),
            'jenis_transaksi'   => 'Pengeluaran'
        );
        $this->db->insert('transaksi', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Berhasil Menambahkan Pengeluaran!</div>');
        redirect('pengeluaran');
    }

    public function hapus($id) {
        $where = array('id_transaksi' => $id);
        $this->db->delete('transaksi', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Pengeluaran Berhasil Dihapus</div>');
        redirect('pengeluaran');
    }
}
