<?php
//Ejercicio 1
if (isset($_POST["ej1"])) {
    $ej1 = $_POST["ej1"];
    $hi = "El número seleccionado es => " . $ej1;

    $array_planetas = [ "Mercurio" => 1, "Venus" => 2, "Tierra" => 3, "Marte" => 4, "Júpiter" => 5, "Saturno" => 6, "Urano" => 7, "Neptuno" => 8];
    $change=array_flip($array_planetas);
    $planeta=isset($change[$ej1])?$change[$ej1]:"nothing";
    $res= "El planeta correspondiente a ese número es: " . $planeta;
}
//ejercicio 2
else if (isset($_POST["ej2"])) {
    
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
    <p> Identificar planetas y sus respectivos números de orden en el sistema solar. Ingresar un número del 1 al 8 </p>
    <form method="POST" action="">
        <label for="ej1">Ingresar el número del planeta que desea observar</label>
        <select name="ej1" onchange="this.form.submit()">
            <option name="select" id="select" selected>select</option>
            <option name="1" id="1">1</option>
            <option name="2" id="2">2</option>
            <option name="3" id="3">3</option>
            <option name="4" id="4">4</option>
            <option name="5" id="5">5</option>
            <option name="6" id="6">6</option>
            <option name="7" id="7">7</option>
            <option name="8" id="8">8</option>
        </select>
    </form>
    <p> <?= $hi ?> </p>
    <h4> <?= $res ?></h4>

    <h2>Ejercicio 2</h2>
    <p> Identificar otras cosas </p>
    <form method="POST" action="">
        <label for="ej2">Ingresar el número del planeta que desea observar</label>
        <select name="ej2" onchange="this.form.submit()">
            <option name="select" id="select" selected>select</option>
            <option name="1" id="1">1</option>
            <option name="2" id="2">2</option>
            <option name="3" id="3">3</option>
            <option name="4" id="4">4</option>
            <option name="5" id="5">5</option>
            <option name="6" id="6">6</option>
            <option name="7" id="7">7</option>
            <option name="8" id="8">8</option>
        </select>
    </form>

</body>

</html>