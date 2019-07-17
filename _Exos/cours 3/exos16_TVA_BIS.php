
<?php

function ttc ($prixht,$tva)

{
    $prixttc = $prixht * (1+($tva/100));

    return ($prixttc);
}

$prixht= 200;
$tva=20;

echo(ttc($prixht,$tva));

?>