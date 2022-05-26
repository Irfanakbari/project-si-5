<?php

class Auth_model extends CI_Model
{
    private $_table = "user";
	const SESSION_KEY = 'id';

    public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id' => $user_id]);
		return $query->row();
	}
    public function admin_login($username, $password){
        $this->db->where('username', $username);
        $query = $this->db->get($this->_table);
        $user = $query->row();
        

        if (!$user) {
            return false;
        }
        if (!password_verify($password, $user->password)) {
            return false;
        }

        $this->session->set_userdata(self::SESSION_KEY, $user->id);
        return $this->session->has_userdata(self::SESSION_KEY);
    }
    public function admin_logout(){
        $this->session->unset_userdata(self::SESSION_KEY);
        return !$this->session->has_userdata(self::SESSION_KEY);
    }
    public function admin_register($username, $password){
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
        $this->db->insert($this->_table, $data);
        return $this->db->affected_rows() > 0;
    }
    
}