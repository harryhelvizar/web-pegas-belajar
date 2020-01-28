<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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
        $data['title'] = 'Profile Guru - Pegas Belajar';
        $data['guru'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
        $data['contents'] = 'admin/guru/profile';
        $data['kelas'] = $this->db->get_where('kelas', ['id_guru' => $id_guru])->result();

        $data['total_kelas'] = $this->db->get_where('kelas', ['id_guru' => $id_guru])->num_rows();

        $this->load->view('admin/guru/index', $data);
    }
}
