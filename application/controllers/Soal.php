<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Soal - Pegas Belajar';
        $data['soal'] = $this->db->get('soal')->result();
        $data['total_soal'] = $this->db->get('soal')->num_rows();
        $this->load->view('soal', $data);
    }

    // public function index($id, $limit)
    // {
    //     $data['title'] = 'Soal - Pegas Belajar';
    //     $data['soal'] = $this->db->get_where('soal', $id, $limit = 1)->row()->limit($limit);
    //     $data['total_soal'] = $this->db->get('soal')->num_rows();
    //     $this->load->view('soal', $data);
    // }
}
