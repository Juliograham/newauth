<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
    }

    public function index() {
        $this->lang->load('test');
        $this->load->view('welcome_message');
    }

    public function login() {
        $this->lang->load('test');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->render('user/login_view');
        } else {
            $remember = (bool)$this->input->post('remember');
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->ion_auth->login($username, $password, $remember)) {
                redirect('dashboard');
            } else {
                $_SESSION['auth_message'] = $this->ion_auth->errors();
                $this->session->mark_as_flash('auth_message');
                redirect('user/login');
            }
        }
    }

    public function stripe() {
        $this->render('user/stripe_view');
    }

    public function charge() {
        require_once('vendor/autoload.php');
        \Stripe\Stripe::setApiKey('sk_test_FOwDMZjx1HowvgLWNjbStFPC');


        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $token = $this->input->post('stripeToken');
        
        // Create Customer In Stripe
        $customer = \Stripe\Customer::create(array(
            "email" => $email,
            "source" => $token
        ));
        
        // Charge Customer
        $charge = \Stripe\Charge::create(array(
            "amount" => 10000,
            "currency" => "usd",
            "description" => "Agora Signup",
            "customer" => $customer->id
        ));
        
        // Redirect to Success Page
        redirect('success.php?tid='.$charge->id.'&product='.$charge->description);
    }

    public function success() {
        $this->render('user/success_view');
    }

    public function logout() {
        $this->lang->load('test');
        $this->ion_auth->logout();
        redirect('user/login');
    }
}