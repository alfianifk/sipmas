<?php

/**
 * BISMILLAHIRROHMANIRROHIM
 * Author   : alfianifk.my.id 
 * Nama App : sipmas (Sistem Pengaduan Masyarakat)
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    private $_table = "admin";

    public function addAdmin()
    {
        //untuk register
        $username = $this->input->post('email');
        $user = (explode("@", $username)); //memecah email untuk membuat username

        $data = array(
            'nama_admin' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'username' => $user[0], //ambil array ke 0
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'image' => 'avatar.png',
            'telp' => htmlspecialchars($this->input->post('telp', true))
        );

        return $this->db->insert($this->_table, $data, $user);
    }
}
