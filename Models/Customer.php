<?php
require_once __DIR__ . "/../Traits/Notificator.php";
require_once __DIR__ . "/EmailNotification.php";
class Customer
{
    public $name;
    public $email;

    public $basket;
    private $paymentMethod;

    //poichè manderò un messaggio a tutti gli utenti ad ordine effettuto "riutilizzo" il codice nel trait
    use Notificator;
    //ora tutte le funzioni in Notificator sono in customer

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
            $this->setNotification(new EmailNotification());
            $this->send($this->email, "Il tuo ordine sarà spedito presto a $this->name");
            return "la carta è valida, pagato";
        } else {
            return "Errore di pagamento. La carta è scaduta";
        }
    }
}
