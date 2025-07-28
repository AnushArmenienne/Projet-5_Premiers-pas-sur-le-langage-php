<?php include("oeuvres.php"); ?>
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

<?php include("header.php"); ?>

<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
        <?php 
         $numOeuvre = $_GET['num'];
          foreach ($oeuvres as $oeuvre){
                if($oeuvre['num'] === $numOeuvre){
                    $titre = $oeuvre['titre'];
                    $image = $oeuvre['image'];
                    $auteur = $oeuvre['description'];
                    $paragraphe = $oeuvre['description_complete'];
                };
            }; 
        ?>
            <img src="<?php echo $image ; ?>" 
            alt="<?php echo $titre ; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $titre ; ?></h1>
            <p class="description"><?php echo $auteur ; ?></p>
            <p class="description-complete"><?php echo $paragraphe ; ?>
            </p>
        </div>
    </article>
</main>

<?php include("footer.php"); ?>

</body>
</html>