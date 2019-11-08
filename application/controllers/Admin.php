<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard - Pegas Belajar';
        $data['contents'] = 'admin/dashboard';
        $this->load->view('admin/index', $data);
    }

    public function login()
    {
        // menentukan rules 
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        // cek validasi
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('admin/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    // jika password benar
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    // menyimpan data di session
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {

                        redirect('admin/login');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('admin/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not activated!</div>');
                redirect('admin/login');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('admin/login');
        }
    }

    public function soal()
    {
        $data['title'] = 'Soal - Pegas Belajar';
        $data['contents'] = 'admin/soal/index';
        $this->load->view('admin/index', $data);
    }
}
