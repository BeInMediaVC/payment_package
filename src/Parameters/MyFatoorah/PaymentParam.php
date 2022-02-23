<?php


namespace beinmedia\payment\Parameters\MyFatoorah;

class PaymentParam
{
    public $PaymentMethodId;//integer
    public $SessionId;//string
    public $DisplayCurrencyIso;//String
    public $MobileCountryCode;//string
    public $CustomerMobile;//string
    public $CustomerEmail;//string
    public $InvoiceValue;//float
    public $CallBackUrl;//string
    public $ErrorUrl;//string
    public $CustomerReference;//string
    public $UserDefinedField;
    public $CustomerName;//string
    public $InvoiceSuppliers;//array

}
