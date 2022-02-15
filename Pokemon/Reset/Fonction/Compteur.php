<?php
    require "../../../Session/BDD.php";

    $nbrReset = $_POST['nbrReset'];
    $nbrReset++;
    echo '<script>';
    echo 'console.log('. json_encode( $_POST['nbrReset'] ) .')';
    echo 'console.log('. json_encode( $nbrReset ) .')';
    echo '</script>';

    if($_POST['nbrReset'] == $nbrReset)
    {
        $nbrReset = $nbrReset+1;
        $stmt = $_SQL->prepare("UPDATE `shiny` SET `Reset`= ? WHERE `ID`= ? AND `Fini` = 0 ");
        $stmt->execute(array($nbrReset, $_POST['ID']));
        $Shiny = $stmt->fetch();
    } else 
    {
        $stmt = $_SQL->prepare("UPDATE `shiny` SET `Reset`= ? WHERE `ID`= ? AND `Fini` = 0 ");
        $stmt->execute(array($nbrReset, $_POST['ID']));
        $Shiny = $stmt->fetch() ;
    }

    echo json_encode(array('nbrReset' => $nbrReset, 'ID' => $_POST['ID']));
?>