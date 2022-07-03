<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hola"
        $cont = file_get_contents("equipo.php"); 
        echo $cont;
        $cont2 = file_get_contents("ganadores.php"); 
        echo $cont2;

    ?>
</body>
</html>