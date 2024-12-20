<?php

session_start();

if(
    isset($_SESSION["user"]) && !empty($_SESSION["user"]) 
    
) {
    // Chemin relatif vers le fichier profilpage.php à partir du répertoire "InstaPignouf"
    $relativePath = '/front/actu/foryou.php';

    // Obtenir le chemin absolu du fichier à rediriger
    $filePath = realpath(dirname(__FILE__) . "/../" . $relativePath);

    // Générer l'URL complète en partant de la racine du serveur
    $url = "http://" . $_SERVER['HTTP_HOST'] . str_replace("C:\wamp64\www", '', $filePath);

    // Redirection vers l'URL
    header('Location: ' . $url);
    exit;
}