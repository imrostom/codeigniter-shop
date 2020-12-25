<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminLogin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminlogin_model');
        $this->user_login_check();
    }
    public function index()
    {
        $this->load->view('admin/pages/login');
    }

    public function admin_login_check()
    {

        $this->form_validation->set_rules('user_email', 'User Email', 'required|valid_email');
        $this->form_validation->set_rules('user_password', 'User Password', 'required');

        if ($this->form_validation->run() == true) {
            $data                  = array();
            $data['user_email']    = $this->input->post('user_email');
            $data['user_password'] = md5($this->input->post('user_password'));

            $result = $this->adminlogin_model->admin_login_check($data);

            if ($result) {
                $this->session->set_userdata('user_email', $result->user_email);
                $this->session->set_userdata('user_name', $result->user_name);
                $this->session->set_userdata('user_id', $result->user_id);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', 'Your Email Or Password Does Not Match');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('admin');
        }

    }

    public function user_login_check()
    {

        $email = $this->session->userdata('user_email');
        $name  = $this->session->userdata('user_name');
        $id    = $this->session->userdata('user_id');

        if ($email == true) {
            redirect('dashboard');
        }

    }

}
