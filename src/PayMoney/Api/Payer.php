<?php
namespace PayMoney\Api;
use PayMoney\Common\PayMoneyModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends PayMoneyModel {

    /**
     * @param string $method
     * Valid Values: ["paymoney"]
     * method will be like paymoney, paypal, stripe etc
     * @return $this
     */
    public function setPaymentMethod($method){
        $this->paymentMethod=$method;
        return $this;
    }

    public function getPaymentMethod(){
        return $this->paymentMethod;
    }


}