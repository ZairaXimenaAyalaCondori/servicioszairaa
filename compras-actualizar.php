<?php
    require_once("config.php"); 
    $id = $_POST["id"];
    $descripcion = $_POST["descripcion"];
    $cantidad = $_POST["cantidad"];
    $rs = $cn->query("UPDATE compras SET descripcion='$descripcion', cantidad='$cantidad' WHERE id=$id");    
    $cn->close();
?>