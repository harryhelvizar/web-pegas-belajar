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
        $data['soal'] = $this->db->get('soal', 12)->result();
        $data['gaya_belajar'] = $this->db->get('gaya_belajar')->result();
        // $data['total_soal'] = $this->db->get('soal')->num_rows();
        $data['total_soal'] = 12;

        $this->load->view('soal', $data);
    }

    public function savejwb()
    {
        // $this->output->enable_profiler(true);
        $data2['title'] = 'Hasil Jawab - Pegas Belajar';
        $id_siswa = $this->input->post('id_siswa');
        $kunciF = $this->input->post('kunciF');
        $id_siswa =  $this->input->post('kunciF');
        $kunciF = $this->input->post('kunciF');
        $kunciO = $this->input->post('kunciO');
        $kunciD = $this->input->post('kunciD');
        $kunciT = $this->input->post('kunciT');
        $nilaimax = $this->input->post('nilaimax');

        $data2 = array(
            'id_siswa' => $id_siswa,
            'kunciF' => $kunciF,
            'kunciO' => $kunciO,
            'kunciT' => $kunciT,
            'kunciD' => $kunciD
        );

        $hasil = $this->db->insert('jawaban', $data2);

        $data2['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
        //$this->db->where('id_gaya_belajar', $nilaimax);
        //$data2['gaya'] = 
        $data2['gaya'] = $this->db->get_where('gaya_belajar', ['id_gaya_belajar' => $nilaimax])->row();

        // echo "<script> alert ('Data Sudah Berhasil disimpan $nilaimax '); </script>";

        $this->load->view('hasil', $data2);

        //redirect(base_url(),'refresh');

    }



    public function tampil_hasil()
    {
        // $this->output->enable_profiler(true);
        $data2['title'] = 'Hasil Jawab - Pegas Belajar';
        $id_siswa = $this->uri->segment(3);
        
        
        $jawaban = $this->my_model->get_hasil_by_id($id_siswa)->row();
        // var_dump($jawaban);
        // var_dump($kunciF);
        // die;
        
        // $id_kelas = $jawaban->$id_kelas;
        
        if ($jawaban != NULL) { 
            // $kunciF = $jawaban->kunciF;
        $id_siswa =  $jawaban->id_siswa;
        $kunciF = $jawaban->kunciF;
        $kunciO = $jawaban->kunciO;
        $kunciD = $jawaban->kunciD;
        $kunciT = $jawaban->kunciT;
        $nilaimax = 4;

        $data2 = array(
            'id_siswa' => $id_siswa,
            'kunciF' => $kunciF,
            'kunciO' => $kunciO,
            'kunciT' => $kunciT,
            'kunciD' => $kunciD
        );

        // $hasil = $this->db->insert('jawaban', $data2);

        $data2['login'] = $this->db->get_where('siswa', ['id_siswa' =>  $jawaban->id_siswa])->row();
        //$this->db->where('id_gaya_belajar', $nilaimax);
        //$data2['gaya'] = 
        $data2['gaya'] = $this->db->get_where('gaya_belajar', ['id_gaya_belajar' => $nilaimax])->row();

        // echo "<script> alert ('Data Sudah Berhasil disimpan $nilaimax '); </script>";

        $kelas = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row();

        $data2['contents']   = 'hasil';
        $data2['title']     = 'Detail Siswa';
        $data2['kelas'] = $this->db->get_where('kelas', ['id_guru' => $kelas->id_guru])->result();
        $data2['total_kelas'] = $this->db->get_where('kelas', ['id_guru' => $kelas->id_guru])->num_rows();
        // var_dump($kelas->id_guru);
        // die;
        $this->load->view('admin/guru/index', $data2);

        //redirect(base_url(),'refresh');
        }
        // else {
        //     $this->session->set_flashdata('error', 'maaf, peserta belum melakukan tes');
            
        //     redirect(base_url("guru/daftarsiswa/index/$id_kelas"),'refresh');
            
            
        // }

        

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
