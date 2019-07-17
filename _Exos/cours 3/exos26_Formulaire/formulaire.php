<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    <h1>formulaire</h1>

<form action="formulaire_traitement.php" method="post">

<div>

    <div> <!--question -->
    <label for="q1"> quelle est votre couleur préférée ?</label> 
    </div> 

    <div><!--reponse -->
    <input type="text" name="q1" id="q1" required/> <!--name et id sont obligatoire -->
    </div>

</div>

<div>

    <div> <!--question -->
    <label for="q2"> quelle est votre plat préféré ?</label> 
    </div> 

    <div><!--reponse -->

    <select name="q2" id="q2" required>
    <option value="" selected>Sélectionnez</option> <!--ne pas mettre zéro en value, car s'il y a zéro ça passera en BdD --> <!--l'attribut selected, permet de choisir quelle valeur on souhaite afficher en 1er. -->
    <option value="1">Pizza</option>
    <option value="2">Burger</option>
    <option value="3">côte de boeuf</option>
    <option value="4">Pâtes</option>
    <option value="5">Raclette</option>
    <option value="6" disabled>salade</option> <!--disabled permet de griser une réponse -->
    </select>

    </div>

</div>

<div>

    <div> <!--question -->
    <label for="q3"> aimez-vous le PHP ?</label> 
    </div> 

    <div><!--reponse -->
    <input type="radio" name="q3" id="q3" value="1"/>oui <!--name et id sont obligatoire -->
    <input type="radio" name="q3" checked value="0"/>non <!--ici on ne met pas d'id car en HTML il ne peux y avoir qu'un ID --> <!--"checked" permet de cocher par defaut la case non -->
    </div>

</div>

<div>
<input type = "submit" value="envoyer les réponses"/>
</div>

</body>
</html>