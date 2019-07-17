<?php

$pseudo = $_POST ["q1"]; // tableau associatif, le q1 entre crochet est égal au name ds le HTML du fichier formulaire
$mail = $_POST ["q2"];
$message = $_POST ["q3"];
$erreur_pseudo="";
$erreur_mail="";
$erreur_message="";


strip_tags($pseudo);
strip_tags($mail);
strip_tags($message);

$string_message_max= 140;
if (strlen($message) >= $string_message_max)

{
    // on prend la chaine de 0 à max
    $message = substr($message, 0, $string_message_max);

}

if ($mail != (filter_var($mail, FILTER_VALIDATE_EMAIL)))
    echo("votre mail est incorrect");


$pbm=0;

if ($_POST){
    $pseudo = $_POST["q1"];
    $mail = $_POST["q2"];
    $message = $_POST["q3"];

    if((!empty($pseudo)) and !empty($mail) and !empty($message)) {
        echo("<br><br>");
        echo("le formulaire est validé !");
        echo("<br><br>");
        echo ("Votre pseudo est : ".$pseudo);
        echo("<br><br>");
        echo ("votre mail est : ".$mail);
        echo("<br><br>");
        echo ("le message envoyé est : ".$message);
    }
    if 
        ($pseudo == "") {
        echo ("veuillez indiquer un pseudo");
        $erreur_pseudo = " erreur_pseudo";
        $pbm = 1;
    }

    elseif 
        ($mail == "") {
        echo ("veuillez renseigner votre mail");
        $erreur_mail = " erreur_mail";
        $pbm = 1;
    }

    elseif 
        ($message == "") {
        echo ("veuillez écrire votre message");
        $erreur_message = " erreur_message";
        $pbm = 1;
}


}


?>

