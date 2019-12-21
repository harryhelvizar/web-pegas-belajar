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
        $data['slider'] = $this->db->get('slider')->result();
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

    public function soal()
    {

        siswa_login();

        $data['title'] = 'Soal - Pegas Belajar';
        // if ($page > 22) {
        //     redirect('front/hasil');
        // }
        $data['siswa'] = $this->db->get('siswa')->num_rows();
        $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
        // $data['kunci'] = $this->db->get('kunci')->result();
        $data['soal'] = $this->db->get('soal', 22)->result();
        $data['gaya_belajar'] = $this->db->get('gaya_belajar')->result();
        $data['total_soal'] = $this->db->get('soal')->num_rows();

        $this->load->view('soal', $data);
    }

    public function savejwb()
    {
        $id_siswa = $this->input->post('id_siswa');
        $kunciF = $this->input->post('kunciF');
        $id_siswa =  $this->input->post('kunciF');
        $kunciF = $this->input->post('kunciF');
        $kunciO = $this->input->post('kunciO');
        $kunciD = $this->input->post('kunciD');
        $kunciT = $this->input->post('kunciT');
        $nilaimax = $this->input->post('nilaimax');

        $data = array(
            'id_siswa' => $id_siswa,
            'kunciF' => $kunciF,
            'kunciO' => $kunciO,
            'kunciT' => $kunciT,
            'kunciD' => $kunciD
        );
        $hasil = $this->db->insert('jawaban', $data);

        $data2['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
        //$this->db->where('id_gaya_belajar', $nilaimax);
        //$data2['gaya'] = 
        $data2['gaya'] = $this->db->get_where('gaya_belajar', ['id_gaya_belajar' => $nilaimax])->row();

        echo "<script> alert ('Data Sudah Berhasil disimpan $nilaimax '); </script>";

        $this->load->view('hasil', $data2);

        //redirect(base_url(),'refresh');

    }

    public function tentang()
    {
        $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();

        $data['title'] = 'Tentang - Pegas Belajar';
        $this->load->view('tentang', $data);
    }


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
