<?php


date_default_timezone_set ("Europe/Paris");

$heure = date("H:i:s");
echo ($heure);

$jour = date("d/m/Y");
echo (" ".$jour);

echo ("<div><strong>".$heure."</div></strong>");

echo ("<h3>".$jour."</h3>");

echo ("\"bonjour\"");

$i = 1;
$i = $i + 1;
$i += 1;
$i++; //incrémentation
$i--; //décrementation

echo ("<br><br>".$i);

$test = 1; //affectation : toujours vrai

$test == $i; // comparaison : faux

$test = $i;

if ($test == $i)
{
    echo ("<br><br>"."ok");
}

$tirage = mt_rand (1,9);

if ($tirage == 5)
{
    echo("<h5>Gagné !</h5>");
}
else if ($tirage != 5)
{
    echo ("<h5>Perdu !</h5>");
}

$i = 2;
$j = "2";

$i == $j // vrai
$i === $j //faux (car pas le même type)

($i == $j) && ($i === $j) //et "vrai et faux"
($i == $j) and ($i === $j) //et

($i == $j) || ($i === $j) //ou "vrai ou faux"
($i == $j) or ($i === $j) //ou

?>