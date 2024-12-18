

<?php
require_once "../../utils/front/haut.php";
session_start();
?>

<h3 class="font-jaro text-xl p-3 ml-3">Pour vous,  <span class="font-bold text-2xl text-[#df6072]"><?= $_SESSION["pseudo"] ?> </span></h3>

<div class="flex w-full pt-5 ml-4"> <!-- Div qui contient les story est qui les flex -->

<div class="w-[16%] flex flex-col items-center h-16 rounded-full bg-[#df6072]"> <!-- div qui contient une story -->
<img class="rounded-full" src="../../image/cover.webp" alt="">
<p class="font-extralight">Karl</p>
</div>

</div>

<article class="flex flex-col mt-[80px] w-full"> <!-- Div qui contient l'article -->
<div class="flex w-full items-center px-3">
    <div class="flex w-[50%] items-center gap-2">
<img class="w-[28%] flex flex-col items-center h-14 rounded-full bg-[#df6072]" src="../../image/logo.webp" alt="">
    <p>Karl</p>
    </div>

    <form class="w-[50%] flex justify-end" action="">
        <input type="hidden" name="">
        <input class="w-[40%] bg-couleur-input font-extralight text-[15px] text-center  border-white border-[1px] border-opacity-[30%] rounded-sm" value="Suivre" type="sumbit">
    </form>
</div>

<div class="relative w-full  mt-5"> <!-- div qui contient image et tt pelo -->
<img class="w-[100%] h-[100%]" src="../../image/vacances.jpg" alt="">

<div class="flex flex-col items-end top-[73px] z-1 right-[20px] gap-8 absolute w-full">
<img class="w-[7%]" src="../../image/heart-solid 1.png" alt="">
<img class="w-[7%]" src="../../image/comment-solid 1.png" alt="">
<img class="w-[7%]" src="../../image/share-from-square-solid 1.png" alt="">
</div>
</div>

<div class="flex mt-6 gap-3 ml-3 items-center">
<p class=" text-xl font-jaro">Karl</p>
<p class="font-extralight text-xs">Voici le renard exemple</p>
</div>
<a class="mt-4 ml-5 font-extralight" href="#">Voir tous les commenaires</a>
</article>


<footer class="flex w-full items-center z-10 gap-9 p-4 fixed h-[9%] bottom-[31px] justify-center border-t-2 border-white border-opacity-[30%] shadow-xl">
<a class="w-[60%]"  href="#"><img class="w-[40%]" src="../../image/home.png" alt=""></a>
<a class="w-[60%]"  href="#"><img  class="w-[40%]" src="../../image/message.png" alt=""></a>
<a class="w-[60%]"  href="#"><img class="w-[40%]" src="../../image/user-profil.png" alt=""></a>
<a class="w-[60%]"  href="#"><img class="w-[40%]"  src="../../image/loop.png" alt=""></a>

</footer>

<?php
require_once "../../utils/front/bas.php";
?>