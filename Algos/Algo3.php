<?php
for ($i=0; $i < 5; $i++) { 
    do{
        $reponse = readline("Donne moi un nombre (".($i+1)."): ");
    } while(!is_numeric($reponse));
    if($i == 0 || $reponse > $plusGrand){
        $plusGrand = $reponse;
    }
}
echo "le plus grand est : ".$plusGrand;