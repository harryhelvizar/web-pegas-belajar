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
        $data['title'] = 'Profile Guru - Pegas Belajar';
        $data['contents'] = 'admin/guru/profile';
        $data['guru'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/guru/index', $data);
    }
}
