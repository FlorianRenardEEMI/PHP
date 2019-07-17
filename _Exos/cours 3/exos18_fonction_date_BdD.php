<?php

function change_date ($date)

{

    //AAAA-JJ-MM

$annee = substr($date,0,4);
$jour = substr($date,5,2);
$mois = substr($date,8,2);

return ($jour."/".$mois."/".$annee); // JJ-MM-AAAA

}

$date="2019-11-04";

echo (change_date($date));

echo (change_date(date("Y-d-m")));

?>