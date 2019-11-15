<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Home - Pegas Belajar';
        $data['siswa'] = $this->db->get('siswa')->num_rows();
        $data['admin'] = $this->db->get('admin')->num_rows();
        $data['gaya_belajar'] = $this->db->get('gaya_belajar')->result();
        $data['testimoni'] = $this->db->get('testimoni')->result();
        $this->load->view('index', $data);
    }

    public function kontak()
    {
        $data['title'] = 'Kontak - Pegas Belajar';
        $this->load->view('kontak', $data);
    }

    public function soal()
    {
        $data['title'] = 'Soal - Pegas Belajar';
        $data['soal'] = $this->db->get('soal', 1, 0)->result();
        $data['total_soal'] = $this->db->get('soal')->num_rows();
        $this->load->view('soal', $data);
    }

    public function tentang()
    {
        $data['title'] = 'Tentang - Pegas Belajar';
        $this->load->view('tentang', $data);
    }

    public function gayabelajar()
    {
        $data['title'] = 'Gaya Belajar - Pegas Belajar';
        $this->load->view('gaya-belajar', $data);
    }
}
