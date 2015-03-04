<?php
       // Lecture de la base de données
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT'));
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));
echo "here 1";
    $db = mysql_connect(DB_HOST, DB_USER,DB_PASS ); // Connection à la base de données
    mysql_select_db('carnetadresses',$db);  // Spécification du nom de la base de données
    $sql = "SELECT * FROM `adresse` ORDER BY  `adresse`.`nom` ASC;"; // Requête SQL qui donne les adresse ordonnée par les noms
    $result = mysql_query($sql);  // Envoie de la requête au serveur de bose de donnée
    $rows = array(); // Initialisation du variable des résultats
$i=0;
echo "here 2";
   while($r = mysql_fetch_assoc($result)) { // Parcours des résultats donnée par la
     $rows[] = $r;
echo $i+++"  ";
   }
echo "here 3";
if($db){
//echo '{"adresses":'.json_encode($rows).'}'; // Retour du résultat en format JSON
echo "yasser";
}
if($result){
echo "Erreur dans la rêquete";
} 
if{
echo "Erreur de connection à la base";}
    mysql_close($db); // Fermeture de la connection ouverte avec le serveur de base de données
?>
