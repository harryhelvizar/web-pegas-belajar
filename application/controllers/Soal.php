<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{

    public function index()
    {
        $this->load->view('soal');
    }

    // public function so()
    // {
    //     $this->load->view('soal');
    // }
}
