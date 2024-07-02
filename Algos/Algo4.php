<?php
$nombres = [];
for ($i = 0; $i < 3; $i++) {
    do {
        $reponse = readline("Je veux un nombre ($i)");
    } while (!is_numeric($reponse));
    $nombres[] = $reponse;
}
//sort($nombres,SORT_NUMERIC);
for ($i = 0; $i < sizeof($nombres) - 1; $i++) {
    for ($j = $i + 1; $j < sizeof($nombres); $j++) {
        if ($nombres[$i] > $nombres[$j]) {
            $tmp = $nombres[$i];
            $nombres[$i] = $nombres[$j];
            $nombres[$j] = $tmp;
        }
    }
}
print_r($nombres);
