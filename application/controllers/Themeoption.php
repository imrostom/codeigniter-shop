<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Themeoption extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->get_user();
    }

    public function index()
    {
        $data                = array();
        $data['maincontent'] = $this->load->view('admin/pages/theme_option', '', true);
        $this->load->view('admin/master', $data);
    }

    public function save_option()
    {

        $data                          = array();
        $data['site_copyright']        = $this->input->post('site_copyright');
        $data['site_contact_num1']     = $this->input->post('site_contact_num1');
        $data['site_contact_num2']     = $this->input->post('site_contact_num2');
        $data['site_facebook_link']    = $this->input->post('site_facebook_link');
        $data['site_twitter_link']     = $this->input->post('site_twitter_link');
        $data['site_google_plus_link'] = $this->input->post('site_google_plus_link');
        $data['site_email_link']       = $this->input->post('site_email_link');
        $data['contact_title']         = $this->input->post('contact_title');
        $data['contact_subtitle']      = $this->input->post('contact_subtitle');
        $data['contact_description']   = $this->input->post('contact_description');
        $data['company_location']      = $this->input->post('company_location');
        $data['company_number']        = $this->input->post('company_number');
        $data['company_email']         = $this->input->post('company_email');
        $data['company_facebook']      = $this->input->post('company_facebook');
        $data['company_twitter']       = $this->input->post('company_twitter');

        $delete_logo    = $this->input->post('delete_logo');
        $delete_favicon = $this->input->post('delete_favicon');

        $this->form_validation->set_rules('site_copyright', 'Product Title', 'trim|required');
        $this->form_validation->set_rules('site_contact_num1', 'Product Short Description', 'trim|required');
        $this->form_validation->set_rules('site_contact_num2', 'Product Long Status', 'trim|required');
        $this->form_validation->set_rules('site_facebook_link', 'Product Price', 'trim|required');
        $this->form_validation->set_rules('site_twitter_link', 'Product Quantity', 'trim|required');
        $this->form_validation->set_rules('site_google_plus_link', 'Product Category', 'trim|required');
        $this->form_validation->set_rules('site_email_link', 'Product Brand', 'trim|required');
        $this->form_validation->set_rules('contact_title', 'Product Feature', 'trim');
        $this->form_validation->set_rules('contact_subtitle', 'Publication Status', 'trim|required');
        $this->form_validation->set_rules('contact_description', 'Publication Status', 'trim|required');
        $this->form_validation->set_rules('company_location', 'Publication Status', 'trim|required');
        $this->form_validation->set_rules('company_number', 'Publication Status', 'trim|required');
        $this->form_validation->set_rules('company_email', 'Publication Status', 'trim|required');
        $this->form_validation->set_rules('company_facebook', 'Publication Status', 'trim|required');
        $this->form_validation->set_rules('company_twitter', 'Publication Status', 'trim|required');

        if (!empty($_FILES['site_logo']['name'])) {
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 555;
            $config['max_width']     = 555;
            $config['max_height']    = 555;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('site_logo')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', $error);
                redirect('theme/option');
            } else {
                unlink('uploads/' . $delete_logo);
                $post_image        = $this->upload->data();
                $data['site_logo'] = $post_image['file_name'];
            }
        }

        if (!empty($_FILES['site_favicon']['name'])) {
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 555;
            $config['max_width']     = 555;
            $config['max_height']    = 555;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('site_favicon')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', $error);
                redirect('theme/option');
            } else {
                unlink('uploads/' . $delete_favicon);
                $post_image           = $this->upload->data();
                $data['site_favicon'] = $post_image['file_name'];
            }
        }

        if ($this->form_validation->run() == true) {

            $result = $this->option_model->save_option_info($data);

            if ($result) {
                $this->session->set_flashdata('message', 'Option Updated Sucessfully');
                redirect('theme/option');
            } else {
                $this->session->set_flashdata('message', 'Option Updated Failed');
                redirect('theme/option');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('theme/option');
        }
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
