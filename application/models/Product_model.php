<?php

class Product_Model extends CI_Model
{

    public function save_product_info($data)
    {
        return $this->db->insert('tbl_product', $data);
    }

    public function get_all_product()
    {
        $this->db->select('*,tbl_product.publication_status as pstatus');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $info = $this->db->get();
        return $info->result();
    }

    public function edit_product_info($id)
    {
        $this->db->select('*,tbl_product.publication_status as pstatus');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->where('tbl_product.product_id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function delete_product_info($id)
    {
        $this->db->where('product_id', $id);
        return $this->db->delete('tbl_product');
    }

    public function update_product_info($data, $id)
    {
        $this->db->where('product_id', $id);
        return $this->db->update('tbl_product', $data);
    }

    public function published_product_info($id)
    {
        $this->db->set('publication_status', 1);
        $this->db->where('product_id', $id);
        return $this->db->update('tbl_product');
    }

    public function unpublished_product_info($id)
    {
        $this->db->set('publication_status', 0);
        $this->db->where('product_id', $id);
        return $this->db->update('tbl_product');
    }

    public function get_all_published_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_published_brand()
    {
        $this->db->select('*');
        $this->db->from('tbl_brand');
        $this->db->where('publication_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

}
