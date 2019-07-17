<?php

echo("<!DOCTYPE html>");
echo("<html>");
echo("<head>");
echo("<meta charset=\"utf-8\" />");
echo("<link rel=\"stylesheet\" type=\"text/css\" href=\"allocine_BdD.css\">");
echo("</head>");
echo("<body>");

$serveur = "localhost";
$user="root";
$password="Doudounette1914";
$BdD = "allocine";

//connexion à la BdD MySQL

$link = mysqli_connect($serveur,$user,$password,$BdD);

mysqli_query($link,"set names utf8");

$sql="SELECT * FROM film order by film_titre";

// Execution de la requête pour récupérer les infos ds la BdD.

$query= mysqli_query($link,$sql);

echo("<div class=\"container\">");

while ($result= mysqli_fetch_assoc($query)) // tant qu'il y a des films ds le BdD, decoupage en tableau associatif

{
    echo("<div class=\"film\">");
    echo("<img src=\"".$result["film_affiche"]."\" alt=\"".$result["film_titre"]."\"/>");
    echo("<h3>".$result["film_titre"]."</h3>");
    echo("<p>".$result["film_realisateur"]."</p>");
    echo("<p>".$result["film_genre"]."</p>");
    echo("<p>".$result["film_duree"]."</p>");
    echo("</div>");
}

echo("</div>"); // ferme le container

echo("</body");
echo("</html>");

?>