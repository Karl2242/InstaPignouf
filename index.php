<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/output.css">
    <link rel="icone" href="./image/logo.webp">
</head>
<body class="bg-noir-bleu text-white">
    
<div class="w-full flex flex-col justify-center items-center mt-24 gap-6 text-center">
<header class="flex flex-col gap-10">
<img class="w-52" src="./image/logo.webp" alt="">
<h3 class="text-3xl font-jaro">Inscription</h3>
</header>
<main class="flex flex-col">


<form class="flex flex-col justify-center gap-6 w-full items-center" action="./process/process_inscription.php" method="post">
    <input class="text-white font-extralight w-[350px] pl-4 bg-couleur-input py-3 border-white border-[1px] border-opacity-[20%] rounded-lg" type="text" id="username" name="username" placeholder="Nom d'utilisateur">
    <input class="text-white font-extralight w-[350px] pl-4 bg-couleur-input py-3 border-white border-[1px] border-opacity-[20%] rounded-lg" type="text" id="prenom" name="prenom" placeholder="Prenom">
    <input class="text-white font-extralight w-[350px] pl-4 bg-couleur-input py-3 border-white border-[1px] border-opacity-[20%] rounded-lg" type="text" id="name" name="name" placeholder="Nom de famille">
    <input class="text-white font-extralight w-[350px] pl-4 bg-couleur-input py-3 border-white border-[1px] border-opacity-[20%] rounded-lg" type="password" id="password" name="password" placeholder="Mot de passe">
    <input class="bg-blue-500 p-2 py-3 w-[70%] mt-4 rounded-2xl shadow-xl" type="submit">
</form>

<p class="pt-5 font-extralight">Dejà un compte? <a class="text-blue-500" href="https://fonts.google.com/selection/embed">Connecter vous</a></p>

</main>

</div>
</body>
</html>