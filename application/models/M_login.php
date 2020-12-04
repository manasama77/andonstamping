<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{

    public function check_cookie($cookie)
    {
        $this->db->where('cookie', $cookie);
        return $this->db->get('accounts');
    }

    public function check_username($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('accounts');
    }

    public function check_password($username, $password)
    {
        $this->db->where('username', $username);
        $sql = $this->db->get('accounts');

        if (!$sql) {
            return FALSE;
        }

        if ($sql->num_rows() == 0) {
            return FALSE;
        }

        $password_db = $sql->row()->password;

        $check = password_verify($password, $password_db);

        return $check;
    }
}
                        
/* End of file M_login.php */
