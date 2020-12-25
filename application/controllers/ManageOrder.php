<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ManageOrder extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->get_user();
    }

    public function manage_order()
    {
        $data                          = array();
        $data['all_manage_order_info'] = $this->manageorder_model->manage_order_info();
        $data['maincontent']           = $this->load->view('admin/pages/manage_order', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function order_details($order_id)
    {
        $data        = array();
        $order_info  = $this->manageorder_model->order_info_by_id($order_id);
        $customer_id = $order_info->customer_id;
        $shipping_id = $order_info->shipping_id;
        $payment_id  = $order_info->payment_id;

        $data['customer_info']      = $this->manageorder_model->customer_info_by_id($customer_id);
        $data['shipping_info']      = $this->manageorder_model->shipping_info_by_id($shipping_id);
        $data['payment_info']       = $this->manageorder_model->payment_info_by_id($payment_id);
        $data['order_details_info'] = $this->manageorder_model->orderdetails_info_by_id($order_id);
        $data['order_info']         = $this->manageorder_model->order_info_by_id($order_id);

        $data['maincontent'] = $this->load->view('admin/pages/order_details', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function get_user()
    {

        $email = $this->session->userdata('user_email');
        $name  = $this->session->userdata('user_name');
        $id    = $this->session->userdata('user_id');

        if ($email == false) {
            redirect('admin');
        }

    }

}
