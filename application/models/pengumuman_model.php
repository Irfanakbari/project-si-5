<?php

class Pengumuman_model extends CI_Model
{

    private $_table = "pengumuman";

    public function get_all()
    {
        $query = $this->db->get($this->_table);
        return $query->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->_table, $data);
        return $this->db->affected_rows() > 0;
    }
}
