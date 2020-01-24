<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Kelas - Pegas Belajar';
        $data['contents'] = 'admin/kelas/index';
        $data['kelas'] = $this->db->get('kelas')->result();
        $this->load->view('admin/index', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'trim|required');
        $this->form_validation->set_rules('kode_kelas', 'Kode Kelas', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Kelas - Pegas Belajar';
            $data['contents'] = 'admin/kelas/tambah';
            $data['kelas'] = $this->db->get('kelas')->result();
            $this->load->view('admin/guru/index', $data);
        } else {
            $data = [
                'nama_kelas' => htmlspecialchars($this->input->post('nama_kelas'), true),
                'kode_kelas' => htmlspecialchars($this->input->post('email'), true),
                'id_siswa' => $this->db->get_where(),

                'date_created' => time("Y/m/d H:iP")
            ];

            $this->db->insert('guru', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Guru baru telah ditambahkan!</div>');
            redirect('admin/guru');
        }
    }
}
