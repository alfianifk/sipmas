<?php

/**
 * BISMILLAHIRROHMANIRROHIM
 * Author   : alfianifk.my.id 
 * Nama App : sipmas (Sistem Pengaduan Masyarakat)
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Tanggapan_model extends CI_Model {
    private $_tabel = "tanggapan";

    public function addTanggapan()
    {
        $user = $this->petugas();
        $pengaduan = $this->pengaduan();
        $data = [
            'id_petugas' => $user['id_petugas'],
            'id_pengaduan' => $pengaduan['id_pengaduan'],
            'tanggapan' => $this->input->post('tanggapan'),
        ];

        return $this->db->insert($this->_tabel, $data, $user, $pengaduan);
    }


    public function petugas()
    {
        return $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
    }


    public function pengaduan()
    {
        return $this->db->get_where('pengaduan', ['id_pengaduan' => $this->session->userdata('id_pengaduan')])->row_array();
    }

    public function setujui($id_pengaduan)
    {
        $data = array(
            'proses' => 1,
            'update_at' => time()
        );

        $this->db->where('id_pengaduan', $id_pengaduan);
        $this->db->update($this->_tabel, $data);
    }
}