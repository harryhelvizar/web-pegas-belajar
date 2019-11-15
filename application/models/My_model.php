<?php

class My_model extends CI_Model
{
    public function edit_gaya($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
