<?php
$bdd = new PDO('mysql:host=db5000279677.hosting-data.io;dbname=dbs272992', 'dbu289374', 'MPJDaca31!',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // on se connecte a la base de données et on gère les erreurs grace a array(PDO::)
$reponse = $bdd->query('SELECT nom, date, heure FROM rdv'); // on effectue une requete sql (récuperer tous les champs de la table rdv) et on le stocke dans une variable reponse 
while ($donnees = $reponse->fetch()) // on effectue une boucle qui s'éxécute tant qu'il y'a des données (fetch = recuperer une nouvelle ligne a chaque fois)
{
    echo '<p>' . $donnees['nom'] . ' -  ' . $donnees['date'] . ' -  ' . $donnees['heure'] . '</p>'; // on affiche le résultat
} 

?>