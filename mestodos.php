<?php
require_once("Class/Liste.php");
$liste = new Liste;
$liste->insertListe();



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="./index.js"></script>
    <link rel="stylesheet" href="./index.css">
    <title>Mestodos</title>
</head>

<body>
    <?php require("./assets/template/header.php") ?>
    <form method="POST" class="listeForm" id="creationFormulaire">
        <input type="button" id="creerListe" value="creer liste">
        <select name="selectListe" id="">

        </select>
        <input type="submit" name="choixListe">
    </form>
    <main id="todo">

        <section id="afaire"  class="dropzone">
    
        
        </section>
        <section id="encours"  class="dropzone">
        <input id="etatEnCours" type="hidden" value="22">
        </section>
        <section id="terminer"class="dropzone">

        </section>
    </main>
    <footer>

    </footer>
</body>

</html>