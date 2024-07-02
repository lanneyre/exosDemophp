<?php
echo "Créer une fonction qui renvoie la longueur d’une chaîne de caractères passées en argument.\n\n";
// créer une fonction permet de la rappeler indéfiniment
// j'ai besoin d'un argument que j'appel $text 
function longueur($text)
{
    //Je renvoi une chaine de caractère contenant la chaine passée en argument et sa longueur !
    return "Dans la chaîne : \n" . $text . ",\n Il y a : " . strlen($text) . " caractères\n";
}
//j'appel ma fonction et grace au return je peux directement faire un echo du resultat
echo longueur("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae quam a quam euismod tincidunt. Cras ligula lacus, venenatis nec enim at, fermentum pulvinar tortor. Donec ac nunc et dolor lacinia tincidunt. Fusce non lacus iaculis, feugiat orci id, ullamcorper nisl. Sed faucibus auctor urna vel congue. Nulla ut egestas quam, ut imperdiet mi. Fusce tincidunt tincidunt nibh, quis iaculis dui. In nisl lorem, venenatis vel tempor ac, porta in lectus. ");
echo longueur("Duis facilisis posuere rutrum. Nam ut pulvinar lectus, id blandit enim. In diam velit, sodales ac dui a, dictum hendrerit sem. Aliquam lectus est, blandit condimentum turpis at, auctor dictum ex. Phasellus eget mauris tempus, consectetur orci et, aliquam dolor. Nulla facilisi. Phasellus molestie pellentesque lacus, a faucibus metus dictum id. Vestibulum interdum, nulla at dapibus cursus, massa neque tristique felis, at vestibulum enim leo non nulla. Suspendisse nec leo nulla. ");
