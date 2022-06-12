<?php

class Pengumuman_model extends CI_Model
{

    private $_table = "pengumuman";

    public function get_all()
    {
        $query = $this->db->get($this->_table);
        return $query->row();
    }
    public function pengumuman_edit($data)
    {
        $this->db->update($this->_table, $data, array('id' => 1));
    }
}
