<?php

require_once "../utils/connect_db.php";



if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../front/formulaire/login.php');
    return;
}


if (
    !isset(
        $_POST['email'],
        $_POST['password'],

    )
) {
    header('location: ../front/formulaire/login.php');
    return;
}


if (
    empty($_POST['email']) ||
    empty($_POST['password'])

) {
    header('location: ../front/formulaire/login.php');
    return;
}


if (
    strlen($_POST['email']) > 100 ||
    strlen($_POST['password']) > 50

) {
    header('location: ../front/formulaire/login.php');
    return;
}


$email = htmlspecialchars(trim($_POST['email']));
$password = $_POST['password'];

try {
    
$request = $pdo->prepare("SELECT * FROM users WHERE email = :email");
$request->bindParam(":email", $email);
$request->execute();

$mail = $request->fetch(PDO::FETCH_ASSOC);

if(!$mail){

header("Location: ../front/formulaire/login.php?error=1");

} else{

if(password_verify($password, $mail["password"])){



}else {

    header("Location: ../front/formulaire/login.php?error=1");

}

}

} catch (\PDOException $error) {
    throw $error;
}