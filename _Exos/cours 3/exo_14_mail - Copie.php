<?php

// Déclaration d'un tableau indexé numériquement

$entete = array("Nom","Prénom","E-mail");

// Déclaration d'un tableau multidimensionnel

$contact = array (

        array (
        "nom" => "Boizard",
        "prenom" => "Léo",
        "mail" => "leo.boizard@eemi.com"
        ),
    
        array (
        "nom" => "Cohen",
        "prenom" => "Shirel",
        "mail" => "shirel.cohen@eemi.com"
        ),

        array (
        "nom" => "Benguigui",
        "prenom" => "Lauren",
        "mail" => "lauren.benguigui@eemi.com"
		),
			
		array (
		"nom" => "renard",
		"prenom" => "florian",
		"mail" => "florian.renard@eemi.com"
		)

);

?>

<?php
// affichage du tableau multidimensionnel
echo("<br>")
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Exercice 14</title>
</head>
<body>
<h1>Feuille de présence</h1>
<table border="1" align="center" width="80%" cellspacing="0" cellpadding="10">
	
<?php for ($i=0;$i<count($contact);$i++) ?>
	<tr>
		<th><?php echo($entete[0]); ?></th>
		<th><?php echo($entete[1]); ?></th>
		<th><?php echo($entete[2]); ?></th>
	</tr>
	<tr>
		<td><?php echo($contact[$i]["nom"]); ?></td>
		<td><?php echo($contact[$i]["prenom"]); ?></td>
		<td><?php echo($contact[$i]["mail"]); ?></td>
</tr>

</table>
</body>
</html>

<?php
// ici, on met la variable i et une boucle "for" afin de pouvoir être affranchi d'unne limite qu'on impose.
echo("<br>")
?>


<?php for ($i=0;$i<=2;$i++) {?>

<tr>
		<td><?php echo($contact[$i]["nom"]); ?></td>
		<td><?php echo($contact[$i]["prenom"]); ?></td>
		<td><?php echo($contact[$i]["mail"]); ?></td>
</tr>

<?php } ?>

<?php
// changement de la limite de 2 avec le fait de compter
echo("<br>")
?>

<?php
// saut de ligne
echo("<br>")
?>

 



<?php ?>


<?php
// application de l'adresse mail cliquable
echo("<br>")
?>

<?php
// saut de ligne
echo("<br>")
?>

<?php for ($i=0;$i<count($contact);$i++) {?> 

<tr>
		<td><?php echo($contact[$i]["nom"]); ?></td>
		<td><?php echo($contact[$i]["prenom"]); ?></td>
		<td><?php echo("<a href=\"mailto:".$contact[$i]["mail"]."\">".$contact [$i]["mail"]."</a>"); ?> </td>
</tr>

<?php } ?>


