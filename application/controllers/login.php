<?php

class Login extends CI_Controller {

    function index() {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/template', $data);
    }

    function validate_credentials() {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();
        if ($query) {///if the user's credentials validated 
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true);
            $this->session->set_userdata($data);
            redirect('site/members_area');
        } else {
            $this->index();
        }
    }

    function signup() {
        $data['main_content'] = 'signup_form';
        $this->load->view('includes/template', $data);
    }
    function create_member(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
    }

}