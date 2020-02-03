<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftarsiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $id_guru = $this->session->userdata('id_guru');
        // var_dump($id_guru);
        // die;
        // $kode_kelas = $this->db->get('kelas')->
        $data['title'] = 'Daftar Siswa - Pegas Belajar';
        $data['guru'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
        $data['contents'] = 'admin/guru/daftar-siswa';
        $data['kelas'] = $this->db->get_where('kelas', ['id_guru' => $id_guru])->result();
        // $data['siswa'] = $this->db->get_where('siswa', ['kode_kelas' => ])->result();
        $data['total_kelas'] = $this->db->get_where('kelas', ['id_guru' => $id_guru])->num_rows();

        $this->load->view('admin/guru/index', $data);
    }
}
