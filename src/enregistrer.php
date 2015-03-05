<?php
/*
 * Ce fichier vérifie la validité des champs et enregi
 */

$erreurs = array(); // Variable contenant les messages d'erreur pour chaque champ

/*
 * Récupération des variables de la requête poste
 */
$nom = $_POST['nom'];
$email = $_POST['email'];
$notes = $_POST['notes'];

// Initialisation des erreurs à true : Pas d'erreurs
$erreurs['nom'] = "true";
$erreurs['email'] = "true";

// Vérification de l'email
if ($email == "") {
    $erreurs['email'] = "le mail est vide";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs['email'] = "mail invalide";
}

// Vérification de nom
if ($nom == "") {
    $erreurs['nom'] = "le nom est vide";
}else if(strlen($nom)<2||strlen($nom)>20){
        $erreurs['nom'] = "Le nom doit comporter entre 2 et 20 caractères";
}

// Enregistrement dans la base de donnée
if($erreurs['nom']=="true"&&$erreurs['email']=="true"){
    // Enregistrement dans la BD
    $db = mysql_connect('127.9.143.130','adminQcfpaGS','9-TQXvf-48mW');
    mysql_select_db('carnetadresses',$db); 
    $sql = "INSERT INTO  `carnetadresses`.`adresse` (`nom` ,`email` ,`notes`) VALUES ('$nom',  '$email',  '$notes');"; 
    $req = mysql_query($sql);
    if($db==false){
        $erreurs['nom']="Erreur de connection a la base de donnee ";
    }else if( $req==false){
        $erreurs['nom']="requette mal forme ";
    }
    mysql_close($db);
}

// Transformation du tableau d'erreurs sous format JSON
echo json_encode($erreurs);

?>
