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

<h1 class="logo">SORTIES DE LA SEMAINE</h1>

</header>

<!-- fin d'en tête-->

<!-- tableau des films-->

<section class="tableau">

<?php 

$films = array(

    array (
    "Titre" => "Advengers Endgame",
    "image" => "advengers.jpg",
    "auteur" => "Joe Russo",
    
    ),
    
    array (
    "Titre" => "Victor et Célia",
    "image" => "victor.jpg",
    "auteur" => "Pierre Jolivet",
    ),

    array(
    "Titre" => "L'adieu à la nuit",
    "image" => "adieu.jpg",
    "auteur" => "André Téchiné",
    
    ),

    array(
    "Titre" => "Mais vous êtes fous",
    "image" => "mais.jpg",
    "auteur" => "Audrey Diwan",
    
    ),

    array(
    "Titre" => "Dumbo",
    "image" => "dumbo.jpg",
    "auteur" => "Tim Burton",
        
    ),

    array(
    "Titre" => "Tanguy, le retour",
    "image" => "tanguy.jpg",
    "auteur" => "Étienne Chatiliez",         
    ),

    array(
    "Titre" => "Le parc des merveilles",
    "image" => "parc.jpg",
    "auteur" => "Dylan Brown",         
    ),

    array(
    "Titre" => "Royal Corgi",
    "image" => "corgy.jpg",
    "auteur" => "Ben Stassen",   
)

)

?>



<?php

foreach($films as $film)

{

?>
<tr>
        <td><?php echo("<img src=\"images/".$film["image"]."\">"); ?></td>
        <td><?php echo($film["Titre"]); ?></td>
        <td><?php echo("De ".$film["auteur"]); ?></td>
</tr>

<?php 

}
?>

</section>
<!-- echo ("<img src = \"./images/".$film["image"]."\">"); -->
<!-- fin de tableau-->

</body>
</html>