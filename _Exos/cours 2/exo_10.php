<?php

$jour = "Londi";
$mois = "<i>DECEMBRE03</i>";
$annee = "8102";

$jour = strtolower ($jour); // met le jour en minuscule
$mois = strtolower ($mois); // met le mois en minuscule
$mois = strip_tags($mois); // enlève les balises HTML

$jour = str_replace ("o","u",$jour); // remplace le o par u
$mois = str_replace ("de","dé",$mois); // remplace le e par é
$annee = strrev ("8102"); // remet l'année dans l'ordre

$temp1 = substr ($mois,9,2); // récupère la valeur 03
$temp2 = substr ($mois,0,9); // récupère la valeur DECEMBRE

$mois = $temp1." ".$temp2; // associe les valeurs 03 + décembre

echo ("Nous sommes ".$jour." ".$mois." ".$annee); // affiche le résultat.

?>