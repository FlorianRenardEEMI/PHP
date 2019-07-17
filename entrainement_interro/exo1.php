<?php

function generation_mdp ()

{
    $password = "";
    
    // Déclaration d'un tableau indexé numériquement

    $alphabet = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");

    $special = array("!","*","/","+",".");

    $nombre = mt_rand (0,25); 

    $password .= $alphabet[$nombre]; // choisi la 1 ère lettre au hasard

    $nombre = mt_rand (0,25); 

    $password .= $alphabet[$nombre]; // choisi la 2 ème lettre au hasard

    $nombre = mt_rand (0,25); 

    $password .= $alphabet[$nombre]; // choisi la 3 ème lettre au hasard

    $nombre = mt_rand (0,25); 

    $password .= $alphabet[$nombre]; // choisi la 4 ème lettre au hasard

    $nombre = mt_rand (0,25); 

    $password .= $alphabet[$nombre]; // choisi la 5 ème lettre au hasard

    $password .= mt_rand (0,9); // chiffre 6 ème position
    $password .= mt_rand (0,9); // chiffre 7 ème position

    $nombre = mt_rand (0, count($special)-1); // dans le tableau des caractères spéciaux, choisi au hasard le caractère

    $password .= $special [$nombre]; // choisi au hasard un caractère spécial

    $password = ucfirst($password); // met le 1er caractère en majuscule

    return ($password);


}

echo ("<strong> Les mots de passe doivent contenir au moins une lettre, un chiffre, une majuscule et un caractère spécial. Par
exemple : ".generation_mdp()."</strong>")


?>