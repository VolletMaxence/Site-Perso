<html>
    <head>
        <!--Icone : -->
        <link rel="icon" href="../../Icone/Shellos-Icone.ico">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="Esprit.js"></script>
        <meta charset="UTF-8">
        <title> Site d'un bon Gros Chien - Sky : Children of the Light - Esprit </title>
    </head>
    <body>
        <?php
            include '../../Menu/Menu.php';
        ?>
        <form method=$_POST>
            <select class="Zone" id="Zone">
                <option value="">--Sélectionner votre Zone--</option>
                <option value="Ile">Île de l’Aube</option>
                <option value="Prairie">Prairie illuminée</option>
                <option value="Foret">Forêt cachée</option>
                <option value="Vallee">Vallée du triomphe</option>
                <option value="Desert">Désert d'or</option>
                <option value="Chambre">Chambre de connaissance</option>
                <option value="Eden">Oeil d'Eden</option>
            </select>
            <button type="button" onclick="getSelectValue('Zone')"> Trouve ton Esprit </button>
        </form>
        <script type="text/javascript">
                getFormulaireEspritZone(selectValue);
            </script>
    </body>
</html>