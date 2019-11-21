<?php

use GuzzleHttp\Client;

class My_model extends CI_Model
{
    public function edit_gaya($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function getProvinsi()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://dev.farizdotid.com/api/daerahindonesia/provinsi');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['semuaprovinsi'];
    }

    public function getKabupaten()
    {
        $client = new Client();

        $id_provinsi = 73;

        $response = $client->request('GET', 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/' . $id_provinsi . '/kabupaten');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['kabupatens'];
    }
}
