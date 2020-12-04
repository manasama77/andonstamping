<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_main extends CI_Model
{

    public function update_target($value, $field)
    {
        $this->db->set('target', $value);
        $this->db->set('updated_at', date('Y-m-d H:i:s'));
        $this->db->where('name', strtolower($field));
        return $this->db->update('targets');
    }

    public function get_latest_target_stroke()
    {
        return $this->db->get('targets');
    }
}
                        
/* End of file M_main.php */
