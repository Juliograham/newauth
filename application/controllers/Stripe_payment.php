<?php
use \Stripe\Stripe;
use \Stripe\Customer;
use \Stripe\Charge;
use \Stripe\Error;

class Stripe_payment extends CI_Controller {
    public function index() {

    }

    public function checkout() {
        $this->lang->load('test');
        try {
        require_once('vendor/autoload.php');
        Stripe::setApiKey('sk_test_FOwDMZjx1HowvgLWNjbStFPC');

        $token = $this->input->post('stripeToken');
        $email = $this->input->post('stripeEmail');

        $customer = \Stripe\Customer::create(array(
            'email' => $email,
            'source' => $token
        ));

        $charge = Charge::create(array(
            'customer' => $customer->id,
            'amount' => 10000,
            'description' => 'Agora Registration',
            'currency' => 'usd'
        ));

        $data = array(
            'id' => $charge->id,
            'product' => $charge->description,
            'email' => $email
        );
        $this->load->view('dashboard/success-view', $data);

    } catch (\Stripe\Error\Card $e) {
        $error = $e->getMessage();
        echo $error;
    }
    
    }

}