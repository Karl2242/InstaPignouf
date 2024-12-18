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

    <div class="w-full flex flex-col justify-center items-center mt-24 gap-6 text-center">
        <header class="flex flex-col gap-10 ">
            <img class="w-52 mb-16" src="./image/logo.webp" alt="logo">

        </header>
        <main class="flex flex-col">

            <div class="flex flex-col gap-8 md:flex-row">
                <form class="flex flex-col justify-center gap-7 w-full items-center" action="./front/formulaire/inscription.php" method="post">
                    <input class="bg-[#df6072] px-8 py-3 w-[100%] cursor-pointer mt-4 rounded-2xl shadow-xl" type="submit" value="Inscription">
                </form>
                <form class="flex flex-col justify-center gap-7 w-full items-center" action="./front./formulaire/login.php" method="post">
                    <input class="bg-[#df6072] px-8 py-3 w-[100%] cursor-pointer mt-4 rounded-2xl shadow-xl" type="submit" value="Connexion">
                </form>
            </div>

        </main>

    </div>
</body>

</html>