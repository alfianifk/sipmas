<?php

/**
 * BISMILLAHIRROHMANIRROHIM
 * Author   : alfianifk.my.id 
 * Nama App : sipmas (Sistem Pengaduan Masyarakat)
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan_model extends CI_Model {

    private $_table = "pengaduan";

    public function addPengaduan()
    {
       $user = $this->warga();
        
        $data = [
            'tgl_pengaduan' => time(),
            'nik' => $user['nik'],
            'nama' => $user['nama'],
            'id_kategori' => $this->input->post('kategori'),
            'judul_pengaduan' => $this->input->post('judul'),
            'isi_pengaduan' => $this->input->post('isi'),
            'foto' => $this->_uploadImg() //memanggil method uploadImg
        ];

        return $this->db->insert($this->_table, $data, $user);
    }

    public function warga()
    {
        return $this->db->get_where('warga', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function kategoriPetugas()
    {
        return $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function joinKategoriPengaduan()
    {
        $petugas = $this->kategoriPetugas();
        $id = $petugas['id_kategori'];
        $query = "SELECT `pengaduan`.*, `kategori` 
                FROM `pengaduan` JOIN `kategori` 
                ON `pengaduan`.`id_kategori` = `kategori`.`id_kategori`
                WHERE `pengaduan`.`id_kategori` = $id AND `status` LIKE 'p%'; 
                ";
        return $this->db->query($query)->result_array();

    }

    public function joinKategoriPengaduanForAdm()
    {
        //tampilkan semua pengaduan yang statusnya pending or proses
        $query = "SELECT `pengaduan`.*, `kategori` 
                FROM `pengaduan` JOIN `kategori` 
                ON `pengaduan`.`id_kategori` = `kategori`.`id_kategori`
                WHERE `status` LIKE 'p%'
                ";
        return $this->db->query($query)->result_array();
    }

    public function joinKategoriPengaduanOnly()
    {
        //tampilkan semua pengaduan yang statusnya pending or proses
        $query = "SELECT `pengaduan`.*, `kategori` 
                FROM `pengaduan` JOIN `kategori` 
                ON `pengaduan`.`id_kategori` = `kategori`.`id_kategori`
                ";
        return $this->db->query($query)->result_array();
    }

    public function joinKategoriPengaduanProses()
    {
        $petugas = $this->kategoriPetugas();
        $id = $petugas['id_kategori'];
        $query = "SELECT `pengaduan`.*, `kategori` 
                FROM `pengaduan` JOIN `kategori` 
                ON `pengaduan`.`id_kategori` = `kategori`.`id_kategori`
                WHERE `status` LIKE 'p%' AND `pengaduan`.`id_kategori` = $id;
                ";
        return $this->db->query($query)->result_array();

    }

    public function joinKategoriPengaduanSelesai() //join kategori - pengaduan yang statusnya selesai
    {
        $petugas = $this->kategoriPetugas();
        $id = $petugas['id_kategori'];
        $query = "SELECT `pengaduan`.*, `kategori` 
                FROM `pengaduan` JOIN `kategori` 
                ON `pengaduan`.`id_kategori` = `kategori`.`id_kategori`
                WHERE `status` LIKE 'selesai' AND `pengaduan`.`id_kategori` = $id;
                ";
        return $this->db->query($query)->result_array();
    }

    public function viewPengaduan() //for masyrakatat
    {
        $user = $this->warga();
        $nik = $user['nik'];
        $query = "SELECT `pengaduan`.*, `kategori`
                FROM `pengaduan` JOIN `kategori`
                ON `pengaduan`.`id_kategori` = `kategori`.`id_kategori`
                WHERE `nik` = $nik
        ";
        return $this->db->query($query)->result_array();
        // $this->db->select('*');
        // $this->db->from($this->_table);
        // $this->db->like('nik', $user['nik']);
        // return $this->db->get()->result_array();
    }
    public function viewPengaduanAll() //for admin
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        return $this->db->get()->result_array();
    }

    public function pendingPengaduan() //for masyrakat
    {
       $user = $this->warga();
        
            $this->db->select('*');
            $this->db->from($this->_table);
            $this->db->like('nik', $user['nik']); //tampilkan berdasarkan NIK yang input data
            $this->db->like('status', 'pending'); //untuk PENDING
            return $this->db->get()->result_array();

        // Produces SQL:
        // SELECT * FROM Books WHERE status LIKE '%pending%';

    }

    public function prosesPengaduan() //for masyarakat
    {
       $user = $this->warga();
       $nik = $user['nik'];

        $query = "SELECT `pengaduan`.*, `kategori`
                FROM `pengaduan` JOIN `kategori`
                ON `pengaduan`.`id_kategori` = `kategori`.`id_kategori`
                WHERE `status` LIKE 'proses' AND `nik` = $nik;
        ";
        return $this->db->query($query)->result_array();
        // $this->db->select('*');
        // $this->db->from($this->_table);
        // $this->db->like('nik', $user['nik']);
        // $this->db->like('status', 'proses'); //untuk PROSES
        // return $this->db->get()->result_array();
    }

    public function prosesPengaduanAll() //TAMPILKAN SEMUA PENGADUAN YANG MASIH DI PROSES for admin
    {
        $query = "SELECT `pengaduan`.*, `kategori` 
                FROM `pengaduan` JOIN `kategori` 
                ON `pengaduan`.`id_kategori` = `kategori`.`id_kategori`
                WHERE `status` LIKE 'p%'
                ";
        return $this->db->query($query)->result_array();

    }

    public function selesaiPengaduan()
    {
       $user = $this->warga();

        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->like('nik', $user['nik']);
        $this->db->like('status', 'selesai'); //untuk SELESAI
        return $this->db->get()->result_array(); 
    }

    public function selesaiPengaduanAll() //for admin
    {
        $query = "SELECT `pengaduan`.*, `kategori` 
                FROM `pengaduan` JOIN `kategori` 
                ON `pengaduan`.`id_kategori` = `kategori`.`id_kategori`
                WHERE `status` LIKE 'selesai'
                ";
        return $this->db->query($query)->result_array();
    }

    private function _uploadImg()
    {
        $imgUpload = $_FILES['gambar']['name'];

        if ($imgUpload) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
            $config['upload_path'] = './assets/img/pengaduan/';
            $config['file_name'] = uniqid();
            $config['overwrite'] = true;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar'))
            {
                return $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }

    } 

    //TANGGAPAN get_pengaduan()
    public function get_pengaduan($id_pengaduan)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('id_pengaduan', $id_pengaduan);
        return $this->db->get()->row_array();
    }

}