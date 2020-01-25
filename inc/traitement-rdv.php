<?php
$host = 'db5000279677.hosting-data.io';
$dbname = 'dbs272992';
$username = 'dbu289374';
$password = 'MPJDaca31!';
if(isset($_POST['insert'])){
  try {
  // on se connecte a la base de données 
  $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }
  // on récupérer les valeurs du foermulaire
  $nom = $_POST['nom'];
  $date = $_POST['date'];
  $heure = $_POST['heure'];
  // Requête mysql pour insérer des données dans la table rdv
  $sql = "INSERT INTO `rdv`(`nom`, `date`, `heure`) VALUES (:nom,:date,:heure)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":nom"=>$nom,":date"=>$date,":heure"=>$heure));
  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo 'Données insérées, <a href="../post.php">cliquez ici</a> pour revenir sur le site';
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>