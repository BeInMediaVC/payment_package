<?php


namespace beinmedia\payment\Services;

use beinmedia\payment\Parameters\MyfatoorahParam;
use beinmedia\payment\Parameters\PaymentParameters;

interface PaymentInterface{
    /**
     * @param MyfatoorahParam $myfatoorahParam
     * @return mixed
     */
    public function generatePaymentURL(MyfatoorahParam $myfatoorahParam);
    public function isPaymentExecuted();
    public function getPayment($id);
}
