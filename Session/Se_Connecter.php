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
            include "BDD.php";

            if($_SESSION && $_SESSION['Connect'] == true)
            {
                //Si session existe :
            }else
            {
                ?>
                <div id="container">
                    <!-- zone de connexion avec formulaire -->
                    <form method="POST">
                        <h1>Connexion</h1>
                            
                        <label><strong>Nom d'utilisateur</strong></label>
                        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                        <label><strong>Mot de passe</strong></label>
                        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                        <input type="submit" name='submit' value='LOGIN' >
                    </form>
                </div>
                <?php
                $path = getcwd();
                //echo $path;
                //$_POST["LienOrigine"] = $path
                ?>
                <a href="inscription.php"> Créer un compte </a>

                <?php
                //si session existe pas :
                //connexion base : 
                if (isset($_POST["submit"])) {
                    if((!empty($_POST['password'])) && (!empty($_POST['username']))){
                        //requete préparé
                        $stmt = $_SQL->prepare("SELECT * FROM utilisateur WHERE username = ? AND mdp = ?");
                        $stmt->execute(array($_POST['username'], $_POST['password']));
                        $stmt = $stmt->fetch();

                        //si ce n'est pas le bon MdP :
                        if (!$stmt) {
                            echo "Mauvais nom d'utilisateur ou mot de passe.";
                        } else {
                            $_SESSION['Connect']=true;
                            $_SESSION['IDusername']=$stmt['ID'];
                            $_SESSION['Admin']=$stmt['Admin'];
                            //Refresh la page pour pouvoir acceder au autres page.
                            echo "<script type='text/javascript'>document.location.replace('../Compte');</script>";
                        }
                    }    
                }
            }   
        ?>
    </body>
</html>