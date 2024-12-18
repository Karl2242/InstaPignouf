<?php

require_once "../utils/connect_db.php";



if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../index.php');
    return;
}


if (
    !isset(
        $_POST['email'],
        $_POST['username'],
        $_POST['prenom'],
        $_POST['name'],
        $_POST['password'],

    )
) {
    header('location: ../index.php');
    return;
}


if (
    empty($_POST['email']) ||
    empty($_POST['username']) ||
    empty($_POST['prenom']) ||
    empty($_POST['name']) ||
    empty($_POST['password'])

) {
    header('location: ../index.php?error=1');
    return;
}


if (
    strlen($_POST['email']) > 100 ||
    strlen($_POST['username']) > 50 ||
    strlen($_POST['prenom']) > 50 ||
    strlen($_POST['name']) > 50 ||
    strlen($_POST['password']) > 50

) {
    header('location: ../index.php');
    return;
}


$email = htmlspecialchars(trim($_POST['email']));
$pseudo = htmlspecialchars(trim($_POST['username']));
$prenom = htmlspecialchars(trim($_POST['prenom']));
$name = htmlspecialchars(trim($_POST['name']));
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


// Verifiation si le compte existe déjà 
try {

    $request = $pdo->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
    $request->bindParam(':username', $pseudo);
    $request->bindParam(':email', $email);
    $request->execute();

    $users = $request->fetch(PDO::FETCH_ASSOC);

    if ($users) {

        header('location: ../index.php?error=2');
        return;
    }

} catch (\PDOException $error) {
    throw $error;
}


// Insertion en base de données
try {

    $request = $pdo->prepare("INSERT INTO users (email, `password`, username, nom, prenom) VALUES ( :email, :pwd, :pseudo, :nom, :prenom);
");
    $request->bindParam(':email', $email);
    $request->bindParam(':pwd', $password);
    $request->bindParam(':pseudo', $pseudo);
    $request->bindParam(':nom', $name);
    $request->bindParam(':prenom', $prenom);
    $request->execute();

    // FAIRE LA REDIRECTION VERS LA PAGE D'ACCUEIL, DE PROFIL OU AUTRE ...

} catch (\PDOException $error) {
    throw $error;
    
};
