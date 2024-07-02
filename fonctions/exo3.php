<?php
echo "Un tableau de 10 cases sur 10, vous devez créez une fonction qui prend deux arguments, le premier de type char le second de type int, ce seront les coordonnées horizontales et verticales du tableau.\nLa fonction doit retourner trois valeurs différentes:\n[1] Si les coordonnées correspondent à une case grise, votre fonction doit afficher touché.\n[2] Si les coordonnées correspondent à une case blanche, votre fonction doit afficher loupé.\n[3] Si les coordonnées ne correspondent à aucune case, votre fonction doit afficher hors-jeu.\nContrainte: Vous ne devez pas dépasser 30 lignes, avec un code correctement indenté.\n\n";

function toucheCoule($h, $v)
{
    //je créé un tableau contenant des tableaux avec les coordonnées des cases grises
    $touche = array(
        array("f", 3),
        array("f", 4),
        array("f", 5),
        array("i", 5),
        array("i", 6),
        array("c", 9),
        array("d", 9),
        array("e", 9),
        array("f", 9)
    );
    // je test si $h est un string et $v un int
    // si le typage n'est pas respécté la fonction renvoi "Hors-jeu"
    if (!is_string($h) || !is_int($v)) {
        return "Hors-jeu";
    } else {
        /* 
        Si $h n'est pas compris entre a ou j (peu importe la casse) 
        ou
        Si $v est inférieur stricte à 1
        ou
        Si $v est supérieur stricte à 10
        Alors
        les coordonnées sont hors limites donc la fonction renvoi "Hors-jeu"
        */
        if (!preg_match("/[a-j]/i", $h) || $v < 1 || $v > 10) {
            return "Hors-jeu";
        } else {
            //Sinon je créé une variable contenant les coordonnées tout en minuscule que je compare à mon tableau $touche
            $coord = array(strtolower($h), $v);
            //Si $coord est dans le tableau $touche alors renvoyer "Touché" sinon renvoyer "Loupé"
            //in_array permet de chercher si le premier argument (peu importe son type) se trouve dans le tableau passé en second
            if (in_array($coord, $touche)) {
                return "Touché";
            } else {
                return "Loupé";
            }
        }
    }
}
//test de ma fonction
echo " ''12 : " . toucheCoule("", 12);
echo "\n------------------\n";
echo " E8 : " . toucheCoule("E", 8);
echo "\n------------------\n";
echo " f3 : " . toucheCoule("F", 3);
echo "\n";
