<html lang="fr">
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
    session_start();
    include '../Menu/Menu.php'; // Hello Gros Chien //
    include "BDD.php";
    
    if($_SESSION && $_SESSION['Connect'] == true)
    {
        //Si session existe :
        //echo "Je suis co BG";
    }else
    {
        ?>
        <div id="container">
            <!-- zone de connexion avec formulaire -->         
            <form method="POST">
                <h1>Inscription</h1>
                        
                <label><strong>Nom d'utilisateur</strong></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><strong>Mot de passe</strong></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" name='submit' value='LOGIN' >
            </form>
        </div>

        <?php
        //si session existe pas :
        //connexion base : 
        if (isset($_POST["submit"])) 
        {
            if((!empty($_POST['password'])) && (!empty($_POST['username'])))
            {
                //requete préparé
                $stmt = $_SQL->prepare("SELECT * FROM utilisateur WHERE username = ? AND mdp = ?");
                $stmt->execute(array($_POST['username'], $_POST['password']));
                $stmt = $stmt->fetch();

                //si ce n'est pas le bon MdP :
                if (!$stmt) 
                {
                    //On recoit rien, donc le username n'existe pas déjà, donc c'est bon
                    $stmt = $_SQL->prepare("INSERT INTO `utilisateur`(`username`, `mdp`) VALUES (?,?)");
                    $stmt->execute(array($_POST['username'], $_POST['password']));
                    $stmt = $stmt->fetch();

                    $_SESSION['Connect']=true;
                    //Rediriger random vers là ou il était
                    //Vers page acceuil compte
                    echo "<script type='text/javascript'>document.location.replace('../Compte');</script>";
                } else 
                {
                    echo "'Nom d'utilisateur déjà existant ";
                    //Refresh la page pour pouvoir acceder au autres page.
                }
            }    
        }
    }
    ?>
    </body>
</html>
