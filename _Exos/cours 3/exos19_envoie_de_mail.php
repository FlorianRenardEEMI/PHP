<?php

$to = "sambretmeuse@gmail.com"

$message =  "je teste"

$subject = "test envoie mail"

$expediteur = "from:florian.renard@eemi.com"

(mail($to,$message,$subject,$expediteur);

echo ("envoi ok");

?>