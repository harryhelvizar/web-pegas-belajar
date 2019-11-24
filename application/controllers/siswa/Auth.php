<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('My_model');
    }

    public function index()
    {
        # code...

        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Siswa - Pegas Belajar';
            $data['siswa'] = $this->db->get('siswa')->num_rows();
            $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
            $this->session->set_userdata($data);
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    public function register()
    {


        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[admin.email]|valid_email');

        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() === false) {
            $this->load->model('my_model');
            $data['kabupatens'] = $this->my_model->getKabupaten();
            $data['login'] = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
            $data['title'] = 'Register Siswa - Pegas Belajar';
            $this->load->view('auth/register', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)), //'true' untuk menghindari XSS (Cross-site scripting)
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nis' => htmlspecialchars($this->input->post('nis', true)),
                'asal_sekolah' => htmlspecialchars($this->input->post('asal_sekolah', true)),
                'kabupaten' => htmlspecialchars($this->input->post('kabupaten', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'foto' => 'deafult.jpg',
                'date_created' => time("Y/m/d H:iP")

            ];

            // menambahkan data ke tabel user
            $this->db->insert('siswa', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat, akun anda berhasil terdaftar!</div>');
            redirect('front');
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $siswa = $this->db->get_where('siswa', ['email' => $email])->row_array();

        if ($siswa) {
            if (password_verify($password, $siswa['password'])) {
                $data = ['email' => $siswa['email']];

                $this->session->set_userdata($data);
                redirect('front');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('siswa/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Tidak Terdaftar!</div>');
            redirect('siswa/auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Keluar!</div>');
        redirect('siswa/auth');
    }
}
