<?php

require_once "../utils/connect_db.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
    return;
}

if (isset($_FILES['photos'])) {

    $tmp_name = $_FILES['photos']['tmp_name'];

    $file_extension = strrchr($_FILES['photos']['type'], "/");
    $file_extension = str_replace("/", ".", $file_extension);

    $file_name = date("ymdhs") . $file_extension;
    $folder = '../image/';
    $max_size = 4000000;
    $file_size = filesize($tmp_name);
    $user_id = ":user_id";

    $extension_array = array('.png', '.jpg', '.jpeg');

    if ($file_size > $max_size) {
        $error= "Fichier trop volumineux";
    }
    if (!in_array($file_extension, $extension_array)) {
        $error= "Mauvais type de fichier";
    }
    if (!isset($error)) {
        if (move_uploaded_file($tmp_name, $folder . $file_name)) {
           
            $request = $pdo->prepare("INSERT INTO photos (user_id, image_url, `date`) VALUES (?, ?, NOW())");
            $request->execute([
                $user_id,
                $file_name
                
        
                ]);
            echo "Image enregistrée";








        } else{
            echo "Ah...il semblerait que ça ne se passe pas comme prévu..";
        }
    }

};
