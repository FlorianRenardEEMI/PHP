<?php

$pseudo="";
$mail="";
$message="";

//Traitement

if(!empty($_POST))
{
$pseudo= strip_tags($_POST["pseudo"]);
$mail=strip_tags($_POST["mail"]);
$message=strip_tags($_POST["message"]);

//gestion des erreurs

if ($pseudo == "")
{
    $erreur = "Le pseudo est obligatoire";
}

elseif ($mail == "")
{
    $mail = "Le mail est obligatoire";
}

elseif ($message == "")
{
    $message = "Le message est obligatoire";
}

elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL))
{
    $erreur="le mail n'a pas le bon format";
}

elseif(strlen($message)>140 )
{
    $erreur= "le message est trop long";
}

else{
    $succes("votre post a bien été enregistré");

    // réinitialisation du formulaire s'il est bien validé.

    $pseudo="";
    $mail="";
    $message="";
}

}

echo("<!DOCTYPE html>");
echo("<html>");
echo("<head>");
echo("<meta charset=\"utf-8\" />");
echo("<link rel=\"stylesheet\" type=\"text/css\" href=\"correction_exo_27.css\">");
echo("</head>");
echo("<body>");

echo("<form method=\"post\"action=\"".basename($_SERVER["PHP_SELF"])."\">");

if(isset($erreur))
{
    echo("<span class=\"erreur\">".$erreur."</span>");
}

if(isset($succes))
{
    echo($succes);
}

echo("<div>");
echo ("<label for=\"pseudo\">pseudo </label>");
echo("<input type=\"text\"name=\"pseudo\"id=\"pseudo\"required value=\"".$pseudo."\"/>");
echo("</div>");

echo("<div>");
echo ("<label for=\"mail\">e-mail</label>");
echo("<input type=\"email\"name=\"mail\"id=\"pseudo\"required value=\"".$mail."\"/>");
echo("</div>");

echo("<div>");
echo ("<label for=\"message\">message</label>");
echo("<textarea name=\"message\"id=\"message\"required rows=\"10\" cols=\"50\" maxlength=\"140\">".$message."</textarea>");
echo("</div>");

echo("<div>");
echo ("<input type=\"submit\" value=\"poster\" />");
echo("</div>");

echo("</form>");
echo("</body");
echo("</html>");

?>




