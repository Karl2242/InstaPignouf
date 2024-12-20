<?php
include_once "../../utils/check-if-not-connected.php";

require_once "../../utils/front/haut.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/output.css">
    <link rel="icon" href="./image/logo.webp">
</head>

<body class="bg-noir-bleu text-white">

    <main class="flex flex-col gap-8 text-center">

        <article>
            <form action="../../process/process_uploadingimg.php" method="post" enctype="multipart/form-data">
                <input type="file" name="img" id="img">
                <input type="submit" value="Envoyer" name="submit">
            </form>
        </article>


    </main>
</body>

</html>