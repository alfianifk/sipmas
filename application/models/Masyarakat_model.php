<?php

/**
 * BISMILLAHIRROHMANIRROHIM
 * Author   : alfianifk.my.id 
 * Nama App : sipmas (Sistem Pengaduan Masyarakat)
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat_model extends CI_Model {

    private $_table = "warga";
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result_array(); //ambil semua data
    }

    public function add()
    {
        //untuk register
        $username = $this->input->post('email');
        $user = (explode("@", $username)); //memecah email untuk membuat username
        
        $data = array(
            'nik' => htmlspecialchars($this->input->post('nik', true)),
            'username' => $user[0], //ambil array ke 0
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'telp' => htmlspecialchars($this->input->post('telp', true)),
            'image' => 'avatar.png',
            'email' => htmlspecialchars($this->input->post('email', true)),
        );

        return $this->db->insert($this->_table, $data, $user);
    }

    public function kategori()
    {
        //untuk form
        return $this->db->get('kategori')->result_array();
    }
}