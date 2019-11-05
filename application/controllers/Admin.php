<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard - Pegas Belajar';
        $data['contents'] = 'admin/dashboard';
        $this->load->view('admin/index', $data);
    }

    public function login()
    {
        $data['title'] = 'Login Admin';
        $this->load->view('admin/login', $data);
    }

    public function soal(){
        $data['title'] = 'Soal - Pegas Belajar';
        $data['contents'] = 'admin/soal/index';
        $this->load->view('admin/index', $data);
    }

}
