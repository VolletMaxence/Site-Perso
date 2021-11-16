<html>
    <head>
        <!--Icone : -->
        <link rel="icon" href="../Icone/Shellos-Icone.ico">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title> Site d'un bon Gros Chien - Manga</title>
    </head>
    <body>
        <?php
            include '../Menu/Menu.php'; // Hello Gros Chien //
        ?>

        <!-- Doit se connecter pour avoir acces a la liste livre / manga, système de notif pour admin, ajout série livre doit être accepter par admin -->
        <!-- besoin de session -->
        <?php
        if($_SESSION && $_SESSION['Connect'] == true)
        { 
        ?>
            <!-- lien vers page "ma liste de série" -->
        <?php
        } else 
        {
            include '../Session/session.php';
        }
        ?>
    </body>
</html>