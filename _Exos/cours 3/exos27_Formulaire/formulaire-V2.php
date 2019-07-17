<?php

$pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
$mail = isset($_POST['mail']) ? $_POST['mail'] : NULL; 
$message = isset($_POST['message']) ? $_POST['message'] : NULL;

strip_tags($pseudo);
strip_tags($mail);
strip_tags($message);


if (strlen($message) >= 140)

{
    // on prend la chaine de 0 à max
    $message = substr($message, 0, 140);

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

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire-V2</title>
</head>
<body>
    <h1>formulaire de commentaires</h1>

<form action="formulaire-V2.php" method="post">
<link rel="stylesheet" href="./css/cssexo27.css">
<!--pseudo -->
<div> 

    <div> <!--pseudo -->
    <label for="q1"> pseudo</label> 
    </div> 

    <div><!--reponse -->
    <input type="text" name="q1" id="q1" required/> <!--name et id sont obligatoire -->
    </div>

</div>
<!--mail -->
<div> 

    <div> <!--mail -->
    <label for="q2"> mail</label> 
    </div> 

    <div><!--reponse -->
    <input type="email" name="q2" id="q2" required/> <!--name et id sont obligatoire -->
    </div>

</div>
<!--message -->
<div> 

    <div> <!--message -->
    <label for="q3"> message </label> 
    </div> 

    <div><!--reponse -->
    <textarea name="q3" id="q3" maxlength="140" placeholder="140 caractères maximum..." required style="margin: 0px; height: 281px; width: 644px;"> </textarea><!--name et id sont obligatoire -->
    </div>

</div>


<div>
<input type = "submit" value="envoyer les réponses"/>
</div>

</body>
</html>
