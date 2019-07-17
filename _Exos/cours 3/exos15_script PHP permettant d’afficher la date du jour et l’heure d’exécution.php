<?php

function jour()
{
$jour = array (

"1"=> "lundi",
"2"=> "mardi",
"3"=> "mercredi",
"4"=> "jeudi",
"5"=> "vendredi",
"6"=> "samedi",
"7"=> "dimanche"
);

return ($jour[date("N")]);

}

function mois()

{
$mois = array(
"1" => "Janvier",
"2" => "Février",
"3" => "Mars",
"4" => "avril",
"5" => "Mai",
"6" => "Juin",
"7" => "Juillet",
"8" => "Août",
"9" => "Septembre",
"10" => "Octobre",
"11" => "Novembre",
"12" => "Décembre"
);

return($mois[date("n")]);

}

$numérodujour = date("d");
$heure = date("H:i:s");
date_default_timezone_set("Europe/Paris");

echo("nous sommes le ".jour()." ".$numérodujour." ".mois()." "."et il est ".$heure)


?>