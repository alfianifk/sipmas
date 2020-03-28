<?php

/**
 * BISMILLAHIRROHMANIRROHIM
 * Author   : alfianifk.my.id 
 * Nama App : sipmas (Sistem Pengaduan Masyarakat)
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
    private $_table = "users";

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array(); //ambil semua data
    }

    function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    function Login()
    {
        //membuat variabel post
        $post = $this->input->post();


        //ambil email atau username yang sesuai dengan post
        //agar user bisa login menggunakan kedua itu
        $this->db->where('email', $post['email'])
                ->or_where('username', $post['email']);
        $user = $this->db->get($this->_table)->row_array();
        //masukan kedalam variabel user

        if ($user)
        { //user ada
            if (password_verify($post['password'], $user['password']))
            {
                //cek password dan simpan session
                $data = array(
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'role' => $user['role']
                );
                $this->session->set_userdata($data);

                //cek role
                if($user['role'] == "admin") {
                   redirect('administrator');
                } elseif ($user['role'] == "petugas") {
                   redirect('petugas');
                } else {
                    redirect('masyarakat');
                }
                
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata sandi salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Username belum terdaftar!</div>');
            redirect('auth');
        }

    }

  public function dataUsers() //data users sesuai username yang ada disession
  {
      return $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
  }

  public function dataAdmin() //data untuk admin sesuai session
  {
      return $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
  }

  public function adminAll()
  {
      return $this->db->get('admin')->result_array();
  }

    public function dataMasyarakatRow() //masyarakat satu baris sesuai session
    {
        return $this->db->get_where('warga', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function dataMasyarakatResult() //KHUSUS ADMIN
    {
        return $this->db->get('masyarakat')->result_array();
    }

    public function dataPetugasRow() //petugas satu baris sesuai session
    {
        return $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function dataPetugasResult() //KHUSUS ADMIN
    {
       return $this->db->get('petugas')->result_array();
    }

    public function joinKategoriPetugas()
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->join('kategori', 'kategori.id_kategori = petugas.id_kategori');
        return $this->db->get()->result_array();
    }
}