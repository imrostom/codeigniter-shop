<?php

class Option_Model extends CI_Model
{
    public function save_option_info($data)
    {
        $this->db->where('option_id', 1);
        return $this->db->update('tbl_option', $data);
    }
}
