<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melón</title>
</head>
<body>
<!--
Realizar un formulario que pida al usuario el nombre y le de 3 opciones de sueldo para 
que marque segun corresponda.
Escribir el codigo php para validar el sig. formulario:
    - Si no se introduce nombre, avisar.
    - Si se introduce, sacar el literal con el nombre y si el sueldo es entre 
    0-1000, "no paga impuestos"
    - Si el sueldo es entre 1001-3000 "paga el 20% de impuestos"
    - Si gana mas de 3000, "debe pagar 50% de impuestos"
    En los ultimos dos tambien sacar literal con el nombre
-->
    <h1>Taxes</h1>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="nombre">Tu nombre</label>
        <input type="text" name="nombre" required>
        <br>
        <input type="radio" name="grupo" id="r1" value="1k">
        <label for="r1">$0 - $1000</label>
        <br>
        <input type="radio" name="grupo" id="r2" value="3k">
        <label for="r2">$1001 - $3000</label>
        <br>
        <input type="radio" name="grupo" id="r3" value="+3k">
        <label for="r3">+$3000</label>
        <br>
        <input type="submit" name="enviar">
    </form>
    <?php
        if(isset($_POST['enviar'])){
            $name = $_POST['nombre'];
            $radio = $_POST['grupo'];
            echo $name.", ";
            if($radio == '1k') echo "usted no paga impuestos.";
            if($radio == '3k') echo "usted paga el 20% de impuestos."; 
            if($radio == '+3k') echo "usted paga el 50% de impuestos.";
            

            
        }
    ?>

</body>
</html>