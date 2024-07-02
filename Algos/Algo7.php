<?php
$essai = 8;
echo "Imagine un nb entre 1 et 100 je vais essayer de le deviner en moins de $essai essais\n";
$plus = ["+", "plus", "p"];
$moins = ["-", "moins", "m"];
$egal = ["=", "egal", "e"];
$min = 1;
$max = 100;
do {
    $proposition = rand($min, $max);
    $msg = "\n[Essai(s) restant(s) : $essai] Je pense à $proposition !\nEst-ce +, - ou = ?\n";
    do {
        echo $msg;
        $reponse = strtolower(readline(""));
        if (!in_array($reponse, $egal) && !in_array($reponse, $plus) && !in_array($reponse, $moins)) {
            $boucleContinue = true;
            $msg .= "Je suis un peu c**, je n'ai pas compris ce que tu m'as dis !\n";
        } else {
            $boucleContinue = false;
        }
    } while ($boucleContinue);
    $essai--;
    if (in_array($reponse, $egal)) {
        echo "Yeah j'ai trouvé je suis trop fort et en plus il me restait encore $essai tentative(s) !\n";
        exit;
    }
    if (in_array($reponse, $plus)) {
        $min = $proposition + 1;
    }
    if (in_array($reponse, $moins)) {
        $max = $proposition - 1;
    }
} while ($essai > 0);
echo "Bouh j'ai perdu, je suis mauvais\n";
