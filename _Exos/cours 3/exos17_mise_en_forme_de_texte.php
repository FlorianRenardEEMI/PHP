<?php

function change_string ($string)

{
    $string = strtoupper($string);
    $string = strip_tags($string);
    $string = str_replace(" ","",$string);

    $debut = substr($string,0,2);
    $troisieme = substr($string,2,1);
    $quatrieme = substr($string,3,1);
    $fin = substr($string,4);
   
    $string = $debut.$quatrieme.$troisieme.$fin;

    return ($string);
}

$phrase="<div> nosu sommes les fast-tracks </div>";

echo (change_string($phrase));

?>