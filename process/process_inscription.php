
<?php
require_once './utils/connect_db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
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
    header('location: ./index.php');
    return;
}

if (
    empty($_POST['username']) ||
    empty($_POST['prenom']) ||
    empty($_POST['name']) ||
    empty($_POST['password'])

) {
    echo "Veuillez remplir tous les champs";
    return;
}

// input sanitization
$username = htmlspecialchars(trim($_POST['username']));
$prenom = htmlspecialchars(trim($_POST['prenom']));
$name = htmlspecialchars(trim($_POST['name']));





function inscription ($pdo, $username)
{
    // Préparation de la requête SQL avec un paramètre lié
    $sql = "INSERT INTO users (email,password,username,nom,prenom) VALUES (:pseudo)";
    $stmt = $pdo->prepare($sql);

    

    // Liaison du paramètre 'pseudo' avec la valeur de la variable $pseudo
    $stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);

    // Exécution de la requête
    $stmt->execute();

    // Retourne vrai si le pseudo existe (compte > 0), sinon faux
    return $stmt->fetchColumn() > 0;
};


function creerPseudo($pdo, $pseudo)
{
    $sql = "INSERT INTO user (pseudo) VALUES (:pseudo)";
    $stmt = $pdo->prepare($sql);
    // Liaison du paramètre 'pseudo' avec la valeur de la variable $pseudo
    $stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    // Exécution de la requête
    $stmt->execute();
}

session_start();

if (pseudoExiste($pdo, $pseudo)) {
    $_SESSION['user'] = $pseudo;
    header('location: ./theme.php');
    exit;
} else {

    creerPseudo($pdo, $pseudo);
    $_SESSION['user'] = $pseudo;
    header('location: ./theme.php');
    exit;
}
