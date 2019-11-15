<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gayabelajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Gaya Belajar - Pegas Belajar';
        $data['contents'] = 'admin/gayabelajar/index';
        $data['gaya_belajar'] = $this->db->get('gaya_belajar')->result();
        $this->load->view('admin/index', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_gaya_belajar', 'Nama Gaya Belajar', 'trim|required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('karakteristik', 'Karakteristik', 'trim|required');
        $this->form_validation->set_rules('icon', 'Icon', 'trim|required');
        $this->form_validation->set_rules('kekuatan', 'Kekuatan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Gaya Belajar - Pegas Belajar';
            $data['contents'] = 'admin/gayabelajar/tambah';
            $data['gaya_belajar'] = $this->db->get('gaya_belajar')->result();
            $this->load->view('admin/index', $data);
        } else {
            $data = [
                'nama_gaya_belajar' => $this->input->post('nama_gaya_belajar'),
                'title' => $this->input->post('title'),
                'karakteristik' => $this->input->post('karakteristik'),
                'icon' => $this->input->post('icon'),
                'tipe_kepribadian' => $this->input->post('tipe_kepribadian'),
                'tugas_yg_sesuai' => $this->input->post('tugas_yg_sesuai'),
                'kemampuan_adaptif' => $this->input->post('kemampuan_adaptif'),
                'kekuatan' => $this->input->post('kekuatan'),
                'kelemahan' => $this->input->post('kelemahan'),
                'cara_belajar' => $this->input->post('cara_belajar'),
                'metode_guru' => $this->input->post('metode_guru'),
                'date_created' => time("Y/m/d H:iP")
            ];

            $this->db->insert('gaya_belajar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gaya belajar baru telah ditambahkan!</div>');
            redirect('admin/gayabelajar');
        }
    }
}
