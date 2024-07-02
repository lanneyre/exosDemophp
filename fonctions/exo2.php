<?php
echo "Créer une fonction qui renvoie une chaîne de caractères avec la première lettre de chaque mot en majuscule et les autres en minuscule.\n\n";

function maj($text)
{
    // strtolower : transforme une chaîne de caractères tout en minuscule
    // strtoupper : transforme une chaîne de caractères tout en majuscule
    // ucwords : met la première lettre de chaque mot de la chaine en majuscule et ignore les autres
    // ucfirst : met la première lettre de la chaine en majuscule et ignore les autres
    return ucwords(strtolower($text));
}
echo maj("aecenas non REMI LANNEY mmetus erat. l'Etiam fermentum sodales. ");
