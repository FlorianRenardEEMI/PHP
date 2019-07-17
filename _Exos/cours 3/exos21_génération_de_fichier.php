<?php

$file = fopen("test.txt","w+");
fwrite($file,"fonction ok"); // le texte "fonction ok" peut être remplacé par une variable $texte par ex
fclose($file);

echo("Fichier créer");

?>