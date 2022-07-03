<?php
    header("Access-Control-Allow-Origin: *");
    $cn = new mysqli("localhost","root","","zairabd");
    $id = $_POST["id"];
    $descripcion = $_POST["descripcion"];
    $cantidad = $_POST["cantidad"];
    $rs = $cn->query("UPDATE productos SET descripcion='$descripcion', cantidad='$cantidad' WHERE id=$id");    
    $cn->close();
?>