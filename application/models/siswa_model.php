<?php

class Siswa_model extends CI_Model
{
    private $_table = "siswa";

    public function get_all()
    {
        $query = $this->db->get($this->_table);
        return $query->result();
    }
    public function get_lulus()
    {
        $query = $this->db->get_where($this->_table,array('keterangan'=>1));
        return $query->result();
    }
    public function get_not_lulus()
    {
        $query = $this->db->get_where($this->_table,array('keterangan'=>0));
        return $query->result();
    }
    public function get_dibuka()
    {
        $query = $this->db->get_where($this->_table,array('status'=>1));
        return $query->result();
    }
    public function get_not_dibuka()
    {
        $query = $this->db->get_where($this->_table,array('status'=>0));
        return $query->result();
    }
}