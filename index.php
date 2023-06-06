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
    $ej2 = $_POST["ej2"];
    $hi2 = "El número seleccionado es => " . $ej2;
    $array_planetas = array_fill(0,$ej2, "Deshabitado");
    $res2=json_encode($array_planetas);
}
//ejercio 3
else if (isset($_POST["ej3"])){
    $ej3 = $_POST["ej3"];

    $array_planetas = [ "Mercurio" => false, "Venus" => false, "Tierra" => true, "Marte" => false, "Júpiter" => false, "Saturno" => false, "Urano" => false, "Neptuno" => false];
    $filter=array_filter($array_planetas, fn($p1) => $p1==true);
    $res3= " Los planetas habitables son: " . json_encode($filter);

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
    <p> Crear un array para un sistema solar </p>
    <form method="POST" action="">
        <label for="ej2">Ingresar el número de planetas del sistema solar</label>
        <input type="number"name="ej2">
    </form>
    <p> <?= $hi2 ?> </p>
    <h4> <?= $res2 ?></h4>

    <h2>Ejercicio 3</h2>
    <p> Filtrar planetas habitables </p>
    <form method="POST" action="">
        <label for="ej3">tocar el botón para conocer los planetas habitables</label>
        <button name="ej3">planetas ((0))</button>
    </form>
    <h4> <?= $res3 ?></h4>


</body>

</html>