<?php
    header("Access-Control-Allow-Origin: *");
    $cn = new mysqli("localhost","root","","zairabd");
    $id = $_POST["id"];
    $rs = $cn->query("DELETE FORM productos WHERE id = $id");    
    $cn->close();
?>