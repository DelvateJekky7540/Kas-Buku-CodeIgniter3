<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function simpan() {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'nama' => $this->input->post('nama'),
            'role' => $this->input->post('role')
        );

        $this->db->insert('user',$data);
    }

    public function update() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'role' => $this->input->post('role')
        );
        
        $where = array(
            'id' => $this->input->post('id')
        );
        
        $this->db->update('user', $data, $where);
    }
}
