<?php

$texte="test";

$file = fopen("test.txt","w+");
fwrite($file,$texte); // le texte "fonction ok" peut être remplacé par une variable $texte par ex
fclose($file);

echo("Fichier créer");

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Facture</title>
</head>
<body>
<!-- en tête-->
<header class="header">

<div class="logo">
<img class="image" src="./images/logo.jpg" alt="logo" title="logo"/>
</div>

<h1 class="title">Hellfox Company</h1>

<div class="adresse_frs">
<p>Hellfox Company</p>
<p>15 rue Voltaire</p>
<p>93150 Le Blanc-mesnil</p>
</div>

<!--insérer fonction PHP pour que : 
- le nom, le prénom, l'adresse, le CP et la ville soit en variable-->
<div class="adresse_clt">
<p>Pierre VELON</p>
<p>28 place de la Bourse</p>
<p>75002 PARIS</p>
</div>

<div>

<?php
$day = date("d/m/Y");

date_default_timezone_set("Europe/Paris"); 

echo ("fait le ".$day." ");
?>

à : Paris <!--insérer fonction PHP pour que sa reprenne la ville du client besoin de BdD ?-->

</div>
<br>

<div class="numfact"><!--trouver comment incrémenter-->
<?php

$i = 0;
if ($i = 0)
{
    $i++;
}

echo ("N° de facture ".$i." ");
?>
</div>

</header>

<!-- fin d'en tête-->

<!-- tableau-->

<section class="tableau">

<?php $entete = array("Référence","Libellé","PU","Qté","Total_1");

$PU1 = mt_rand(0,1000);
$PU2 = mt_rand(0,2000);
$PU3 = mt_rand(0,3000);
$PU4 = mt_rand(0,4000);
$PU5 = mt_rand(0,5000);

$Qté1 = mt_rand(1,10);
$Qté2 = mt_rand(1,20);
$Qté3 = mt_rand(1,30);
$Qté4 = mt_rand(1,40);
$Qté5 = mt_rand(1,50);

$Total1 = $PU1 * $Qté1;
$Total2 = $PU2 * $Qté2;
$Total3 = $PU3 * $Qté3;
$Total4 = $PU4 * $Qté4;
$Total5 = $PU5 * $Qté5;

$Total_HT = $Total1+$Total2+$Total3+$Total4+$Total5;

$TX_TVA="0.20";

$Total_TVA= $Total_HT*$TX_TVA;

$Total_TTC = $Total_HT + $Total_TVA;

$produit1 = array(
    "Référence" => "CM",
    "Libellé" => "Carte mère MSI B450 GAMING PLUS",
    "PU" => $PU1." €",
    "Qté" =>$Qté1,
    "Total_1" => $Total1." €",
    );

    $produit2 = array(
        "Référence" => "CPU",
        "Libellé" => "Intel Core i7 8700",
        "PU" => $PU2." €",
        "Qté" => $Qté2,
        "Total_1" => $Total2." €",
        );

        $produit3 = array(
            "Référence" => "GPU",
            "Libellé" => "carte graphique NVIDIA Titan RTX",
            "PU" => $PU3." €",
            "Qté" =>$Qté3,
            "Total_1" => $Total3." €",
            );

            $produit4 = array(
                "Référence" => "display",
                "Libellé" => "écran Acer Predator X27",
                "PU" => $PU4." €",
                "Qté" => $Qté4,
                "Total_1" => $Total4." €",
                );

                $produit5 = array(
                    "Référence" => "Keyboard",
                    "Libellé" => "clavier 
                    Asus ROG Horus GK2000 V2 - Cherry MX Red",
                    "PU" => $PU5." €",
                    "Qté" => $Qté5,
                    "Total_1" => $Total5." €",
                    );

    ?>
    
