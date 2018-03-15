<?php
    $a = 0;
    $b = 0;
    if(isset($_POST['valor1']) && isset($_POST['valor2'])) {
        $a = $_POST['valor1'];
        $b = $_POST['valor2'];        
    }

    $resultado = $a + $b;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario 1</title>
    </head>
    <body>

        
        <form action="form1.php" method="post">
            valor 1: <input type="text" name="valor1">
            valor 2: <input type="text" name="valor2">
            <input type="submit" value="Calcular">
        </form>
        <p style="font-weight: bold"> <?= "A soma de $a com $b é $resultado" ?> </p>
    </body>
</html>


