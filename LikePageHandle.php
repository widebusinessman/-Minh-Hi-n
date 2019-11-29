<?php
    require "init.php";
    if (isset($_GET["idPost"]) && isset($_GET["countPost"])) {
        updateLikePost($_GET["idPost"], (int)$_GET["countPost"]);
        header("Location:index.php");
    }
?>