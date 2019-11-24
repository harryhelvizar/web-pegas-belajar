<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Konfigurasi extends CI_Controller
{
    public function index()
    {
        # code...
    }

    public function slider()
    {
        # code...
    }

    public function kabupaten()
    {
        $data['title'] = 'Kabupaten - Pegas Belajar';
        $data['contents'] = 'admin/kabupaten/index';
        $data['kabupaten'] = $this->db->get('kabupaten')->result();
        $this->load->view('admin/index', $data);
    }

    public function tambahKabupaten()
    {
        $this->form_validation->set_rules('nama_kabupaten', 'Nama Kabupaten', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Kabupaten - Pegas Belajar';
            $data['contents'] = 'admin/kabupaten/index';
            $data['kabupaten'] = $this->db->get('kabupaten')->result();
            $this->load->view('admin/index', $data);
        } else {
            $data = ['nama_kabupaten' => $this->input->post('nama_kabupaten')];

            $this->db->insert('kabupaten', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kabupaten berhasil ditambahkan!</div>');
            redirect('admin/konfigurasi/kabupaten');
        }
    }
}
