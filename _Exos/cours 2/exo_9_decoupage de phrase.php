<?php
echo "<br><br>";//Exercice 9//
$evt="coupe du monde";
$date="20180715";
$pays="ecnarf";

echo("La ".ucfirst(strrev($pays))." a remporté la ".ucfirst(substr($evt,0,5.))." ".ucfirst(substr($evt,6,2)))." ".ucfirst(substr($evt,9,5));
echo(" le ".substr($date,6,2)."/".substr($date,4,2)."/".substr($date,0,4));
?>