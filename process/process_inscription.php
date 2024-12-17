<?php 

require_once "./utils/connect_db.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../index.php');
    return;
}

if (
    !isset(
        $_POST['username'],
        $_POST['prenom'],
        $_POST['name'],
        $_POST['password'],

    )
) {
    header('location: ../index.php');
    return;
}

$pseudo = htmlspecialchars(trim($_POST['username']));
$prenom = htmlspecialchars(trim($_POST['prenom']));
$name = htmlspecialchars(trim($_POST['name']));
$password = htmlspecialchars(trim($_POST['password']));



?>