<?php

$q1 = $_POST ["q1"]; // tableau associatif, le q1 entre crochet est égal au name ds le HTML du fichier formulaire
$q2 = $_POST ["q2"];
$q3 = $_POST ["q3"];

echo($q1." ".$q2." ".$q3);

$score =0;

if (strtolower($q1)=="bleu")
{
    $score++;
}

if ($q2=="2")
{
    $score++;
} 

if ($q3=="1")
{
    $score++;
}

$s="";

if($score>1)
{
    $s="s";
}


echo ("<h3>Vous avez ".$score." bonne".$s." réponse".$s."</h3>");

switch($score)
{
    case 0 : $etat = "nul !..."; break;
    case 1 : $etat = "nice try, try again !"; break;
    case 2 : $etat = "pas mal, mais peux faire mieux !..."; break;
    case 3 : $etat = "Bravo !..."; break;
}

echo("<div>".$etat."</div>");

?>