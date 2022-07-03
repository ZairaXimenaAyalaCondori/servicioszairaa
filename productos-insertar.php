<?php
    header("Access-Control-Allow-Origin: *");
    $cn = new mysqli("localhost","root","","zairabd");
    $descripcion = $_POST["descripcion"];
    $cantidad = $_POST["cantidad"];
    $rs = $cn->query("INSERT INTO productos(descripcion,cantidad) values('$descripcion','$cantidad')");
    echo $cn->insert_id;
    
    $cn->close();
?>