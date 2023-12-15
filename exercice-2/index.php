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
    <?php include("header.php");
    $oeuvres= include("oeuvres.php");?>
    <main>
        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $oeuvre) {?>
            <article class="oeuvre">
                <a href="oeuvre-<?=$oeuvre['id']?>.html">
                    <img src="<?=$oeuvre['image_url']?>" alt="<?=$oeuvre['title']?>">
                    <h2><?=$oeuvre['title']?></h2>
                    <p class="description"><?= $oeuvre['artist']?></p>
                </a>
            </article>
            <?php }?>
        </div>
    </main>
   <?php include "footer.php"?>
</body>
</html>