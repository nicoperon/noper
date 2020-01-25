<div class="col-12 text-center"><h1>LISTES DES IMAGES</h1></div>

<?php
$dir_nom = 'fichiers'; // dossier listé 
$dir = opendir($dir_nom) or die('Erreur de listage : le répertoire n\'existe pas'); // on ouvre le contenu du dossier courant
$fichier= array(); // on déclare le tableau contenant le nom des fichiers
$dossier= array(); // on déclare le tableau contenant le nom des dossiers
 
while($element = readdir($dir)) {
    if($element != '.' && $element != '..') {
        if (!is_dir($dir_nom.'/'.$element)) {$fichier[] = $element;}
        else {$dossier[] = $element;}
    }
}
 
closedir($dir);
 
if(!empty($dossier)) {
    sort($dossier); // pour le tri croissant, rsort() pour le tri décroissant
    echo "<p>Liste des dossiers accessibles dans '$dir_nom' : \n\n</p>";
    echo "\t\t<ul class=rien>\n";
        foreach($dossier as $lien){
            echo "\t\t\t<li><a href=\"$dir_nom/$lien \">$lien</a></li>\n";
        }
    echo "\t\t</ul>";
}
 
if(!empty($fichier)){
    sort($fichier);// pour le tri croissant, rsort() pour le tri décroissant
    echo "<p>Liste des images accessibles sur l'hebergeur : \n\n</p>";
    echo "\t\t<ul class=rien>\n";
        foreach($fichier as $lien) {
            echo "\t\t\t<li><img src=\"$dir_nom/$lien \"></li>\n";
        }
    echo "\t\t</ul>";
 }
?>