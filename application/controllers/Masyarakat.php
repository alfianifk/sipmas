<?php

/**
 * BISMILLAHIRROHMANIRROHIM
 * Author   : alfianifk.my.id 
 * Nama App : sipmas (Sistem Pengaduan Masyarakat)
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Masyarakat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Masyarakat_model');
        $this->load->model('Pengaduan_model');
    }
    public function index()
    {
        if ($this->session->userdata('role') != 'masyarakat') {
            $this->load->view('error');
        } else {
            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataMasyarakatRow();
            $data['kategori'] = $this->Users_model->joinKategoriPetugas();
            $data['pending'] = $this->Pengaduan_model->pendingPengaduan();
            $data['proses'] = $this->Pengaduan_model->prosesPengaduan();
            $data['selesai'] = $this->Pengaduan_model->selesaiPengaduan();
            $data['pengaduan'] = $this->Pengaduan_model->viewPengaduan();


            $data['title'] = "Pengaduan";
            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('masyarakat/index', $data);
            $this->load->view('_partials/footer');
        }
    }

    public function profile()
    {
        if ($this->session->userdata('role') != 'masyarakat') {
            $this->load->view('error');
        } else {
        $data['users'] = $this->Users_model->dataUsers();
        $data['user'] = $this->Users_model->dataMasyarakatRow();


        $data['title'] = "Pengaduan";
        $this->load->view('_partials/head', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('masyarakat/profile', $data);
        $this->load->view('_partials/footer');
        }
    }

    public function pengaduan()
    {
        if ($this->session->userdata('role') != 'masyarakat') 
        {
            $this->load->view('error');
        }

        $validation = $this->form_validation;

        $validation->set_rules(
            'judul',
            'Judul',
            'required|trim',
        [
            'required' => "Kolom ini harus diisi"
        ]);

        $validation->set_rules(
            'isi', 
            'Isi', 
            'required|trim',
        [
            'required' => "Kolom ini harus diisi"
        ]);

        if ($validation->run())
        {
            $this->Pengaduan_model->addPengaduan();
            $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Pengaduan anda telah terkirim, mohon tunggu tanggapan petugas!</div>');
            redirect('masyarakat/pengaduan');
        } else {

        $data['users'] = $this->Users_model->dataUsers();
        $data['user'] = $this->Users_model->dataMasyarakatRow();
        $data['kategori'] = $this->Masyarakat_model->kategori();

        $data['title'] = "Pengaduan";
            
        $this->load->view('_partials/head', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('masyarakat/form_pengaduan', $data);
        $this->load->view('_partials/footer');  
        }
        
    }
    
    public function pending()
    {
        if ($this->session->userdata('role') != 'masyarakat') {
            $this->load->view('error');
        } else {

        $data['users'] = $this->Users_model->dataUsers();
        $data['user'] = $this->Users_model->dataMasyarakatRow();
        $data['pendingPengaduan'] = $this->Pengaduan_model->pendingPengaduan();
        $data['kategori'] = $this->Masyarakat_model->kategori();

        $data['title'] = "Pengaduan";

        $this->load->view('_partials/head', $data);
        $this->load->view('_partials/sidebar', $data);
        $this->load->view('_partials/topbar', $data);
        $this->load->view('masyarakat/pending_pengaduan', $data);
        $this->load->view('_partials/footer');  
        }

    }

    public function proses()
    {
        if ($this->session->userdata('role') != 'masyarakat') {
            $this->load->view('error');
        } else {

            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataMasyarakatRow();
            $data['prosesPengaduan'] = $this->Pengaduan_model->prosesPengaduan();
            $data['kategori'] = $this->Masyarakat_model->kategori();

            $data['title'] = "Pengaduan";

            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('masyarakat/proses_pengaduan', $data);
            $this->load->view('_partials/footer');
        }

    }

    public function selesai()
    {
        if ($this->session->userdata('role') != 'masyarakat') {
            $this->load->view('error');
        } else {

            $data['users'] = $this->Users_model->dataUsers();
            $data['user'] = $this->Users_model->dataMasyarakatRow();
            $data['selesaiPengaduan'] = $this->Pengaduan_model->selesaiPengaduan();
            $data['kategori'] = $this->Masyarakat_model->kategori();

            $data['title'] = "Pengaduan";

            $this->load->view('_partials/head', $data);
            $this->load->view('_partials/sidebar', $data);
            $this->load->view('_partials/topbar', $data);
            $this->load->view('masyarakat/selesai_pengaduan', $data);
            $this->load->view('_partials/footer');
        }
    }
}