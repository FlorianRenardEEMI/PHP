<?php

$chiffre=mt_rand(0,9);

$nb = 1;

while ($chiffre !=9)

{
    echo ($chiffre." vous avez perdu<br>");
    
    $chiffre=mt_rand(0,9);

    $nb++;

}

echo ($chiffre." vous avez gagné en ".$nb." tentatives <br>");


?>