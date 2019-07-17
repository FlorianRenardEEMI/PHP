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

<div class="PDF_Button">
<input type="button" value="Générer un PDF">
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

echo ("fait le : ".$day." ");
?>

à : Paris <!--insérer fonction PHP pour que sa reprenne la ville du client besoin de BdD ?-->

</div>
<br>

<div class="numfact"><!--trouver comment incrémenter-->
<?php

$i = mt_rand(0,9000);

echo ("N° de facture : ".$i." ");
?>
</div>

</header>

<!-- fin d'en tête-->

<!-- tableau-->

<section class="tableau">

<?php $entete = array("Référence","Libellé","PU","Qté","Total_1");

$produit = array(

    array (
    "Référence" => "CM",
    "Libellé" => "Carte mère MSI B450 GAMING PLUS",
    "PU" => $PU = mt_rand (1,20),
    "Qté" => $Qté = mt_rand (1,10)
    ),
    
    array (
    "Référence" => "CPU",
    "Libellé" => "Intel Core i7 8700",
    "PU" => $PU = mt_rand (1,20),
    "Qté" => $Qté = mt_rand (1,10)
    
    ),

    array(
    "Référence" => "GPU",
    "Libellé" => "carte graphique NVIDIA Titan RTX",
    "PU" => $PU = mt_rand (1,20),
    "Qté" =>$Qté = mt_rand (1,10)
    
    ),

    array(
    "Référence" => "display",
    "Libellé" => "écran Acer Predator X27",
    "PU" => $PU = mt_rand (1,20),
    "Qté" => $Qté = mt_rand (1,10)
    
    ),

    array(
    "Référence" => "Keyboard",
    "Libellé" => "clavier Asus ROG Horus GK2000 V2 - Cherry MX Red",
    "PU" => $PU = mt_rand (1,20),
    "Qté" => $Qté = mt_rand (1,10)
    
    )

)

?>

<table border="1" align="center" width="80%" cellspacing="0" cellpadding="10">

	<tr class="entete">
		<th><?php echo($entete[0]); ?></th>
		<th><?php echo($entete[1]); ?></th>
        <th><?php echo($entete[2]); ?></th>
        <th><?php echo($entete[3]); ?></th>
        <th><?php echo($entete[4]); ?></th>
    </tr>

<?php
$Total_Ht=0;
foreach($produit as $pdt)
{
?>

<tr>
		<td><?php echo($pdt["Référence"]); ?></td>
		<td><?php echo($pdt["Libellé"]); ?></td>
        <td><?php echo($pdt["PU"]); ?></td>
        <td><?php echo($pdt["Qté"]); ?></td>
        <?php $total= $pdt["PU"]*$pdt["Qté"];?>
        <?php $Total_Ht = $Total_Ht + $total;?>
        <td><?php echo $total; ?></td>
    </tr>
<?php   
}
?>

<?php

$TX_TVA="0.20";

$Total_TVA= $total*$TX_TVA;

$Total_TTC = $total + $Total_TVA;

?>

</table>

<table class="total" border="1" align="center" width="80%" cellspacing="0" cellpadding="10">
<td><?php echo"Total HT : ".($Total_Ht)." €"; ?></td>
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