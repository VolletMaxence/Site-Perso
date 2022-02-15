<?php
    require "../../../Session/BDD.php";

    $stmt = $_SQL->prepare("UPDATE `shiny` SET `Fini`= 1 WHERE `ID`= ? ");
    $stmt->execute(array($_POST['ID']));
    $Shiny = $stmt->fetch() ;
    

    echo json_encode(array('ID' => $_POST['ID']));
?>