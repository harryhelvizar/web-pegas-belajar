<?php

use GuzzleHttp\Client;

class My_model extends CI_Model
{
    // public function edit_gaya($where, $table)
    // {
    //     return $this->db->get_where($table, $where);
    // }

    public function detail_gaya($id_gaya)
    {
        $result = $this->db->where('id_gaya_belajar', $id_gaya)->get('gaya_belajar');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function getKabupaten()
    {
        $client = new Client();

        $id_provinsi = 73;

        $response = $client->request('GET', 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/' . $id_provinsi . '/kabupaten');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['kabupatens'];
    }

    public function edit_gaya($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_gaya($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    // edit testimoni
    public function edit_testimoni($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_testimoni($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    // end edit testimoni


    // edit soal
    public function edit_soal($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_soal($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    // end edit soal

    // model hapus
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
