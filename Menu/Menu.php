<?php
    $path = getcwd();
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    //echo "$url";

    switch ( $url )
    {
        case "http://127.0.0.1/Site-Perso/": 
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
                                    <li><a class="dropdown-item" href="#">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="#">Position Enfant de Lumière</a></li>
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
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            <?php
        break;
        
        case "http://127.0.0.1/Site-Perso/Minecraft/Cercle/" :
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
                                    <li><a class="dropdown-item" href="#">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="#">Position Enfant de Lumière</a></li>
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
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            <?php
        break;
        case "http://127.0.0.1/Site-Perso/Minecraft/Sphere/" :
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
                                    <li><a class="dropdown-item" href="#">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="#">Position Enfant de Lumière</a></li>
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
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            <?php
        break;
        case "http://127.0.0.1/Site-Perso/Pokemon/Coverage/" :
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
                                    <li><a class="dropdown-item" href="#">Position Esprit</a></li>
                                    <li><a class="dropdown-item" href="#">Position Enfant de Lumière</a></li>
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
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            <?php
        break;

        //Si dans jeu : 

    }
    ?>
