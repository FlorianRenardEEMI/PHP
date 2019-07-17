<?php

function creer_fichier($file,$texte)

{

$lien = fopen($file,"w+") or die("erreur"); // le "die" sort de la facontion et le echo est induit
if (!fwrite($lien,$texte))

{
return(false);
}

fclose ($lien) or die("erreur");

return(true);

}


$file = "exercice21.csv";
$texte = "nom;prenom;mail\n"; // \n = saut de ligne dans excel
$texte .="RENARD;Florian;florian.renard@eemi.com\n";
$texte .="RENARD;Florian;florian.renard@eemi.com\n";
$texte .="RENARD;Florian;florian.renard@eemi.com\n";

$texte = utf8_decode($texte);

if (creer_fichier($file,$texte))

{
echo("Fichier créé");
}

else

{
echo("erreur");
}

?>