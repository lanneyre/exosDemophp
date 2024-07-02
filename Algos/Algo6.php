<?php
do {
    $reponse = readline("Donnes moi un nombre, je te dirai s'il est premier ou pas : ");
    // } while (!is_numeric($reponse) || $reponse != (int)$reponse);
} while (!ctype_digit($reponse));
if ($reponse < 0) {
    echo "un nombre négatif ne peux pas être premier \n";
} else if ($reponse == 0) {
    echo "0 est divisible par tous les nombres sauf lui-même : il n'est donc pas premier\n";
} else if ($reponse == 1) {
    echo "1 n'est divisible que par lui-même : il n'est donc pas premier\n";
} else {
    $diviseurs = [];
    for ($i = 1; $i <= sqrt($reponse); $i++) {
        if ($reponse % $i == 0) {
            $diviseurs[] = $i;
            $tmp = $reponse / $i;
            if (!in_array($tmp, $diviseurs)) {
                $diviseurs[] = $tmp;
            }
        }
    }
    sort($diviseurs, SORT_NUMERIC);
    if (sizeof($diviseurs) == 2) {
        echo "$reponse est premier !\n";
    } else {
        echo "$reponse n'est pas premier et voici ses diviseurs : \n";
        foreach ($diviseurs as $diviseur) {
            echo "- $diviseur\n";
        }
    }
}
