<?php
    require_once("config.php"); 
    $id = $_POST["id"];
    $rs = $cn->query("DELETE FORM compras WHERE id = $id");    
    $cn->close();
?>