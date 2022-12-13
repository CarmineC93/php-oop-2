<?php

class Customer
{
    public $name;
    public $email;

    public $basket;
    private $paymentMethod;

    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function insertCreditCard(CreditCard $creditCard)
    {
        $this->paymentMethod = $creditCard;
    }

    public function pay($total)
    {
        //controllo della scadenza carta
        if (
            $this->paymentMethod->getExpirationYear() > date("Y") ||
            ($this->paymentMethod->getExpirationYear() == date("Y") && //NB year dà una stringa quindi uguaglianza non identità
                $this->paymentMethod->getExpirationMounth() <= date("m"))


        ) {
            return "la carta è valida, pagato";
        } else {
            return "Errore di pagamento. La carta è scaduta";
        }
    }
}
