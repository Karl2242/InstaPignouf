<?php
include_once "../../utils/check-if-not-connected.php";

require_once "../../utils/connect_db.php";

require_once "../../utils/front/haut.php";

?>

<body>
    <main class="flex flex-col gap-7 p-1 md:gap-20 lg:gap-32 xl:gap-52">
        <section>
            <div class="flex justify-between px-6 py-3">
                <img src="../../image/logo.webp" alt="" class="rounded-full w-1/6">
                <div class="flex gap-4">
                    <div class="flex-col">
                        <h2 class="text-bold">

                        </h2>
                        <h3>Post</h3>
                    </div>
                    <div class="flex-col">
                        <h2 class="text-bold">

                        </h2>
                        <h3>Followers</h3>
                    </div>
                    <div class="flex-col">
                        <h2 class="text-bold">

                        </h2>
                        <h3>Following</h3>
                    </div>

                    <a href="../formulaire/formimg.php" class="bg-[#999999] hover:bg-[#5c5c5c] text-white text-sm text-center  py-1 px-3 rounded-sm focus:outline-none focus:shadow-outline transition duration-300"><i class="fas fa-plus white"></i></a>

                </div>
            </div>
            <h2 class="text-lg px-3"><?= strtoupper($_SESSION["user"]["prenom"]) ?> </h2>
            <p class="text-sm opacity-60 px-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt magnam quidem, reprehenderit ipsam perspiciatis modi.</p>

        </section>

        <form class="w-full flex justify-end " action="">
            <input type="hidden" name="">
            <button class="w-full bg-couleur-input font-extralight text-sm text-center  border-white border-2 border-opacity-[30%] rounded-sm" type="sumbit">Suivre</button>
        </form>

        <section class="flex flex-wrap justify-start">
            <?php

            if (isset($_SESSION["user"]["id"])) {
                $userId = $_SESSION["user"]["id"];
            } else {
                die('ID manquant');
            }


            $sql = "SELECT photos.image_url FROM photos INNER JOIN users ON photos.user_id = :userId";

            try {
                $stmt = $pdo->prepare($sql);
                $stmt->execute(
                    [":userId" => $userId,]
                );
                $photos = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($photos);
// die();


            } catch (PDOException $error) {
                echo "Erreur lors de la requete : " . $error->getMessage();
            }

            foreach ($photos as $photo) {
            ?>

                <img class="w-1/3" src="../../uploads/<?= $photo['image_url']; ?>" alt="">

            <?php
            }
            ?>
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