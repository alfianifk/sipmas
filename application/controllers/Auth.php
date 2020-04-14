<?php

/**
 * BISMILLAHIRROHMANIRROHIM
 * Author   : alfianifk.my.id 
 * Nama App : sipmas (Sistem Pengaduan Masyarakat)
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Masyarakat_model');
        $this->load->model('Users_model');
    }

    public function index()
    {
        $validation = $this->form_validation;

        //username
        $validation->set_rules(
            'email',
            'Email',
            'required|trim',
            [
                'required' => 'Email tidak boleh kosong!'
            ]);

        //password
        $validation->set_rules(
            'password',
            'Password',
            'required|trim',
            [
                'required' => 'Password tidak boleh kosong!'
            ]);

            if($validation->run() == TRUE )
            {
                $this->Users_model->Login();
            } else {
                $data['title'] = "Login - SIPMAS";
                $this->load->view('_partials/auth_head', $data);
                $this->load->view('auth/login', $data);
                $this->load->view('_partials/auth_foot');
            }       
    }

    public function registrasi()
    {
        $masyarakat = $this->Masyarakat_model;
        $validation = $this->form_validation;

        //nik
        $validation->set_rules(
            'nik',
            'Nik',
            'required|trim|numeric|min_length[16]',
            [
                'required' => 'NIK tidak boleh kosong!',
                'numeric' => 'NIK tidak valid!',
                'min_length' => 'NIK tidak terlalu pendek'

            ]);
        //nama
        $validation->set_rules(
            'nama',
            'Nama',
            'required|trim',
            [
                'required' => 'Nama tidak boleh kosong!'
            ]);
        //email
        $validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[users.email]',
            [
                'required' => "Email tidak boleh kosong!",
                'min_length' => "Email terlalu pendek!",
                'valid_email' => "Email tidak valid!",
                'is_unique' => "Email sudah terdaftar, silahkan login!"
            ]);
        //password1
        $validation->set_rules(
            'password1',
            'Password',
            'required|trim|matches[password2]|min_length[4]',
            [
                'required' => "Password tidak boleh kosong!",
                'matches' => "Password tidak sama!",
                'min_length' => "Password terlalu pendek!"
            ]);
        //password2
        $validation->set_rules(
            'password2',
            'Password',
            'matches[password1]'
        );
        //telp
        $validation->set_rules(
            'telp',
            'Telp',
            'required|trim|numeric',
            [
                'required' => "Nomor telepon tidak boleh kosong!",
                'numeric' => 'Nomor telepon tidak valid!'
            ]);

        if ($validation->run())
        {
            $masyarakat->add();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun sudah terdaftar, silahkan Login!</div>');
            redirect('auth');
         

        } else {
            $data['title'] = "Register - SIPMAS";
            $this->load->view('_partials/auth_head', $data);
            $this->load->view('auth/registrasi', $data);
            $this->load->view('_partials/auth_foot');
        }
        
    }

    public function logout()
    {
        //membersihkan SESSION
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu berhasil logout!</div>');
        redirect('home');
    }
}