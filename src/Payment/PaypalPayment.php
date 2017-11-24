<?php

namespace Payment;

class PaypalPayment implements PaymentInterFace {

    private $email;
    private $password;

    public function __construct(string $email, string $passwod) {
        $this->email = $email;
        $this->password = $passwod;
    }

    public function pay($amount) {
        return;
    }

}
