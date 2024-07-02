<?php
echo "Devine le nombre  !\n";
$nbMyst = rand(1,100);
$reponse = 0;
do{
    $tmp = readline("Donne moi un nombre compris entre 1 et 100 : ");
    if(!is_numeric($tmp)){
        echo "Un nombre pas un string\n";
        continue;
    }
    $reponse = (integer)$tmp;
    if($reponse < 1 || $reponse > 100){
        echo "Un nombre entre 1 et 100\n";
        continue;
    }
    if($reponse > $nbMyst){
        echo "Plus petit !\n";
    }
    if($reponse < $nbMyst){
        echo "Plus grand !\n";
    }
}while($reponse!=$nbMyst);
echo "Bravo !\n";