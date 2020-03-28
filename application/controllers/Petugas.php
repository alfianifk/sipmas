<?php

/**
 * BISMILLAHIRROHMANIRROHIM
 * Author   : alfianifk.my.id 
 * Nama App : sipmas (Sistem Pengaduan Masyarakat)
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Pengaduan_model');
    }

    public function index()
    { //cek ROLE if FALSE redirect error
        if ($this->session->userdata('role') != 'petugas') {
            $this->load->view('error');
        } else {
            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataPetugasRow();
            $data['proses'] = $this->Pengaduan_model->joinKategoriPengaduanProses();
            $data['selesai'] = $this->Pengaduan_model->joinKategoriPengaduanSelesai();
            $data['pengaduan'] = $this->Pengaduan_model->joinKategoriPengaduan();

            $data['title'] = "Petugas";
            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('petugas/index', $data);
            $this->load->view('_partials/footer');
        }
    }

    public function pengaduanTag() //semua pengaduan berdasarkan kategori
    {
        if ($this->session->userdata('role') != 'petugas') {
            $this->load->view('error');
        } else {
            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataPetugasRow();
            $data['join'] = $this->Pengaduan_model->joinKategoriPengaduan();

            $data['title'] = "Pengaduan Petugas";
            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('petugas/pengaduan_tag', $data);
            $this->load->view('_partials/footer');
        }
    }

    public function selesaiTag() //pengaduan yang sudah selesai berdasarkan kategori
    {
        if ($this->session->userdata('role') != 'petugas') {
            $this->load->view('error');
        } else {
            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataPetugasRow();
            $data['selesai'] = $this->Pengaduan_model->joinKategoriPengaduanSelesai();

            $data['title'] = "Pengaduan Petugas";
            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('petugas/selesai_tag', $data);
            $this->load->view('_partials/footer');
        }
    }

    public function prosesTag() //pengaduan yang masih diproses berdasarkan kategori
    {
        if ($this->session->userdata('role') != 'petugas') {
            $this->load->view('error');
        } else {
            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataPetugasRow();
            $data['proses'] = $this->Pengaduan_model->joinKategoriPengaduanProses();

            $data['title'] = "Pengaduan Petugas";
            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('petugas/proses_tag', $data);
            $this->load->view('_partials/footer');
        }
    }

    public function masyarakat()
    {
        if ($this->session->userdata('role') != 'petugas') {
            $this->load->view('error');
        } else {
            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataPetugasRow();

            $data['masyarakat'] = $this->db->get('warga')->result_array();

            $data['title'] = "Data Masyarakat";
            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('petugas/masyarakat', $data);
            $this->load->view('_partials/footer');
        }
    }
}
