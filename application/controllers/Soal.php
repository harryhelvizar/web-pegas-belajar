<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Soal - Pegas Belajar';
        $data['contents'] = 'admin/soal/index';
        $this->load->view('admin/index', $data);
    }
}
