<?php

/**
 * BISMILLAHIRROHMANIRROHIM
 * Author   : alfianifk.my.id 
 * Nama App : sipmas (Sistem Pengaduan Masyarakat)
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  function index()
  {
      $data['title'] = "Home - SIPMAS";
      $this->load->view('home', $data);
  }
}