<table border="1" align="center" width="80%" cellspacing="0" cellpadding="10">
	<tr>
		<th><?php echo($entete[0]); ?></th>
		<th><?php echo($entete[1]); ?></th>
        <th><?php echo($entete[2]); ?></th>
        <th><?php echo($entete[3]); ?></th>
        <th><?php echo($entete[4]); ?></th>
	</tr>
	<tr>
		<td><?php echo($produit1["Référence"]); ?></td>
		<td><?php echo($produit1["Libellé"]); ?></td>
        <td><?php echo($produit1["PU"]); ?></td>
        <td><?php echo($produit1["Qté"]); ?></td>
        <td><?php echo($produit1["Total_1"]); ?></td>
    </tr>
    <tr>
		<td><?php echo($produit2["Référence"]); ?></td>
		<td><?php echo($produit2["Libellé"]); ?></td>
        <td><?php echo($produit2["PU"]); ?></td>
        <td><?php echo($produit2["Qté"]); ?></td>
        <td><?php echo($produit2["Total_1"]); ?></td>
    </tr>
    <tr>
		<td><?php echo($produit3["Référence"]); ?></td>
		<td><?php echo($produit3["Libellé"]); ?></td>
        <td><?php echo($produit3["PU"]); ?></td>
        <td><?php echo($produit3["Qté"]); ?></td>
        <td><?php echo($produit3["Total_1"]); ?></td>
    </tr>
    <tr>
		<td><?php echo($produit4["Référence"]); ?></td>
		<td><?php echo($produit4["Libellé"]); ?></td>
        <td><?php echo($produit4["PU"]); ?></td>
        <td><?php echo($produit4["Qté"]); ?></td>
        <td><?php echo($produit4["Total_1"]); ?></td>
    </tr>
    <tr>
		<td><?php echo($produit5["Référence"]); ?></td>
		<td><?php echo($produit5["Libellé"]); ?></td>
        <td><?php echo($produit5["PU"]); ?></td>
        <td><?php echo($produit5["Qté"]); ?></td>
        <td><?php echo($produit5["Total_1"]); ?></td>
	</tr>

</table>

<table class="total" border="1" align="center" width="80%" cellspacing="0" cellpadding="10">
<td><?php echo"Total HT : ".($Total_HT)." €"; ?></td>
</table>

<table class="total" border="1" align="center" width="80%" cellspacing="0" cellpadding="10" >
<td><?php echo"Total TVA : ".($Total_TVA)." €"; ?></td>
</table>

<table class="total" border="1" align="center" width="80%" cellspacing="0" cellpadding="10">
<td><?php echo"Total TTC : ".($Total_TTC)." €"; ?></td>
</table>

</section>

<!-- fin de tableau-->

<!-- pied de page-->

<footer class="footer">

<p>Nos factures sont payables sur leur lieu d'émission. De convetion expresse, toute contestation est de la compétence du Tribunal de commerce du siège social d'Hellfox Company. Pas d'escompte pour paiement anticipé. A défaut de paiement à la date d'échéance de la facture, des pénalités au taux égal à 3 fois le taux d'intérêts légal seront dues. Délais de paiement (Article L441-6 du code du commerce) TVA acquittée sur les débits.</p>

<p>En application des articles L441-3 et suivants, et D441-5, du code du commerce, tout professionnel en situation de retard de paiement est de plein droit débiteur, à l'égard du créancier, d'une indemnité forfaitaire pour frais de recouvrement d'un montant fixé à 40€ par facture. Si les frais de recouvrement exposés sont supérieurs au montant de cette indemnité forfaitaire, une indemnisation complémentaire pourra être demandée, sur justification.</p>

<p>Hellfox Company SA</p>
<p>dont le Siège Social est située : 15 rue Voltaire 93150 Le Blanc-mesnil</p>
<p>immatriculé au RCS de Bobigny N°: 572 063 972 et à l'ORIAS N° 07 029 667(www.orias.fr)</p>
<p>Siret : 572 063 972 00358</p>
<p>N° de TVA intracommunautaire : FR28572063972</p>
<p>code NAF : 7711B</p>

</footer>

<!-- fin du pied de page-->

</body>
</html>