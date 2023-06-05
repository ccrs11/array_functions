<?php
    if (isset($_POST["ej1"])) {
        $ej1 = $_POST["ej1"];
        $hi = "El número seleccionado es => " . $ej1;
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad cómo utilizar las funciones de listas (arrays)</title>
</head>

<html>

<head>
    <title>Talleres de arrays</title>
</head>

<body>
    <h2>Ejercicio 1</h2>
    <p> Identificar planetas y sus respectivos números de orden en el sistema solar </p>
    <form method="POST" action="">
        <label for="ej1">Ingresar el número del planeta que desea observar</label>
        <select name="ej1" onchange="this.form.submit()">
            <option  name="select" id="select" selected>select</option>
            <option  name="1" id="1">1</option>
            <option  name="2" id="2">2</option>
            <option  name="3" id="3">3</option>
            <option  name="4" id="4">4</option>
            <option  name="5" id="5">5</option>
            <option  name="6" id="6">6</option>
            <option  name="7" id="7">7</option>
            <option  name="8" id="8">8</option>
        </select>
    </form>
    <?= $hi ?>
</body>

</html>


<!-- <body>
    <h2>Ejercicio 1</h2>
    <p> Identificar planetas y sus respectivos números de orden en el sistema solar </p>
    <form action="" name=ejercicio1 method='POST' onchange="this.form.submit()">
        <label for="orden">Ingresar el n-umero de orden</label>
        <select id="orden" name="orden">Help
            <option  name="1" id="1">1</option>
            <option  name="2" id="2">2</option>
            <option  name="3" id="3">3</option>
            <option  name="4" id="4">4</option>
            <option  name="5" id="5">5</option>
            <option  name="6" id="6">6</option>
            <option  name="7" id="7">7</option>
            <option  name="8" id="8">8</option>
        </select>
        
    </form>

    <?php
    if (isset($_POST['orden'])) {
        $hi = $_POST['orden'];
    }

    ?>

    <?= $hi ?> -->

</body>

</html>