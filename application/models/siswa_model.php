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
    public function siswa_import($data)
    {
        $this->db->insert_batch($this->_table, $data);
    }
    public function siswa_hapus($id)
    {
        $this->db->delete($this->_table, array('nisn' => $id));
    }
    public function siswa_login($nisn) 
    {
        $this->db->where('nisn', $nisn);
        $query = $this->db->get($this->_table);
        $user = $query->row();
        if (!$user) {
            return false;
        }
        $this->session->set_userdata('nisn', $user->nisn);
        return $this->session->has_userdata('nisn');
    }
    public function current_user()
    {
        if (!$this->session->has_userdata('nisn')) {
            return null;
        }
        $user_id = $this->session->userdata('nisn');
        $query = $this->db->get_where($this->_table, ['nisn' => $user_id]);
        return $query->row();
    }
    public function siswa_logout()
    {
        $this->session->unset_userdata('nisn');
        return !$this->session->has_userdata('nisn');
    }
}