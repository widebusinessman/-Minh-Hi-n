<?php
    require "init.php";
    $idfollwed = "";
    $idCurrent = "";
    if (isset($_POST["idfollwed"]) && isset($_POST["idCurrent"])){
        $idfollwed = $_POST["idfollwed"];
        $idCurrent = $_POST["idCurrent"];
        addFollow($idfollwed, $idCurrent);
    }

    if($_POST['action'] === 'Hủy theo dõi' )
    {
        removeFollow($idfollwed,$idCurrent);
    }
    header("Location:profile.php?id=".$idfollwed);
?>