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
}

echo json_encode($erreurs);

//session_destroy();
?>