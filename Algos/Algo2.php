<?php
echo "Donne moi un nombre je te donnerai la somme des nombres inférieurs à ton nombre \n";
$nb = 0;
do {
    $tmp = readline("Donne moi un nombre compris entre 1 et 100 : ");
} while (!is_numeric($tmp) || $tmp < 1 || $tmp > 100);
$nb = (int)$tmp;
$reponse = 0;
for ($i = 1; $i <= $nb; $i++) {
    $reponse += $i;
}

echo "Le total est " . $reponse . " !";
