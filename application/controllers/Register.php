<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {
    public function index() {

<<<<<<< HEAD
        $this->lang->load('test');
        //$this->lang->load('span_lang', 'spanish');

=======
>>>>>>> refs/remotes/origin/master
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First name','trim|required');
        $this->form_validation->set_rules('last_name', 'Last name','trim|required');
        $this->form_validation->set_rules('username','Username','trim|required|is_unique[users.username]');
        $this->form_validation->set_rules('email','Email','trim|valid_email|required');
        $this->form_validation->set_rules('password','Password','trim|min_length[8]|max_length[20]|required');
        $this->form_validation->set_rules('confirm_password','Confirm password','trim|matches[password]|required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->helper('form');
            $this->render('register/index_view');
        } else {
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
<<<<<<< HEAD
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $company = $this->input->post('company');
            $phone = $this->input->post('phone_number');
            $password = $this->input->post('password');
         
            $additional_data = array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'company' => $company,
                'phone' => $phone
=======
            $username = $this->input->post('first_name');
            $email = $this->input->post('email');
            $password = $this->input->post('first_name');
         
            $additional_data = array(
                'first_name' => $first_name,
                'last_name' => $last_name
>>>>>>> refs/remotes/origin/master
            );
         
            $this->load->library('ion_auth');
            if($this->ion_auth->register($username,$password,$email,$additional_data))
            {
                $_SESSION['auth_message'] = 'The account has been created. You may now login.';
                $this->session->mark_as_flash('auth_message');
                redirect('user/login');
            }
            else
            {
                $_SESSION['auth_message'] = $this->ion_auth->errors();
                $this->session->mark_as_flash('auth_message');
                redirect('register');
            }
        }       
    }
}