<?php

$id = $_GET['id'];

$oeuvres = include('oeuvres.php');

$oeuvre = null;

foreach ($oeuvres as $i) {

    if ($i['id'] == $id) {

        $oeuvre = $i;
        break;
    }
}

include "header.php";

?>

    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?= $oeuvre['image_url'] ?>" alt="<?= $oeuvre['title'] ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?= $oeuvre['title'] ?></h1>
                <p class="description"><?= $oeuvre['artist'] ?></p>
                <p class="description-complete">
                    <?= $oeuvre['description'] ?>
                </p>
            </div>
        </article>
    </main>

<?php include('footer.php') ?>