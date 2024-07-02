<?php
//je définis le mois et l'année en cours
$moisEnCours = date("n");
$anneeEnCours = date("Y");

$month = date("F", mktime(0, 0, 0, $moisEnCours, 1, $anneeEnCours));
// je récupère le premier jour du mois
$firstDay = date("N", mktime(0, 0, 0, $moisEnCours, 1, $anneeEnCours));
// je récupère le nb de jours du mois en cours
$nbJours = date("t", mktime(0, 0, 0, $moisEnCours, 1, $anneeEnCours));
// tablea contenant les jours de la semaine
// $semaine = array("Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim");
$semaine = array("Lu", "Ma", "Me", "Je", "Ve", "Sa", "Di");

echo $month . " " . $anneeEnCours . "\n";

foreach ($semaine as $sem) {
    echo "\t" . $sem . "\t|";
}
echo "\n";
//je créé le décalage en le remplissant par les jours qui vont biens
for ($i = 1; $i < $firstDay; $i++) {
    echo "\t   \t|";
}
// pour i allant de 1 au nombre de jours dans le mois je créé une cellule avec le numéro du jours
for ($i = 1; $i <= $nbJours; $i++) {
    # code...
    echo "\t" . ($i < 10 ? "0" . $i : $i) . "\t|";
    //j'incremente $first jour pour savoir quand changer de ligne
    $firstDay++;
    //si firstDay vaux 8 je ferme ma balise tr et j'en ouvre une autre : je change de ligne
    if ($firstDay == 8) {
        $firstDay = 1;
        echo "\n";
    }
}
// je comble mon tableau pour que chaque ligne soit pleine
for ($i = 1; $i <= (8 - $firstDay); $i++) {
    echo "\t   \t|";
}
echo "\n";
