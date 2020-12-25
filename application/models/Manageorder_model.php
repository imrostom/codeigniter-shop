<?php

class Manageorder_Model extends CI_Model
{

    public function manage_order_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_customer', 'tbl_customer.customer_id = tbl_order.customer_id');
        $this->db->join('tbl_shipping', 'tbl_shipping.shipping_id = tbl_order.shipping_id');
        $result = $this->db->get();
        return $result->result();
    }

    public function order_info_by_id($order_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('order_id', $order_id);
        $result = $this->db->get();
        return $result->row();
    }

    public function customer_info_by_id($custoemr_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_id', $custoemr_id);
        $result = $this->db->get();
        return $result->row();
    }

    public function shipping_info_by_id($shipping_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_shipping');
        $this->db->where('shipping_id', $shipping_id);
        $result = $this->db->get();
        return $result->row();
    }

    public function payment_info_by_id($payment_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_payment');
        $this->db->where('payment_id', $payment_id);
        $result = $this->db->get();
        return $result->row();
    }

    public function orderdetails_info_by_id($order_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_order_details');
        $this->db->where('order_id', $order_id);
        $result = $this->db->get();
        return $result->result();
    }

}
