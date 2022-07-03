<?php
    require_once("config.php"); 
    $descripcion = $_POST["descripcion"];
    $cantidad = $_POST["cantidad"];
    $rs = $cn->query("INSERT INTO compras(descripcion,cantidad) values('$descripcion','$cantidad')");
    echo $cn->insert_id;
    
    $cn->close();
?>