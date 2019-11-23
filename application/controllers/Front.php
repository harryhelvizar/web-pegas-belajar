<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('login_helper');
        $this->load->model('my_model');
    }

    public function index()
    {


        $data['title'] = 'Home - Pegas Belajar';
        $data['siswa'] = $this->db->get('siswa')->num_rows();
        $data['admin'] = $this->db->get('admin')->num_rows();
        $data['gaya_belajar'] = $this->db->get('gaya_belajar')->result();
        $data['testimoni'] = $this->db->get('testimoni')->result();
        $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
        $this->load->view('index', $data);
    }

    public function kontak()
    {
        $data['title'] = 'Kontak - Pegas Belajar';
        $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
        $this->load->view('kontak', $data);
    }

    public function soal($page = 1)
    {
        if (isset($page))
            $this->db->where('id_soal', $page);
        else
            $page = 1;
        siswa_login();

        $data['title'] = 'Soal - Pegas Belajar';
        $data['lanjut'] = (int) $page + 1;
        if ($page > 22) {
            redirect('front/hasil');
        }
        $data['soal'] = $this->db->get('soal', 1)->result();
        $data['total_soal'] = $this->db->get('soal')->num_rows();

        $this->load->view('soal', $data);
    }

    public function tentang()
    {
        $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();

        $data['title'] = 'Tentang - Pegas Belajar';
        $this->load->view('tentang', $data);
    }

    // public function gayabelajar()
    // {
    //     $data['title'] = 'Gaya Belajar - Pegas Belajar';
    //     $data['gaya'] = $this->db->get('gaya_belajar')->row();
    //     $this->load->view('gaya-belajar', $data);
    // }


    public function detail_gayabelajar($id_gaya)
    {

        $data['title'] = 'Gaya Belajar - Pegas Belajar';
        $data['gaya'] = $this->my_model->detail_gaya($id_gaya);

        $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
        $this->load->view('gaya-belajar', $data);
    }

    public function intruksi()
    {
        siswa_login();
        $data['title'] = 'Intruksi Jawab Soal - Pegas Belajar';
        $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();

        $this->load->view('intruksi', $data);
    }

    public function hasil()
    {
        siswa_login();
        $data['title'] = 'Hasil Soal - Pegas Belajar';
        $data['siswa'] = $this->db->get('siswa')->num_rows();
        $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
        $this->load->view('hasil', $data);
    }

    public function jawaban()
    {
        # code...
    }
}
