<?php

//questa trait potrebbe avvisare l'utente in vari modi
trait Notificator
{
    protected $notification;

    public function setNotification($notification)
    {
        $this->notification = $notification;
    }

    //manderà la notifica tramite mezzo specificato nel $destination (sms, email ecc)
    public function send($destination, $message)
    {
        $this->notification->send($destination, $message);
    }
}
