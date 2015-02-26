<?php
session_start();

    // Enregistrement dans la BD
    $db = mysql_connect('127.0.0.1', 'yachironi_1', ''); 
    mysql_select_db('carnetadresses',$db); 
    $sql = "SELECT * FROM `adresse`;"; 
    $result = mysql_query($sql);
    $rows = array();
   while($r = mysql_fetch_assoc($result)) {
     $rows[] = $r;
   }

 print json_encode($rows);
    mysql_close($db);


//session_destroy();
?>