<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('login_helper');
    }

    public function index()
    {
        $data['title'] = 'Home - Pegas Belajar';
        $data['siswa'] = $this->db->get('siswa')->num_rows();
        $data['admin'] = $this->db->get('admin')->num_rows();
        $data['gaya_belajar'] = $this->db->get('gaya_belajar')->result();
        $data['testimoni'] = $this->db->get('testimoni')->result();
        // $this->db->set_userdata($data);
        $this->load->view('index', $data);
    }

    public function kontak()
    {
        $data['title'] = 'Kontak - Pegas Belajar';
        $this->load->view('kontak', $data);
    }

    public function soal()
    {
        siswa_login();
        $data['title'] = 'Soal - Pegas Belajar';

        // pagination

        $this->load->library('pagination');

        // config

        $config['base_url'] = 'http://localhost/web-pegas-belajar/front/soal/';

        $config['total_rows'] = 22;
        $config['per_page'] = 1;

        // inisialisasi

        $this->pagination->initialize($config);



        $data['start'] = $this->uri->segment(3);
        $data['soal'] = $this->db->get('soal', $config['per_page'], $data['start'])->result();
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
        $data['gaya'] = $this->db->get('gaya_belajar')->row();
        $this->load->view('gaya-belajar', $data);
    }

    public function intruksi()
    {
        // siswa_login();
        $data['title'] = 'Intruksi Jawab Soal - Pegas Belajar';
        $this->load->view('intruksi', $data);
    }

    public function hasil()
    {
        $data['title'] = 'Hasil Soal - Pegas Belajar';
        $this->load->view('hasil', $data);
    }

    public function jawaban()
    {
        # code...
    }
}
