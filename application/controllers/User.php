<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'User - Pegas Belajar';
        $data['admin'] = $this->db->get('admin')->result();
        $data['contents'] = 'admin/user/index';
        $this->load->view('admin/index', $data);
    }

    public function tambah()
    {
        # code...
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[admin.email]|valid_email');

        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() === false) {
            $data['title'] = 'User - Pegas Belajar';
            $data['contents'] = 'admin/user/index';
            $this->load->view('admin/index', $data);
        } else {
            // $config['upload_path']         = './assets/img/profile/';
            // $config['allowed_types']     = 'gif|jpg|png';
            // $config['max_size']          = '2400'; //dalam KB
            // $config['max_width']          = '2024';
            // $config['max_height']          = '2024';

            // $this->load->library('upload', $config);

            // if (!$this->upload->do_upload('foto')) {
            //     $data['title'] = 'User - Pegas Belajar';
            //     $data['contents'] = 'admin/user/index';
            //     $this->load->view('admin/index', $data);
            //     $error = array('error' => $this->upload->display_errors());
            // } else {

            //     $data_gambar = array('upload_data' => $this->upload->data());
            //     // thumbnail gambar
            //     $config['image_library']     = 'gd2';
            //     $config['source_image']     = './assets/img/profile/' . $data_gambar['upload_data']['file_name'];
            //     $config['create_thumb']     = TRUE;
            //     $config['maintain_ratio']     = TRUE;
            //     $config['width']             = 100;
            //     $config['height']           = 100;

            //     $this->load->library('image_lib', $config);

            //     $this->image_lib->resize();

            //     $data = [
            //         'nama' => htmlspecialchars($this->input->post('nama', true)), //'true' untuk menghindari XSS (Cross-site scripting)
            //         'username' => htmlspecialchars($this->input->post('username', true)),
            //         'email' => htmlspecialchars($this->input->post('email', true)),
            //         'foto' => $data_gambar['upload_data']['file_name'],
            //         'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            //         'role_id' => 1,
            //         'is_active' => 1,
            //         'date_created' => time()

            //     ];

            //     // menambahkan data ke tabel user
            //     $this->db->insert('admin', $data);
            //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been registered!</div>');
            //     redirect('user');
            // }

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)), //'true' untuk menghindari XSS (Cross-site scripting)
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'foto' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()

            ];

            // menambahkan data ke tabel user
            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been registered!</div>');
            redirect('user');
        }
    }
}
