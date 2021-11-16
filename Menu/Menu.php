<?php
    if (session_status() == PHP_SESSION_ACTIVE) 
    {
    } else 
    {
        session_start();
    }
    $path = getcwd();
    //echo $path;
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    //echo "$url";
    $pseudo = NULL;
    //Récupérer le pseudo depuis la base si connecter;


    switch ( $path )
    {
        case "C:\wamp64\www\Site-Perso": 
        case "/home/xencev/www" :
            ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand ">Site d'un Gros Chien</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Dropdown Minecraft -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Minecraft
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="Minecraft/Cercle">Générateur Cercle</a></li>
                                    <li><a class="dropdown-item" href="Minecraft/Sphere">Générateur Sphère</a></li>
                                </ul>
                                <!-- Dropdown Pokémon -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pokémon
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="Pokemon/Coverage">Coverage</a></li>
                                    <li><a class="dropdown-item" href="#">JSP mdr</a></li>
                                </ul>
                                <!-- Dropdown Sky -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sky : Child of Light
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="Sky/Esprit/">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="Sky/Enfant/">Position Enfant de Lumière</a></li>
                                </ul>
                                <!-- Dropdown Monster Hunter -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Monster Hunter
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="Monster-Hunter/Monster Hunter World Iceborn">Monster Hunter World Iceborn</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="Monster-Hunter/Monster Hunter Rise">Monster Hunter World Rise</a></li>
                                </ul>
                                <li class="nav-item dropdown">
                                <a class="nav-link" href="Manga" id="" role="button" aria-expanded="false">
                                    Manga
                                </a>
                            </ul>                            
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <?php
                                if($_SESSION && $_SESSION['Connect'] == true)
                                { ?>
                                    <form class="d-flex">
                                        <!-- Dropdown Minecraft -->
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Compte
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="Compte">Votre Compte</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="Session/logout.php"> Se déconnecter </a>                                       
                                            </li>
                                        </ul>
                                    </form>
                                <?php   
                                }else 
                                { ?>
                                    <form class="d-flex">
                                        <li class="nav-item">
                                            <a class="nav-link" href="Session/Se_Connecter.php" id="" role="button" aria-expanded="false">
                                                Se Connecter
                                            </a>
                                    </form>
                                    <?php 
                                } 
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php
        break;
        
        case "C:\wamp64\www\Site-Perso\Minecraft\Cercle" :
        case "/home/xencev/www/Minecraft/Cercle" :
            ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../../">Site d'un Gros Chien</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Dropdown Minecraft -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Minecraft
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item disabled" href="../../Minecraft/Cercle">Générateur Cercle</a></li>
                                    <li><a class="dropdown-item" href="../../Minecraft/Sphere">Générateur Sphère</a></li>
                                </ul>
                                <!-- Dropdown Pokémon -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pokémon
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Pokemon/Coverage">Coverage</a></li>
                                    <li><a class="dropdown-item" href="#">JSP mdr</a></li>
                                </ul>
                                <!-- Dropdown Sky -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sky : Child of Light
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Sky/Esprit/">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="../../Sky/Enfant/">Position Enfant de Lumière</a></li>
                                </ul>
                                <!-- Dropdown Monster Hunter -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Monster Hunter
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Monster Hunter World Iceborn</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Monster Hunter World Rise</a></li>
                                </ul>
                                <li class="nav-item dropdown">
                                <a class="nav-link" href="../../Manga" id="" role="button" aria-expanded="false">
                                    Manga
                                </a>
                            </ul>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <?php
                                if($_SESSION && $_SESSION['Connect'] == true)
                                { ?>
                                    <form class="d-flex">
                                        <!-- Dropdown Minecraft -->
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Compte
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="../../Compte">Votre Compte</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href=../../Session/logout.php> Se déconnecter </a>                                       
                                            </li>
                                        </ul>
                                    </form>
                                <?php   
                                }else 
                                {?>
                                <form class="d-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../Session/Se_Connecter.php" id="" role="button" aria-expanded="false">
                                            Se Connecter
                                        </a>
                                </form>
                                <?php 
                                } 
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php
        break;
        case "C:\wamp64\www\Site-Perso\Minecraft\Sphere" :
        case "/home/xencev/www/Minecraft/Sphere" :
            ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../../">Site d'un Gros Chien</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Dropdown Minecraft -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Minecraft
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Minecraft/Cercle">Générateur Cercle</a></li>
                                    <li><a class="dropdown-item disabled" href="../../Minecraft/Sphere">Générateur Sphère</a></li>
                                </ul>
                                <!-- Dropdown Pokémon -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pokémon
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Pokemon/Coverage">Coverage</a></li>
                                    <li><a class="dropdown-item" href="#">JSP mdr</a></li>
                                </ul>
                                <!-- Dropdown Sky -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sky : Child of Light
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Sky/Esprit/">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="../../Sky/Enfant/">Position Enfant de Lumière</a></li>
                                </ul>
                                <!-- Dropdown Monster Hunter -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Monster Hunter
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Monster Hunter World Iceborn</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Monster Hunter World Rise</a></li>
                                </ul>
                                <li class="nav-item dropdown">
                                <a class="nav-link" href="../../Manga" id="" role="button" aria-expanded="false">
                                    Manga
                                </a>
                            </ul>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <?php
                                if($_SESSION && $_SESSION['Connect'] == true)
                                { ?>
                                    <form class="d-flex">
                                        <!-- Dropdown Minecraft -->
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Compte
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="../../Compte">Votre Compte</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href=../../Session/logout.php> Se déconnecter </a>                                       
                                            </li>
                                        </ul>
                                    </form>
                                <?php   
                                }else 
                                {?>
                                <form class="d-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../Session/Se_Connecter.php" id="" role="button" aria-expanded="false">
                                            Se Connecter
                                        </a>
                                </form>
                                <?php 
                                } 
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php
        break;
        case "C:\wamp64\www\Site-Perso\Pokemon\Coverage" :
        case "/home/xencev/www/Pokemon/Coverage" :
            ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../../">Site d'un Gros Chien</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Dropdown Minecraft -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Minecraft
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Minecraft/Cercle">Générateur Cercle</a></li>
                                    <li><a class="dropdown-item" href="../../Minecraft/Sphere">Générateur Sphère</a></li>
                                </ul>
                                <!-- Dropdown Pokémon -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pokémon
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item disabled" href="../../Pokemon/Coverage">Coverage</a></li>
                                </ul>
                                <!-- Dropdown Sky -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sky : Child of Light
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Sky/Esprit/">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="../../Sky/Enfant/">Position Enfant de Lumière</a></li>
                                </ul>
                                <!-- Dropdown Monster Hunter -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Monster Hunter
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <li><a class="dropdown-item" href="#">Monster Hunter World Iceborn</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Monster Hunter World Rise</a></li>
                                </ul>
                                <li class="nav-item dropdown">
                                <a class="nav-link" href="../../Manga" id="" role="button" aria-expanded="false">
                                    Manga
                                </a>
                            </ul>
                            <form class="d-flex">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <?php
                                if($_SESSION && $_SESSION['Connect'] == true)
                                { ?>
                                    <form class="d-flex">
                                        <!-- Dropdown Minecraft -->
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Compte
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="../../Compte">Votre Compte</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href=../../Session/logout.php> Se déconnecter </a>                                       
                                            </li>
                                        </ul>
                                    </form>
                                <?php   
                                }else 
                                {?>
                                <form class="d-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../Session/Se_Connecter.php" id="" role="button" aria-expanded="false">
                                            Se Connecter
                                        </a>
                                </form>
                                <?php 
                                } 
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php
        break;
        case "C:\wamp64\www\Site-Perso\Sky\Esprit" :
        case "/home/xencev/www/Sky/Esprit" :
            ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../../">Site d'un Gros Chien</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Dropdown Minecraft -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Minecraft
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Minecraft/Cercle">Générateur Cercle</a></li>
                                    <li><a class="dropdown-item" href="../../Minecraft/Sphere">Générateur Sphère</a></li>
                                </ul>
                                <!-- Dropdown Pokémon -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pokémon
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Pokemon/Coverage">Coverage</a></li>
                                </ul>
                                <!-- Dropdown Sky -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sky : Child of Light
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item disabled" href="../../Sky/Esprit/">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="../../Sky/Enfant/">Position Enfant de Lumière</a></li>
                                </ul>
                                <!-- Dropdown Monster Hunter -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Monster Hunter
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <li><a class="dropdown-item" href="#">Monster Hunter World Iceborn</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Monster Hunter World Rise</a></li>
                                </ul>
                                <li class="nav-item dropdown">
                                <a class="nav-link" href="../../Manga" id="" role="button" aria-expanded="false">
                                    Manga
                                </a>
                            </ul>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <?php
                                if($_SESSION && $_SESSION['Connect'] == true)
                                { ?>
                                    <form class="d-flex">
                                        <!-- Dropdown Minecraft -->
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Compte
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="../../Compte">Votre Compte</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href=../../Session/logout.php> Se déconnecter </a>                                       
                                            </li>
                                        </ul>
                                    </form>
                                <?php   
                                }else 
                                {?>
                                <form class="d-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../Session/Se_Connecter.php" id="" role="button" aria-expanded="false">
                                            Se Connecter
                                        </a>
                                </form>
                                <?php 
                                } 
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php
        break;
        case "C:\wamp64\www\Site-Perso\Sky\Enfant" :
        case "/home/xencev/www/Sky/Enfant" :
            ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../../">Site d'un Gros Chien</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Dropdown Minecraft -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Minecraft
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Minecraft/Cercle">Générateur Cercle</a></li>
                                    <li><a class="dropdown-item" href="../../Minecraft/Sphere">Générateur Sphère</a></li>
                                </ul>
                                <!-- Dropdown Pokémon -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pokémon
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Pokemon/Coverage">Coverage</a></li>
                                </ul>
                                <!-- Dropdown Sky -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sky : Child of Light
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../../Sky/Esprit/">Position Esprit</a></li>
                                    <li><a class="dropdown-item disabled" href="../../Sky/Enfant/">Position Enfant de Lumière</a></li>
                                </ul>
                                <!-- Dropdown Monster Hunter -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Monster Hunter
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <li><a class="dropdown-item" href="../../Monster-Hunter">Monster Hunter World Iceborn</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="../../Monster-Hunter">Monster Hunter World Rise</a></li>
                                </ul>
                                <li class="nav-item dropdown">
                                <a class="nav-link" href="../../Manga" id="" role="button" aria-expanded="false">
                                    Manga
                                </a>
                            </ul>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <?php
                                if($_SESSION && $_SESSION['Connect'] == true)
                                { ?>
                                    <form class="d-flex">
                                        <!-- Dropdown Minecraft -->
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Compte
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="../../Compte">Votre Compte</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href=../../Session/logout.php> Se déconnecter </a>                                       
                                            </li>
                                        </ul>
                                    </form>
                                <?php   
                                }else 
                                {?>
                                <form class="d-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../Session/Se_Connecter.php" id="" role="button" aria-expanded="false">
                                            Se Connecter
                                        </a>
                                </form>
                                <?php 
                                } 
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php
        break;
        case "C:\wamp64\www\Site-Perso\Manga" :
        case "/home/xencev/www/Manga" :
            ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../">Site d'un Gros Chien</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Dropdown Minecraft -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Minecraft
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Minecraft/Cercle">Générateur Cercle</a></li>
                                    <li><a class="dropdown-item" href="../Minecraft/Sphere">Générateur Sphère</a></li>
                                </ul>
                                <!-- Dropdown Pokémon -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pokémon
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Pokemon/Coverage">Coverage</a></li>
                                    <li><a class="dropdown-item" href="#">JSP mdr</a></li>
                                </ul>
                                <!-- Dropdown Sky -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sky : Child of Light
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Sky/Esprit/">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="../Sky/Enfant/">Position Enfant de Lumière</a></li>
                                </ul>
                                <!-- Dropdown Monster Hunter -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Monster Hunter
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Monster-Hunter">Monster Hunter World Iceborn</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="../Monster-Hunter">Monster Hunter World Rise</a></li>
                                </ul>
                                <li class="nav-item">
                                <a class="nav-link disabled" href="#" id="" role="button" aria-expanded="false">
                                    Manga
                                </a>
                            </ul>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <?php
                                if($_SESSION && $_SESSION['Connect'] == true)
                                { ?>
                                    <form class="d-flex">
                                        <!-- Dropdown Minecraft -->
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Compte
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="../Compte">Votre Compte</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href=../Session/logout.php> Se déconnecter </a>                                       
                                            </li>
                                        </ul>
                                    </form>
                                <?php   
                                }else 
                                {?>
                                <form class="d-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../Session/Se_Connecter.php" id="" role="button" aria-expanded="false">
                                            Se Connecter
                                        </a>
                                </form>
                                <?php 
                                } 
                                ?>
                            </ul>
                            </form>
                        </div>
                    </div>
                </nav>
            <?php
        break;
        case "C:\wamp64\www\Site-Perso\Session" :
        case "/home/xencev/www/Session" :
            ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../">Site d'un Gros Chien</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Dropdown Minecraft -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Minecraft
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Minecraft/Cercle">Générateur Cercle</a></li>
                                    <li><a class="dropdown-item" href="../Minecraft/Sphere">Générateur Sphère</a></li>
                                </ul>
                                <!-- Dropdown Pokémon -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pokémon
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Pokemon/Coverage">Coverage</a></li>
                                    <li><a class="dropdown-item" href="#">JSP mdr</a></li>
                                </ul>
                                <!-- Dropdown Sky -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sky : Child of Light
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Sky/Esprit/">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="../Sky/Enfant/">Position Enfant de Lumière</a></li>
                                </ul>
                                <!-- Dropdown Monster Hunter -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Monster Hunter
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Monster-Hunter">Monster Hunter World Iceborn</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="../Monster-Hunter">Monster Hunter World Rise</a></li>
                                </ul>
                                <li class="nav-item">
                                <a class="nav-link" href="../Manga/index.php" id="" role="button" aria-expanded="false">
                                    Manga
                                </a>
                            </ul>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <?php
                                if($_SESSION && $_SESSION['Connect'] == true)
                                { ?>
                                    <form class="d-flex">
                                        <!-- Dropdown Minecraft -->
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Compte
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item" href="Compte">Votre Compte</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href=../Session/logout.php> Se déconnecter </a>                                       
                                            </li>
                                        </ul>
                                    </form>
                                <?php   
                                }else 
                                {?>
                                <form class="d-flex">
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="../Session/Se_Connecter.php" id="" role="button" aria-expanded="false">
                                            Se Connecter
                                        </a>
                                </form>
                                <?php 
                                } 
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php
        break;
        case "C:\wamp64\www\Site-Perso\Compte" :
        case "/home/xencev/www/Compte" :
            ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../">Site d'un Gros Chien</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Dropdown Minecraft -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Minecraft
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Minecraft/Cercle">Générateur Cercle</a></li>
                                    <li><a class="dropdown-item" href="../Minecraft/Sphere">Générateur Sphère</a></li>
                                </ul>
                                <!-- Dropdown Pokémon -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pokémon
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Pokemon/Coverage">Coverage</a></li>
                                    <li><a class="dropdown-item" href="#">JSP mdr</a></li>
                                </ul>
                                <!-- Dropdown Sky -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sky : Child of Light
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Sky/Esprit/">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="../Sky/Enfant/">Position Enfant de Lumière</a></li>
                                </ul>
                                <!-- Dropdown Monster Hunter -->
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Monster Hunter
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Monster-Hunter">Monster Hunter World Iceborn</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="../Monster-Hunter">Monster Hunter World Rise</a></li>
                                </ul>
                                <li class="nav-item">
                                <a class="nav-link" href="../Manga/index.php" id="" role="button" aria-expanded="false">
                                    Manga
                                </a>
                            </ul>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <?php
                                if($_SESSION && $_SESSION['Connect'] == true)
                                { ?>
                                    <form class="d-flex">
                                        <!-- Dropdown Minecraft -->
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Compte
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a class="dropdown-item disabled" href="Compte">Votre Compte</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href=../Session/logout.php> Se déconnecter </a>                                       
                                            </li>
                                        </ul>
                                    </form>
                                <?php   
                                }else 
                                {?>
                                <form class="d-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../Session/Se_Connecter.php" id="" role="button" aria-expanded="false">
                                            Se Connecter
                                        </a>
                                </form>
                                <?php 
                                } 
                                ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php
        break;
    }
    ?>
