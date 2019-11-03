<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'User - Pegas Belajar';
        $data['contents'] = 'admin/user/index';
        $this->load->view('admin/index', $data);
    }
}
