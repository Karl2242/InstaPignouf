

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
<img class="w-[100%] h-[100%]" src="../../image/exemple insta.jpg" alt="">

</div>

</article>


<?php
require_once "../../utils/front/bas.php";
?>