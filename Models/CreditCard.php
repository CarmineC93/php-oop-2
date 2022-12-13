<?php


class CreditCard
{
    private $number;
    private $cvv;
    private $expirationMounth;
    private $expirationYear;

    function __construct($number, $cvv, $expirationMounth, $expirationYear)
    {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->expirationMounth = $expirationMounth;
        $this->expirationYear = $expirationYear;
    }

    //essendo dati private che mi serviranno li passo da un metodo public
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }
    public function getExpirationMounth()
    {
        return $this->expirationMounth;
    }
}
