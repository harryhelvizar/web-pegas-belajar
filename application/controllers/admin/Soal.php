<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Soal - Pegas Belajar';
        $data['contents'] = 'admin/soal/index';
        $data['soal'] = $this->db->get('soal')->result();
        $this->load->view('admin/index', $data);
    }
}
