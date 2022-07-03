<?php
    header("Access-Control-Allow-Origin: *");    
    $cn = new mysqli("rtda4b63i8t9.us-east-4.psdb.cloud","44tvmu6jzdlv","pscale_pw_ykxl6piGnrZ8R1cuS0rKNIWVxyFOnokGJiZ83pKUuHQ","zairabd");
    $rs = $cn->query("SELECT * FROM productos ORDER BY id");
    while($row = $rs->fetch_assoc()){
        $res[] = $row;
    }
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
    $cn->close();
?> 