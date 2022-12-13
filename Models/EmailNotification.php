<?php

//questa classe "spedisce" una mail
class EmailNotification
{
    public function send($email, $message)
    {
        echo "invio messaggio : $message a $email";
    }
}
