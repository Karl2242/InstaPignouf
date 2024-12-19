<?php
require_once "../../utils/front/haut.php";
session_start();
?>

<body>
    <main class="flex flex-col gap-7 p-1 md:gap-20 lg:gap-32 xl:gap-52">

        <section class="flex flex-col gap-4">

            <div class="flex justify-between w-full px-5 py-3 items-center">
                <h3 class="font-jaro text-xl  md:text-2xl lg:text-xl">Pour vous, <span class="font-bold text-2xl md:text-3xl lg:text-4xl text-[#df6072]"><?= strtoupper($_SESSION["prenom"]) ?> </span></h3>
                <form action="../../process/logout_user.php" method="POST">
                    <button type="submit" class="bg-[#DF6072] hover:bg-red-700 text-white text-sm text-center  py-1 px-3 rounded-sm focus:outline-none focus:shadow-outline transition duration-300">Deconnexion</button>
                </form>
            </div>


            <div class="flex w-full px-5"> <!-- Div qui contient les story est qui les flex -->
                <div class="w-[12%] flex flex-col items-center h-16 rounded-full"> <!-- div qui contient une story -->
                    <img class="rounded-full" src="../../image/cover.webp" alt="">
                    <p class="font-extralight">Karl</p>
                </div>
            </div>

        </section>


        <section class="flex flex-col w-full gap-4"> <!-- Div qui contient l'article -->

            <div class="flex w-full items-center px-5">
                <div class="flex w-[50%] items-center gap-2">
                    <img class="w-[20%] flex flex-col items-center rounded-full" src="../../image/logo.webp" alt="">
                    <p>Karl</p>
                </div>

                <form class="w-[50%] flex justify-end " action="">
                    <input type="hidden" name="">
                    <button class="px-8 bg-couleur-input font-extralight text-sm text-center  border-white border-2 border-opacity-[30%] rounded-sm" type="sumbit">Suivre</button>
                </form>
            </div>

            <div class="relative w-full "> <!-- div qui contient image et tt pelo -->
                <img class="w-[100%] h-[100%]" src="../../image/vacances.jpg" alt="">

                <div class="flex flex-col items-end top-1/3 z-1 right-[2%] gap-8 absolute w-full">
                    <i class="fas fa-heart text-2xl text-black" src="../../image/heart-solid 1.png" alt="like"> </i>
                    <i class="fas fa-comment text-2xl text-black" src="../../image/heart-solid 1.png" alt="comment"> </i>
                    <i class="fas fa-share-from-square text-2xl text-black" src="../../image/heart-solid 1.png" alt="share"> </i>
                </div>
            </div>

            <div class="flex gap-3 items-center px-5">
                <p class=" text-xl font-jaro">Karl</p>
                <p class="font-extralight text-xs">Voici le renard exemple</p>
            </div>
            <div class="px-5">
                <a class="font-extralight" href="#">Voir tous les commenaires</a>
            </div>

        </section>



    </main>




    <footer class="flex-col w-full items-center z-10 gap-11 fixed h-auto bottom-2 justify-around shadow-xl lg:hidden">
        <hr class=" text-white opacity-30 mb-4">
        <section class="flex w-full items-center gap-11 justify-around shadow-xl">
            <a class="w-1/4 flex justify-center items-center" href="./foryou.php">
                <img class="w-1/4 lg:w-2/12 xl:1/12" src="../../image/home.png" alt="">
            </a>
            <a class="w-1/4 flex justify-center items-center" href="#">
                <img class="w-1/4 lg:w-2/12 xl:1/12" src="../../image/message.png" alt="">
            </a>
            <a class="w-1/4 flex justify-center items-center" href="./profilpage.php">
                <img class="w-1/4 lg:w-2/12 xl:1/12" src="../../image/user-profil.png" alt="">
            </a>
            <a class="w-1/4 flex justify-center items-center" href="#">
                <img class="w-1/4 lg:w-2/12 xl:1/12" src="../../image/loop.png" alt="">
            </a>
        </section>
    </footer>
</body>


<?php
require_once "../../utils/front/bas.php";
?>