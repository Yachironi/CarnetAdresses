<?php
session_start();
$erreurs = array();
$nom = $_POST['nom'];
$email = $_POST['email'];
$notes = $_POST['notes'];
/*
$nom = "dd";
$email = "a@s.f";
$notes = "";*/

$erreurs['nom'] = "true";
$erreurs['email'] = "true";

if ($email == "") {
    $erreurs['email'] = "le mail est vide";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs['email'] = "mail invalide";
}

if ($nom == "") {
    $erreurs['nom'] = "le nom est vide";
}else if(strlen($nom)<2||strlen($nom)>20){
        $erreurs['nom'] = "Le nom doit comporter entre 2 et 20 caractères";
}

echo json_encode($erreurs);

//session_destroy();
?>