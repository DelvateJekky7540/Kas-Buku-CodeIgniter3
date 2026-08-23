<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('Transaksi_model');
		$this->load->library('pdf');
        if($this->session->userdata('role')==NULL) {
			redirect('auth');
		}
    }

	public function index() {
		$this->template->load('layout/template', 'dashboard');
	}

	public function laporan() {
		$tanggal_awal = $this->input->get('tanggal_awal');
		$tanggal_akhir = $this->input->get('tanggal_akhir');
		$this->db->from('transaksi');
        $this->db->where("tanggal >=", $tanggal_awal);
        $this->db->where("tanggal <=", $tanggal_akhir);
        $this->db->order_by("tanggal", 'ASC');
		$laporan = $this->db->get()->result_array();
		$data = array(
			'tanggal_awal'	=> $tanggal_awal,
			'tanggal_akhir'	=> $tanggal_akhir,
			'laporan'	=> $laporan,
		);
		$this->load->view('laporan', $data);
	}
}
