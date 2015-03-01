<?php
    // Lecture de la base de données
    $db = mysql_connect('127.0.0.1', 'yachironi_1', ''); // Connection à la base de données
    mysql_select_db('carnetadresses',$db);  // Spécification du nom de la base de données
    $sql = "SELECT * FROM `adresse` ORDER BY  `adresse`.`nom` ASC;"; // Requête SQL qui donne les adresse ordonnée par les noms
    $result = mysql_query($sql);  // Envoie de la requête au serveur de bose de donnée
    $rows = array(); // Initialisation du variable des résultats 
   while($r = mysql_fetch_assoc($result)) { // Parcours des résultats donnée par la 
     $rows[] = $r;
   }
    echo '{"adresses":'.json_encode($rows).'}'; // Retour du résultat en format JSON
    mysql_close($db); // Fermeture de la connection ouverte avec le serveur de base de données
?>