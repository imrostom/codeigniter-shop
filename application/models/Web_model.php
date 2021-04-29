<?php

class Web_Model extends CI_Model
{

    public function get_all_featured_product()
    {
        $this->db->select('*,tbl_product.publication_status as pstatus');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->where('product_feature', 1);
        $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_new_product()
    {
        $this->db->select('*,tbl_product.publication_status as pstatus');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_product_pagi($limit,$offset)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->limit($limit,$offset);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_single_product($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->where('tbl_product.product_id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function get_all_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_product_by_cat($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->where('tbl_category.id', $id);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_product_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->where('tbl_product.product_id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function save_customer_info($data)
    {
        $this->db->insert('tbl_customer', $data);
        return $this->db->insert_id();
    }

    public function save_shipping_address($data)
    {
        $this->db->insert('tbl_shipping', $data);
        return $this->db->insert_id();
    }

    public function get_customer_info($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where($data);
        $info = $this->db->get();
        return $info->row();
    }

    public function save_payment_info($data)
    {
        $this->db->insert('tbl_payment', $data);
        return $this->db->insert_id();
    }

    public function save_order_info($data)
    {
        $this->db->insert('tbl_order', $data);
        return $this->db->insert_id();
    }

    public function save_order_details_info($oddata)
    {
        $this->db->insert('tbl_order_details', $oddata);
    }

    public function get_all_slider_post()
    {
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $this->db->where('publication_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_popular_posts()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_search_product($search)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->join('tbl_user', 'tbl_user.user_id=tbl_product.product_author');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->like('tbl_product.product_title', $search, 'both');
        $this->db->or_like('tbl_product.product_short_description', $search, 'both');
        $this->db->or_like('tbl_product.product_long_description', $search, 'both');
        $this->db->or_like('tbl_category.category_name', $search, 'both');
        $this->db->or_like('tbl_brand.brand_name', $search, 'both');
        $info = $this->db->get();
        return $info->result();
    }

}
