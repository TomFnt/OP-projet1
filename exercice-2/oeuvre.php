<?php

$id=$_GET['id'];

$oeuvres = include('oeuvres.php');
?>
    <!doctype html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>The ArtBox</title>
    </head>
<body>
    <?php include "header.php";?>
<?php foreach($oeuvres as $oeuvre) : ?>
    <?php if ( $oeuvre['id'] == $id): ?>
    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?=$oeuvre['image_url']?>" alt="<?=$oeuvre['title']?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?=$oeuvre['title']?></h1>
                <p class="description"><?=$oeuvre['artist']?></p>
                <p class="description-complete">
                    <?=$oeuvre['description']?>
                </p>
            </div>
        </article>
    </main>
    <?php endif ?>
<?php endforeach ?>
<?php include('footer.php')?>
