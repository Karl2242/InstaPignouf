<?php

require_once "../utils/connect_db.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
    return;
}


if(!isset($_FILES["img"])){
    header("Location: ./index.php"); 
 }


 if(empty($_FILES["img"])){
    header("Location: ./index.php");
 }

 $tmp_name = $_FILES['img']['tmp_name'];
$file_basename = pathinfo($_FILES["img"]["name"], PATHINFO_FILENAME);
$file_extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
$array = ["png","jpeg","jpg"];
$max_size = 4000000;
$file_size = filesize($tmp_name);

if($file_size > $max_size){
header("Location: ./index.php");
exit;
}

if(!in_array($file_extension, $array)){
    header("Location: ./index.php");
}

$new_image_name = $file_basename . '_' . date("Yms_His") . "." . $file_extension;
$target_directory = "./uploads/";
$target_path = $target_directory . $new_image_name;

if (!move_uploaded_file($_FILES["img"]["tmp_name"], $target_path)) {
    header("Location: ./index.php");
    exit;
}



$sql = "INSERT INTO photos (user_id, image_url, date) VALUES (:user_id, :imageName, NOW());";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':user_id' => $_SESSION["id"],
        ':imageName' => $new_image_name
    ]);
} catch (\PDOException $error) {
    throw $error;
}

var_dump($file_basename);
