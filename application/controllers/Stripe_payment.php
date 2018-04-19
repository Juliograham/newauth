<?php

use \Stripe\Stripe;
use \Stripe\Charge;
use \Stripe\Customer;
use \Stripe\Error;

class Stripe_payment extends CI_Controller {
    public function index() {

    }

    public function checkout() {
        try {
            require_once('vendor/autoload.php');
            Stripe::setApiKey('sk_test_FOwDMZjx1HowvgLWNjbStFPC');

            $token  = $_POST['stripeToken'];
            $email  = $_POST['stripeEmail'];

            $customer = \Stripe\Customer::create(array(
                'email' => $email,
                'source'  => $token
            ));

            $charge = Charge::create(
                array(
                    'customer' => $customer->id,
                    'amount'   => 10000,
                    'currency' => 'usd'
                )
            );

            redirect('user/login');
            
        } catch (\Stripe\Error\Card $e) {
            $error = $e->getMessage();
            echo $error;
        }
    }
}