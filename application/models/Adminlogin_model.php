<?php

class Adminlogin_Model extends CI_Model
{
    public function admin_login_check($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where($data);
        $info          = $this->db->get();
        return $result = $info->row();
    }
}
