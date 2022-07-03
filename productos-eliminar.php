<?php
    require_once("config.php"); 
    $id = $_POST["id"];
    $rs = $cn->query("DELETE FORM productos WHERE id = $id");    
    $cn->close();
?>