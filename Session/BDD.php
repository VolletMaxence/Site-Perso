<?php 

// Configuration of database connection
$_DB = array(
    "hostname" => "mysql-xencev.alwaysdata.net",
    "username" => "xencev_root",
    "password" => "Tallys2001",
    "db_name" => "xencev_site-perso"

    //"hostname" => "mysql-xencev.alwaysdata.net",
    //"username" => "xencev_root",
    //"password" => "Tallys2001",
    //"db_name" => "xencev_site-perso"
);

// Create connexion to database
try {
    $_SQL = new PDO("mysql:host=".$_DB["hostname"].";dbname=".$_DB["db_name"].";charset=utf8;", $_DB["username"], $_DB["password"]);
} catch(Exception $e) {
    echo "Erreur de connexion à la base de données";
}

?>