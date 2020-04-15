<?php

/**
 * BISMILLAHIRROHMANIRROHIM
 * Author   : alfianifk.my.id 
 * Nama App : sipmas (Sistem Pengaduan Masyarakat)
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
   public function __construct()
   {
    parent::__construct();
    $this->load->model('Users_model');
    $this->load->model('Pengaduan_model');
    
   }
    public function index()
    {
        if($this->session->userdata('role') != 'admin')
        {
            $this->load->view('error');
        } else {
            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataAdmin();
            $data['petugas'] = $this->Users_model->dataPetugasResult();
            $data['pengaduan'] = $this->Pengaduan_model->viewPengaduanAll();
            $data['selesai'] = $this->Pengaduan_model->selesaiPengaduanAll();
            $data['proses'] = $this->Pengaduan_model->prosesPengaduanAll();
            $data['join'] = $this->Pengaduan_model->joinKategoriPengaduanForAdm();

            $data['title'] = "Administrator";
            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('administrator/index', $data);
            $this->load->view('_partials/footer');
        }
        
    }

    public function profile()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->load->view('error');
        } else {
        $data['title'] = "Profile";
        $data['users'] = $this->Users_model->dataUsers();
        $data['user'] = $this->Users_model->dataAdmin();
        
        $this->load->view('_partials/head', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('administrator/profile', $data);
        $this->load->view('_partials/footer');
        }
    }

    public function kategori()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->load->view('error');
        }else{
        $data['users'] = $this->Users_model->dataUsers();
        $data['user'] = $this->Users_model->dataAdmin();

        // //Tampilkan data kategori * dan data petugas.nama_petugas
        $this->db->select('kategori.*, petugas.nama_petugas');
        $this->db->from('petugas');
        $this->db->join('kategori', 'kategori.id_kategori = petugas.id_kategori');
        $data['kategori'] = $this->db->get()->result_array();

        $data['title'] = "Kategori";
        $this->load->view('_partials/head', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('administrator/kategori', $data);
        $this->load->view('_partials/footer');
        }
    }

    public function petugas()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->load->view('error');
        } else {
        $data['users'] = $this->Users_model->dataUsers();
        $data['user'] = $this->Users_model->dataAdmin();
        $data['petugas'] = $this->Users_model->dataPetugasResult();
        $data['kategori'] = $this->Users_model->joinKategoriPetugas();

        $data['title'] = "Data Petugas";
        $this->load->view('_partials/head', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('administrator/petugas', $data);
        $this->load->view('_partials/footer');
        }
    }

    public function masyarakat()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->load->view('error');
        } else {
        $data['users'] = $this->Users_model->dataUsers();
        $data['user'] = $this->Users_model->dataAdmin();
        
        $data['masyarakat'] = $this->db->get('warga')->result_array();

        $data['title'] = "Data Masyarakat";
        $this->load->view('_partials/head', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('administrator/masyarakat', $data);
        $this->load->view('_partials/footer');
        }
    }

    public function admin()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->load->view('error');
        } else {
            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataAdmin();
            $data['admin'] = $this->Users_model->adminAll();

            $data['title'] = "Data Admin";
            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('administrator/admin', $data);
            $this->load->view('_partials/footer');
        }
    }

    public function proses()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->load->view('error');
        } else {
            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataAdmin();
            $data['prosesPengaduan'] = $this->Pengaduan_model->prosesPengaduanAll();

            $data['title'] = "Data Pengaduan Proses";
            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('administrator/proses_pengaduan', $data);
            $this->load->view('_partials/footer');
        }
    }

    public function selesai()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->load->view('error');
        } else {
            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataAdmin();
            $data['selesaiPengaduan'] = $this->Pengaduan_model->selesaiPengaduanAll();
            // $data['join'] = $this->Pengaduan_model->joinKategoriPengaduanProses();

            $data['title'] = "Data Pengaduan Proses";
            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('administrator/selesai', $data);
            $this->load->view('_partials/footer');
        }
    }

    public function pengaduan()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->load->view('error');
        } else {
            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataAdmin();
            $data['pengaduan'] = $this->Pengaduan_model->viewPengaduanAll();
            $data['join'] = $this->Pengaduan_model->joinKategoriPengaduanOnly();

            $data['title'] = "Data Pengaduan";
            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('administrator/pengaduan', $data);
            $this->load->view('_partials/footer');
        }
    }
    
}