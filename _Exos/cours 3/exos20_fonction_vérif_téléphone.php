<?php

function verif_tel($tel)

{

    if (strlen($tel)!=10) 
    {
        return ("le numéro n'est pas au format attendu");
    } 
    
    elseif (strpos($tel," ") != false) 
    {
        return ("espaces interdits");
    }

    elseif (is_numeric($tel) == false) /*elseif (!is_numeric($tel))*/
    { 
        return ("caractères interdits");
    }

    elseif ((substr($tel,0,1) != "0") or (substr($tel,1,1)== "0"))
    {
        return ("problème d'intégrité");
    }
    else{
        return ("format correct");
    } 

}


$telephone = "03 42 25 5";
echo ($telephone." : ".verif_tel($telephone)."<br>");

$telephone = "034m025252";
echo ($telephone." : ".verif_tel($telephone)."<br>");

$telephone = "3021254521";
echo ($telephone." : ".verif_tel($telephone)."<br>");

$telephone = "0021632658";
echo ($telephone." : ".verif_tel($telephone)."<br>");

$telephone = "0145561561";
echo ($telephone." : ".verif_tel($telephone)."<br>");

