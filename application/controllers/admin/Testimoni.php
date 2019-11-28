<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('my_model');

    }

    public function index()
    {
        $data['title'] = 'Testimoni - Pegas Belajar';
        $data['contents'] = 'admin/testimoni/index';
        $data['testimoni'] = $this->db->get('testimoni')->result();
        $this->load->view('admin/index', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Testimoni - Pegas Belajar';
            $data['contents'] = 'admin/testimoni/index';
            $data['testimoni'] = $this->db->get('testimoni')->result();
            $this->load->view('admin/index', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'testimoni' => $this->input->post('testimoni'),
                'foto' => 'testimoni.jpg',
                'date_created' => time("Y/m/d H:iP")
            ];

            $this->db->insert('testimoni', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Testimoni baru telah ditambahkan!</div>');
            redirect('admin/testimoni');
        }
    }

    public function edit($id_testimoni)
    {
        $data['title'] = 'Edit Testimoni';
        $data['contents'] = 'admin/testimoni/edit';
        $where = array('id_testimoni' => $id_testimoni);
        $data['testimoni'] = $this->my_model->edit_testimoni($where, 'testimoni')->result();
        $this->load->view('admin/index', $data);
    }

    public function update()
    {
        $id_testimoni   = $this->input->post('id_testimoni');
        $nama           = $this->input->post('nama');
        $jabatan        = $this->input->post('jabatan');
        $testimoni      = $this->input->post('testimoni');
        $foto           = $this->input->post('foto');


        $data = array(
                'nama'          => $nama,         
                'jabatan'       => $jabatan,     
                'testimoni'     => $testimoni,   
                'foto'          => $foto        
        );
        $where = array(
            'id_testimoni' => $id_testimoni
        );
        $this->my_model->update_testimoni($where, $data, 'testimoni');
        
        redirect('admin/testimoni');
        
    }
}
