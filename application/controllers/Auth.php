<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        # code...
        $this->load->view('auth/login');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[admin.email]|valid_email');

        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() === false) {
            $this->load->view('auth/register');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)), //'true' untuk menghindari XSS (Cross-site scripting)
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'nis' => htmlspecialchars($this->input->post('nis', true)),
                'asal_sekolah' => htmlspecialchars($this->input->post('asal_sekolah', true)),
                'kabupaten' => htmlspecialchars($this->input->post('kabupaten', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'foto' => 'deafult.jpg',
                'date_created' => time()

            ];

            // menambahkan data ke tabel user
            $this->db->insert('siswa', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been registered!</div>');
            redirect('front');
        }
    }
}
