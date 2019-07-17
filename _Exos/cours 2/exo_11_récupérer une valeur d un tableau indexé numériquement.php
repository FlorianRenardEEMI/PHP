<?php
echo "<br><br>";//Exercice 11//
$etat="transparenc";
$resultat="<p>té<span>qliua</span></p>";
$article=array("n","e","u");
echo (ucfirst(substr(strip_tags($resultat),4,1))); //Lmaj//
echo (substr($etat,2,1)." ");//a//

echo($etat.$article[1]." "); //transparence//

echo ($article[1].substr($etat,4,1).substr($etat,0,1)." "); //est//

echo ($article[2].$article[0].$article[1]." ");//une//

echo (substr(strip_tags($resultat),3,1).substr(strip_tags($resultat),6,2).substr(strip_tags($resultat),4,2).substr(strip_tags($resultat),0,3)); //qualité//
?>