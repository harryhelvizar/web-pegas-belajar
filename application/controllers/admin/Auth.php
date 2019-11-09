<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login - Pegas Belajar';
        $data['contents'] = 'admin/login';
        $this->load->view('admin/login', $data);
    }
}
