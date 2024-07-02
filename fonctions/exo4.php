<?php
echo "Créer une fonction qui ajoute une valeur au début d’un tableau puis une seconde qui affiche le tableau.\n\n";

//rajoute un élément au debut du tableau passé en argument
function addFirst($toAdd, $tab)
{
    array_unshift($tab, $toAdd);
    // retourne le tableau mis à jours
    return $tab;
}

//permet d'afficher le contenu de n'importe quel array tant qu'il ne possède qu'une seule dimension
function displayTab($tab)
{
    //pour chaque élément du tableau
    foreach ($tab as $value) {
        //j'affiche sa valeur
        echo $value . "\n";
    }
}

//je créé un tablea vide
$monTab = array();
//je rajoute des valeurs dedans
$monTab = addFirst("tata", $monTab);
$monTab = addFirst("toto", $monTab);
$monTab = addFirst("titi", $monTab);
//je l'affiche
displayTab($monTab);
echo "\n----------------\n";
//je rajoute des valeurs dedans
$monTab = addFirst("tutu", $monTab);
//je l'affiche
displayTab($monTab);
echo "\n----------------\n";
// displayTab == print_r()
print_r($monTab);
//le même mais avec une présentation plus friendly
echo "\n----------------\n";
print_r($monTab);
