<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Home - Pegas Belajar';
        $data['siswa'] = $this->db->get('siswa')->num_rows();
        $data['admin'] = $this->db->get('admin')->num_rows();
        $this->load->view('index', $data);
    }

    public function kontak()
    {
        $data['title'] = 'Home - Pegas Belajar';
        $this->load->view('kontak', $data);
    }

    public function soal()
    {
        $data['title'] = 'Soal - Pegas Belajar';
        $data['soal'] = $this->db->get('soal', 1, 0)->result();
        $data['total_soal'] = $this->db->get('soal')->num_rows();
        $this->load->view('soal', $data);
    }
}
