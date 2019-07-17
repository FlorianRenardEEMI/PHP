<?php
echo "<br><br>";//Exercice 7//
$libelle ="ce module";
$mot = "rappel";
$matiere = "php";

$libelle=ucfirst($libelle);
$mot=str_replace($mot,"s'appelle",$mot);
$matiere=strtoupper($matiere);
echo($libelle." ".$mot." ...".$matiere."/MySQL !");
?>