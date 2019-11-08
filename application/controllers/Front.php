<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

    public function index()
    {
        $data['siswa'] = $this->db->get('siswa')->num_rows();
        $data['admin'] = $this->db->get('admin')->num_rows();
        $this->load->view('index', $data);
    }
}
