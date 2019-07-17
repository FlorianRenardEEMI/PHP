<?php
$jour = "vendredis";
$jour = str_replace("s"," ","$jour");
$mois = "<p>GVRIL</p>";
$mois = strip_tags($mois);
$mois = str_replace("G","A",$mois);
$serie = "3821293849";
$serie = substr("3821293849",3,2);
echo ("<br> La date du jour est ".$jour." ".$serie." ".$mois);
?>
