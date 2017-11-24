<?php

namespace Payment;

class CreditCardPayment implements PaymentInterFace {
    
    private $name;
    private $creditCarNumber;
    private $cvv;
    private $expiryDate;
    
    public function pay() {
        print "Pay whith Creditcard Method";
    }
}
